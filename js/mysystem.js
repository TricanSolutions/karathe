function timelyRedirect(url, delay) {
    setTimeout(function () {
        window.location = url;
    }, delay);
}

function logout() {
    alertify.confirm("Are you sure want to log out the system", function (e) {
        if (e) {
            $.post("loggcontrol.php", {logout: 'logout'}, function (e) {
                if (e == 1) {
                    timelyRedirect("index.php",250);
//                    timelyRedirect("index.php", 250);
                }
            });
        }
    });
}

function pageProtect() {
    $.post("loggcontrol.php", {pageProtect: 'data'}, function (e) {
//       if (e.ok > 0) {
//           
//        } else {
//             
//            timelyRedirect("index.php", 10000);
//        }
        
//         
        if (e == 1) {

            timelyRedirect("index.php", 0);
        }
    });
}
//--------log frm js---------------
    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

 


