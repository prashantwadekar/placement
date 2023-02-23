var a=false;
$(document).ready(function(){
$("#btn_save").click(function(){
  if(a==false){
    
    saveperform();
   }
  }); 
});


 function saveperform() 
{ 
    var fullname=$('#fullname').val();
    var bld=$('#bld').val();
    var email=$('#email').val();
    var dob=$('#dob').val();
    var radio=$('#radio').val();
    var age=$('#age').val();
    var emptype=$('#emptype').val();
    var Cast=$('#Cast').val();
    var sCast=$('#sCast').val();
    var qualification=$('#qualification').val();
    var department=$('#department').val();
    var branch=$('#branch').val();
    var pincode=$('#pincode').val();
    var adharnumber=$('#adharnumber').val();
    var phone=$('#phone').val();
    var country=$('#country').val();
    var state=$('#state').val();
    var city=$('#city').val();
    var address=$('#address').val();


    


    if(fullname=="") 
    {
      // alert("requird");
        swal({
        title:"",
        text:"Please Enter Required Fields",
        type:"error",           
    });   
  }

    // else
    // {
    // 	if(userId>0)
    	// {
      //       a=true;
    	
    		// $.ajax({
      //   url:base_path+"Country/updateCountry",
      //   type: "POST",
      //   data: $('#Form').serialize(),
      //    beforeSend: function(){
      //          $('#btn_save').prop('disabled', true);
      //          $('#btn_save').html('Loading');
      //     }, 
      //   success: function(data) {
      //      $('#btn_save').prop('disabled', false);
      //      $('#btn_save').html('<img src="'+base_path+'assets/images/save.png" width="21"> Save');
             
      //       swal({
      //       title:"",
      //       text:"Data Submitted Successfully",
      //       type:"success",
      //       showCancelButton: true, 
      //       showConfirmButton: false,
      //       timer:10000
      //   }); a=false;
      //       window.location.href = base_path+"Country";
      //     }
      // });
    	// }
        else
    	{a=true;
    		//alert('insert');
    		$.ajax({
        url:base_path+"Employee/insertEmployee",
        type: "POST",
        data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {

            $('#btn_save').prop('disabled', false);
           $('#btn_save').html('Save');
             $("#Form").trigger("reset");

             // alert("hi");
          swal({
            title:"",
            text:"Data Submitted Successfully",
            type:"success",
            showCancelButton: false, 
            showConfirmButton: false,
             width: '1000px',
            timer:1000
        });
           $('#Form').parsley().destroy();
           $('#Form').parsley();
           a=false;

                }
      });
    	}
      }
 // }
