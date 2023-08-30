// JavaScript Document

// Function to calculate inputted numbers based on chosen operation from user
function calculate() {
  // Define variables
  var num1;
  var num2;
  var fOperator;
  var answer;

  // Initialize variables using element IDs found in the HTML document
  num1 = document.getElementById("number1").value;
  num2 = document.getElementById("number2").value;
  fOperator = document.getElementById("functionOperator").value;

  // If the values at both number prompts are NOT empty...
  if (
    document.getElementById("number1").value != "" &&
    document.getElementById("number2").value != ""
  ) {
    // ... proceed to calculation.
    // Perform the basic calculations based on user entry from the drop-down menu.
    switch (fOperator) {
      // Addition:
      case "+":
        answer = parseInt(num1) + parseInt(num2);
        break;
      // Subtraction:
      case "-":
        answer = parseInt(num1) - parseInt(num2);
        break;
      // Division:
      case "/":
        answer = parseInt(num1) / parseInt(num2);
        break;
      // Multiplication:
      case "*":
        answer = parseInt(num1) * parseInt(num2);
        break;
      default:
        document.getElementById("output").innerHTML = "ERROR";
    }
    // Print output.
    document.getElementById("output").innerHTML = "Answer is: " + answer;
  }
  // Otherwise...
  else {
    // Do not perform calculation. Prompt user to enter in numbers for each field.
    document.getElementById("output").innerHTML =
      "Please enter in numbers for each field.";
  }
}
