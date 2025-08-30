<style>
/* Align title + text left */
.swal-title {
  text-align: left !important;
}
.swal-text {
  text-align: left !important;
}

/* Move confirm button to the right */
.swal2-actions {
  justify-content: flex-end !important;
}
</style>
<script src="<?php echo $serverPath; ?>Templates/js/jquery.min.js" charset="UTF-8"></script>
<script src="<?php echo $serverPath;?>Templates/js/iziModal.min.js" charset="UTF-8"></script>
<script src="<?php echo $serverPath; ?>Templates/js/sweetalert.js" charset="UTF-8"></script>
<script src="<?php echo $serverPath; ?>Templates/js/bootstrap.bundle.min.js" charset="UTF-8"></script>
<script src="<?php echo $serverPath; ?>Templates/js/dataTables.min.js" charset="UTF-8"></script>
<script>
$(document).ready(function() {
    $('#logoutButton').click(function() {
        Swal.fire({
            title : "Confirm Logout",
            text : "Are you sure you want to logout?",
            icon : "",
            showCloseButton : true,
            showCancelButton : false,
            confirmButtonText : "Logout",
            cancelButtonText : "Cancel",
            confirmButtonColor : "#FF9616",
            allowOutsideClick : false,
            customClass: {
                title: 'swal-title',
                htmlContainer: 'swal-text'
            },
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?php echo $serverPath;?>logoutValidation.php";
            }
        });
    });
}); 
</script>