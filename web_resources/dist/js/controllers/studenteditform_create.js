$(document).ready(function() {
  $("#btn_save").click(function() {
    var std_id = $("#std_id").val();
    var std_fullname = $("#std_fullname").val();
    var std_email = $("#std_email").val();
    var std_appliedfor = $("#std_appliedfor").val();
    var std_qualification = $("#std_qualification").val();
    var std_department = $("#std_department").val();
    var std_branch = $("#std_branch").val();
    var std_term = $("#std_term").val();

    $.ajax({
      type: "POST",
      url:base_path +"Studentregistration/edits",
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
        console.log(response);
        Swal.fire({
          title: "Success!",
          text: "Data updated successfully!",
          icon: "success",
          confirmButtonText: "OK"
        });
      }
    });
    
  });
});
