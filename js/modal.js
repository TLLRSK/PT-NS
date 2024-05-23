
const buttonsShowModal = document.querySelectorAll('.btn--project-info');
const buttonBuy = document.querySelector('.btn--buy-project');


// Setting modal
const time = 500;
const transitionTime = String(time/1000).substring(1) + "s";

const modal = document.querySelector('.modal');
const modalProjectName = document.querySelector('.modal-project-name');
modal.setAttribute('style', `display: none; transition: opacity ${transitionTime}`);

const showModal = (id) => {

const selectedProject = projectsData.find((project) => project.id === id);
    if (selectedProject) {
        buttonBuy.dataset.id = id;
        modalProjectName.textContent = selectedProject.name;
        modal.setAttribute('style', `display: flex; transition: opacity ${transitionTime}`);
        setTimeout(() => {
            modal.classList.add('visible');
        }, 1)
    } else {
        console.log(`Project ${id} not found`);
    }
};

const closeModal = () => {
    modal.classList.remove('visible');
    setTimeout(() => {
        modal.setAttribute('style', `display: none; transition: opacity ${transitionTime}`);
        modalProjectName.textContent = '';
    }, 500);
};

const buyProject = (id) => {
    console.log("buying project: ", projectsData[id])
    closeModal();
}

buttonsShowModal.forEach((button) => {
    button.addEventListener('click', (e) => {
        const currentId = parseInt(e.target.dataset.id);
        showModal(currentId);
    })
})
buttonBuy.addEventListener('click', (e) => buyProject(e.target.dataset.id));