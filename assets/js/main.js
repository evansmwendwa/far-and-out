import $ from 'jquery';
import 'jquery-match-height';
//import 'bootstrap';

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function updateQueryStringParameter(uri, key, value) {
  var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
  var separator = uri.indexOf('?') !== -1 ? "&" : "?";
  if (uri.match(re)) {
    return uri.replace(re, '$1' + key + "=" + value + '$2');
  }
  else {
    return uri + separator + key + "=" + value;
  }
}

$(document).ready(function(){
  let menuOpen = false;

  $('.hamburger').click(function() {
    if(menuOpen) {
      $(this).removeClass('is-active');
      menuOpen = false;
      // close the menu
    } else {
      $(this).addClass('is-active');
      menuOpen = true;
      // open the menu
    }

  })
});

window.onload = function(e) {
    // match height here
}

window.onresize = function(e) {
    // match height here
}
