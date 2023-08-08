function searchSurat() {
  let input = document.getElementById("surah-input");
  let filter = input.value;
  let suratItems = document.querySelectorAll(".salat");

  suratItems.forEach((item) => {
    let suratName = item
      .querySelector("p:nth-child(2)")
      .textContent.toLowerCase();
    if (suratName.toLowerCase().includes(filter)) {
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
      let sora = document.querySelector(".sora");
      let mp3 = document.querySelector(".audio");

      let popup = document.querySelector(".surah-popup"),
        AyatContainer = document.querySelector(".ayat");
      SurahsTitels.forEach((title, index) => {
        console.log(index);
        title.addEventListener("click", () => {
          fetch("http://api.alquran.cloud/v1/quran/ar.alafasy")
            .then((response) => response.json())
            .then((data) => {
              let qari = data.data.surahs;
              let qariAudio = qari[index].ayahs[0].audio;
              if ((title[index] = qari[index])) {
                mp3.innerHTML = `
                <audio controls>
                <source src="${qariAudio}" type="audio/mp3">
               
              </audio>
              `;
              } else {
                console.log("hh ");
              }
            });
          // console.log(sora.textContent);
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

  // let SurahsTitels = document.querySelectorAll(".salat");

  // console.log(SurahsTitels[0])
  // Retrieve id from clicked element
}

getSurat();

// function dropdown() {
//   let select = document.querySelector(".form-select");

//   let mp3 = document.querySelector(".audio");

//   let popup = document.querySelector(".surah-popup");

//   let SurahsTitels = document.querySelectorAll(".salat");

//   console.log(SurahsTitels[0].querySelector(".sora").textContent)
//     // Retrieve id from clicked element

//   fetch(
//     "http://api.alquran.cloud/v1/quran/ar.alafasy"
//   )
//     .then((response) => response.json())
//     .then((data) => {
//       let qari = data.data.surahs;

//     });

// }

// dropdown();

/*
fetch(`http://api.alquran.cloud/v1/meta`)
.then((response) => response.json())
.then((data) => {
  let surat = data.data.surahs.references;
  surat.forEach((aya , i) => {
    if (title.name || aya[i].name) { 
      mp3.innerHTML += `
    <source src="${title.format}" type="audio/ogg">
    `;
    }
  });



  ======================================================


    // Wrap your JavaScript code in an event listener for DOMContentLoaded
  document.addEventListener("DOMContentLoaded", function () {
    // const select = document.getElementById("select");
    // const mp3 = document.getElementById("mp3");

    select.addEventListener("change", function () {
      let selectedIdentifier = select.value;

      
        .then((response) => response.json())
        .then((data) => {
          let surat = data.data.surahs.references;

          surat.forEach((aya) => {
            console.log(aya.audio)
            if (aya.number == selectedIdentifier) {
              // Use 'number' instead of 'identifier'
              
              mp3.innerHTML = `<source src="${aya.audio}" type="audio/ogg">`;
              mp3.load(); // Reload the audio element to load the new source
            }
          });
        });
    });
  });
*/
