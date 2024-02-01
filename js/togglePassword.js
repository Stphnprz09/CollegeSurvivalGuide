function togglePassword() {
    const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');
    
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
            });
}