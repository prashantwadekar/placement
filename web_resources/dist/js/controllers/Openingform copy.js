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
    var id = $("#id").val();
    var label_name = $("#label_name").val();
    var companyname = $("#companyname").val();
    var std_dob = $("#std_dob").val();
    var std_dob1 = $("#std_dob1").val();
    var std_dob2 = $("#std_dob2").val();
    var std_type = $("#std_type").val();
    var std_keyword = $("#std_keyword").val();
    var std_department = $("#std_department").val();
    var std_branch = $("#std_branch").val();
    var std_mobileno = $("#std_mobileno").val();
    var std_email = $("#std_email").val();
    var std_applylink = $("#std_applylink").val();
    var std_class = $("#std_class").val();
    var std_tenper = $("#std_tenper").val();
    var std_twper = $("#std_twper").val();
    var std_degree = $("#std_degree").val();
    var std_degreeper = $("#std_degreeper").val();
    var std_master = $("#std_master").val();
    var std_masterper = $("#std_masterper").val();
    var std_description = $("#std_description").val();
    var std_responsibility = $("#std_responsibility").val();
    var std_rules = $("#std_rules").val();

  if (id == "" || label_name == "") {
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
      url: base_path + "Opening/insertOpening",
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
        a = false;
        window.location.href = base_path+"create";
      },
    });
  }
}
// }


