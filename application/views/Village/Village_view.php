
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Village Page</h1>
                   
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                      <div class="col-lg-2 form-group mb-3">
                                        <label for="">Select Country</label>
                                        <select name="country" id="country" class="form-control">
                                         <option selected disabled >Select Country</option>
                                        <option data-countryCode="DZ">0.Algeria</option>
                                      <option data-countryCode="AD">1.Andorra</option>
                                        <option data-countryCode="AO">2.Angola </option>
                                        <option data-countryCode="AI">3.Anguilla</option>
                                        <option data-countryCode="AG" >4.Antigua &amp; Barbuda</option>
                                        <option data-countryCode="AR">5.Argentina</option>
                                        <option data-countryCode="AM">6.Armenia</option>
                                        </select>
                                      </div>
                                    
                                      <div class="col-lg-2 form-group mb-3">
                                        <label for="">State</label>
                                        <select name="state" id="state" class="form-control">
                                        <option selected disabled >Select Country</option>
                                        <option data-stateCode="DZ" >0.Andhra Pradesh</option>
                                        <option data-stateCode="AD" >1.Arunachal Pradesh</option>
                                        <option data-stateCode="AO">2.Assam</option>
                                        <option data-stateCode="AI">3.Bihar</option>
                                        <option data-stateCode="AG">4.Chhattisgarh</option>
                                        <option data-stateCode="AR">5.Goa</option>
                                        <option data-stateCode="AM">6.Gujarat</option>
                                        </optgroup>
                                        </select>
                                      </div>

                                      <div class="col-lg-2 form-group mb-3">
                                        <label for="">District</label>
                                        <select name="district" id="district" class="form-control">
                                             <option selected disabled >Select District</option>
                                        <option data-district="DZ">0.Satara</option>
                                        <option data-districtCode="AD">1.Solapur</option>
                                        <option data-districtCode="AO">2.Kolhapur</option>
                                        <option data-districtCode="AI">3.Pune</option>
                                        <option data-districtCode="AG">4.Bhandara</option>
                                        <option data-districtCode="AR">5.Dhule</option>
                                        <option data-districtCode="AM">6.Thane</option>
                                        </optgroup>
                                        </select>
                                      </div>
                                      
                                      <div class="col-lg-2 form-group mb-3">
                                        <label for="">Village</label>
                                        <select name="village" id="village" class="form-control"> 
                                            <option selected disabled >Select Village</option>
                                        <option data-villageCode="DZ" >0.Ainwadi</option>
                                        <option data-villageCode="AD">1.Girgaon</option>
                                        <option data-villageCode="AO">2.Karungale</option>
                                        <option data-villageCode="AI">3.Gajapur</option>
                                        <option data-villageCode="AG">4.Japhale</option>
                                        <option data-villageCode="AR">5.Marali</option>
                                        <option data-villageCode="AM">6.Yelur</option>
                                        </optgroup>
                                        </select>
                                      </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>
                                        </div>
                                    </div>
                                </form>
                               
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/village_create.js"></script>
<script>
    $('#Form').bind('keydown', function(event) {
    if (event.ctrlKey || event.metaKey) {
    switch (String.fromCharCode(event.which).toLowerCase()) {
    case 's':
    event.preventDefault();
     alert('ctrl-s');
    saveperform();
    break;

    }
    $(function(){
    $("#country").focus();
    });

    }
    });
</script>
                   
                       
               
            