
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Dashboard</h1>
                
                </div>
                <div class="separator-breadcrumb border-top"></div>

                <div class="row">
                    <!-- ICON BG-->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><img src="Assets/images/registration.png" height="60px" width="60px" alt="">
                                <div class="content"> 
                                    <p class="text-muted mt-2 mb-0">Student Registration</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">205+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><img src="Assets/images/businessman.png" height="60px" width="60px" alt="">
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Placed Student</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">4021+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><img src="Assets/images/vacancy.png" height="60px" width="60px" alt="">
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Opening</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">80+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                            <div class="card-body text-center"><img src="Assets/images/buildings.png" height="60px" width="60px" alt="">
                                <div class="content">
                                    <p class="text-muted mt-2 mb-0">Companies</p>
                                    <p class="text-primary text-24 line-height-1 mb-2">1200+</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">This Year Student Placement</div>
                                <div id="echartBar" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card-title">Pie chart</div>
                                <div id="echartPie" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
               
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/StudentCreate.js"></script>
                   
                       
               
            