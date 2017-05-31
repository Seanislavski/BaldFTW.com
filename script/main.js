// $(".box1").html("hey you");
// $("#sect3").on('click'{$(this).delay(1000);})
$("a[href^=#]").click(function(e) { e.preventDefault(); var dest = $(this).attr('href'); console.log(dest); $('html,body').animate({ scrollTop: $(dest).offset().top }, 'slow'); });
