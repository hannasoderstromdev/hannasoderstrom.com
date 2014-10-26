/*
	When .toggle is clicked:
	1. if this.info is set to .hidden - remove .hidden and change background to arrUp.png
	2. else add .hidden and change background to arrDown.png

*/
$(document).ready(function(){

    $(".website-toggle").on("click", function(e){
        e.preventDefault();
        $(this).next('.website-content').slideToggle('fast');
        $(this).toggleClass('is-website-expanded');
    });

});
