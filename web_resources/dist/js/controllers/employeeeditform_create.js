$(document).ready(function() {
  $("#btn_save").click(function() {
    var id = $("input[name='id']").val();
    var fullname = $("input[name='fullname']").val();
    var email = $("input[name='email']").val();
    var phone = $("input[name='phone']").val();
    var pincode = $("input[name='pincode']").val();

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
        url: base_path + "employee/update",
        data: {
          id: id,
          fullname: fullname,
          email: email,
          phone: phone,
          pincode: pincode,
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
