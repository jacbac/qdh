/*
$(document).ready(function(){

});*/
$('.myModal').modal('toggle');

$('.chrono .content').click(function(){
    var text = $(this).children('div.source');

    if (text.is(':hidden')) {
        text.slideDown('400');
        $(this).children('span').html('cacher');
    } else {
        text.slideUp('400');
        $(this).children('span').html('source');
    }
});
/* gallery */
$(document).ready(function() {
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small> source : <a href="'+item.el.attr('source')+'" target="_blank">'+item.el.attr('author')+'</a></small>';
            }
        }
    });
});


$(document).ready(function() {

    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }

    });

    $('.image-popup-fit-width').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    });

    $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

});
//$('.change').click(function(){
    //var action = $(this).attr("name");
    //alert(action);
    /*
    $.ajax({
        url : $(this).attr("href"),
        cache: false,
        dataType: 'json',
        data: {'action':action}, //{'madate=':madate,'chrono=':chrono,'article=':article,'data=':data },
        success : function(json) {
            //console.log (JSON.parse (json));
            alert(json['date']),
            $("#donnees").html(json['donnees']),
            $(".date").html(json['date']);
            searchDateDD(json);
        },
        error : function(XMLHttpRequest, textStatus, errorThrown){
            alert(textStatus);
        }
    })
    //$('#donnees'), {query:(action)};
    return false;*/
//});
//function searchDateDD(response){
 //   $('#header').fadeOut(300, function(){
 //       $('#header').empty();
 //       $('#header').html(response),
 //       $('#header').fadeIn(500);
 //   });
 //   $('#content').fadeOut(300, function(){
 //      $('#content').empty();
  //      $('#content').html(response),
        //$('#donnees').load(
          //  $(this),{ action: html}
        //);
        //$('#donnees').append();
  //      $('#content').fadeIn(500);
  //  });
  //  return false;
//}
//});