
// asigns the super urls
var myArray = [
    "<a class='url-tag' href='https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=bikini+sets+for+women&field-brand=BELLA+BOOM&field-asin=B07WRMNQFP'> Click Here To Vist amazon.com Page to Grab This Deal-1 </a>",
    "<a class='url-tag' href='https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=bikini+set&field-brand=BELLA+BOOM&field-asin=B07WRMNQFP'> Click Here To Vist amazon.com Page to Grab This Deal-2 </a>",
    "<a class='url-tag' href='https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=bikini&field-brand=BELLA+BOOM&field-asin=B07WRMNQFP'> Click Here To Vist amazon.com Page to Grab This Deal-3</a>",    
    "<a class='url-tag' href='https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=two+piece+bikini&field-brand=BELLA+BOOM&field-asin=B07WRMNQFP'> Click Here To Vist amazon.com Page to Grab This Deal-4</a>"
];

window.onload = function myFunction() {
    var randomItem = myArray[Math.floor(Math.random() * myArray.length)];

    document.getElementById("display").innerHTML = `
        <button class="btn-button btn-text letter-spacing url-tag">
            ${randomItem}
        </button>
    `;
} 