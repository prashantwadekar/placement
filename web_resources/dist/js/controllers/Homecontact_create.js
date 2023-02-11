var a=false;
$(document).ready(function(){
$("#save").click(function(){
  if(a==false){
    
    saveperform1();
   }
  }); 
});


 function saveperform1() 
{ 
    var userNm=$('#userNm').val();
    var MobNo=$('#MobNo').val();
    var emailh=$('#emailh').val();
    var Requirments=$('#Requirments').val();
    var userId=$('#userId').val();


    if(userNm==""|| MobNo==""|| emailh==""|| Requirments=="") 
    {
        swal({
        title:"",
        text:"Please Enter Required Fields",
        type:"error",           
    });   
  }

    else
    {
    	if(userId>0)
    	{
      //       a=true;
    	
    		// $.ajax({
      //   url:base_path+"Country/updateCountry",
      //   type: "POST",
      //   data: $('#Form').serialize(),
      //    beforeSend: function(){
      //          $('#save').prop('disabled', true);
      //          $('#save').html('Loading');
      //     }, 
      //   success: function(data) {
      //      $('#save').prop('disabled', false);
      //      $('#save').html('<img src="'+base_path+'assets/images/save.png" width="21"> Save');
             
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
    	}
        else
    	{a=true;
    		
    		$.ajax({
        url:base_path+"Home/insertHomeContact",
        type: "POST",
        data: $('#Form').serialize(),
         beforeSend: function(){
               $('#save').prop('disabled', true);
               $('#save').html('Loading');
          }, 
        success: function(data) {

            $('#save').prop('disabled', false);
           $('#save').html('Save');
             $("#Form").trigger("reset");
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
 }
