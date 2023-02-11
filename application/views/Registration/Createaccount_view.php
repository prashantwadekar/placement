    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="<?=base_url() ?>Assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">
    <script src="https://kit.fontawesome.com/7c158a5167.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script>
        var base_path="<?php echo base_url();?>";
     </script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

/* body {
    height: 100vh;
    background: linear-gradient(to top, #c9c9ff 50%, #9090fa 90%) no-repeat
} */

.container {
    margin: 50px auto
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
    border-radius: 15px;
    background: cornflowerblue;
    margin-left: 2px;
    width: 121px;
    height: 33px;
    border:none;
}

.panel {
    min-height: 380px;
    box-shadow: 2px 11px 20px black;
    border-radius: 12px
}

.input-field {
    border-radius: 5px;
    padding:11px;
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
.txtmid{
    margin-left:2px;
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
  </style>
</head>
<div class="auth-layout-wrap" style="background-image: url(Assets/images/4565.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
        <div class="container o-hidden">
        <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3 mt-5">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold txtmid mt-3">Create Account</h3>
                </div>
                <div class="panel-body p-3">
                <form action="" id="Form" method="POST">
                        <div class="form-group py-2">
                            <div class="input-field"><span class="material-symbols-outlined">person_filled&ensp;</span><input type="text" placeholder="Username" name="username" id="username" required> </div>
                        </div>
                        <div class="form-group">
                            <div class="input-field"> <span class="material-symbols-outlined">mail&ensp;</span><input type="email" placeholder="Email" name="email" id="email" required> </div>
                        </div>
                        <div class="form-group ">
                        <div class="input-field"><span class="material-symbols-outlined">lock&ensp;</span></span><input type="password" placeholder="Password" name="password" autocomplete="current-password" required="" id="password">
                        <i class="far fa-eye  text-muted" id="togglePassword" style= cursor: pointer;></i> </div>
                        </div>

                        <div class="form-group mt-3">
                        <div class="input-field"><span class="material-symbols-outlined">lock&ensp;</span><input type="password" placeholder="Re-enter Password" name="repassword" autocomplete="current-password" required="" id="repassword">
                        <i class="far fa-eye  text-muted" id="togglerepassword" style= cursor: pointer;></i> </div>
                        </div>
                        
                        <div class="form-group mt-3">
                        <div class="input-field"><span class="material-symbols-outlined">call&ensp;</span><input type="tel" placeholder="mobile number" name="mobilenumber"  maxlength="10" pattern="[7-9]{1}[0-9]{9}" inpumode="numeric" required="" id="mobilenumber"> </div>
                        </div>

    
                        <div class="form-inline pt-4"> <input type="checkbox" name="remember" id="remember"> <label for="remember" class="text-muted">Remember me</label> <a href="Forgetpwd" id="forgot" class="font-weight-bold"></a> </div>
                        <button class="btn btn-primary btn-block mt-3" type="button" name="btn_save" id="btn_save">Create account</button>
                        <div class="text-center pt-4 text-muted">Already have account? <a href="Loginpage">Sign in</a> </div>
                    </form>
                </div>
                <div class="mx-3 my-2 py-2 bordert">
                    <div class="text-center py-3"> <a href="https://wwww.facebook.com" target="_blank" class="px-2"> 
                        <img src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg" alt=""> </a> <a href="https://www.google.com" target="_blank" class="px-2"> 
                        <img src="<?php echo base_url() ?>Assets\images\google.png" alt=""> </a> <a href="https://www.github.com" target="_blank" class="px-2"> 
                        <img src="<?php echo base_url() ?>Assets\images\github.png" alt=""> </a> 
                    </div>
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
    <!-- repassword toggle -->
    <script>
        const togglerepassword = document.querySelector('#togglerepassword');
  const repassword = document.querySelector('#repassword');

  togglerepassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = repassword.getAttribute('type') === 'password' ? 'text' : 'password';
    repassword.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

    </script>
    <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>   
    <script src="<?php echo base_url(); ?>web_resources/dist/js/sweetalert.min.js"></script>       
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/Createaccount_create.js"></script>

