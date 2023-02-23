$(document).ready(function() {
  $("#btn_save").click(function() {
    var com_id = $("input[name='com_id']").val();
    var company_name = $("input[name='company_name']").val();
    var company_email = $("input[name='company_email']").val();
    var company_contact = $("input[name='company_contact']").val();
    var company_pname = $("input[name='company_pname']").val();


    if (com_id == "") {
      swal({
        title: "",
        text: "Please Enter Required Fields",
        type: "error",
      });
    }
    else {
      a = true;
      $.ajax({
        type: "POST",
        url: base_path + "Company/update",
        data: {
          com_id: com_id,
          company_name: company_name,
          company_email: company_email,
          company_contact: company_contact,
          company_pname: company_pname,
        },
        success: function(response) {
          if (response == 1) {
            Swal.fire({
              title: "Success!",
              text: "Data updated successfully!",
              icon: "success",
              confirmButtonText: "OK"
            });
          } else {
            Swal.fire({
              title: "Error!",
              text: "Data failed to update!",
              icon: "error",
              confirmButtonText: "OK"
            });
          }
        }
      });
    }
  });
});
