function searchSurat() {
  let input = document.getElementById("surah-input");
  let filter = input.value;
  let suratItems = document.querySelectorAll(".salat");

  suratItems.forEach((item) => {
    let suratName = item
      .querySelector("p:nth-child(2)")
      .textContent.toLowerCase();
    if (suratName.includes(filter).toLowerCase()) {
      item.style.display = "flex";
    } else {
      item.style.display = "none";
    }
  });
}
let boxsalat = document.querySelector(".box");

function getSurat() {
  fetch("http://api.alquran.cloud/v1/meta")
    .then((response) => response.json())
    .then((data) => {
      let surat = data.data.surahs.references;
      let number = 114;
      for (let i = 0; i < number; i++) {
        boxsalat.innerHTML += `
          <div class="salat">
            <p>${surat[i].numberOfAyahs}</p>
            <p class="sora">${surat[i].name}</p>
            <div class="number">
              <p class="nombre">${surat[i].number}</p>
            </div>   
          </div>
        `;
      }


      let SurahsTitels = document.querySelectorAll(".salat");
      let popup = document.querySelector(".surah-popup"),
        AyatContainer = document.querySelector(".ayat");
      SurahsTitels.forEach((title, index) => {
        title.addEventListener("click", () => {
          fetch(`http://api.alquran.cloud/v1/surah/${index + 1}`)
            .then((response) => response.json())
            .then((data) => {
              AyatContainer.innerHTML = "";
              let Ayat = data.data.ayahs;
              Ayat.forEach((aya) => {
                popup.classList.add("active");
                AyatContainer.innerHTML += `
                          <p>(${aya.numberInSurah}) - ${aya.text}</p>
                      `;
              });
            });
        });
      });
      let closePopup = document.querySelector(".close-popup");
      closePopup.addEventListener("click", () => {
        popup.classList.remove("active");
      });
    });
}

getSurat();
