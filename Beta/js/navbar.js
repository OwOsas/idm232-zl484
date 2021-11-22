var isBurgerMenu = false;
var isFilterMenu =false;

document.getElementById("hamburger").addEventListener("click", function(){
    var filter = document.getElementById("filter_menu");
    var burger_menu = document.getElementById("burger_menu");
    var filter_icon = document.getElementById("filter");

    if(filter.classList.contains("filter_visible")){
        filter.classList.remove("filter_visible");
        filter_icon.classList.remove("filter_icon_hidden");
        burger_cross();
    }
    else if(burger_menu.classList.contains("burger_visible")){
        burger_menu.classList.remove("burger_visible");
        filter_icon.classList.remove("filter_icon_hidden");
        burger_cross();
    }
    else{
        burger_menu.classList.add("burger_visible");
        filter_icon.classList.add("filter_icon_hidden");
        burger_cross();
    }
})

document.getElementById("filter").addEventListener("click", function(){
    console.log("filter");
    var filter = document.getElementById("filter_menu");
    var filter_icon = document.getElementById("filter");
    if(!(filter.classList.contains("filter_visible"))){
        filter.classList.add("filter_visible");
        filter_icon.classList.add("filter_icon_hidden");
        burger_cross();
    }
})

function burger_cross(){
    var burger_ele = document.getElementById("hamburger").children;
    console.log("cross");
    for (var i = 0; i <burger_ele.length; i++) {
        if(burger_ele[i].classList.contains("cross")){
            burger_ele[i].classList.remove("cross");
        }
        else{
            burger_ele[i].classList.add("cross");
        }
    }
}