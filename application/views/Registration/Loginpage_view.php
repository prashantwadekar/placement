    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="<?=base_url() ?>Assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">
    <script src="https://kit.fontawesome.com/7c158a5167.js" crossorigin="anonymous"></script>
    <script>
        var base_path="<?php echo base_url();?>";
     </script>
    <link rel="icon" href="<?=base_url() ?>Assets/images/studentlogo.png" sizes="32x32" type="image/png">
    
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}


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
    margin-top: 20px;
    border-radius: 15px;
    background: cornflowerblue;
    margin-left: 10px;
    height: 33px;
    width:73px;
    border:none;
}

.panel {
    min-height: 380px;
    box-shadow: 3px 11px 20px black;
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
input[type='password'] {
    border: none;
    outline: none;
    box-shadow: none;
    width: 100%
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
    position: relative;
}

.bordert:after {
    content: "or connect with";
    position: absolute;
    top: -13px;
    left: 33%;
    background-color: #fff;
    padding: 0px 8px
}
.bordertt:hover{
    transform: translate(0, -6px);
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
        margin: 30px 0
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
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold mt-3">Login</h3>
                </div>
                <div class="panel-body p-3">
                <form  id="Form" method="POST" autocomplete="off" action="<?=base_url('Login/loginnow')?>">
                        <div class="form-group py-2">
                            <div class="input-field"> <span class="far fa-user p-1"></span> <input type="text" name="username" id="username" placeholder="Username or Mobile" > </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                        <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password" placeholder="Password" name="password" autocomplete="current-password" id="password">
                        <i class="far fa-eye text-muted" id="togglePassword" style= cursor: pointer;></i>
                        </div>
                        <div class="form-inline pt-4"> <input type="checkbox" name="remember" id="remember"> <label for="remember" class="text-muted">Remember me</label> <a href="Forgetpwd" id="forgot" class="font-weight-bold">Forgot password?</a> </div>
                        <button class="btn btn-primary btn-block mt-3" type="submit">Login</button>
                        <div class="text-center pt-4 text-muted">Don't have an account? <a href="Createaccount">Sign up</a> </div>
                    </form>
                    <?php
						if($this->session->flashdata('error')) {	?>
						 <p class="text-danger text-center" style="margin-top: 10px;"> <?=$this->session->flashdata('error')?></p>
						<?php } ?>
                </div>
                <div class="mx-3 my-2 py-2 bordert ">
                    <div class="text-center py-3"> <a href="https://wwww.facebook.com" target="_blank" class="px-2"> 
                        <img src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg" class="bordertt" alt=""> </a> <a href="https://www.google.com" target="_blank" class="px-2"> 
                        <img src="Assets/images/google.png" class="bordertt" alt=""> </a> <a href="https://www.github.com" target="_blank" class="px-2"> 
                        <img src="Assets/images/github.png" class="bordertt" alt=""> </a> 
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
<!-- <script>
  function submitForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "admin" && password == "admin") {
        document.getElementById("Form").submit();
    } else {
        alert("Invalid username or password");
    
    }
  
  }
</script> -->
<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>  
<script src="<?php echo base_url(); ?>web_resources/dist/js/sweetalert.min.js"></script>       
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/Loginpage_create.js"></script>
