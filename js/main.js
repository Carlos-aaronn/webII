document.addEventListener('DOMContentLoaded', () => {
    const modal = document.querySelector('.modal');
    const openModalBtn = document.querySelector('.hulk_cta');
    const closeModalBtn = document.querySelector('.modal_close');

    openModalBtn.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.add('modal--show');
    });

    closeModalBtn.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.remove('modal--show');
    });
});