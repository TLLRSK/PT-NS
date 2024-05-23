
// Selectors
const buttonsShowModal = document.querySelectorAll('.btn--project-info');
const buttonBuy = document.querySelector('.btn--buy-project');
const modal = document.querySelector('.modal');
const modalProjectName = document.querySelector('.modal-project-name');

// Showing modal
const showModal = (id) => {
    const selectedProject = projectsData.find((project) => project.id === id);
        if (selectedProject) {
            buttonBuy.dataset.id = id;
            modalProjectName.textContent = selectedProject.name;
           
            modal.classList.contains('fadeOut')
                && modal.classList.remove('fadeOut')
                || modal.classList.add('fadeIn');
        } else {
            console.log(`Project ${id} not found`);
        }
    };

// Closing modal
const closeModal = () => {
    modal.classList.remove('fadeIn');
    modal.classList.add('fadeOut');
    setTimeout(() => {
        modal.classList.remove('fadeOut');
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