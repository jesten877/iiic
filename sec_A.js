document.addEventListener('DOMContentLoaded', function () {
  const pdfFileInput = document.getElementById('file');
  const uploadStatus = document.getElementById('uploadStatus');

  pdfFileInput.addEventListener('change', function () {
    const selectedFile = pdfFileInput.files[0];

    if (selectedFile) {
      if (selectedFile.type === 'application/pdf' && selectedFile.size <= 5242880) { // 5MB in bytes
        uploadStatus.innerText = 'File successfully uploaded: ' + selectedFile.name;
        uploadStatus.style.color = 'green';
      } else {
        uploadStatus.innerText = 'Error: Please select a PDF file under 5MB.';
        uploadStatus.style.color = 'red';
        pdfFileInput.value = ''; // Clear the file input
      }
    }
  });
});

//cin validation
const cin = document.getElementById("cin").addEventListener("input", function () {
const cinValidationMessage = document.getElementById("cinValidationMessage");
var cinValue = this.value.toUpperCase();
cinValue = cinValue.replace(/[^A-Z0-9]/g, '');
// Check if the CIN is a valid format (e.g., U74140DL2014PTC272628)
const cinRegex = /^[A-Z][0-9]{5}[A-Z]{2}[0-9]{4}[A-Z]{3}[0-9]{6}$/;
const isValidLength = cinValue.length === 21;
this.value = cinValue;
if (cinRegex.test(cinValue) && isValidLength) {
  cinValidationMessage.textContent = "Valid CIN";
  cinValidationMessage.style.color = "green";
} else {
  cinValidationMessage.textContent = "Invalid CIN format. Please enter a valid 21-character CIN(U74140DL2014PTC272628)";
  cinValidationMessage.style.color = "red";
}
});

//name validation
const nameInput = document.getElementById("name");
const nameError = document.getElementById("nameValidationMessage");
nameInput.addEventListener("input", function() {
this.value = this.value.replace(/[^A-Za-z\s.]/g, ''); // Remove characters that are NOT alphabets, spaces, or dots
var name = nameInput.value;
var regex = /^[A-Za-z\s.]+$/;

if (!regex.test(name)) {
  nameError.textContent = "Only alphabets, dots, and spaces are allowed.";
  nameInput.setCustomValidity("Invalid input");
} else {
  nameError.textContent = "";
  nameInput.setCustomValidity("");
}
});

//email validation
const emailInput = document.getElementById("email");
const emailValidationMessage = document.getElementById("emailValidationMessage");
emailInput.addEventListener("input", function() {
  const email = emailInput.value;
  const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (emailRegex.test(email)) {
      emailValidationMessage.textContent = "Valid email!";
      emailValidationMessage.style.color = "green";
  } else {
      emailValidationMessage.textContent = "Invalid email ID";
      emailValidationMessage.style.color = "red";
  }
});


//telephone validation
const contactInput = document.getElementById("contact");
const telephoneValidation = document.getElementById("Telephone-validation");

contactInput.addEventListener("input", function() {
this.value = this.value.replace(/[^0-9]/g, '');
const contact = contactInput.value;
const regex = /^[0-9]+$/; 

if (!regex.test(contact) || contact.length !== 11) {
  telephoneValidation.textContent = "Please enter a valid 11-digit telephone number.";
  telephoneValidation.style.color = "red"; // Set the error message color to red
  contactInput.setCustomValidity("Invalid input");
} else {
  telephoneValidation.textContent = "";
  telephoneValidation.style.color = "green"; // Set the error message color to green when input is valid
  contactInput.setCustomValidity("");
}
});


//JS Code to check the size of the pdf
// Function to check the file size of the pdf before submitting the form
document.getElementById('incorporation_certificate').addEventListener('change', function () {
  const fileInput = this;
  const maxFileSizeInBytes = 5 * 1024 * 1024; // 5 MB
  const fileSizeMessage = document.getElementById('fileSizeMessage');
  let invalidFile = false;
  for (let i = 0; i < fileInput.files.length; i++) {
    const file = fileInput.files[i];
    if (file.size > maxFileSizeInBytes) {
      invalidFile = true;
      fileSizeMessage.textContent = 'File size exceeds the maximum allowed size of 5 MB.';
      fileInput.value = ''; // Clear the file input
      break;
    }
  }
  if (!invalidFile) {
    fileSizeMessage.textContent = ''; // Clear the message if the file is valid
  }
});

//POC fields validation
//const pocNameInput = document.getElementById("poc-name");
const pocNameInput = document.getElementById("poc-name");
const pocPhoneInput = document.getElementById("poc-phone");
const pocEmailInput = document.getElementById("poc-email");

//poc-name
const pocNameValidation = document.getElementById("poc-name-validation");

pocNameInput.addEventListener("input", function() {
  this.value = this.value.replace(/[^A-Za-z\s.]/g, '');
  const pocName = pocNameInput.value;
  const regex = /^[A-Za-z\s.]+$/; // Allow uppercase, lowercase, space, and dot
  if (!regex.test(pocName)) {
    pocNameValidation.textContent = "Only uppercase, lowercase, spaces, and dots are allowed.";
    pocNameInput.setCustomValidity("Invalid input");
  } else {
    pocNameValidation.textContent = "";
    pocNameInput.setCustomValidity("");
  }
});

