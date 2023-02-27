$(document).ready(function() {
  $("#btn_save").click(function() {
    var id = $("input[name='id']").val();
    var coursename = $("input[name='coursename']").val();
    var duration = $("input[name='duration']").val();

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
        url: base_path + "Website/update",
        data: {
          id: id,
          coursename: coursename,
          duration: duration,
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
