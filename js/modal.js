
// Selectors
const buttonsShowModal = document.querySelectorAll('.btn--project-info');
const buttonBuy = document.querySelector('.btn--buy-project');
const modal = document.querySelector('.modal');
const modalContainer = document.querySelector('.modal-container');
const overlay = document.querySelector('.modal-overlay');
const modalProjectName = document.querySelector('.modal-project-name');

// Showing modal
const showModal = (id) => {
    const selectedProject = projectsData.find((project) => project.id === id);
        if (selectedProject) {
            buttonBuy.dataset.id = id;
            modalProjectName.textContent = selectedProject.name;
            modal.style.display = 'flex';
            setTimeout(() => {
                overlay.classList.add('fadeIn');
                modalContainer.classList.contains('fadeOut')
                && modalContainer.classList.remove('fadeOut')
                || modalContainer.classList.add('fadeIn');
            }, 500)
        } else {
            console.log(`Project ${id} not found`);
        }
    };

// Closing modal
const closeModal = () => {
    overlay.classList.remove('fadeIn');
    modalContainer.classList.remove('fadeIn');
    overlay.classList.add('fadeOut');
    modalContainer.classList.add('fadeOut');
    setTimeout(() => {
        overlay.classList.remove('fadeOut');
        modalContainer.classList.remove('fadeOut');
        modal.style.display = 'none';
        modalProjectName.textContent = '';
    }, 500);
};

// Buying project
const buyProject = (id) => {
    console.log("buying project: ", projectsData[id])
    closeModal();
}

// Adding listeners
buttonsShowModal.forEach((button) => {
    button.addEventListener('click', (e) => {
        const currentId = parseInt(e.target.dataset.id);
        showModal(currentId);
    })
})
buttonBuy.addEventListener('click', (e) => buyProject(e.target.dataset.id));