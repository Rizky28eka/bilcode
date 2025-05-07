/*=============== FOLLOWING CURSOR ===============*/
// const following__cursor = document.querySelector(".following__cursor");

// const updateCursor = (e) => {
//   gsap.to(".cursor", {
//     duration: 1,
//     x: e.pageX * 2 - 50 + "%",
//     y: e.pageY * 2 - 50 + "%",
//     ease: "power3.out",
//   });
//   following__cursor.style.top = e.pageY + "px";
//   following__cursor.style.left = e.pageX + "px";
// };

// window.addEventListener("mousemove", updateCursor);

/*=============== DROWPDOWN WORK ===============*/
// $(document).on('click', '.work__content ul li', function(){
//   $(this).addClass('active')
// })

// $(document).on('click', '.work__content ul li.active', function(){
//   $(this).removeClass('active')
// })

/*=============== LAUNCH OVERLAY NAVIGATION ===============*/
document.querySelector('.btn__toggle').onclick = function (e) {
    var menu__toggle = document.querySelector('.menu__toggle');
    var btn__toggle = document.querySelector('.btn__toggle');

    menu__toggle.classList.toggle('is-active');
    btn__toggle.classList.toggle('is-active');

    e.preventDefault();
}

/*=============== OVERLAY NAVIGATION DARK THEME ===============*/
// document.querySelector('#ui__switch').onclick = function (e) {
//     var cut_circle = document.querySelector('.cut_circle');
//     var circle = document.querySelector('.circle');
//     var toggle = document.querySelector('.toggle');
//     var dark = document.querySelector('.dark');
//     var light = document.querySelector('.light');

//     cut_circle.classList.toggle('is-active');
//     circle.classList.toggle('is-active');
//     toggle.classList.toggle('is-active');
//     dark.classList.toggle('is-active');
//     light.classList.toggle('is-active');

//     e.preventDefault();
// }

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 50) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*=============== DARK LIGHT THEME ===============*/
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx bx-moon' : 'bx bx-sun'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'bx bx-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin: 'bottom',
    distance: '60px',
    duration: 500,
    // delay: 0,
    // reset: true
})

sr.reveal(`
    .sr-0,
    .home__link-dev,
    .work__title,
    .quotes-title,
    .project__list > li:nth-child(1),
    .project__list > li:nth-child(2),
    .contact__title,
    .footer,
    .about__page-title > div:nth-child(1),
    .goal__title,
    .boss__title,
    .work__page-title > div:nth-child(1),
    .work__page__body-title,
    .blog__page__container`,
)
sr.reveal(`
    .sr-300,
    .home__link-bran,
    .work__list > li:nth-child(1),
    .contact__sub-title,
    .about__page-title > div:nth-child(2),
    .goal__desc,
    .work__page-title > div:nth-child(2),
    .work__page__body-desc,
    .blog__page__body > a:nth-child(odd)`,
    {delay: 300}
)
sr.reveal(`
    .sr-600,
    .home__link-des,
    .work__list > li:nth-child(2),
    .call,
    .about__page-title > div:nth-child(3),
    .goal__content__title,
    .work__page-title > div:nth-child(3),
    .blog__page__body > a:nth-child(even)`,
    {delay: 600}
)
sr.reveal(`.sr-800, .scroll, .image__title`, {delay: 800})
sr.reveal(`
    .sr-900,
    .work__list > li:nth-child(3),
    .write,
    .about__page-title > div:nth-child(4),
    .goal__list,
    .work__page-title > div:nth-child(4)`,
    {delay: 900}
)
sr.reveal(`
    .sr-1200,
    .work__list > li:nth-child(4),
    .map,
    .about__page-title > div:nth-child(5),
    .work__page-title > div:nth-child(5)`,
    {delay: 1200}
)
sr.reveal(`
    .sr-1500,
    .work__list > li:nth-child(5),
    .about__page-title > div:nth-child(6),
    .work__page-title > div:nth-child(6)`,
    {delay: 1500}
)
sr.reveal(`
    .sr-1800,
    .work__list > li:nth-child(6),
    .about__page-title > div:nth-child(7),
    .work__page-title > div:nth-child(7)`,
    {delay: 1800}
)
sr.reveal(`
    .sr-2100,
    .about__page-title > div:nth-child(8),
    .work__page-title > div:nth-child(8)`,
    {delay: 2100}
)
sr.reveal(`
    .sr-2400,
    .about__page-title > div:nth-child(9),
    .work__page-title > div:nth-child(9)`,
    {delay: 2400}
)
sr.reveal(`
    .sr-2700,
    .work__page__container`,
    {delay: 2700}
)
