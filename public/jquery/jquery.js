$(document).ready(function() {
    $('.modal-pwpb').on('click',function(){
        $('#pwpb').fadeIn(200);
    });

    $('.modal-basdat').on('click',function(){
        $('#basdat').fadeIn(200);
    });

    $('.modal-pdkk').on('click',function(){
        $('#pdkk').fadeIn(200);
    });

    $('.modal-pbo').on('click',function(){
        $('#pbo').fadeIn(200);
    });

    $('.modal-pd').on('click',function(){
        $('#pd').fadeIn(200);
    });

    $('.modal-tkj').on('click',function(){
        $('#tkj').fadeIn(200);
    });

    $('.modal-siskom').on('click',function(){
        $('#siskom').fadeIn(200);
    });

    $('.modal-simdig').on('click',function(){
        $('#simdig').fadeIn(200);
    });

    $('.modal-ppl').on('click',function(){
        $('#ppl').fadeIn(200);
    });


        //----- CLOSE
        $('[pd-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('pd-popup-close');
        $('[pd-popup="' + targeted_popup_class + '"]').fadeOut(200);

        e.preventDefault();
        });
    });