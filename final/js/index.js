var isLogIn = false;
var isSignUp = false;
var isTitle = true;

document.getElementById("login").addEventListener("click", function(){
    console.log("Login Hit");
        console.log("Changing to form filling");
        // document.getElementById("header").classList.remove("hidden");
        document.getElementById("title_container").classList.add("hidden");
        document.getElementById("signIn_n_register").classList.add("hidden");
        document.getElementById("return").classList.remove("hidden");
        document.getElementById("sign_in_container").classList.remove("hidden");
        document.getElementById("sign_in_form_container").classList.remove("hidden");
        isFormFilling = true;
}
);

document.getElementById("register").addEventListener("click", function(){
    console.log("Login Hit");
    console.log("Changing to form filling");
    // document.getElementById("header").classList.remove("hidden");
    document.getElementById("title_container").classList.add("hidden");
    document.getElementById("signIn_n_register").classList.add("hidden");
    document.getElementById("return").classList.remove("hidden");
    document.getElementById("sign_up_container").classList.remove("hidden");
    document.getElementById("sign_up_form_container").classList.remove("hidden");
    isFormFilling = true;
}
);

document.getElementById("return").addEventListener("click", function(){
    console.log("Login Hit");
    console.log("Changing to form filling");
    // document.getElementById("header").classList.remove("hidden");
    document.getElementById("title_container").classList.remove("hidden");
    document.getElementById("signIn_n_register").classList.remove("hidden");
    document.getElementById("return").classList.add("hidden");
    document.getElementById("sign_up_container").classList.add("hidden");
    document.getElementById("sign_up_form_container").classList.add("hidden");
    document.getElementById("return").classList.add("hidden");
    document.getElementById("sign_in_container").classList.add("hidden");
    document.getElementById("sign_in_form_container").classList.add("hidden");
    isFormFilling = true;
}
);

