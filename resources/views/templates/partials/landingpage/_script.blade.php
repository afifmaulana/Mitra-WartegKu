<!-- latest jquery-->
<script src="{{ asset ('assets-landingpage/js/jquery-3.3.1.min.js') }}"></script>

<!-- fly cart ui jquery-->
<script src="{{ asset ('assets-landingpage/js/jquery-ui.min.js') }}"></script>

<!-- exitintent jquery-->
<script src="{{ asset ('assets-landingpage/js/jquery.exitintent.js') }}"></script>
<script src="{{ asset ('assets-landingpage/js/exit.js') }}"></script>

<!-- popper js-->
<script src="{{ asset ('assets-landingpage/js/popper.min.js') }}"></script>

<!-- slick js-->
<script src="{{ asset ('assets-landingpage/js/slick.js') }}"></script>

<!-- menu js-->
<script src="{{ asset ('assets-landingpage/js/menu.js') }}"></script>

<!-- lazyload js-->
<script src="{{ asset ('assets-landingpage/js/lazysizes.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset ('assets-landingpage/js/bootstrap.js') }}"></script>

<!-- Bootstrap Notification js-->
<script src="{{ asset ('assets-landingpage/js/bootstrap-notify.min.js') }}"></script>

<!-- Fly cart js-->
<script src="{{ asset ('assets-landingpage/js/fly-cart.js') }}"></script>

<!-- Theme js-->
<script src="{{ asset ('assets-landingpage/js/script.js') }}"></script>

<script>
    $(window).on('load', function () {
        setTimeout(function () {
            $('#exampleModal').modal('show');
        }, 2500);
    });
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>
