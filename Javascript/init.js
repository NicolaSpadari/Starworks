/* NAVBAR */
$(window).scroll(function () {
    if ($(window).scrollTop() >= 250) {
        $('#navbar').css('animation-name', 'fadeColors');
        window.setTimeout(function () {
            $('#navbar').css('cssText', 'background-color: #000 !important;');
        }, 150);
    } else {
        $('#navbar').css('animation-name', 'fadeOutColors');
        window.setTimeout(function () {
            $('#navbar').css('cssText', 'background-color: trasparent !important;');
        }, 150);
    }
});
$(document).ready(function () {    
    var navbarHeight = $("#nav-alt").height();
    var paddingTop = parseInt($("#nav-alt").css('padding-top'));
    var paddingBottom = parseInt($("#nav-alt").css('padding-bottom'));
    document.getElementsByTagName("body")[0].style.marginTop = navbarHeight+paddingTop+paddingBottom+"px";
});

    
/* CAROUSEL */
$('.carousel').carousel({
    interval: 3000
});
$(function () {
    'use strict';
    $('.carousel .carousel-item[data-src]').each(function () {
        var $this = $(this);
        $this.prepend([
            '<div style="background-image: url(', $this.attr('data-src'), ')"></div>'
        ].join(''));
    });
});

/* HAMBURGER */
$(function () {
    $('#navbarResponsive').on('hide.bs.collapse', function () {
        $('.navbar-toggler').removeClass('open');
    });
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('.navbar-toggler').addClass('open');
    });
});

/* DROPDOWN */
$('.dropdown').on('show.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
});
$('.dropdown').on('hide.bs.dropdown', function (e) {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
});

/* SCROLLSPY */
$(document).ready(function () {
    $('body').scrollspy({target: ".navbar", offset: 50});
});

$("#navbar a").on('click', function (event) {
    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function () {
            window.location.hash = hash;
        });
    }
});

/*FAQs*/
$(".faqQuestion").on("click", function () {
    $(".collapsibleItem").each(function () {
        if ($(this).is(':visible')) {
            $(this).slideToggle(400);
            $(this).parent().find('i').css('cssText', 'transform: rotate(0deg)');
        };
    });
    if ($(this).parent().find('.collapsibleItem').is(":hidden")) {
        $(this).parent().find('.collapsibleItem').slideToggle(400);
        $(this).find('i').css('cssText', 'transform: rotate(90deg)');
    }
});

/* AJAX */
function populateModal(id){
    $.ajax({
        url: '../Include/functions.php',
        type: 'GET',
        data: {function:'getPhotos', id:id},
        success: function( data, textStatus, jQxhr){
            $('#album-modal .modal-body').html(data);
            $('#album-modal .modal-title').html( $('#card'+id+'').find('h4.card-title').html());
            $('#album-modal').modal();
        },
        error: function( jqXhr, textStatus, errorThrown ){
            console.log( errorThrown );
        }
    });
}