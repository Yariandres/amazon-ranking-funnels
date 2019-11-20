
// asigns the super urls
var myArray = [
    "<a href=https://www.amazon.co.uk/s/ref=sr_in_-2_p_6_16?fst=as%3Aoff&rh=n%3A65801031%2Ck%3ATurmeric+Curcumin+10%5Cc000mg%2Cp_6%3AA1YEPN8JHDSWMC&keywords=Turmeric+Curcumin&ie=UTF8> Click Here To Vist amazon.com Page to Grab This Deal-1 </a>",
    "<a href=https://www.amazon.co.uk/s/ref=sr_in_-2_p_6_16?fst=as%3Aoff&rh=n%3A65801031%2Ck%3ATurmeric+Curcumin+10%5Cc000mg%2Cp_6%3AA1YEPN8JHDSWMC&keywords=Curcumin&ie=UTF8> Click Here To Vist amazon.com Page to Grab This Deal-2 </a>",
    "<a href=https://www.amazon.co.uk/s/ref=sr_in_-2_p_6_16?fst=as%3Aoff&rh=n%3A65801031%2Ck%3ATurmeric+Curcumin+10%5Cc000mg%2Cp_6%3AA1YEPN8JHDSWMC&keywords=Turmeric+pain+relief&ie=UTF8> Click Here To Vist amazon.com Page to Grab This Deal-3</a>", "<a href=https://www.amazon.co.uk/s/ref=sr_in_-2_p_6_16?fst=as%3Aoff&rh=n%3A65801031%2Ck%3ATurmeric+Curcumin+10%5Cc000mg%2Cp_6%3AA1YEPN8JHDSWMC&keywords=turmeric+capsules+high+strength&ie=UTF8> Click Here To Vist amazon.com Page to Grab This Deal-4</a>"
];

window.onload = function myFunction() {
    var randomItem = myArray[Math.floor(Math.random() * myArray.length)];

    document.getElementById("display").innerHTML = randomItem;
} 