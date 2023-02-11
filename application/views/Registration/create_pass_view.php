<!DOCTYPE html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Placement</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    
    <link rel="icon" href="<?=base_url() ?>Assets/images/studentlogo.png" sizes="32x32" type="image/png">
    
    <link rel='stylesheet' type='text/css' media='screen' href="<?=base_url() ?>Assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

    body{
        background-image: url(Assets/images/Pngtre.jpg);
        
        height: 721px;
        background-repeat: no-repeat;
        background-size: cover;
        
    }

    .box{
       
        
        border-radius:20px;
        box-shadow: 5px 5px 35px 5px #000;
    }
    .card{
                background-color:#6287AF;
    }

        h2{
            font-family:'frozen'; 
            font-weight:700;
            color:yellow;

        }

        label{
            color:white;
            font-weight:700;
        }
        
        u{
            font-weight:700;
            color:navy;
        }
    
  

    
    </style>
</head>
<body>
<div class="container p-4">
<div class="row mt-2 card border-0 bg-transparent  p-5 align-items-end" >
              
              <div class="col box card col-12 shadow-10  col-lg-4 p-5  ">
              
                    
                    <h2 class="mb-0 text-center">Create New Password </h2>
                        <!--div class="auth-logo text-center mb-4"><img src="<?=base_url() ?>Assets/images/logo.png" alt=""></div-->
                      
                        <form>
                            <div class="form-group mt-4">
                                <label for="email">Enter Your New Password</label>
                                <input class="form-control  mt-2 form-control-rounded" placeholder="Password" id="password" type="password">
                            </div>
                            <div class="form-group mt-4">
                                <label for="password">Confirm Password</label>
                                

                            <input class="form-control"  id="myInput" type="password" name="password" placeholder="Password" value="">
                            <input class="ms-2 mt-3" type="checkbox" onclick="myFunction()">  Show Password
                            </div>

                           
                            <button class="btn btn-rounded btn-info text-center px-5 mx-auto d-block mt-5">Submit</button>
                        </form>
                        <div class="mt-3 text-center"><a class="text-muted"  href="<?=base_url();?>Forget_pass">
                            
                    </div>
                </div>
                <!-- <div class="col-md-6 text-center" style="background-size: cover;background-image: url(Assets/images/photo-long-3.jpg)">
                    <div class="pr-3 auth-right"><a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="signup.html"><i class="i-Mail-with-At-Sign"></i> Sign up with Email</a><a class="btn btn-rounded btn-outline-google btn-block btn-icon-text"><i class="i-Google-Plus"></i> Sign up with Google</a><a class="btn btn-rounded btn-block btn-icon-text btn-outline-facebook"><i class="i-Facebook-2"></i> Sign up with Facebook</a></div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<body>
    <script>
        const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
   
// toggle the type attribute
const type = password.getAttribute("type") === "password" ? "text" : "password";
password.setAttribute("type", type);

// toggle the eye icon
this.classList.toggle('fa-eye');
});

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        </script>
    