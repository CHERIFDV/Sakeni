$(function(){

	$('#slide-submenu').on('click',function() {			        
        $(this).closest('.list-group').fadeOut('slide',function(){
        	$('.mini-submenu').fadeIn();	
        });
        
      });

	$('.mini-submenu').on('click',function(){		
        $('.list-group').toggle('slide');
        $('.mini-submenu').hide();

        })


        
        
})
$(document).ready(function(){
        var clickTimeout;
        $('.tb1').on('click',function(){		     
                 clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                })
                $('.tb2').on('click',function(){		     
                         clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                        })

                        $('#tb3').on('click',function(){		     
                                 clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                })
                $('#tbn').on('click',function(){		     
                                 clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                })


                                $('#m').on('click',function(){		     
                                         clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                        })
                                        $('#g').on('click',function(){		     
                                                 clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                                })
                                                $('#j').on('click',function(){		     
                                                         clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                                        })
                                                        $('#p').on('click',function(){		     
                                                                 clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                                                })
                                                                $('#t1').on('click',function(){		     
                                                                         clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                                                        })
                                                                        $('#t2').on('click',function(){		     
                                                                                 clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                                                                })
                                                                                $('#t3').on('click',function(){		     
                                                                                         clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                                                                        })
                                                                                $('#e1').on('click',function(){		     
                                                                                         clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                                                                        })
                                                                                        $('#e2').on('click',function(){		     
                                                                                                 clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                                                                                })
                                                                                                $('#e3').on('click',function(){		     
                                                                                                         clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);
                                                                                                        })
                $("select.s1").change(function(){

                        $( "#submit" ).submit();

                })
                $("select.s3").change(function(){

                        $( "#submit" ).submit();

                })
                $("select.s2").change(function(){

                        $( "#submit" ).submit();

                })
                $("select.s4").change(function(){

                        $( "#submit" ).submit();

                })


        $('.c2').prop('disabled', true);
        
               $(document).on('click','.p2',function(){
                
                    $('.c2').val(parseInt($('.c2').val()) + 1 );
                    clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 500);

        });
       
               $(document).on('click','.p1',function(){
                    $('.c1').val(parseInt($('.c1').val()) + 1 );
                   
                    clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function(){
                        $( "#submit" ).submit();
                    }, 900);
        });

        
            $(document).on('click','.m2',function(){
                $('.c2').val(parseInt($('.c2').val()) - 1 );  
                        if ($('.c2').val() == 0) {
                                 $('.c2').val(1);
                            }  
                            clearTimeout(clickTimeout);
                            clickTimeout = setTimeout(function(){
                                $( "#submit" ).submit();
                            }, 500);
            });

            $(document).on('click','.m1',function(){
                $('.c1').val(parseInt($('.c1').val()) - 1 );
                
                        if ($('.c1').val() == 0) {
                                 $('.c1').val(1);
                            }  
                            clearTimeout(clickTimeout);
                            clickTimeout = setTimeout(function(){
                                $( "#submit" ).submit();
                            }, 500);
            });


     });
     $(document).ready(function(){

        $(".like").click(function() {
        var i = $(this).attr('idbien');
         $.ajax({type: "POST",url: "../prog/like.php", dataType: "json", data: {id_bien:i},});
        var p="#like"+i
        $(p).css('color', 'red');
    
    })

    $(".favori").click(function() {
    var i = $(this).attr('idbien');
     $.ajax({type: "POST",url: "../prog/favori.php", dataType: "json", data: {id_bien:i},});
    var p="#favor"+i
    $(p).css('color', 'red');
    
    })
    $(".disp").click(function() {
        var i = $(this).attr('idbien');
         $.ajax({type: "POST",url: "../prog/disp.php", dataType: "json", data: {id_bien:i,d:1},});
        var p="#disp"+i
        $(p).css('color', 'red');
        var p="#dispt"+i
        $(p).css('color', '#FFF');
        
        })
        $(".dispt").click(function() {
            var i = $(this).attr('idbien');
             $.ajax({type: "POST",url: "../prog/disp.php", dataType: "json", data: {id_bien:i,d:0},});
            var p="#dispt"+i
            $(p).css('color', '#28bb09');
            var p="#disp"+i
            $(p).css('color', '#FFF');
        })
    

    });