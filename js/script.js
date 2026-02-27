AOS.init();

$(window).scroll(function(){
if($(this).scrollTop() > 50){
$('.custom-navbar').addClass('scrolled');
}else{
$('.custom-navbar').removeClass('scrolled');
}
});

// Dynamic year
$('#year').text(new Date().getFullYear());

// Dynamic Social Links
const socials = {
github: "#",
linkedin: "#",
instagram: "#"
};

let socialHTML = "";
for(let key in socials){
socialHTML += `<a href="${socials[key]}" class="text-white me-3">
<i class="fab fa-${key} fa-lg"></i></a>`;
}
$('#social-links').html(socialHTML);

// Contact validation
$("#contactForm").submit(function(e){
e.preventDefault();
alert("Message Sent Successfully!");
});
