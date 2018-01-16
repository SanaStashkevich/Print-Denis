$(document).ready(function(){
    $('.nav li a[href*="/#"]').on("click", function(e){
        var anchor = $(this).attr('href').substr(1);
        $('html, body').stop().animate({
            scrollTop: $(anchor).offset().top
        }, 700);
        e.preventDefault();
        return false;
    });


    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            $('#toTop').fadeIn(400);
        }
        else {
            $('#toTop').fadeOut(300);
        }
    });
    $('#toTop').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 700);
        return false;
    });

    $('.send-callback').on('click', function () {
        console.dir($("#callback-form-id").serialize());
        $.ajax({
            type: 'POST',
            url: '?r=site/ins_callback',
            dataType: 'json',
            data: $("#callback-form-id").serialize(),
            success:function(json) {
                alert(json);
            },
            error: function (json) {
                console.dir(json);
            }
        })
    });


});

