document.addEventListener('DOMContentLoaded', () => {
    const button_1 = document.querySelector('#button_1');
    const button_2 = document.querySelector('#button_2');
    const paragraph = document.querySelector('.main_paragraph');
    button_1.addEventListener('click', () => {
        paragraph.classList.toggle('hidden');
    })
    button_2.addEventListener('click', () => {
        paragraph.classList.toggle('hidden');
    })
});
