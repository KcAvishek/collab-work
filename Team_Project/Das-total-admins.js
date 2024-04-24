const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});


const loginButton = document.querySelector(".sidebar-footer");
loginButton.addEventListener("click", function() {
    const confirmed = confirm("Do you want to login?");
    if (confirmed) {
        // If the user confirms, you can proceed with the login process
        // For example, redirecting to the login page or showing a login form
        // Here you can add code to handle the login process
        window.location.href = 'user_website/index.php';

    } else {
        // If the user cancels, you can do nothing or handle it accordingly
        console.log("User cancelled login");
        // Here you can add code to handle the cancellation
    }
});



$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copy',
                text: 'Copy to Clipboard'
            },
            {
                extend: 'csv',
                text: 'Export to CSV'
            },
            {
                extend: 'excel',
                text: 'Export to Excel'
            },
            {
                extend: 'pdf',
                text: 'Export to PDF'
            },
            {
                extend: 'print',
                text: 'Print'
            }
        ]
    });
});

