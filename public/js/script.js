const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

document.addEventListener('DOMContentLoaded', function () {
    const countdownElement = document.getElementById('timer');
    const endTime = new Date();
    endTime.setHours(23, 59, 0, 0); // Set to today's date at 11:59 PM

    const timer = setInterval(function () {
        const now = new Date();
        const remainingTime = endTime - now;

        if (remainingTime >= 0) {
            const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

            countdownElement.innerHTML = `<ion-icon name="gift" style="color: #B12729;"></ion-icon>&nbsp; Black Friday Sale ends in ${hours}h ${minutes}m ${seconds}s - Act Now!`;
        } else {
            countdownElement.innerHTML = "Sale has ended!";
            clearInterval(timer);
        }
    }, 1000);
});
