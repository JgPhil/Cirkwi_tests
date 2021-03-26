const elements = document.querySelectorAll('.btn');


elements.forEach(e => {
    e.addEventListener("click", () => {
        e.classList.toggle("active");
        let panel = e.nextElementSibling;
        if (panel.style.display === "block") {            
            panel.style.display = "none";
            e.firstElementChild.setAttribute('class', 'fas fa-2x fa-caret-right');
        } else {
            panel.style.display = "block";
            e.firstElementChild.setAttribute('class', 'fas fa-2x fa-caret-down');
        }
    });
});