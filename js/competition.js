$(document).ready(function(){
          
})
window.addEventListener("load", event => {
    var image = document.querySelector('#punggawa');
    var isLoaded = image.complete && image.naturalHeight !== 0;
    if(isLoaded){
        $('.loader').fadeOut();
        $('.loader #noise').remove();
        $('.spinner').css('animation-play-state','running');
        $('#punggawa').css('animation-play-state','running');
    }
});


