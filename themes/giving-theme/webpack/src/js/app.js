//////////////////////////
// IMPORT CSS
//////////////////////////

import '../sass/app.scss';

//////////////////////////
// IMPORT LIBRARIES JS
//////////////////////////

// import 'modules/'

window.onload = init;
var topnavButton = document.getElementById('sitenav_main_mobile_toggle');
var topnavDisplay = document.querySelector('.primary-menu-wrapper');

function init() {
    topnavButton.onclick = toggleNav;
}

function toggleNav(){
  topnavDisplay.classList.toggle("open");
  topnavButton.classList.toggle("open");
}

////////////////////
// Copyright
////////////////////

window.SayMyName = function () {
  console.log(`%c
                                                        
 	Made with ♥ by JBMxWorld    

`, 'background: #e8404b; color: white');
}