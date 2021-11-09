document.getElementById("hamburger").addEventListener("click", function(){
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
)