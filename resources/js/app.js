import './bootstrap';
import 'slick-slider/slick/slick.min.js';
import jQuery from 'jquery';

window.$ = jQuery;


$(function () {
    //FUNCTION TO SHOW AND HIDE LOADER

    function toggleLoader(){
        $('#loader-main').toggle();
        $('#loader-overlay').toggle();
    }   

    //FUNCTION TO REMOVE THE FORM ERRORS 

    function removeErrors(formSelector) {
        $(formSelector).find('.error-response').text('');
        
        $(formSelector).find('input').each(function() {
            $(this).removeAttr('style');
        });
    }

    //JS FOR SLIDERS ON THE LANDING PAGE ----- START
    if ($('.influencers-slider-row-1').length) {
        $(".influencers-slider-row-1").slick({
            slidesToShow: 2.87,
            slidesToScroll: 1,
            autoplay: true,
            vertical: true,
            infinite: true,
            arrows: false,
            dots: false,
            autoplaySpeed: 0,
            speed: 4000,
            cssEase: 'linear'
        });

        $(".influencers-slider-row-2").slick({
            slidesToShow: 2.87,
            slidesToScroll: 1,
            autoplay: true,
            vertical: true,
            infinite: true,
            arrows: false,
            dots: false,
            autoplaySpeed: 0,
            speed: 6000,
            // cssEase: 'linear'
        });

        $(".influencers-slider-row-3").slick({
            slidesToShow: 2.87,
            slidesToScroll: 1,
            autoplay: true,
            vertical: true,
            infinite: true,
            arrows: false,
            dots: false,
            autoplaySpeed: 0,
            speed: 8000,
            cssEase: 'linear'
        });
    }
    
    //JS FOR CUSTOM MODAL OPENS CLOSE
    $('#influencer-modal').on('click',function() {
        $('#influencer-modal-container').removeClass('hidden').addClass('block');
    });

    $('#voter-modal').on('click',function() {
        $('#voter-modal-container').removeClass('hidden').addClass('block');
    });

    $('.cancel-button').on('click', function() {
        var $modalContainer = $(this).closest('.modal-container');
        if ($modalContainer.length) {
            $modalContainer.removeClass('block').addClass('hidden');
        }

        //CHECK IF ANY TEXT IS IN THE RESPONSE ELEMENT---REMOVE
        $('.response-message').text('');
        if($('.response-message').hasClass('text-green-800')){
            $('.response-message').removeClass('text-green-800');
        }
        if($('.response-message').hasClass('text-red-800')){
            $('.response-message').removeClass('text-red-800');
        }
    });

    // JS FOR FORM SUBMISSION ON THE HOMEPAGE

    $('#influencer-form').on('submit', function(e) {
        e.preventDefault();
        toggleLoader();
        var responseClasses;

        removeErrors('#influencer-form');

        //Empty response message if existed
        $('#influencer-modal-container').find('.response-message').text('').removeClass('text-green-800 text-red-800');

        $.ajax({
            url: "/save-influencer-details",
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#influencer-form')[0].reset();
                responseClasses = 'text-green-800';
            },
            error: function(response) {
                responseClasses = 'text-red-800';
            },
            complete:function(response){
                console.log(response)
                if(response.responseJSON.errors){
                    Object.keys(response.responseJSON.errors).forEach(element => {
                        $('#influencer-form input[id="'+element+'"]').css('border-color','rgb(153 27 27)');
                        $('#influencer-form input[id="'+element+'"]').siblings('.error-response').text(response.responseJSON.errors[element][0]);
                    });
                }else{
                    $('#influencer-modal-container').find('span.response-message').text(response.responseJSON.message).addClass(responseClasses);
                }
                toggleLoader();
            }
        });
    });

    $('#voter-form').on('submit', function(e) {
        e.preventDefault();
        toggleLoader();
        var responseClasses;

        removeErrors('#voter-form');

        //Empty response message if existed
        $('#voter-modal-container').find('.response-message').text('').removeClass('text-green-800 text-red-800');;

        $.ajax({
            url: "/save-voter-details",
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#voter-form')[0].reset();
                responseClasses = 'text-green-800';
            },
            error: function(response) {
                responseClasses = 'text-red-800';
            },
            complete:function(response){
                console.log(response)
                if(response.responseJSON.errors){
                    Object.keys(response.responseJSON.errors).forEach(element => {
                        $('#voter-form input[id="'+element+'"]').css('border-color','rgb(153 27 27)');
                        $('#voter-form input[id="'+element+'"]').siblings('.error-response').text(response.responseJSON.errors[element][0]);
                    });
                }else{
                    $('#voter-modal-container').find('span.response-message').text(response.responseJSON.message).addClass(responseClasses);
                }
                toggleLoader();
            }
        });
    });
    
});
