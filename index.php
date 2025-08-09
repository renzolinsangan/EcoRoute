<?php
include('Modules/phpInclude.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRoute</title>
    <link rel="stylesheet" href="Includes/css/style.css">
    <?php include_once("Modules/header.php"); ?>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="loginValidationForm"></form>
    <div class="container-fluid">
        <div class="login-form-row row">
            <div class="col-md-1"></div>
            <div class="login-form-col-left col col-md-5 col-sm-12 p-md-5 d-flex flex-column justify-content-center align-items-center">
                <div class="login-form-col-left-text-container-top text-center mb-5">
                    <p class="fs-1">Welcome to <span class="fw-bold">EcoRoute!</span></p>
                    <p class="fs-4">Where <span class="fw-bold">HOSPITALITY</span></p>
                    <p class="fs-4">meets <span class="fw-bold">SUSTAINABILITY</span></p>
                </div>
                <div class="login-form-col-left-text-container-bottom text-center mb-5">
                    <p>Join us as a Tourist Spot or Establishment — promote your</p>
                    <p>place, connect with eco-conscious travelers, and be part of</p>
                    <p>a greener tourism future!</p>
                </div>
                <div class="login-form-col-left-button-container text-center">
                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button class="signup-button btn btn-primary" type="button" id="signUpButton">Sign Up Now!</button>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="login-form-col-right col col-md-4 col-sm-12">
                <div class="login-form-card">
                    <div class="login-form-card-body card-body pb-2">
                        <div class="login-icon-container text-center mb-0">
                            <img class="login-icon" src="Includes/Images/ecoroute-login-icon.png" alt="ecoroute-icon">
                        </div>
                        <div class="login-input-container pt-2 pb-2 ps-5 pe-5 mt-0">
                            <div class="login-input-username">
                                <label for="userName">Email or Username</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-person-circle fs-5"></i></span>
                                    <input type="text" class="form-control p-2" name="userName" id="userName" placeholder="Input Username" form="loginValidationForm">
                                </div>
                            </div>
                            <div class="login-input-password">
                                <label for="userPassword">Password</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-lock-fill fs-5"></i></span>
                                    <input type="password" class="form-control p-2" name="userPassword" id="userPassword" placeholder="Input Password" form="loginValidationForm">
                                    <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                                        <i class="bi bi-eye-slash" id="eyeIcon"></i>
                                    </span>
                                </div>
                            </div>
                           <div class="login-input-role">
                                <label for="userRole">Role</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person-badge-fill fs-5"></i>
                                    </span>
                                    <select class="form-select p-2" name="userRole" id="userRole" form="loginValidationForm">
                                        <option disabled selected value>Select User Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Tourist Spot / Establishment</option>
                                    </select>
                                </div>
                                <p class="forgot-password-text text-end">Forgot Password</p>
                            </div>
                            <div class="login-input-bottom pt-2 pb-4">
                                <div class="d-grid gap-2 col-12">
                                    <button class="login-button btn" type="submit" form="loginValidationForm">Log In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div id='modal-izi-signUpForm'><span class='izimodal-content-signUpForm'></span></div>
    <!-- JAVASCRIPT -->
    <?php include_once("Modules/footer.php"); ?>
    <script type="text/javascript" src="Includes/js/index-js.js"></script>
</body>
</html>