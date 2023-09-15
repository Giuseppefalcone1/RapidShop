let searchBarNavbar = document.querySelector('#searchBar-navbar');

window.addEventListener('scroll', ()=> {
    if(window.scrollY < 300) {
        searchBarNavbar.classList.add("d-none");
    } else {
        searchBarNavbar.classList.remove("d-none");
    }
})