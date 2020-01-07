
// asigns the super urls
let myArray = [
    "<a class='url-tag' href='https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=backpack+laundy+bag&field-brand=CLEAN&field-asin=B07SVY25XY'> Click Here To Vist amazon.com Page to Grab This Deal -1</a>",
    "<a class='url-tag' href='https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=Portable+laundry+bag&field-brand=CLEAN&field-asin=B07SVY25XY'> Click Here To Vist amazon.com Page to Grab This Deal -2</a>",
    "<a class='url-tag' href='https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=Laundry+Hamper&field-brand=CLEAN&field-asin=B07SVY25XY'> Click Here To Vist amazon.com Page to Grab This Deal -3</a>", 
    "<a class='url-tag' href='https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=backpack+laundy+bag&field-brand=CLEAN&field-asin=B07SVY25XY'> Click Here To Vist amazon.com Page to Grab This Deal -4</a>"
];

window.onload = function myFunction() {
    let randomItem = myArray[Math.floor(Math.random() * myArray.length)];

    document.getElementById("display").innerHTML = `
        <button class="btn-button btn-text letter-spacing url-tag">
            ${randomItem}
        </button>
    `;
} 