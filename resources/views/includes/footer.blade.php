<script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $('[data-toggle=offcanvas]').click(function () {
            $(this).toggleClass('visible-xs text-center');
            $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
            $('.row-offcanvas').toggleClass('active');
            $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
            $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
            $('#btnShow').toggle();
        });
    });

    $(document).on('submit', '.form_submission', function (e) {
        e.preventDefault();
        let this_ = $(this);
        let action = this_.attr('action');
        $.post(action, this_.serialize(), function (res) {

        });
    });

    $(document).on('keyup', 'textarea[name="content"]', function () {
        getLocation();
    });

    let longitude = $('input[name="longitude"]');
    let latitude = $('input[name="latitude" ]');
    let _token = $('meta[name="csrf-token"]').attr('content');

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);

        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        latitude.val(position.coords.latitude);
        longitude.val(position.coords.longitude);
    }
</script>
</body>
</html>
