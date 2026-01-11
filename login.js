function login() {
    // Get the input values
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const email = document.getElementById('email').value;

    // For the sake of this example, we'll simply check if the fields are filled
    if (username && password && email) {
        // In a real application, you would send these details to the server for authentication
        // and handle the response accordingly.

        // Redirect to the dashboard page
        window.location.href = 'dashboard(user).html';
    } else {
        alert('Please fill in all fields');
    }
}
