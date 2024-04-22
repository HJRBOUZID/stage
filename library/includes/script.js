document.addEventListener("DOMContentLoaded", function() {
    // Select the send button
    var sendButton = document.getElementById("sendButton");

    // Add click event listener to the send button
    sendButton.addEventListener("click", function() {
        // Log a message in the console
        console.log("Thank you for your email! We have received it and will respond as soon as possible.");
    });
});
document.addEventListener("DOMContentLoaded", function() {
    // Select the password input field
    var passwordInput = document.getElementById("password");
    // Select the font-awesome eye icon
    var togglePassword = document.getElementById("togglePassword");

    // Add click event listener to toggle password visibility
    togglePassword.addEventListener("click", function() {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
});
