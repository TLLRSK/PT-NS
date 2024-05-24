import { buttonsProjectInfo } from './index.js';

// Updating button content
const updateButtonText = () => {
    const mobileText = "Más info";
    const desktopText = "Más información";

    buttonsProjectInfo.forEach((button) => {
        const windowWidth = window.innerWidth;

        switch (true) {
            case windowWidth <= 480:
                button.textContent = mobileText;
                break;
            default:
                button.textContent = desktopText;
                break;
        }
    })
}

// Updating on first render
updateButtonText();

// Add Event Listener
window.addEventListener('resize', updateButtonText);