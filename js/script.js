var nav_principal = document.getElementById("nav_principal");
    var openButton= document.getElementById("openButton");
    var closeButton = document.getElementById('closeButton');
    
    openButton.onclick = openNav;
    closeButton.onclick = closeNav;
    
    
    function openNav() {
      nav_principal.classList.add("active");
    }
    
    function closeNav() {
      nav_principal.classList.remove("active"); }