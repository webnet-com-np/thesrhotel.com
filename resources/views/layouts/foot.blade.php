<!-- include jQuery library -->
{{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}
{{--<script type="text/javascript">window.jQuery || document.write('<script src="{{BASE_URL}}/assets/js/jquery-1.11.2.min.js"><\/script>')</script>--}}
{{--<script type="text/javascript" src="{{BASE_URL}}/assets/js/bootstrap.min.js"></script>--}}
<!-- Range Slider JavaScript -->
<script src="/js/app.js"></script>
<script src="/assets/js/vendor.js"></script>

{{--<script type="text/javascript" src='{{BASE_URL}}/assets/js/jquery-ui.min.js'></script>--}}
{{--<script type="text/javascript" src='{{BASE_URL}}/assets/js/range-slider.js'></script>--}}
{{--<!-- Same Height JavaScript -->--}}
{{--<script type="text/javascript" src='{{BASE_URL}}/assets/js/same-height.js'></script>--}}
{{--<!-- include custom JavaScript -->--}}
{{--<script type="text/javascript" src="{{BASE_URL}}/assets/js/bootstrap-datepicker.js"></script>--}}
{{--<script type="text/javascript" src="{{BASE_URL}}/assets/js/jquery.main.js"></script>--}}
{{--<script type="text/javascript" src="{{BASE_URL}}/assets/js/animations.min.js"></script>--}}
{{--<script type="text/javascript" src="{{BASE_URL}}/assets/js/jquery.plugin.js"></script>--}}
{{--<script type="text/javascript" src="{{BASE_URL}}/assets/js/jquery.countdown.js"></script>--}}
{{--<script type="text/javascript" src="{{BASE_URL}}/assets/js/timber.master.min.js"></script>--}}
{{--<!-- Bootstrap Dropdown Hover JS -->--}}
{{--<script type="text/javascript" src="{{BASE_URL}}/assets/js/bootstrap-dropdownhover.min.js"></script>--}}
{{--<script type="text/javascript" defer src="{{BASE_URL}}/assets/js/jquery.flexslider.js"></script>--}}
{{--<script type="text/javascript" src="{{BASE_URL}}/assets/js/myscript.js"></script>--}}

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128288982-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-128288982-1');

</script>

<script>
    $(function ($) {
        $("img.lazy").Lazy();
    });
</script>

<script>
    $(document).click(function (e) {
        if (!$(e.target).is('.guest-modal ,.guest-modal *')) {
            $('.collapse').collapse('hide');
        }
    });

    var updateField = {
        updateGuest : function(child,adult){
            var resultChild,resultAdult;
            if( child > 1){
                child = child +' ' +'Children';
            }else{
                child = child + ' ' + 'Child';
            }
            if( adult > 1){
                adult = adult + ' ' +'Adults';
            }else{
                adult = adult + ' ' + 'Adult';
            }
            $('#guest-numbers'). val(adult + ' '+ child );
        }
    }

    $('#child-num, #adult-num').on('change', function () {
        updateField.updateGuest($('#child-num').val(),$('#adult-num').val());
    });



</script>
