$(document).ready(function () {
    // Countdown and redirect
    let count = 5;
    const countdownElement = $('#countdown');

    const countdown = setInterval(function () {
        count--;
        countdownElement.text(count);

        if (count <= 0) {
            clearInterval(countdown);
            window.location.href = 'index.php';
        }
    }, 1000);

    // Add entrance animation for error container
    setTimeout(() => {
        $('.error-container').addClass('visible');
    }, 100);
});