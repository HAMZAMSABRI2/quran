getSurat();
let boxsalat = document.querySelector(".box");

function getSurat() {
  fetch("http://api.alquran.cloud/v1/meta")
    .then((response) => response.json())
    .then((data) => {
      let surat = data.data.surahs.references;
      let number = 114;
      for (let i = 0; i < number; i++) {
        console.log(surat[i]);
        boxsalat.innerHTML += `
                <div class="salat">
                <p>${surat[i].numberOfAyahs}</p>
                <p>${surat[i].name}</p>
                <div class="number">
                <p class="nombre">${surat[i].number}</p>
                 </div>   
                    </div>
                `;
      }
    });
}
