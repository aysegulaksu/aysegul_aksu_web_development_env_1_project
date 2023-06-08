// script.js

// Set the countdown date and time
var countdownDate = new Date('June 16, 2023 18:00:00').getTime();

// Update the countdown every second
var countdownTimer = setInterval(function() {
    // Get the current date and time
    var now = new Date().getTime();

    // Find the time remaining between now and the countdown date
    var timeRemaining = countdownDate - now;

    // Calculate the days, hours, minutes, and seconds remaining
    var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

    // Display the countdown in the "countdown" div
    var countdownElement = document.getElementById('countdown');
    countdownElement.innerHTML = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's ';

    // If the countdown is finished, display a message
    if (timeRemaining < 0) {
        clearInterval(countdownTimer);
        countdownElement.innerHTML = 'Countdown expired';
    }
}, 1000);
