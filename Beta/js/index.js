var isFormFilling = false;

document.getElementById("login").addEventListener("click", function(){
    console.log("Login Hit");
    if (!isFormFilling){
        console.log("Changing to form filling");
        document.getElementById("header").classList.remove("hidden");
        document.getElementById("title_container").classList.add("hidden");
        document.getElementById("login_form").classList.remove("hidden");
        isFormFilling = true;
    }
    else{
        console.log("LOGIN!")
    }
}
);

document.getElementById("login_bk_btn").addEventListener("click", function(){
    console.log("Bk Hit");
    if (isFormFilling){
        console.log("Changing to login");
        document.getElementById("header").classList.add("hidden");
        document.getElementById("title_container").classList.remove("hidden");
        document.getElementById("login_form").classList.add("hidden");
        isFormFilling = false;
    }
}
);