

let dd = document.querySelector(".dd");
let isho = true;
function rr() {
  if (isho) {
    dd.style.display = "block";
    isho = false;

  }
  else {
    dd.style.display = "none";
    isho = true;



  }

}






function openNav() {
  document.getElementById('my_m').style.width = "250px";
  document.getElementById('main').style.width = "250px";

}
function closeNav() {
  document.getElementById('my_m').style.width = "300px";
  document.getElementById('my_m').style.width = "0px";

}

function showtime(){
  'use strict';
  var now = new Date(),
   hours = now.getHours() ,minutes = now.getMinutes(),seconds = now.getSeconds() ;
   if (hours < 10){
      hours = '0' + hours;
   }
   if (minutes < 10){
      minutes = '0' + minutes;
   }
   if (seconds < 10){
      seconds = '0' + seconds;
   }
   
   document.getElementById('clock').textContent =hours +':' + minutes + ':' + seconds;

 
}
window.onload = function (){
  'use strict';
  setInterval(showtime,500);
};










