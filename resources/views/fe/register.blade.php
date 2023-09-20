@extends('fe.index')
@section('feAcc')
    <div class="container p-2">
        <h1 class="text-center">REGISTER</h1>
        {{--  --}}
        <form action="" method="POST">
        @csrf
            <div class="form-group">
                <label for="my-input">Name</label>
                <input id="my-input" class="form-control" type="text" name="name">
            </div>
            {{--  --}}
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
                <label for="my-input">Had ? <a href="{{route('login')}}">Click</a></label>
            </div>
            {{--  --}}
            <button type="submit" class="btn btn-outline-success">REGISTER</button>
            {{--  --}}

        </form>
    </div>
@endsection
