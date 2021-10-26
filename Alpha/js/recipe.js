document.getElementById("exit_detail_recipe").addEventListener("click", function(){
    console.log("Bk Hit");
    document.getElementById("detail_recipe").classList.add("hidden");
    document.getElementById("card_container").classList.remove("hidden");
});

var card_list = document.getElementsByClassName('card');

var onClick = (event) => {
    console.log(event.target.id);
  }
window.addEventListener('click', onClick);

for (var card_no = 0; card_no < card_list.length; card_no++){
    card_list[card_no].addEventListener("click", function(){
        console.log("Card", "hit");
        document.getElementById("card_container").classList.add("hidden");
        document.getElementById("detail_recipe").classList.remove("hidden");
    });
}