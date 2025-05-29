// Get the animation div for each company image
const companyImages = document.querySelector('.companies');
// Working on the blur for the scroll
const navbar = document.querySelector('header');

window.addEventListener("scroll", __ => {
    if (window.scrollY > 50) {
        navbar?.classList.add('navbar_blur');
    } else {
        navbar?.classList.remove('navbar_blur');
    }
});
