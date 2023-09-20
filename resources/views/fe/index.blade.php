@include('fe.layouts.header')
@yield('feAcc')

<div class="container">
    @if (Auth::check())
        <h6 class="pt-1 line-height-1">{{Auth::user()->name}} <a href="{{route('logout')}}" class="d-block text-dark ls-10 pt-1">LOGOUT</a></h6>
    @else
        <h6 class="pt-1 line-height-1"><a href="{{route('login')}}" class="d-block text-dark ls-10 pt-1">LOGIN</a></h6>
    @endif
</div>
@include('fe.layouts.footer')