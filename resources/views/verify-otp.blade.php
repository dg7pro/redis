@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Verify your Email</div>

                    <div class="panel-body">
                        <form action="{{ route('verifyOTP') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="otp" class="control-label">Enter your OTP:</label><br><br>

                                <input id="otp" type="text" class="form-control" name="otp" required autofocus>

                            </div>
                            <input type="submit" value="Verify" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
