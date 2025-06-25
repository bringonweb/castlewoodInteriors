$(document).ready(function () {
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

    // Add entrance animation for thank you card
    setTimeout(() => {
        $('#thankyouCard').css({
            'opacity': '1',
            'transform': 'translateY(0)'
        });
    }, 100);

    // Social links hover animation
    $('.social-links a').hover(
        function () {
            $(this).css('transform', 'translateY(-3px)');
        },
        function () {
            $(this).css('transform', 'translateY(0)');
        }
    );
});