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
        @php
          $messages = explode('|', session('info'));
        @endphp

        @foreach($messages as $message)
          toastr["info"]("{{ $message }}", "Info")
        @endforeach
    @endif

    @if (Session::has('error'))
        @php
          $messages = explode('|', session('error'));
        @endphp

        @foreach($messages as $message)
          toastr["error"]("{{ $message }}", "Error")
        @endforeach
    @endif

    @if (Session::has('warning'))
        @php
          $messages = explode('|', session('warning'));
        @endphp

        @foreach($messages as $message)
          toastr["warning"]("{{ $message }}", "Warning")
        @endforeach
    @endif

    @if (Session::has('success'))
        @php
          $messages = explode('|', session('success'));
        @endphp

        @foreach($messages as $message)
          toastr["success"]("{{ $message }}", "Success")
        @endforeach
    @endif

    @if (count($errors) > 0)
        // Handle Lumen validation errors
        @foreach ($errors->all() as $error)
            toastr["error"](`{{ str_replace('`', '\`', $error) }}`, "Error")
        @endforeach
    @endif
</script>
