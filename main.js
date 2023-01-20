var index = 0;
var images = document.querySelectorAll("#carousel-inner img");
var carousel = document.querySelector("#carousel-inner");

function carouselSlide(){
    index++;
    if(index>=images.length) index = 0;
    carousel.style.transform = `translateX(-${index*100}%)`;
}

$('.zoom-img').click(function(){
    $(this).toggleClass("zoom");
    $(".carousel").carousel("pause");
  }); // Change image every 3 seconds
