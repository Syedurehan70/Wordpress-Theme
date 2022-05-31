$( function() {
  $( "#datepicker" ).datepicker(); // it will display the calender form of datepicker when id is been clicked
} );

const showOnPx = 100; // setting a variable
const backToTopButton = document.querySelector(".back-to-top") // grabbing an element with id of back-to-top

const scrollContainer = () => {

  return document.documentElement || document.body; // returns the html element of our document
                                                    // if element is not available it will return the body 
                                                    // element
};

document.addEventListener("scroll", () => {
  if (scrollContainer().scrollTop > showOnPx) { // scrolltop returns how much the reurning element been scrolled
    backToTopButton.classList.remove("hidden")
  } else {
    backToTopButton.classList.add("hidden")
  }
})

// since it applied on body, it will scroll to the top
const goToTop = () => {
  document.body.scrollIntoView({
    behavior: "smooth",
  });
};

backToTopButton.addEventListener("click", goToTop) // on click function calls