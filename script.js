document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(event) {
        const name = form.querySelector('input[name="name"]').value;
        const email = form.querySelector('input[name="email"]').value;
        const message = form.querySelector('textarea[name="message"]').value;

        if (!name || !email || !message) {
            alert("Please fill out all fields before submitting.");
            event.preventDefault(); // Stop the form from submitting
        } else {
            alert("Thank you for your message!");
        }
    });
});


function sendMail(event) {
    event.preventDefault();
    
    const userName = document.getElementById('userName').value;
    const team = document.getElementById('teamSelect').value;
    const message = document.getElementById('message').value;
    
    const mailtoLink = `mailto:johnmeawad131@gmail.com?subject=Vote%20pour%20l'équipe%20${team}&body=De:%20${userName}%0AÉquipe:%20${team}%0AMessage:%20${message}`;
    window.location.href = mailtoLink;
}

document.addEventListener("DOMContentLoaded", function () {
    const navbarHeight = document.querySelector(".navbar").offsetHeight;
    document.body.style.paddingTop = `${navbarHeight}px`;
});



