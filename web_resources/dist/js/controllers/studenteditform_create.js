$(document).ready(function() {
  $("#btn_save").click(function() {
    var std_id = $("input[name='std_id']").val();
    var std_fullname = $("input[name='std_fullname']").val();
    var std_email = $("input[name='std_email']").val();
    var std_appliedfor = $("select[name='std_appliedfor']").val();
    var std_qualification = $("select[name='std_qualification']").val();
    var std_department = $("select[name='std_department']").val();
    var std_branch = $("#std_branch").val();
    var std_term = $("input[name='std_term']").val();

    if (std_id == "") {
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
        url: base_path + "Studentregistration/update",
        data: {
          std_id: std_id,
          std_fullname: std_fullname,
          std_email: std_email,
          std_appliedfor: std_appliedfor,
          std_qualification: std_qualification,
          std_department: std_department,
          std_branch: std_branch,
          std_term: std_term
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
