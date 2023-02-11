<style> .inputBox {
  position: relative;
  margin-left: 1.76rem;
}

 .inputBox input {
  width: 93%;
  padding: 0.4rem 10px;
  font-size: 1rem;
  letter-spacing: 0.062rem;
  margin-bottom: 1rem;
  border: 2px solid #000;
  background: transparent;
  border-radius: 7px;
}

 .inputBox label {
  position: absolute;
  top: 0;
  left: 20px;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: gray;
  pointer-events: none;
  transition: 0.5s;
}

.inputBox input:focus ~ label,
 .inputBox input:valid ~ label,
.inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 10px;
  color: #1a73e8;
  font-size: 0.75rem;
  background-color: #fff;
  height: 10px;
  padding-left: 5px;
  padding-right: 5px;
}

 .inputBox input:focus {
  outline: none;
  border: 2px solid #1a73e8;

}

body {
  background: #e0e5ec;
}
h1 {
  position: relative;
  text-align: center;
  color: #353535;
  font-size: 50px;
  font-family: "Cormorant Garamond", serif;
}

p {
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  text-align: center;
  font-size: 18px;
  color: #676767;
}
.frame {
  width: 90%;
  margin: 40px auto;
  text-align: center;
}
button {
  margin: 20px;
}
.custom-btn {
  width: 130px;
  height: 40px;
  text-color:white;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}

/* 3 */
.btn-3 {
  background: rgb(0,172,238);
background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
  border: none;
  
}
.btn-3 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-3:before,
.btn-3:after {
  position: absolute;
  content: "";
  right: 0;
  top: 0;
   background: rgba(2,126,251,1);
  transition: all 0.3s ease;
}
.btn-3:before {
  height: 0%;
  width: 2px;
}
.btn-3:after {
  width: 0%;
  height: 2px;
}
.btn-3:hover{
   background: transparent;
  box-shadow: none;
}
.btn-3:hover:before {
  height: 100%;
}
.btn-3:hover:after {
  width: 100%;
}
.btn-3 span:hover{
   color: rgba(2,126,251,1);
}
.btn-3 span:before,
.btn-3 span:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
   background: rgba(2,126,251,1);
  transition: all 0.3s ease;
}
.btn-3 span:before {
  width: 2px;
  height: 0%;
}
.btn-3 span:after {
  width: 0%;
  height: 2px;
}
.btn-3 span:hover:before {
  height: 100%;
}
.btn-3 span:hover:after {
  width: 100%;
}



/* 4 */
.btn-4 {
  background: yellow;
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
  border: none;
  
}
.btn-4 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-4:before,
.btn-4:after {
  position: absolute;
  content: "";
  right: 0;
  top: 0;
   background: yellow;
  transition: all 0.3s ease;
}
.btn-4:before {
  height: 0%;
  width: 2px;
}
.btn-4:after {
  width: 0%;
  height: 2px;
}
.btn-4:hover{
   background: transparent;
  box-shadow: none;
}
.btn-4:hover:before {
  height: 100%;
}
.btn-4:hover:after {
  width: 100%;
}
.btn-4 span:hover{
   color: yellow;
}
.btn-4 span:before,
.btn-4 span:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
   background: yellow;
  transition: all 0.3s ease;
}
.btn-4 span:before {
  width: 2px;
  height: 0%;
}
.btn-4 span:after {
  width: 0%;
  height: 2px;
}
.btn-4 span:hover:before {
  height: 100%;
}
.btn-4 span:hover:after {
  width: 100%;
}

.custom-dropdown select {
  border: 2px solid #000;
  color: #000;
  font-size: inherit;
  padding: .5em;
  padding-right: 2.5em;	
 
  margin: 0;
  border-radius: 3px;
  text-indent: 0.01px;
  text-overflow: '';
  -webkit-appearance: button; / hide default arrow in chrome OSX /
}



a{
    text-decoration:none;
}


</style>
         <!-- =============== Left side End ================-->
         <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>State Information</h1>
                
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">

                                   
                                      
                                    <div class="col-md-3 mt-3 inputBox form-group mb-3">
                                          <input type="text" id="name" name="name" required onkeyup="this.setAttribute('value', this.value);" value="" />
                                            <label>State name</label>
                                        </div>
                                        <div class="col-md-3 mt-3 inputBox form-group mb-3">
                                          <input type="text" id="name" name="name" required onkeyup="this.setAttribute('value', this.value);" value="" />
                                            <label>State Short name</label>
                                        </div>
                                        
                                        <div class="col-md-3 mt-3 inputBox form-group mb-3">
                                          <input type="text" id="name" name="name" required onkeyup="this.setAttribute('value', this.value);" value="" />
                                            <label>State Code</label>
                                            </div> 
                                        
                               
                                        <div class="custom-dropdown mt-4 form-group mb-4 big col-lg-3 ">
                                                        <select>  
                                                        <option>Select Country </option>  
                                                            <option>India</option>
                                                            <option>US</option>  
                                                            <option>Australia</option>
                                                            
                                                        </select>
                                        </div>
                                     
                                        
                                        
                                        
                                     
                                        <div class="col-md-12 text-right">
                                        <button class="custom-btn btn-3 "><span>Submit</span></button>
                                        <button class="custom-btn btn-4"><span>Edit</span></button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/State_Create.js"></script>