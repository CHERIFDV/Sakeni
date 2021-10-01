$(document).ready(function(){

    $(".like").click(function() {
    var i = $(this).attr('idbien');
     $.ajax({type: "POST",url: "test.php", dataType: "json", data: {id_bien:i},});
    var p="#like"+i
    $(p).css('color', 'red');

})

$(".favori").click(function() {
var i = $(this).attr('idbien');
 $.ajax({type: "POST",url: "../prog/favori.php", dataType: "json", data: {id_bien:i},});
var p="#favori"+i
$(p).css('color', 'red');

})
});