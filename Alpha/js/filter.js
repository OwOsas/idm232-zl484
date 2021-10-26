document.getElementById("filter_icon").addEventListener("click", function(){
    console.log("Filter icon Hit");
    document.getElementById("filter_icon").classList.remove("filter_while_retracted");
    document.getElementById("sort").classList.remove("sort_retracted");
    document.getElementById("content_container").classList.add("content_while_sort_active");
    }
);

document.getElementById("retract_filter").addEventListener("click", function(){
    console.log("Filter Retract Hit");
    document.getElementById("filter_icon").classList.add("filter_while_retracted");
    document.getElementById("sort").classList.add("sort_retracted");
    document.getElementById("content_container").classList.remove("content_while_sort_active");
    }
);