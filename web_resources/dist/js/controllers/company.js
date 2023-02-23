//alert("hi");
var a = false;
$(document).ready(function () {
  $("#btn_save").click(function () {
    if (a == false) {
      saveperform();
    }
  });
});

function saveperform() {
  var com_id = $("#com_id").val();
  var company_name = $("#company_name").val();
  var company_website = $("#company_website").val();
  var company_email = $("#company_email").val();
  var company_contact = $("#company_contact").val();
  var company_pname = $("#company_pname").val();
  var contact_no = $("#contact_no").val();
  var company_type = $("#company_type").val();
  var branch_location = $("#branch_location").val();
  var company_address = $("#company_address").val();
  var company_pincode = $("#company_pincode").val();
  var about_us = $("#about_us").val();
  var company_logo = $("#company_logo").val();

  if (com_id == "" || company_name == "") {
    //alert("requird");
    swal({
      title: "",
      text: "Please Enter Required Fields",
      type: "error",
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
  else {
    a = true;
    //alert('insert');
    $.ajax({
      url: base_path + "Company/insertcompanyDetails",
      type: "POST",
      data: $("#Form").serialize(),
      beforeSend: function () {
        $("#btn_save").prop("disabled", true);
        $("#btn_save").html("Loading");
      },
      success: function (data) {
        $("#btn_save").prop("disabled", false);
        $("#btn_save").html("Save");
        $("#Form").trigger("reset");
        

        // alert("hi");
        swal({
          title: "",
          text: "Data Submitted Successfully",
          type: "success",
          showCancelButton: false,
          showConfirmButton: false,
          width: "1000px",
          timer: 1000,
        });

      
        $("#Form").parsley().destroy();
        $("#std_qualification").val('').trigger('change');
        $("#Form").parsley();
        a = false;
        window.location.href = base_path+"create";
      },
    });
  }
}
// }


