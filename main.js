let loader = document.querySelector('.loader');
let main = document.querySelector('main');
let headerDivider = document.querySelector('#header-divider');
let footerDivider = document.querySelector('#footer-divider');

let nav = document.querySelector('nav');
let navLinks = nav.getElementsByTagName('a');
let contactSection = document.querySelector('#contact-wrapper');
let pagePATH = window.location.pathname;
let pageURL = window.location.href;
let pathNameArray = pagePATH.split('/');

console.log(pageURL);
console.log(window.location.href);


if (pagePATH.includes('/about')) {
  headerDivider.style.marginBottom = 0;
  footerDivider.style.marginTop = 0;
  footerDivider.style.opacity = 0;
}
if (pageURL.includes('contact-wrapper')) {
  contactSection.scrollIntoView({behavior: "smooth", block: "center"});
}

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

        if (pageURL.includes('contact-wrapper')) {
            contactSection.scrollIntoView({behavior: "smooth", block: "start"});
        }
    }, 3000);
}

load();