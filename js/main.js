let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.cnavbar');
let darkmode = document.querySelector('#darkmode');


let footer = document.querySelector('#menu-icon');
// darkmode.onclick = () => {
//     if (darkmode.classList.contains('bx-moon')){
//         darkmode.classList.replace('bx-moon', 'bx-sun');
//         document.body.classList.add('color');
//     }else{
//         darkmode.classList.replace('bx-sun', 'bx-moon');
//         document.body.classList.remove('color');
//     }
// }

var content = document.getElementsByTagName('body')[0];
darkmode.addEventListener('click', function(){
  if (darkmode.classList.contains('bx-moon')){
            darkmode.classList.replace('bx-moon', 'bx-sun');
            document.body.classList.add('color');
      }else{
            darkmode.classList.replace('bx-sun', 'bx-moon');
            document.body.classList.remove('color');
      }
})

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

// Loop through each navigation link
var links = document.querySelectorAll('.cnavbar a');
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener('click', function() {
    // Remove the "active" class from all links
    for (var j = 0; j < links.length; j++) {
      links[j].classList.remove('active');
    }
    // Add the "active" class to the clicked link
    this.classList.add('active');
  });
}


const wrapper = document.querySelector(".wrapper-play"),
selectBtn = wrapper.querySelector(".left"),
searchInp = wrapper.querySelector("input"),
options = wrapper.querySelector(".options");
let countries = ["1. Al-Fatihah", "Algeria", "Argentina", "Australia", "Bangladesh", "Belgium", "Bhutan",
                 "Brazil", "Canada", "China", "Denmark", "Ethiopia", "Finland", "France", "Germany",
                 "Hungary", "Iceland", "India", "Indonesia", "Iran", "Italy", "Japan", "Malaysia",
                 "Maldives", "Mexico", "Morocco", "Nepal", "Netherlands", "Nigeria", "Norway", "Pakistan",
                 "Peru", "Russia", "Romania", "South Africa", "Spain", "Sri Lanka", "Sweden", "Switzerland",
                 "Thailand", "Turkey", "Uganda", "Ukraine", "United States", "United Kingdom", "Vietnam"];
function addCountry(selectedCountry) {
    options.innerHTML = "";
    countries.forEach(country => {
        let isSelected = country == selectedCountry ? "selected" : "";
        let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
        options.insertAdjacentHTML("beforeend", li);
    });
}
const countryUrls = {
    "1. Al-Fatihah": "playreading.html"
  };
addCountry();
function updateName(selectedLi) {
    const selectedCountry = selectedLi.innerText;
  const url = countryUrls[selectedCountry];
  if (url) {
    window.location.href = url;
  }
    searchInp.value = "";
    addCountry(selectedLi.innerText);
    wrapper.classList.remove("active");
    selectBtn.firstElementChild.innerText = selectedLi.innerText;
}
searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchWord = searchInp.value.toLowerCase();
    arr = countries.filter(data => {
        return data.toLowerCase().startsWith(searchWord);
    }).map(data => {
        let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
        return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
    }).join("");
    options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
});
selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));


const right =document.getElementsByClassName('right-custom-btn');

for(i = 0; i<right.length; i++){
  right[i].addEventListener('click', function () {
      this.classList.toggle('active')
  })
}


// const buttons = document.querySelectorAll('.buttons-about button');
// const cardContainer = document.querySelector('.card-container-dua');

// // Attach click event listeners to the buttons
// buttons.forEach(button => {
//     button.addEventListener('click', () => {
//         const category = button.getAttribute('data-category');
//         fetchCards(category);
//     });
// });

// Function to fetch cards for a specific category
// function fetchCards(category) {
//     // Make an AJAX request to the server with the category parameter
//     const xhr = new XMLHttpRequest();
//     xhr.open('GET', `fetch_cards.php?category=${category}`);
//     xhr.onload = function() {
//         if (xhr.status === 200) {
//             // If the request is successful, parse the JSON response and generate cards
//             const data = JSON.parse(xhr.responseText);
//             generateCards(data);
//         } else {
//             console.log('Error: ' + xhr.status);
//         }
//     };
//     xhr.send();
// }

// Function to generate cards from the response data
// function generateCards(data) {
//     // Clear any existing cards
//     cardContainer.innerHTML = '';
//     // Loop through the data and generate a card for each item
//     data.forEach(item => {
//         const card = `
//             <div class="card1-dua">
//                 <p class="middle">${item.id}</p>
//                 <img src="${item.image}" alt="Image">
//                 <div class="card-text-dua">
//                     <h2>${item.title}</h2>
//                 </div>
//             </div>
//         `;
//         cardContainer.innerHTML += card;
//     });
// }


