var currHeight;
function HiddenResize1 () {
    $('.nivoSlider').css({overflow:'visible',background:'none'});
    setTimeout (function(){
        $('.nivo-main-image').stop().animate({opacity:0},500);
        currHeight=$('.nivoSlider').data('nivo:vars').currentImage.height();
    },10);
}
function HiddenResize2 () {
    $('.nivo-main-image').css({opacity:1,height:currHeight});
}
