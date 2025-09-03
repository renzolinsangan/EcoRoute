$(document).ready(function() {
    $('#touristspotsTable').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,
        ajax: {
            url: "../../Includes/php/touristspots/touristspotsAjax.php",
            type: "POST",
            dataType: "json",
            data: function(d) {
                // attach custom sqlData if you need
                d.sqlData = sqlData;
            }
        },
        columnDefs: [
            { targets: 0, title: "#", data: 0, orderable: false }, // counter column
            { targets: 1, title: "Last Name", data: 1 },
            { targets: 2, title: "First Name", data: 2 },
            { targets: 3, title: "Email", data: 3 },
            { targets: 4, title: "Username", data: 4 },
            { targets: 5, title: "Status", data: 5 }
        ],
        order: [[1, "asc"]], // default sort (Last Name)
        error: function() {
            $(".yasTable-error").html("");
            $("#yasTable_processing").css("display", "none");
            $("#yasTable").append(
                '<tbody class="employee-grid-error"><tr><th colspan="6">No data found in the server</th></tr></tbody>'
            );
        }
    });
});
