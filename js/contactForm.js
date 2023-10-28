const form = document.getElementById("contactUs_Form");
const nameInput = document.getElementById("txtName");
const surnameInput = document.getElementById("txtSurname");
const phoneInput = document.getElementById("txtPhone");
const emailInput = document.getElementById("txtEmail");
const messageInput = document.getElementById("txtMessage");
const submitButton = document.getElementById("submitButton");

const nameLabel = document.getElementById("lblName");

nameInput.addEventListener("keypress", onlyAlphabetsKey);


nameInput.addEventListener("blur",function(){
    if(nameInput.value.trim()===""){
      nameInput.classList.add("error-message");
      nameLabel.classList.add("error-message");
      nameLabel.style.content = "This field is mandatory Gigele"; // Add the message
    }
    else{
      nameInput.classList.remove("error-message");
      nameLabel.classList.remove("error-message");
      nameLabel.style.content = ""; // Remove the message
    }
});



function onlyAlphabetsKey(event) {
  // Get the pressed key code
  const keyCode = event.keyCode || event.which;

  // Allow alphabetic characters (A-Z and a-z)
  if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122)) {
    return true;
  } else {
    // Prevent the input of non-alphabetic characters
    event.preventDefault();
    return false;
  }
}