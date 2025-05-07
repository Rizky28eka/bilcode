var navLink = gsap.utils.toArray(".home__link"),
    videoWrap = document.querySelector('.video__wrapper'),
    videoItem = document.querySelector('.video__placeholder video');

function movevideo(e){
  var mouseX = e.clientX,
      mouseY = e.clientY
  tl = gsap.timeline();
  tl.to(videoWrap, {
    duration:1,
    x: mouseX,
    y: mouseY,
    ease: Expo.ease
  })
}

function linkhover(e){
  if (e.type === "mouseenter"){
    var videoSrc = e.target.dataset.src;
    var tl = gsap.timeline();

    tl.set(videoItem, {
      attr: {src : videoSrc}
    }).to(videoWrap, {
      autoAlpha:1,
      scale: 1
    });
  } else if (e.type === "mouseleave"){
    var tl = gsap.timeline();
    tl.to(videoWrap, {
        autoAlpha:0,
        scale:0.3
    })
}
}

function initAnimation(){
  navLink.forEach(link => {
    link.addEventListener('mouseenter', linkhover);
    link.addEventListener('mouseleave', linkhover);
    link.addEventListener('mousemove', movevideo);
  })
}

function init(){
  initAnimation();
}

window.addEventListener("load", function(){
  init()
})