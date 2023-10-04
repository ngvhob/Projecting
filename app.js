$(document).ready(function () {
  $("#loginForm").submit(function (e) {
    e.preventDefault(); // Prevent the form from submitting normally
    var emailOrUsername = $("#emailOrUsername").val();
    // var password = $("#password").val();
    // password: password,
    $.ajax({
      type: "POST",
      url: "request.php",
      data: {
        emailOrUsername: emailOrUsername,
      },
      success: function (response) {
        console.log(response); // You can do something with the response from the server here
      },
    });
  });
});
