document.addEventListener('DOMContentLoaded', () => {
    const dropdown = document.getElementById('dropdown');
    const content = document.getElementById('content');
    const close = document.getElementById('close');

    console.log(dropdown, content, close);

    dropdown.addEventListener('click', () => {
         content.style.display = 'block';
    })

    close.addEventListener('click', () => {
         content.style.display = "none";
    })
})