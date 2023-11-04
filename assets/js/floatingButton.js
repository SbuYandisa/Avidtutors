window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  var button = document.querySelector('.floating-button');
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
}