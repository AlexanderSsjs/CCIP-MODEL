document.addEventListener("click", function(e){

    if(e.target.classList.contains("btn-card")){

        const card = e.target.closest(".card");
        card.classList.toggle("flipped");

    }

});