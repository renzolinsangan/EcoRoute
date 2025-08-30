function showSweetAlert(title, text, icon, confirmValidation, time, barPaddingValidation) {
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showConfirmButton: confirmValidation,
        timer : time,
        scrollbarPadding: barPaddingValidation,
    });
}

$(document).ready(function() {
    // role checking
    $('#userName').on("input", function() {
        let userName = $(this).val();

        $.ajax({
            url : "Includes/php/roleChecking.php",
            type : "POST",
            dataType : "json",
            data : {
                userName : userName,
            },
            success : function(data) {
                console.log(data.userRole);
                if(data.status === 'success' && data.userRole == 0) {
                    $('#userRole').val('Travelers');
                } else if(data.status === 'success' & data.userRole == 1) {
                    $('#userRole').val('Tourst Establishment');
                }
            },
        });
    });

    $('#togglePassword').click(function () {
        const passwordInput = $('#userPassword');
        const icon = $('#eyeIcon');

        const isPassword = passwordInput.attr('type') === 'password';
        passwordInput.attr('type', isPassword ? 'text' : 'password');
        icon.toggleClass('bi-eye bi-eye-slash');
    });

    $('#loginValidationForm').submit(function(event) {
        event.preventDefault();
        
        var userName = $('#userName').val().trim();
        var userPassword = $('#userPassword').val().trim();

        $.ajax({
            url : 'loginValidation.php',
            type : 'POST',
            data : {
                userName : userName,
                userPassword : userPassword,
            },
            success : function(data) {
                console.log(data);
                switch(data) {
                    case 'loginsuccess':
                        window.location.href = "dashboard.php";
                        break;
                    case 'usernameempty':
                        showSweetAlert("Username Required!", "Please enter your username.", "warning", false, 1500, false);
                        break;
                    case 'userpasswordempty':
                        showSweetAlert("Password Required!", "Please enter your password.", "warning", false, 1500, false);
                        break;
                    case 'invalidcredentials':
                        showSweetAlert("Invalid Credentials!", "Check your user credentials, Please try again.", "warning", false, 1500, false);
                        break;
                    default:
                        console.log("Unhandled response:", data);
                        break;
                }
            }
        })
    });

    // $('#signUpButton').click(function() {
    //     $('#modal-izi-signUpForm').iziModal({
    //         title                 : '<h5>Signup Now!</h5>',
    //         headerColor           : '#FF9616',
    //         fullScreen            : false,
    //         transitionIn          : 'comingIn',
    //         transitionOut         : 'comingOut',
    //         radius                : 0,
    //         top                   : 100,
    //         restoreDefaultContent : true,
    //         closeOnEscape         : true,
    //         closeButton           : true,
    //         overlayClose          : false,
    //         draggable             : false,
    //         onOpening : function(modal) 
    //         {
    //             modal.startLoading();
    //             $.ajax({
    //                 url  : 'signup.php', 
    //                 type : 'POST',
    //                 data : {
    //                 },
    //                 success : function(data) {
    //                     $(".izimodal-content-signUpForm").html(data);
    //                     modal.stopLoading();
    //                 },
    //             });
    //         },
    //         onClosed: function(modal) {
    //             $("#modal-izi-signUpForm").iziModal("destroy");
    //         }
    //     });
    //     $("#modal-izi-signUpForm").iziModal("open");
    // });
})