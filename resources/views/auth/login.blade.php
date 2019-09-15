<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Accounts</title>
</head>
<body style=" background-repeat:no-repeat; background-size: cover;">
<div class="container" style="margin-top: 100px;">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <style>
                    .transparent{
                        background-color: rgba(0,0,0,.9);
                        transform: translate(-60%, -50%);
                        margin-top: 30%;
                        margin-left: 55%;
                        width: 400px;
                        height: 360px;
                        box-sizing: border-box;
                        box-shadow: 0 15px 25px rgba(0,0,0,.5);
                        border-radius: 10px;
                    }
                    .input{
                        color: #fff0ff;
                        border: none;
                        border-bottom: 1px solid #fff0ff;
                        outline: none;
                        background: transparent;
                        font-size: 16px;
                        width: 100%;
                        padding: 10px 0;
                    }
                </style>
                <div class="card transparent">
                    <div class="card-header" style="text-align: center"><i style="font-size: 24px; color: white;">Admin</i></div>
                    <div class="card-body">
                        @if(Session::get('message'))
                            <p style="color: white">{{Session::get('message')}}</p>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="input" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <br/>
                            <div class="form-group">
                                <input type="password" class="input" id="password" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <button type="submit" style="margin-top: 30px;" class="btn btn-success btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>