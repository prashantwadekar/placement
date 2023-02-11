<!DOCTYPE html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Placement</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    
    <link rel="icon" href="<?=base_url() ?>Assets/images/studentlogo.png" sizes="32x32" type="image/png">
    <link rel='stylesheet' type='text/css' media='screen' href="<?=base_url() ?>Assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
    

        h1{
            font-family:'frozen'; 
            font-weight:300;
            color:red;

        }

     
       .card1{
       
        margin-left:30px;
       }
        
         h6{color:red;font-size:20px}
        
        .inputs{
            margin-left:30px;
        }
        input{ 
            width:40px;
            height:40px}
        
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button{-webkit-appearance: none;-moz-appearance: none;appearance: none;margin: 0}
        .card-2
        {background-color:#C0C0C0;
            
            width:400px;
            height:50px;
            bottom:-50px;
            left:40px;
            position:absolute;
            border-radius:5px}
        .card-2 .content{margin-top:10px;}
        .card-2 .content a{color:red}
        .form-control:focus{box-shadow:none;border:2px solid red}
        .validate{margin-left:130px;border-radius:20px;height:40px;background-color:red;border:1px solid red;width:140px}
  
        .box .inputBox {
  position: relative;
  margin-left: 1.76rem;
}

.box .inputBox input {
  width: 93%;
  padding: 0.625rem 10px;
  font-size: 1.2rem;
  letter-spacing: 0.062rem;
  margin-bottom: 1rem;
  border: 1px solid #ccc;
  background: transparent;
  border-radius: 4px;
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 10px;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: gray;
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 10px;
  color: #1a73e8;
  font-size: 0.75rem;
  background-color: #fff;
  height: 10px;
  padding-left: 5px;
  padding-right: 5px;
}

.box .inputBox input:focus {
  outline: none;
  border: 2px solid #1a73e8;
}

.box [type="submit"] {
  margin-right: 1.76rem;

  border: none;
  outline: none;
  color: #fff;
  background-color: #1a73e8;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;
  float: right;
}

.box [type="submit"]:hover {
  background-color: #287ae6;
  box-shadow: 0 1px 1px 0 rgba(66, 133, 244, 0.45),
    0 1px 3px 1px rgba(66, 133, 244, 0.3);
}

    
    </style>
</head>
<body>
<div class="container p-3 ">
	 <div class="row mt-5 card border-0 bg-transparent p-2 align-items-end" >
              
                    <div class="col mt-5 box card col-12 shadow-10 p-4 col-lg-4  ">
                    <h1 class="mb-0 text-center">Forget Password</h1>
                    <span  class=" text-center">You can reset your password here.</span>
                        <!--div class="auth-logo text-center mb-4"><img src="<?=base_url() ?>Assets/images/logo.png" alt=""></div-->
                      
                        <form>
                            
                            
                        <div class="inputBox mt-4">
                                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span><input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);" value="" />
                                    <label>Email</label>
            

                                    <div class="row " >
                                <div class="col">
                            <button class="btn btn-primary justify-content-center text-center btn-block" type="submit" type="button"  data-bs-toggle="modal"
                             data-bs-target="#myModal"  name="btn_save" id="btn_save">Reset Password</button>
                            </div></div>
                            
                        </form>
                       
                    </div>
                </div>
                <!-- <div class="col-md-6 text-center" style="background-size: cover;background-image: url(Assets/images/photo-long-3.jpg)">
                    <div class="pr-3 auth-right"><a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="signup.html"><i class="i-Mail-with-At-Sign"></i> Sign up with Email</a><a class="btn btn-rounded btn-outline-google btn-block btn-icon-text"><i class="i-Google-Plus"></i> Sign up with Google</a><a class="btn btn-rounded btn-block btn-icon-text btn-outline-facebook"><i class="i-Facebook-2"></i> Sign up with Facebook</a></div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
         <div class="container d-flex justify-content-center align-items-center">
         <div class="position-relative">
             <div class="card1 p-4 text-center"> 
            <h6>Please enter the OTP <br> to Reset your Password</h6> 
            <div> <span>The code has been sent to your registered mail</span>
    </div></div>

      <!-- Modal body -->
      <div class="modal-body">
         <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> 
            <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> 
            <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> 
            <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> 
            <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> 
            <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> 
            <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> 
            </div><div class="mt-4"> 
        <button class="btn btn-danger px-4 validate">Validate</button> 
    
     
    </div> </div> </div></div>

      <!-- Modal footer -->
      <div class="modal-footer">
         <div class="card-2"> 
        <div class="content d-flex justify-content-center align-items-center"> 
        <span>Didn't get the code</span> <a href="#" class="text-decoration-none ms-3">Resend(1/3)</a> 
        
      </div>
      </div>
    </div>
  </div>

  </div>
<body>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
  
  function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput();

    
});
        </script>