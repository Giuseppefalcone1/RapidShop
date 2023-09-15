let navbar = document.querySelector('#navbar');

window.addEventListener('scroll', ()=> {
    if(window.scrollY > 300) {
        navbar.classList.add("d-none");
    } else {
        navbar.classList.remove("d-none");
    }
})