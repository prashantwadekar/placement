<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Placement</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="<?=base_url() ?>Assets/css/style.css" rel="stylesheet">
    <link rel="icon" href="<?=base_url() ?>Assets/images/studentlogo.png" sizes="32x32" type="image/png">

</head>
<div class="auth-layout-wrap" style="background-image: url(Assets/images/loginbg4.jfif);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-11 mx-auto">
              
                    <div class="p-4">
                    <h1 class="mb-0 text-center">Login to your Account</h1>
                        <div class="auth-logo text-center mb-4"><img src="<?=base_url() ?>Assets/images/logo.png" alt=""></div>
                      
                        <form>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input class="form-control form-control-rounded" id="email" type="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-rounded" id="password" type="password">
                            </div>
                            <button class="btn btn-rounded btn-primary text-center px-5 mx-auto d-block mt-2">Login</button>
                        </form>
                        <div class="mt-3 text-center"><a class="text-muted" href="forgot.html">
                                <u>Forgot Password?</u></a></div>
                    </div>
                </div>
                <!-- <div class="col-md-6 text-center" style="background-size: cover;background-image: url(Assets/images/photo-long-3.jpg)">
                    <div class="pr-3 auth-right"><a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="signup.html"><i class="i-Mail-with-At-Sign"></i> Sign up with Email</a><a class="btn btn-rounded btn-outline-google btn-block btn-icon-text"><i class="i-Google-Plus"></i> Sign up with Google</a><a class="btn btn-rounded btn-block btn-icon-text btn-outline-facebook"><i class="i-Facebook-2"></i> Sign up with Facebook</a></div>
                </div> -->
            </div>
        </div>
    </div>
</div>