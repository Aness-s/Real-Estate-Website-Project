function validateForm() {
  var date = document.forms["myForm"]["date"].value;
  var regEx = /^\d{4}-\d{2}-\d{2}$/;
  if(!date.match(regEx)) {
    alert("Date must be of format YYYY-MM-DD");
    return false;
  }

} 

const navslide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li');

  // nav bar animation
  burger.addEventListener('click',()=> {
    nav.classList.toggle('nav-active');
    

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