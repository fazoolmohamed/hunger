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
            reload();
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

    $(document).on('click', '.checkbox_selection', function () {

        let _this = $(this);
        _this.closest('.container-fluid').find('.card-body').find('input[type="checkbox"]').attr('disabled', 'disabled');
        _this.attr('disabled', false);
        let action = "{{route('suggestion.box')}}";
        let post_id = _this.attr('data-post-id');
        let user_id = 1;
        {{--        let user_id = "{{Auth::user()->id}}";--}}
        if (_this.is(':checked')) {
            _this.closest('.container-fluid').find('.card-body').find('input[type="checkbox"]').attr('disabled', 'disabled');
            _this.attr('disabled', false);
            $.post(action, {_token: _token, item: _this.val(), post_id: post_id, user_id: user_id});
        } else {
            _this.closest('.container-fluid').find('.card-body').find('input[type="checkbox"]').attr('disabled', false);
        }
    });
</script>
</body>
</html>
