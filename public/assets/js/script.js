document.getElementById('LoginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const correctUsername = 'aldi';
    const correctPassword = 'aldi';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === correctUsername && password === correctPassword) {
        alert("Login Berhasil");
        window.location.href = '/';
    } else {
        alert("Username atau password tidak sesuai");
    }
});