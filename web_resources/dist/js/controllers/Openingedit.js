$(document).ready(function() {
  $("#btn_save").click(function() {
    var id = $("input[name='id']").val();
    var label_name = $("input[name='label_name']").val();
    var std_email = $("input[name='std_email']").val();
    var std_applylink = $("input[name='std_applylink']").val();

    if (id == "") {
      Swal.fire({
        title: "",
        text: "Please Enter Required Fields",
        icon: "error",
      });
    }
    else {
      a = true;
      $.ajax({
        type: "POST",
        url: base_path + "Opening/update",
        data: {
          id: id,
          label_name: label_name,
          std_email: std_email,
          std_applylink: std_applylink,
        },
        success: function(response) {
          if (response == 1) {
            Swal.fire({
              title: "Success!",
              text: "Data updated successfully!",
              icon: "success",
            });
          } else {
            Swal.fire({
              title: "Error!",
              text: "Data failed to update!",
              icon: "error",
            });
          }
        }
      });
    }
  });
});
