
const form = document.getElementById('formulaireInscription');

    form.addEventListener('submit', function(event) {
            let valid = true;

        document.querySelectorAll('.error-message').forEach(span => {
                span.style.display = 'none'; /* Reset error message display */
        });

        form.querySelectorAll('input').forEach(input => {
            if (!input.checkValidity()) {
                    valid = false;
                    const errorMessage = input.nextElementSibling;
                    errorMessage.style.display = 'block';
            }
        });

            if (!valid) {
                event.preventDefault();
            }
    });