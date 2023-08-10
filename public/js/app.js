import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
// Import necessary libraries
require('./bootstrap'); // This includes the Bootstrap JavaScript components

// Your custom JavaScript code
$(document).ready(function () {
    // Your custom code here

    // Example: Show an alert when a button is clicked
    $('#myButton').click(function () {
        alert('Button clicked!');
    });
});
