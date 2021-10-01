  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
});

$(document).ready(function(){
        $(".f").click(function() {
            var i = $(this).attr('idbien');
             $.ajax({type: "POST",url: "../prog/favori.php", dataType: "json", data: {id_bien:i},});
           
            $('.f').css('background-color', '#00ff10');
        
        })
        $(".like").click(function() {
        var i = $(this).attr('idbien');
         $.ajax({type: "POST",url: "../prog/like.php", dataType: "json", data: {id_bien:i},});
        var p="#like"+i
        $(p).css('color', 'red');
    
    })
    $(".vu").click(function() {
        var i = $(this).attr('IDM');
         $.ajax({type: "POST",url: "../prog/vu.php", dataType: "json", data: {IDM:i},});
         var msg = $('#message').val();
         $.ajax({type: "POST",url: "disc.php", dataType: "json", data: {message:msg},});
         $( "#submit" ).submit();
    
    })
    

   
    
    });