@if (Auth::check() && Auth::user()->level == 'operator')
@include('adminlayout.master')

@include('adminlayout.navbar')

@include('content.user/index')

@include('adminlayout.footer')
@endif
