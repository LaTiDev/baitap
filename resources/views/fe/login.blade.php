@extends('fe.index')
@section('feAcc')
    <div class="container p-2">
        <h1 class="text-center">LOGIN</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-primary" role="alert">
                <strong>{{$message}}</strong>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger" role="alert">
                <strong>{{$message}}</strong>
            </div>
        @endif
        {{--  --}}
        <form action="" method="POST">
        @csrf
            <div class="form-group">
                <label for="my-input">Email</label>
                <input id="my-input" class="form-control" type="text" name="email">
            </div>
            {{--  --}}
            <div class="form-group">
                <label for="my-input">Pass</label>
                <input id="my-input" class="form-control" type="text" name="password">
            </div>
            {{--  --}}
            <div class="form-group">
                <label for="my-input">Register ? <a class="btn btn-outline-primary" href="{{route('register')}}">Click</a></label>
            </div>
            {{--  --}}
            <button type="submit" class="btn btn-outline-success">LOGIN</button>
            {{--  --}}

        </form>
    </div>
@endsection
