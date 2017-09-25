// Sous-menu
sfHover = function() {
        var sfEls = document.getElementById("menu").getElementsByTagName("LI");
        for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                        this.className+=" sfhover";
                }
                sfEls[i].onmouseout=function() {
                        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                }
        }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);

// Map
function initMap() {
var uluru = {lat: -25.363, lng: 131.044};
var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 4,
  center: uluru
});
var marker = new google.maps.Marker({
  position: uluru,
  map: map
});
}

// diapo image
var ul;
var li_items;
var imageNumber;
var imageWidth;
var prev, next;
var currentPostion = 0;
var currentImage = 0;


function init(){
    ul = document.getElementById('image_slider');
    li_items = ul.children;
    imageNumber = li_items.length;
    imageWidth = li_items[0].children[0].clientWidth;
    ul.style.width = parseInt(imageWidth * imageNumber) + 'px';
    prev = document.getElementById("prev");
    next = document.getElementById("next");
    prev.onclick = function(){ onClickPrev();};
    next.onclick = function(){ onClickNext();};
}

function animate(opts){
    var start = new Date;
    var id = setInterval(function(){
        var timePassed = new Date - start;
        var progress = timePassed / opts.duration;
        if (progress > 1){
            progress = 1;
        }
        var delta = opts.delta(progress);
        opts.step(delta);
        if (progress == 1){
            clearInterval(id);
            opts.callback();
        }
    }, opts.delay || 17);
}

function slideTo(imageToGo){
    var direction;
    var numOfImageToGo = Math.abs(imageToGo - currentImage);

    direction = currentImage > imageToGo ? 1 : -1;
    currentPostion = -1 * currentImage * imageWidth;
    var opts = {
        duration:1000,
        delta:function(p){return p;},
        step:function(delta){
            ul.style.left = parseInt(currentPostion + direction * delta * imageWidth * numOfImageToGo) + 'px';
        },
        callback:function(){currentImage = imageToGo;}  
    };
    animate(opts);
}

function onClickPrev(){
    if (currentImage == 0){
        slideTo(imageNumber - 1);
    }       
    else{
        slideTo(currentImage - 1);
    }       
}

function onClickNext(){
    if (currentImage == imageNumber - 1){
        slideTo(0);
    }       
    else{
        slideTo(currentImage + 1);
    }       
}

window.onload = init;
