submitButton.addEventListener("click", function () {
  // Trigger the form submission when the button is clicked
  //alert("Hello! I am an alert box!!");
  form.submit();
});

// Add a submit event listener to the form
form.addEventListener("submit", function (event) {
  // Initialize a variable to track validation errors
  let hasError = false;

  // Helper function to display error messages
  function displayError(input, message) {
    const errorElement = document.createElement("span");
    errorElement.className = "error-message";
    errorElement.textContent = message;
    input.parentNode.appendChild(errorElement);
    hasError = true;
  }

  // Helper function to remove error messages
  function clearErrors() {
    const errorMessages = document.querySelectorAll(".error-message");
    errorMessages.forEach((errorMessage) => {
      errorMessage.remove();
    });
  }

  // Validation for the Name field (required)
  if (nameInput.value.trim() === "") {
    displayError(nameInput, "Name is required.");
  }

  // Validation for the Surname field (required)
  if (surnameInput.value.trim() === "") {
    displayError(surnameInput, "Surname is required.");
  }

  // Validation for the Phone field (required and must be a valid phone number)
  const phonePattern = /^\d{10}$/; // Change this pattern to match your phone number format
  if (phoneInput.value.trim() === "") {
    displayError(phoneInput, "Phone is required.");
  } else if (!phonePattern.test(phoneInput.value.trim())) {
    displayError(phoneInput, "Invalid phone number format.");
  }

  // Validation for the Email field (required and must be a valid email address)
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (emailInput.value.trim() === "") {
    displayError(emailInput, "Email is required.");
  } else if (!emailPattern.test(emailInput.value.trim())) {
    displayError(emailInput, "Invalid email address.");
  }

  // Validation for the Message field (required)
  if (messageInput.value.trim() === "") {
    displayError(messageInput, "Message is required.");
  }

  // Prevent form submission if there are validation errors
  if (hasError) {
    event.preventDefault();
  }
});
