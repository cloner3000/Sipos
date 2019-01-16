<!-- App Script -->
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/core/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/core/jquery.scrollLock.min.js') }}"></script>
<script src="{{ asset('js/core/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/app-custom.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>

<script>
    @if (Session::has('info'))
        toastr["info"](`{{ str_replace('`', '\`', session('info')) }}`, "Info")
    @endif
    @if (Session::has('error'))
        toastr["error"](`{{str_replace('`', '\`', session('error')) }}`, "Error")
    @endif
    @if (Session::has('warning'))
        toastr["warning"](`{{ str_replace('`', '\`', session('warning')) }}`, "Warning")
    @endif
    @if (Session::has('success'))
        toastr["success"](`{{ str_replace('`', '\`', session('success')) }}`, "Success")
    @endif

    @if (count($errors) > 0)
        // Handle Lumen validation errors
        @foreach ($errors->all() as $error)
            toastr["error"](`{{ str_replace('`', '\`', $error) }}`, "Error")
        @endforeach
    @endif
</script>
