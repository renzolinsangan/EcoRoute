// for display
$('#evaluatedListBtn').on('click', function(e) {
    $('#evaluatedListBtn').addClass('active');
    $('#evaluatedListContainer').removeClass('d-none');
    $('#applicationListContainer').addClass('d-none')
    $('#applicationListBtn').removeClass('active');
});

$('#applicationListBtn').on('click', function(e) {
    $('#applicationListBtn').addClass('active');
    $('#applicationListContainer').removeClass('d-none');
    $('#evaluatedListContainer').addClass('d-none');
    $('#evaluatedListBtn').removeClass('active');
});

// FOR STAR RATING
let selectedRating = 0;

// Generate stars
for (let i = 1; i <= 5; i++) {
$('#starRating').append(
    `<i class="bi bi-star fs-4 text-secondary" data-value="${i}"></i>`
);
}

// Event handlers
$('#starRating').on('mouseover', 'i', function () {
const rating = $(this).data('value');
highlightStars(rating);
});

$('#starRating').on('mouseout', function () {
highlightStars(selectedRating);
});

$('#starRating').on('click', 'i', function () {
selectedRating = $(this).data('value');
highlightStars(selectedRating);
console.log(`Rated: ${selectedRating} star(s)`);
});

function highlightStars(rating) {
$('#starRating i').each(function (index) {
    const star = $(this);
    if (index < rating) {
    star
        .removeClass('bi-star text-secondary')
        .addClass('bi-star-fill text-warning');
    } else {
    star
        .removeClass('bi-star-fill text-warning')
        .addClass('bi-star text-secondary');
    }
});
}

// $(document).ready(function() {
//     $('#sustainabilityTable').DataTable({
//         processing: true,
//         serverSide: true,
//         scrollX: true,
//         ajax: {
//             url: "../../Includes/php/touristspots/touristspotsAjax.php",
//             type: "POST",
//             dataType: "json",
//             data: function(d) {
//                 // attach custom sqlData if you need
//                 d.sqlData = sqlData;
//             }
//         },
//         columnDefs: [
//             { targets: 0, title: "#", data: 0, orderable: false }, // counter column
//             { targets: 1, title: "Last Name", data: 1 },
//             { targets: 2, title: "First Name", data: 2 },
//             { targets: 3, title: "Email", data: 3 },
//             { targets: 4, title: "Username", data: 4 },
//             { targets: 5, title: "Status", data: 5 }
//         ],
//         order: [[1, "asc"]], // default sort (Last Name)
//         error: function() {
//             $(".yasTable-error").html("");
//             $("#yasTable_processing").css("display", "none");
//             $("#yasTable").append(
//                 '<tbody class="employee-grid-error"><tr><th colspan="6">No data found in the server</th></tr></tbody>'
//             );
//         }
//     });
// });
