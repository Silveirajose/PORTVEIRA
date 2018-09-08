//javascript
new WOW().init();
$(".slide").slick({
	infinite: true,
  slidesToShow: 4,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 4000,
  pauseOnHover: false,
  prevArrow:"<button class='volta'><i class='fas fa-angle-left'></i></button>",
  nextArrow:"<button class='vai'><i class='fas fa-angle-right'></i></button>",
});

$("#cover").parallax("50%",.4);
$("#linha-3").parallax("50%",.4);
$(window).scroll(function(e){

	 if($(this).scrollTop() > 60 ){
       $("nav").addClass('');
	 }else{
       $("nav").removeClass('');
	 }

});