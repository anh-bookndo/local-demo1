//Time interval for carousel
$( document ).ready(function() {
    //$('#myCarousel').carousel({
      //  interval: 6000
   // });

    $('.carousel').carousel({
        interval: 6000
    });


//repeat
$('#myCarousel').carousel('cycle'); 

//activated the checkbox
$(':checkbox').checkbox();


//show current selected on dropdown
$(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});

//open about page using ajax 
$('#go-to-about-us').load('about_us.html #aboutus');

//open contact page using ajax 
$('#go-to-contact').load('contact.html #contact');

var heights = $(".equal").map(function() {
        return $(this).height();
    }).get(),

    minHeight = Math.max.apply(null, heights);

    $(".equal").height(minHeight);


});




