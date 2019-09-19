let loader = document.querySelector('.loader');
let main = document.querySelector('main');

let nav = document.querySelector('nav');
let navLinks = nav.getElementsByTagName('a');
let pageURL = window.location.pathname;
let pathNameArray = pageURL.split('/');
console.log(pathNameArray);

function toggleMobileMenu() {
    let mobileMenu = document.getElementById("mobileMenuNavLinks");
    if (mobileMenu.style.display === "flex") {
      mobileMenu.style.display = "none";
    } else {
      mobileMenu.style.display = "flex";
    }
  }



function load() {
    
    for (let i = 0; i < navLinks.length; i++) {
        if(navLinks[i].className == pathNameArray[1] || navLinks[i].className == pathNameArray[2]){
            navLinks[i].classList.add("active");
        } else if (pathNameArray[0] == "" && pathNameArray[1] == ""){
            navLinks[0].classList.add("active");
        }
    }
    
    setTimeout(() => {
        loader.style.opacity = 0;
        loader.style.display = 'none';

        main.style.display = 'block';
        setTimeout(() => (main.style.opacity = 1), 250);
    }, 3000);
}

load();