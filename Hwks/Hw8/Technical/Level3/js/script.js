document.getElementById('imageSelect').addEventListener('change', function () {
    const selected = this.value;
    const images = document.querySelectorAll('#imageContainer img');

    images.forEach(img => {
        if (selected === 'all') {
            img.style.display = 'block';
        } else {
            img.style.display = (img.id === selected) ? 'block' : 'none';
        }
    });
});

document.getElementById('imageSelect').value = 'all';
document.getElementById('imageSelect').dispatchEvent(new Event('change'));