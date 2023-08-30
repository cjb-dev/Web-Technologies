// Validates data entry for first AND last name
function checkName(nameValue, nameId) {
  // console.log("name: " + nameValue);
  var pattern = /^[a-zA-Z-']+$/;
  var msg;

  // accepts lowercase/upercase, hyphens, and apostrophesbut not spaces
  if (nameValue.match(pattern)) {
    msg = "Data is valid";
  } else {
    msg = "Invalid data entry";
  }
  document.getElementById(nameId + "Help").innerHTML = msg;
}

// Validates data entry for email address
function checkEmail(emailValue) {
  var pattern =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  var msg;

  // Accepts lowercase/upercase, hyphens, and apostrophes, but not spaces
  if (emailValue.match(pattern)) {
    msg = "Data is valid";
  } else {
    msg = "Invalid data entry";
  }
  document.getElementById("emailHelp").innerHTML = msg;
}

// Validates data entry for username
function checkUsername(userValue) {
  // Original pattern which enforces alphanumeric values
  // var pattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

  // Allows for upper/lowercase letters and numbers, no specials or white space, at least 8 characters
  var pattern = /^(?=.[a-zA-Z0-9])[a-zA-Z0-9]{8,}$/;
  var msg;

  if (userValue.match(pattern)) {
    msg = "Data is valid";
  } else {
    msg = "Invalid data entry";
  }
  document.getElementById("usernameHelp").innerHTML = msg;
}

// Validates data entry for comments
function checkComments(commentValue) {
  var pattern = /^[^!@#$%^&*]+$/;
  var msg;

  if (commentValue.match(pattern)) {
    msg = "Data is valid";
  } else {
    msg = "Invalid data entry";
  }
  document.getElementById("commentHelp").innerHTML = msg;
}
