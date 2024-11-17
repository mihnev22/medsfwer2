document.querySelectorAll('nav ul li a').forEach(item => {
    item.addEventListener('click', function(event) {
        event.preventDefault();
        alert('Вы кликнули на ссылку: ' + item.textContent);
    });
});
