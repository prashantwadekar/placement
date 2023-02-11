//emp_id	emp_name	emp_address	emp_primaryno	emp_secondarynumber	emp_email	
//emp_gender	emp_photo	emp_designation	emp_joiningdate	emp_dob	emp_adharcard	
//emp_pancard	is_default	is_on	is_active	created_date	created_by	modified_date	modified_by	deleted_date	deleted_by	delete_remark	last_changed	

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
    var emp_id=$('#emp_id').val();
    var emp_name=$('#emp_name').val();
    var emp_address=$('#emp_address').val();
    var emp_primaryno=$('#emp_primaryno').val();
    var emp_secondarynumber=$('#emp_secondarynumber').val();
    var emp_email=$('#emp_email').val();
    var emp_gender=$('#emp_gender').val();
    var emp_photo=$('#emp_photo').val();
    var emp_designation=$('#emp_designation').val();
    var emp_joiningdate=$('#emp_joiningdate').val();
    var emp_dob=$('#emp_dob').val();
    var emp_adharcard=$('#emp_adharcard').val();
    var emp_pancard=$('#emp_pancard').val();

    


    if(emp_id=="") 
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
        url:base_path+"Form/insertForm",
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
