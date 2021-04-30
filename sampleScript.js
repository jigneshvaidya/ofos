var labelPrice = document.getElementById("burger");
var cbBurger = document.getElementById("cbBurger");
var cbCoke = document.getElementById("cbCoke");
var cbFrenchFries = document.getElementById("cbFrenchFries");
var rVB = document.getElementById("rVB");
var rEB = document.getElementById("rEB");
var rNB = document.getElementById("rNB");
var oCost = document.getElementById("oCost");
var oNum = document.getElementById("oNum");
var date = document.getElementById("date");
var list = document.getElementById("list");
var bill = document.getElementById("bill");
var tax=0;
var totalCost=0;

function show(){
    if(cbBurger.checked && cbCoke.checked && cbFrenchFries.checked){
        alert("You ordered Burger, Coke and Fries");
    }
    else if(cbBurger.checked && cbCoke.checked){
        alert("You ordered Burger and Coke");
    }
    else if(cbBurger.checked && cbFrenchFries.checked){
        alert("You ordered Burger and Fries");
    }
    else if(cbCoke.checked && cbFrenchFries.checked){
        alert("You ordered Coke and Fries");
    }
    else if(cbBurger.checked){
        alert("You ordered Burger");
    }
    else if(cbCoke.checked){
        alert("You ordered Coke");
    }
    else if(cbFrenchFries.checked){
        alert("You ordered Fries");
    }
}

function getDate(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    switch(mm){
        case 1 : mm='January'; break;
        case 2 : mm='February'; break;
        case 3 : mm='March'; break;
        case 4 : mm='April'; break;
        case 5 : mm='May'; break;
        case 6 : mm='June'; break;
        case 7 : mm='July'; break;
        case 8 : mm='August'; break;
        case 9 : mm='September'; break;
        case 10 : mm='October'; break;
        case 11 : mm='November'; break;
        case 12 : mm='December'; break;
    }
    today = dd+'<sup>th</sup>'+mm+', '+yyyy;
    date.innerHTML= today;
}

function placeOrder(){
    var price=0;
    list.innerHTML="";
    if(cbBurger.checked){
        if(rVB.checked){
            price=price+150;
            list.innerHTML+="<p>Veg Burger : 150 Rs.</p>";
        }
        else if(rEB.checked){
            price=price+170;
            list.innerHTML+="<p>Egg Burger : 170 Rs.</p>";
        }
        else if(rNB.checked){
            price=price+200;
            list.innerHTML+="<p>Non-veg Burger : 200 Rs.</p>";
        }
        else{
            price=price+150;
            list.innerHTML+="<p>Veg Burger : 150 Rs.</p>";
        }
    }
    if(cbCoke.checked){
        price=price+20;
        list.innerHTML+="<p>Coke : 20 Rs.</p>";
    }
    if(cbFrenchFries.checked){
        price=price+30;
        list.innerHTML+="<p>French Fries : 30 Rs.</p>";
    }
    if(oNum.value==undefined){
        oNum.value=1;
    }
    oNum.innerHTML=oNum.value++;
    oCost.innerHTML=price;
    tax=price*12.36/100;
    totalCost=price+tax;
    bill.innerHTML="\
<hr><p>Amount : "+price+"</p>\n\
<p>Tax : "+tax+"</p>\n\
<p>Total Amount : "+totalCost+"</p><hr>";
}

function burgerPriceUpdate(price){
    var p = price;
    labelPrice.innerHTML = p;
}