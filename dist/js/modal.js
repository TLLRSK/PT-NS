import { buttonBuy, buttonsProjectInfo, modal, modalContainer, modalProjectName, overlay } from "./index.js";

// Showing modal
const showModal = (id) => {
    const selectedProject = projectsData.find((project) => project.id === id);
        if (selectedProject) {
            buttonBuy.dataset.id = id;
            modalProjectName.textContent = selectedProject.name;
            modal.style.display = 'flex';
            setTimeout(() => {
                overlay.classList.add('fadeIn');
                modalContainer.classList.remove('fadeOut')
                modalContainer.classList.add('fadeIn');
            }, 10)
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
    }, 300); /* Adjust transition time in fadeAnimation mixin defined on mixins.scss */
};

// Buying project
const buyProject = (id) => {
    const 
        currentId = parseInt(id),
        selectedProject = projectsData.find((project) => project.id === currentId);
    console.log("Proyecto seleccionado: ", selectedProject)

    closeModal();
}

// AddEventListeners
overlay.addEventListener('click', closeModal);

buttonsProjectInfo.forEach((button) => {
    button.addEventListener('click', (e) => {
        const currentId = parseInt(e.target.dataset.id);
        showModal(currentId);
    })
})

buttonBuy.addEventListener('click', (e) => {
    buyProject(e.target.dataset.id)
});