$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
//////////////////////////////////////////////////////////
$(document).ready(function() {
  var files;
    document.getElementById('pro-imagef').addEventListener('change', readImagef, false);

    document.getElementById('pro-image').addEventListener('change', readImage, false);
    
    $( ".p_i_ze" ).sortable();
    $(document).on('click', '.image-cancel', function() {
        let no = $(".image-cancel").data('no'); 
        $(".preview-image.preview-show-"+no).remove();
        p=0;
        var update = [];
        for (let i = 0; i < fil.length; i++) {
          
            if(i!=no){
                 update[p]=fil[i];
                 p=p+1;
            }
            
        }
        console.log(update);
    });
    $( ".p_i_z_f" ).sortable();

    $(document).on('click', '.image-cancelf', function() {
        
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });


});

var num
var fil ;
function readImage() {
     
     if (window.File && window.FileList && window.FileReader) {
         var files=null
         var files = event.target.files; //FileList object
             var output = $(".p_i_z");
         for (let i = 0; i < 5; i++) {
             var file = files[i];
             if (!file.type.match('image')) continue;
             var picReader = new FileReader();
            
             $(".preview-image.preview-show-"+i).remove();
             picReader.addEventListener('load', function (event) {
                 var picFile = event.target;
                 var html =  '<div class="preview-image preview-show-' + i + '">' +
                             '<div class="image-cancel" data-no="' + i + '"></div>' +
                             '<div class="image-zone"><img id="pro-img-' + i + '" src="' + picFile.result + '"></div>' +
                            // '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + i + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                             '</div>';
                 output.append(html);
                   num =num+1;
             });
             fil=files;
             picReader.readAsDataURL(file);
         }
            
           
     } else {
         console.log('Browser not support');
     }
 }
 
function readImagef() {
   
    
    if (window.File && window.FileList && window.FileReader) {
        var files=null;
       filesf = event.target.files; //FileList object

        
            var output = $(".p_i_z_f");
       

        for (let i = 0; i <1; i++) {
            var file = filesf[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            $(".preview-image.preview-show-"+6).remove();
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + 6 + '">' +
                           /// '<div class="image-cancelf" data-no="' + 1 + '"></div>' +
                            '<div class="image-zone"><img id="pro-img-' + 6 + '" src="' + picFile.result + '"></div>' +
                          // '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
            $("#pro-imagef").val(filesf); 
       
    } else {
        console.log('Browser not support');
    }
}





$(document).ready(function(){

    // Get value on button click and show alert

    $("#cl").click(function(){

        $("#lv1").html($("input[name='tr']:checked").val());
        $("#lv2").html($("input[name='etat']:checked").val());
        $("#lv3").html($("input[name='typeb']:checked").val());
       if ($("input[name='Meublé']:checked").val()==1) {
        var t="oui";
        }else{
        var t="non"
        }

        $("#lv8").html(t);
        if ($("input[name='Garage']:checked").val()==1) {
            var t="oui";
            }else{
            var t="non"
            }

        $("#lv9").html(t);
        if ($("input[name='jardin']:checked").val()==1) {
            var t="oui";
            }else{
            var t="non"
            }
        $("#lv10").html(t);
        if ($("input[name='piscine']:checked").val()==1) {
            var t="oui";
            }else{
            var t="non"
            }
        $("#lv11").html(t);

        $("#l1").html($("#address").val());
       
        $("#l3").html($("#region").val());
        $("#l4").html($("#ville").val());
        $("#l6").html($("#telephone").val());
        $("#l5").html($("#titre").val());
        $("#l7").html($("#desc").val());
        $("#l12").html($("#ncham").val());
        

    });
    
    $("#pr").click(function(){
      if ($("input[name='tr']:checked").val()=="Location") {
        $("#dpr").html("*NB: prix d'un seul mois");
      
      }
      

    });
    


});

