// Get references to form elements
const form = document.querySelector('.form');
const saveNextButton = document.getElementById('saveNextButton');
const errorText = document.querySelector('.error-text');

// Add event listener to save & next button
saveNextButton.addEventListener('click', function (event) {
  event.preventDefault(); // Prevent form submission

  // Validate form fields (add your validation logic here)
  const isValid = validateForm();

  if (isValid) {
    // Save form data (add your saving logic here)

    // Navigate to the next section or page
    navigateToNextSection();
  } else {
    errorText.textContent = 'Please fill in all the required fields.';
  }
});

// Function to validate form fields
function validateForm() {
  // Add your validation logic here
  // Return true if form is valid, false otherwise
//
//
  // Get the selected checkboxes for question 1
  const reasonCheckboxes = document.querySelectorAll('input[name="reason"]:checked');

  // Check if at least one checkbox is selected for question 1
  if (reasonCheckboxes.length === 0) {
    alert('Please select at least one reason for leaving.');
    return false;
  }

  // Get the selected checkboxes for question 2
  const jobChangeCheckboxes = document.querySelectorAll('input[name="reason"]:checked');

  // Check if at least one checkbox is selected for question 2
  if (jobChangeCheckboxes.length === 0) {
    alert('Please select at least one reason for job change.');
    return false;
  }
// Add more validation logic for other questions if needed...
//
//
  // If all validations pass, return true to allow form submission
  
  return true;
}

// Function to navigate to the next section or page
function navigateToNextSection() {
  // Add your navigation logic here
  // For example, you can show the next section or redirect to another page
}
