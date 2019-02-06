
    @extends('layouts.app')

        @section('content')
            <div class="container">
            <h1>Change password</h1>

                <form action="{{ route('profile.update_password') }}" method="POST">


                    @if($errors->count())
                        <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{$error}}<br>
                            @endforeach
                        </div>
                    @endif

                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        <label for="New Password"> new password<br></label>

                        <input type="password" name="new_password" class="form-control" placeholder="enter your new password">
                    </div>
                    <div class="form-group">
                        <label for="New Password again"> New password again<br></label>

                        <input type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm your new password again">
                    </div>
                    <button class="btn btn-primary" type="submit">Verzend</button>
                </form>
            </div>
            @endsection
