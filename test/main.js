$(document).ready(function(){
    
    $('.center').slick({
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 1,
        responsive: [
        {
            breakpoint: 768,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
            }
        }
        ]
    });
    
});


// $(document).ready(function(){
//     $('.multiple-items').slick({
//         infinite: true,
//         slidesToShow: 2.5,
//         slidesToScroll: 1,
//     });
// });