//poc-phone number
pocPhoneInput.addEventListener("input", function () {
  // Remove non-digit characters from the phone number
  this.value = this.value.replace(/[^0-9]/g, '');
  const phoneRegex = /^[0-9]+$/;
  const phoneValidation = document.getElementById("poc-phone-validation");
  if (phoneRegex.test(this.value)) {
    phoneValidation.textContent = "";
  } else {s
    phoneValidation.textContent = "Invalid phone number format. Please enter digits only.";
  }
});
//poc-email
const pocValidationMessage = document.getElementById("poc-email-validation"); // Unique ID
pocEmailInput.addEventListener("input", function() {
const email = pocEmailInput.value;
const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
if (emailRegex.test(email)) {
  pocValidationMessage.textContent = "Valid email!";
  pocValidationMessage.style.color = "green";
} else {
  pocValidationMessage.textContent = "Invalid email ID";
  pocValidationMessage.style.color = "red";
}
});

//Number of women validation
const numberInput = document.getElementById("p-no");
const numberValidation = document.getElementById("Number-validation");

numberInput.addEventListener("input", function() {
this.value = this.value.replace(/[^0-9]/g, '');
const number = numberInput.value;
const regex = /^[0-9]+$/; 

if (!regex.test(number)) {
  numberValidation.textContent = "Please enter a valid number.";
  numberValidation.style.color = "red"; // Set the error message color to red
  numberInput.setCustomValidity("Invalid input");
} else {
  numberValidation.textContent = "";
  numberValidation.style.color = "green"; // Set the error message color to green when input is valid
  numberInput.setCustomValidity("");
}
});

//Capital validation
const capitalInput = document.getElementById("puc");
const capitalValidation = document.getElementById("Capital-validation");

capitalInput.addEventListener("input", function() {
this.value = this.value.replace(/[^0-9]/g, '');
const capital = capitalInput.value;
const regex = /^[0-9]+$/; 

if (!regex.test(capital)) {
  capitalValidation.textContent = "Please enter a valid number.";
  capitalValidation.style.color = "red"; // Set the error message color to red
  capitalInput.setCustomValidity("Invalid input");
} else {
  capitalValidation.textContent = "";
  capitalValidation.style.color = "green"; // Set the error message color to green when input is valid
  capitalInput.setCustomValidity("");
}
});

//Location validation
const locationInput = document.getElementById("nol");
const locationValidation= document.getElementById("Location-validation");

locationInput.addEventListener("input", function() {
this.value = this.value.replace(/[^0-9]/g, '');
const location = locationInput.value;
const regex = /^[0-9]+$/; 

if (!regex.test(location)) {
  locationValidation.textContent = "Please enter a valid number.";
  locationValidation.style.color = "red"; // Set the error message color to red
  locationInput.setCustomValidity("Invalid input");
} else {
  locationValidation.textContent = "";
  locationValidation.style.color = "green"; // Set the error message color to green when input is valid
  locationInput.setCustomValidity("");
}
});

//Total number of employees fields validation
const toteInput = document.getElementById("tote");
const maleInput = document.getElementById("male");
const femaleInput = document.getElementById("female");
const male1Input = document.getElementById("male1");
const female1Input = document.getElementById("female1");


//Total number of Employees & Workers validation
toteInput.addEventListener("input", function () {
// Remove non-digit characters from the phone number
this.value = this.value.replace(/[^0-9]/g, '');
const toteRegex = /^[0-9]+$/;
const toteValidation = document.getElementById("tote-validation");
if (toteRegex.test(this.value)) {
  toteValidation.textContent = "";
} else {s
  toteValidation.textContent = "Invalid number format. Please enter digits only.";
}
});

//Permanent Male Employee validation
maleInput.addEventListener("input", function () {
// Remove non-digit characters from the phone number
this.value = this.value.replace(/[^0-9]/g, '');
const maleRegex = /^[0-9]+$/;
const maleValidation = document.getElementById("male-validation");
if (maleRegex.test(this.value)) {
  maleValidation.textContent = "";
} else {s
  maleValidation.textContent = "Invalid number format. Please enter digits only.";
}
});

//Permanent female Employee validation
femaleInput.addEventListener("input", function () {
// Remove non-digit characters from the phone number
this.value = this.value.replace(/[^0-9]/g, '');
const femaleRegex = /^[0-9]+$/;
const femaleValidation = document.getElementById("female-validation");
if (femaleRegex.test(this.value)) {
  femaleValidation.textContent = "";
} else {s
  femaleValidation.textContent = "Invalid number format. Please enter digits only.";
}
});

//Temporary Male Employee validation
male1Input.addEventListener("input", function () {
// Remove non-digit characters from the phone number
this.value = this.value.replace(/[^0-9]/g, '');
const male1Regex = /^[0-9]+$/;
const male1Validation = document.getElementById("male1-validation");
if (male1Regex.test(this.value)) {
  male1Validation.textContent = "";
} else {s
  male1Validation.textContent = "Invalid number format. Please enter digits only.";
}
});

//Temporary female Employee validation
female1Input.addEventListener("input", function () {
// Remove non-digit characters from the phone number
this.value = this.value.replace(/[^0-9]/g, '');
const female1Regex = /^[0-9]+$/;
const female1Validation = document.getElementById("female1-validation");
if (female1Regex.test(this.value)) {
  female1Validation.textContent = "";
} else {s
  female1Validation.textContent = "Invalid number format. Please enter digits only.";
}
});

//turnover validation
const torInput = document.getElementById("tor");
const torValidation = document.getElementById("Turnover-validation");

torInput.addEventListener("input", function() {
this.value = this.value.replace(/[^0-9]/g, '');
const tor = torInput.value;
const regex = /^[0-9]+$/; 

if (!regex.test(tor)) {
  torValidation.textContent = "Please enter a valid number.";
  torValidation.style.color = "red"; // Set the error message color to red
  torInput.setCustomValidity("Invalid input");
} else {
  torValidation.textContent = "";
  torValidation.style.color = "green"; // Set the error message color to green when input is valid
  torInput.setCustomValidity("");
}
});

