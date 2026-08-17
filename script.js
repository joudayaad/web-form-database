function toggleStatus(id) {
    fetch('toggle.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'id=' + encodeURIComponent(id)
    })
    .then(response => response.text())
    .then(status => {
        document.getElementById('status-' + id).textContent = status;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
