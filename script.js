const { Alert } = require("bootstrap");

document.addEventListener("DOMContentLoaded", function() {
    const applyButton = document.querySelector(".apply-button");

    applyButton.addEventListener("click", function() {
        alert("Apply for vacation form will be here.");
    });
});



function addNewEmployee() {
    // Select the input element and get its value
    let inputElement = document.querySelector('#employeeName');
    const employeeName = inputElement.value.trim();
    
    // Check if the input is empty
    if (employeeName === "") {
        alert('Please enter an employee name.');
        return; // Exit the function if no name is entered
    }

    // Create a new list item for the employee
    const employeeList = document.querySelector('#employeeList');
    const newListItem = document.createElement('li');
    newListItem.textContent = employeeName;
    
    // Add the new employee to the list
    employeeList.appendChild(newListItem);

    inputElement.value = '';
}




