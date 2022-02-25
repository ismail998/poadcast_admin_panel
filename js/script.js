let toggleNavStatus = true;
var el = document.getElementById("warapper");
var toggleButton = document.getElementById("menu-toggle");

let tog = function () {
    if(toggleNavStatus==false){
      el.classList.toggle("toggled");
              toggleNavStatus = true;
      } 
      else {
        el.classList.toggle("toggled");
        toggleNavStatus = false; 
      }
};
