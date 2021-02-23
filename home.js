const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".text", { y: "0%", duration: 1.5, stagger: 0.25 });
tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
tl.fromTo("nav", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.fromTo(".big-text", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=1");


const navslide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const title = document.querySelector('.big-text');
  const navLinks = document.querySelectorAll('.nav-links li');


  // nav bar animation
  burger.addEventListener('click',()=> {
    nav.classList.toggle('nav-active');
    title.classList.toggle('big-text-active')  

    // nav links animation
    navLinks.forEach((link, index) => {
      if (link.style.animation){
        link.style.animation = '';
      }else {
        link.style.animation = `navlinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
      }
      
  
    });
 
    // nav burger button animation
    burger.classList.toggle('toggle');

  });


  
}

navslide();