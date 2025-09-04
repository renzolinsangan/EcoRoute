$('#arrowReturnToPage').on('click', function(e) {
    window.location.href = "index";
})

$(document).ready(function () {
    // Select the left and right cards
    const $leftCard  = $('.assessment-title-card-col-left .card');
    const $rightCard = $('.asessment-title-card-col-right .card');

    // Get height of the left card
    const leftHeight = $leftCard.outerHeight();

    // Apply it to the right card
    $rightCard.height(leftHeight);
});

$('#ratingGuide').click(function() {
    $('#modal-izi-ratingGuide').iziModal({
        title                 : '<h3>Rating Guide</h3>',
        headerColor           : '#011901',
        fullScreen            : false,
        transitionIn          : 'comingIn',
        transitionOut         : 'comingOut',
        radius                : 0,
        top                   : 40,
        restoreDefaultContent : true,
        closeOnEscape         : true,
        closeButton           : true,
        overlayClose          : false,
        draggable             : false,
        onOpening : function(modal) 
        {
            modal.startLoading();
            $.ajax({
                url  : 'modals/ratingGuide', 
                type : 'POST',
                data : {
                },
                success : function(data) {
                    $(".izimodal-content-ratingGuide").html(data);
                    modal.stopLoading();
                },
            });
        },
        onClosed: function(modal) {
            $("#modal-izi-ratingGuide").iziModal("destroy");
        }
    });
    $("#modal-izi-ratingGuide").iziModal("open");
});

$('#environmentalManagement').click(function() {
    $('#modal-izi-environmentalManagement').iziModal({
        title                 : '<h3>Environmental Management</h3>',
        headerColor           : '#011901',
        fullScreen            : false,
        transitionIn          : 'comingIn',
        transitionOut         : 'comingOut',
        radius                : 0,
        top                   : 10,
        restoreDefaultContent : true,
        closeOnEscape         : true,
        closeButton           : true,
        overlayClose          : false,
        draggable             : false,
        onOpening : function(modal) 
        {
            modal.startLoading();
            $.ajax({
                url  : 'modals/environmentalManagement', 
                type : 'POST',
                data : {
                },
                success : function(data) {
                    $(".izimodal-content-environmentalManagement").html(data);
                    modal.stopLoading();
                },
            });
        },
        onClosed: function(modal) {
            $("#modal-izi-environmentalManagement").iziModal("destroy");
        }
    });
    $("#modal-izi-environmentalManagement").iziModal("open");
});