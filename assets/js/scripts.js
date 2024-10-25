// Animación para botones
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('button');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            button.classList.add('pulse');
            setTimeout(() => {
                button.classList.remove('pulse');
            }, 2000);
        });
    });
});

// Validación de formularios
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(event) {
        const username = form.querySelector('input[type="text"]');
        const password = form.querySelector('input[type="password"]');
        
        if (username.value === '' || password.value === '') {
            alert('Por favor, rellene todos los campos');
            event.preventDefault();
        }
    });
});

// Animación en tarjetas
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.classList.add('active');
    });

    card.addEventListener('mouseleave', () => {
        card.classList.remove('active');
    });
});
