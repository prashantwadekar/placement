    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="<?=base_url() ?>Assets/css/style.css" rel="stylesheet">
    <link rel="icon" href="<?=base_url() ?>Assets/images/studentlogo.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- DC Social Icons CSS -->
<link rel="stylesheet" type="text/css" href="dreamcodes/social_icons/tsc_social_icons.css" />

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

body {
    height: 100vh;
    background: linear-gradient(to top, #c9c9ff 50%, #9090fa 90%) no-repeat
}

.container {
    margin: 90px auto
       text-align: center;
}

.panel-heading {
    text-align: center;
    margin-bottom: 10px
}

#forgot {
    min-width: 100px;
    margin-left: auto;
    text-decoration: none
}

a:hover {
    text-decoration: none
}

.form-inline label {
    padding-left: 10px;
    margin: 0;
    cursor: pointer
}

.btn.btn-primary {
    margin-top: 20px;
    border-radius: 15px
}

.panel {
    min-height: 380px;
    box-shadow: 20px 20px 80px rgb(218, 218, 218);
    border-radius: 12px;
    
}

.input-field {
    border-radius: 5px;
    padding:5px;
    display: flex;
    align-items: center;
    cursor: pointer;
    border: 1px solid #ddd;
    color: #4343ff
}

input[type='text'],
input[type='password'],
input[type='email'],
input[type='tel']
{
    border: none;
    outline: none;
    box-shadow: none;
    width: 100%
}

.fa-eye-slash.btn {
    border: none;
    outline: none;
    box-shadow: none
}

img {
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius: 50%;
    position: relative
}

a[target='_blank'] {
    position: relative;
    transition: all 0.1s ease-in-out
}

.bordert {
    border-top: 1px solid #aaa;
    position: relative
}

.bordert:after {
    content: "or connect with";
    position: absolute;
    top: -13px;
    left: 33%;
    background-color: #fff;
    padding: 0px 8px
}

@media(max-width: 360px) {
    #forgot {
        margin-left: 0;
        padding-top: 10px
    }

    body {
        height: 100%
    }

    .container {
        margin: 30px 
    }

    .bordert:after {
        left: 25%
    }
}


        label {
            padding:5px;
            pointer-events: none;
            position:absolute;
            left:50;
            top:5;
            transition: 0.2s;
            transition-timing-function: ease;
            transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);
            opacity:0.5;
            background: #fff;
        }

        input {
            padding:10px;
        }

        input:focus + label, input:not(:placeholder-shown) + label {
            opacity:1;
            transform: scale(0.75) translateY(-70%) translateX(-14px);
        }
        .anim{
  transition: transform .7s ease-in-out;
}
.anim:hover {
  transform: rotate(360deg);
}
  </style>
</head>
<div class="auth-layout-wrap" style="background-image: url(Assets/images/Pngtre.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
        <div class="container o-hidden">
        <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3 mt-5">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold mt-3">Create Account</h3>
                </div>
                <div class="panel-body p-3">
                <form action="" id="Form" method="POST">
                        <div class="form-group ">
                            <div class="input-field "><span class="material-symbols-outlined">person_filled&ensp;</span><input type="text" placeholder=" " name="username" id="username" required> <label>Username</label></div>
                        </div>
  
                        
                        <div class="form-group">
                            <div class="input-field"> <span class="material-symbols-outlined">mail&ensp;</span><input type="email" placeholder=" " name="email" id="email" required><label>Email</label> </div>
                        </div>
                        <div class="form-group ">
                        <div class="input-field"><span class="material-symbols-outlined">lock&ensp;</span></span><input type="password" placeholder=" " name="password" autocomplete="current-password" required="" id="password">
                        <label>Password</label>  </div>
               
                        </div>

                        <div class="form-group mt-3">
                        <div class="input-field"><span class="material-symbols-outlined">lock&ensp;</span><input type="password" placeholder=" " name="repassword" autocomplete="current-password" required="" id="repassword">
                  <label>Renter Password</label> </div>
                        </div>
                        
                        <div class="form-group mt-3">
                        <div class="input-field"><span class="material-symbols-outlined">call&ensp;</span><input type="tel" placeholder=" " name="mobilenumber"  maxlength="10" pattern="[7-9]{1}[0-9]{9}" inpumode="numeric" required="" id="mobilenumber"> <label>mobile number</label> </div>
                        </div>

    
                        <div class="form-inline pt-3"> <input type="checkbox" name="remember" id="remember">&nbsp;&emsp; <h6 class="text-muted">Remember me<a href="Forgetpwd" id="forgot" class="font-weight-bold"></a> </div>
                        <button class="btn btn-primary btn-block mt-3" type="button" name="btn_save" id="btn_save">Create account</button>
                        <div class="text-center pt-4 text-muted">Already have account? <a href="Login">Sign in</a> </div>
                    </form>
                </div>
                <div class="mx-3 my-2 py-2 bordert">
                <div class="row mt-2">
                            <div> &nbsp;&nbsp; &nbsp;&nbsp;&emsp;&emsp;&emsp;
                              <a href="https://accounts.google.com/v3/signin/identifier?dsh=S1526935411%3A1672207308384721&authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F&ec=GAlAwAE&hl=en_GB&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession" > <img src="Assets/images/google1.jpg" height="40px" class="anim"  alt=""> </a>&nbsp; &nbsp;&nbsp; 
                              <a href="https://twitter.com/login"> <img src="Assets/images/twitter.png" height="30px" class="anim" alt=""> </a>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
                              <a href="https://www.facebook.com/login.php/"><img src="Assets/images/facebook.png" height="30px" class="anim"  alt="">  </a>  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                              <a href="https://www.instagram.com/accounts/login/">  <img src="Assets/images/insta.png" height="30px" class="anim" alt=""> </a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
                            <div>
                </div>
            </div>
        </div>
    </div>
                <!-- <div class="col-md-6 text-center" style="background-size: cover;background-image: url(Assets/images/photo-long-3.jpg)">
                    <div class="pr-3 auth-right"><a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="signup.html"><i class="i-Mail-with-At-Sign"></i> Sign up with Email</a><a class="btn btn-rounded btn-outline-google btn-block btn-icon-text"><i class="i-Google-Plus"></i> Sign up with Google</a><a class="btn btn-rounded btn-block btn-icon-text btn-outline-facebook"><i class="i-Facebook-2"></i> Sign up with Facebook</a></div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/Createaccount_create.js"></script>
<script>
        const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

    </script>