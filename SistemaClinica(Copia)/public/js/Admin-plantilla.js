$("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
          $("#menu-toggle2").toggleClass("invisible");
});


$("#menu-toggle2").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    $("#menu-toggle2").toggleClass("invisible");

});