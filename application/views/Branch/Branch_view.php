
    <link rel='stylesheet' type='text/css' media='screen' href="<?=base_url() ?>Assets\css\bootstrap.min.css">
    <link href="<?=base_url();?>Assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

 
.inputBox {
    position: relative;
   
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
  
  
  .big {
      font-size: 1rem;
      border-radius: 7px;
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
  
  
  .custom-btn {
    width: 130px;
    height: 40px;
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
  
  .btn-3 {
    background: #B8860B;
  background: #B8860B;
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
     background: #7c8cd0;
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
  
  .btn-8 {
    background-color: red;
  background-image: linear-gradient(315deg, yellow 0%, red 74%);
    line-height: 42px;
    padding: 0;
    border: none;
  }
  .btn-8 span {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
  }
  .btn-8:before,
  .btn-8:after {
    position: absolute;
    content: "";
    right: 0;
    bottom: 0;
    background: #c797eb;
    /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
                -4px -4px 6px 0 rgba(116, 125, 136, .2), 
      inset -4px -4px 6px 0 rgba(255,255,255,.5),
      inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
    transition: all 0.3s ease;
  }
  .btn-8:before{
     height: 0%;
     width: 2px;
  }
  .btn-8:after {
    width: 0%;
    height: 2px;
  }
  .btn-8:hover:before {
    height: 100%;
  }
  .btn-8:hover:after {
    width: 100%;
  }
  .btn-8:hover{
    background: #FFC0CB;
  }
  .btn-8 span:hover{
    color: red;
  }
  .btn-8 span:before,
  .btn-8 span:after {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    background: red;
    /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
                -4px -4px 6px 0 rgba(116, 125, 136, .2), 
      inset -4px -4px 6px 0 rgba(255,255,255,.5),
      inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
    transition: all 0.3s ease;
  }
  .btn-8 span:before {
    width: 2px;
    height: 0%;
  }
  .btn-8 span:after {
    height: 2px;
    width: 0%;
  }
  .btn-8 span:hover:before {
    height: 100%;
  }
  .btn-8 span:hover:after {
    width: 100%;
  }

    </style>
    
    
    
    
    <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Branch</h1>
                   
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                    
                                    
                                    <div class="col-md-4 mt-4 inputBox form-group mb-3">
                                          <input type="text" id="name" name="name" required onkeyup="this.setAttribute('value', this.value);" value="" />
                                            <label>Branch name</label>
                                        </div>

                                        <!--div class="col-md-3 dropbox form-group mb-3">
                                            
                                            <label for="picker1">Department</label>
                                            <select class="form-control box" name="subject">
                                                <option value="1">English</option>
                                                <option value="2">Marathi</option>
                                                <option value="3">Hindi</option>
                                            </select>
                                        </div-->
                        
                                        <span class="custom-dropdown mt-4 form-group mb-3 big col-lg-3 ">
                                                        <select>  
                                                        <option>Select Department </option>  
                                                            <option>English</option>
                                                            <option>Marathi</option>  
                                                            <option>Hindi</option>
                                                            
                                                        </select>
                                                    </span>
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary custom-btn btn-3" type="button" name="btn_save" id="btn_save">Submit</button>
                                            <button class="btn btn-warning custom-btn btn-8" type="button" name="cancle" id="cancle">Edit</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/branch_create.js"></script>
                   
            
         
               
            