window.onscroll=function(){
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');}
    else{
        header.classList.remove('navbar-fixed');
    }
}

const hamburger =document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

window.addEventListener('click', function (e) {
    if (e.target != hamburger && e.target != navMenu) {
        hamburger.classList.remove('hamburger-active');
        navMenu.classList.add('hidden');
    }
})

const name = document.querySelector('#name')
const email = document.querySelector('#email')
const adress = document.querySelector('#adress')

function validateForm() {
    if (name.value == '') {
        alert('Please fill name field')
        return false
    }
    if (email.value == '') {
        alert('Please fill email field')
        return false
    }
    if (adress.value == '') {
        alert('Please fill adress field')
        return false
    }
}

const darkToggle = document.querySelector('#dark-toggle')
const html = document.querySelector('html')

darkToggle.addEventListener('click', function(){
    if (darkToggle.checked) {
        html.classList.add('dark')
    }
    else {
        html.classList.remove('dark')
    }
})