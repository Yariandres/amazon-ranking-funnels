
// asigns the super urls
var myArray = [
    "<a class='url-tag' href='https://www.amazon.com/s?k=Misen+Chef+Knife&rh=p_4%3AFOXEL%2Cp_78%3AB07BXPJT69&refresh=1&ref=glow_cls'> Click Here To Vist amazon.com Page to Grab This Deal-1 </a>",
    "<a class='url-tag' href='https://www.amazon.com/s?k=Mercer+Chef+Knife&rh=p_4%3AFOXEL%2Cp_78%3AB07BXPJT69&refresh=1&ref=glow_cls'> Click Here To Vist amazon.com Page to Grab This Deal-2 </a>",
    "<a class='url-tag' href='https://www.amazon.com/s?k=Paudin+Chef+Knife&rh=p_4%3AFOXEL%2Cp_78%3AB07BXPJT69&refresh=1&ref=glow_cls'> Click Here To Vist amazon.com Page to Grab This Deal-3</a>",    
    "<a class='url-tag' href='https://www.amazon.com/s?k=Imarku+Chef+Knife&rh=p_4%3AFOXEL%2Cp_78%3AB07BXPJT69&refresh=1&ref=glow_cls'> Click Here To Vist amazon.com Page to Grab This Deal-4</a>"
];

window.onload = function myFunction() {
    var randomItem = myArray[Math.floor(Math.random() * myArray.length)];

    document.getElementById("display").innerHTML = `
        <button class="btn-button btn-text letter-spacing url-tag">
            ${randomItem}
        </button>
    `;
} 