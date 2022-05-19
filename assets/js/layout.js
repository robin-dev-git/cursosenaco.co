// alert('Hola mundo');
var scroll = new SmoothScroll('a[href*="/"]');

/* 
let split = new SplitText(".title")

let tl = gsap.timeline({scrollTrigger:{
  trigger:".container",
  start:"top 50%",
  end:"bottom top",
  toggleActions:"restart none none reset"
}})
.from(split.chars, {yPercent:-100,  stagger:0.05, duration:0.3, ease:"back"})
.from(split.chars, {opacity:0, stagger:0.05, duration:0.2}, 0)
.from("button", {y:100, opacity:0, ease:"back", duration:1}, "<1")

let tl = gsap.timeline({scrollTrigger: {
    trigger: "section",
      start: "top 50%",
      end: "bottom top",
      toggleAction: "restart none none reset"
}}).from("section", {
   duration: 3, x:"-10vw", scale: 2, ease: "linear", 
   scrollTrigger: {
      trigger: "section",
      start: "top 85%",
      end: "bottom 15%",
      toggleAction: "restart none none reset"
   }
})
*/

// let menu = document.querySelector('#menu-btn');
// let navbar = document.querySelector('.navbar .navbar-nav');

// menu.onclick = () =>{
//    menu.classList.toggle('fa-times');
//    navbar.classList.toggle('active');
// };

// window.onscroll = () =>{
//    menu.classList.remove('fa-times');
//    navbar.classList.remove('active');

//    if(window.scrollY > 0){
//       document.querySelector('.navbar').classList.add('active');
//    }else{
//       document.querySelector('.navbar').classList.remove('active');
//    }
// }

// gsap.defaults({
//    duration: 1
// });

// let tl = gsap.timeline({
//    scrollTrigger: {
//       trigger: '.box',
//       start: 'center bottom'
//    }
// });

// tl
// .from(".play-btn", {
//    y: 200,
//    duration: 1.5,
//    opacity: 0

// })
// .from(".img-fluid",{
//    y: 200,
//    duration: 1,
//    opacity: 0
// }, "-=1")
// .from(".title", {
//    y:-220,
//    scale: 3,
//    duration: 0.5,
//    opacity: 0
// })
// .from(".tipopersona",{
//    x: 300,
//    duration: 0.7,
//    delay: 2,
//    opacity: 0,
//    stagger:0.5
// }, "-=1")
// .from(".tipopersona h4", {
//    delay: 2,
//    opacity: 0,
//    xPercent: 100
// }, "-=2")
