let boxsalat = document.querySelector(".box");

let qarii = document.querySelector('#muqri').value;

const surahs = document.getElementById('surahs');

const result = document.getElementById('result');

function getSurat() {
  fetch("http://api.alquran.cloud/v1/meta")
    .then((response) => response.json())
    .then((data) => {
      let surat = data.data.surahs.references;
      let number = 114;
      for (let i = 0; i < number; i++) {
        boxsalat.innerHTML += `
            <div class="salat"  onclick="showSurat('${i + 1}')">
              <p>${surat[i].numberOfAyahs}</p>
              
              
              <p class="sora">${surat[i].name}</p>
              <div class="number">
              <p class="nombre">${surat[i].number}</p>
              </div>   

              </div>
          `;
      }
      surat.add;
    });
}
let j 

var selectElement = document.getElementById("muqri");
var selectedValue = selectElement.value;
function handleSelectChange() {
  selectedValue = selectElement.value;
  showSurat(j)
}


function searchSurat() {
  let input = document.getElementById("surah-input");
  let filter = input.value;
  let suratItems = document.querySelectorAll(".salat");

  suratItems.forEach((item) => {
    let suratName = item
      .querySelector("p:nth-child(2)")
      .textContent.toLowerCase();
    if (suratName.toLowerCase().includes(filter)) {
      item.style.display = "grid";
    } else {
      item.style.display = "none";
    }
  });
}
getSurat();


function showSurat(id ) {
  j = id





  

  let mp3 = document.querySelector(".audio");

  let AyatContainer = document.querySelector(".ayat");
  let muqria
  fetch(`http://api.alquran.cloud/v1/surah/${id}`)
    .then((response) => response.json())
    .then((data) => {


      // replace number latin to arabic 


      





      //
      AyatContainer.innerHTML = "";
      let Ayat = data.data.ayahs;
      let number = data.data;
      Ayat.forEach((aya) => {
        AyatContainer.innerHTML += `

         
             
                       <p class="ayat">(${aya.numberInSurah}) - ${aya.text}</p>
                       
                   `;
      });
      $("#myModal").modal("show");

      fetch("../data/quran.json")
        .then((response) => response.json())
        .then((data) => {
          let voice = data[2].data



          console.log(selectedValue);
          muqria = voice[selectedValue]

          console.log(muqria);
          

          if (id !== number.number) {

            
            mp3.innerHTML =

              `

              <audio controls  class="audio w-100">
                <source src="${muqria[id].audio}" type="audio/mp3">


              </audio>
            
            `

            surahs.innerHTML = 
            
            `
                <h1>${muqria[id].english_name}</h1>
            `
            // muqria.forEach((surah)=>{
              
            // })

          } else {
            console.log("error");
          }
        })
    });
    



  


}


