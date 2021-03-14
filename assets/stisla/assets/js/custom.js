  function showPassword1() {
	var x = document.getElementById("password1");
	if (x.type === "password") {
		x.type = "text";
		$('#icon1').removeClass('fa-eye-slash');
		$('#icon1').addClass('fa-eye');
	} else {
		x.type = "password";
		$('#icon1').removeClass('fa-eye');
		$('#icon1').addClass('fa-eye-slash');
	}
}

  function showPassword2() {
	var x = document.getElementById("password2");
	if (x.type === "password") {
		x.type = "text";
		$('#icon2').removeClass('fa-eye-slash');
		$('#icon2').addClass('fa-eye');
	} else {
		x.type = "password";
		$('#icon2').removeClass('fa-eye');
		$('#icon2').addClass('fa-eye-slash');
	}
}

"use strict";
