/* import * as MainNav from './lib/mainnav.js';
window.MainNav = MainNav; */

const button = document.querySelector('#hamburger');
const nav = document.querySelector('#nav');

button.addEventListener('click', function() {
    if (nav.classList.contains('mobile-hidden')) {
        nav.classList.remove('mobile-hidden');
        nav.classList.add('shown');
        button.querySelectorAll('div.line')[0].classList.add('line1');
        button.querySelectorAll('div.line')[1].classList.add('line2');
    } else {
        nav.classList.remove('shown');
        nav.classList.add('mobile-hidden');
        button.querySelectorAll('div.line')[0].classList.remove('line1');
        button.querySelectorAll('div.line')[1].classList.remove('line2');
    }
})
