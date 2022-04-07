const wrapper = document.querySelector('.wrapper');
const indicators = [...document.querySelectorAll('.indicators button')];

let currentTestimonial = 0; // Default 0

indicators.forEach((item, i) => {
    item.addEventListener('click', () => {
        indicators[currentTestimonial].classList.remove('active');
        wrapper.style.marginLeft = `-${100 * i}%`;
        item.classList.add('active');
        currentTestimonial = i;
    })
})

//Scroll to product section while clicking product in nav
//To contact form 

function scrollWin(x, y) {
  window.scrollBy(x, y);
}

var login = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
    }
}

//Responsive navbar

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
function validateForm() {

  //name
  let x = document.forms["myForm"]["firstname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  //email
  let y =document.forms["myForm"]["email"].value;
  var mailformat = /^w+([.-]?w+)@w+([.-]?w+)(.w{2,3})+$/;
  
  if (y == "") {
      alert("Email must be filled out");
      return false;
    }
  if(y.match(mailformat))
  {
      return true;
  }
  else{
      alert("You have entered an invalid email");
      return false;
  }


}