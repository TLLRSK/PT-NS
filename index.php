<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiper Example</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.css">
</head>
<body>
    <article class="article">
        <h2 class="article-header">Escoge tu proyecto ideal y fináncialo en cómodas cuotas² Diferentes importes, mismos servicios incluidos</h2>
        <div class="swiper">
            <div class="swiper-wrapper project-carrousel">
                <?php
                    include './public/projects.php';
                    foreach ($PROJECTS as $project):
                        $price_parts = explode(',', $project['price']);
                        $price_integer = $price_parts[0];
                        $price_decimal = isset($price_parts[1]) ? ',' . $price_parts[1] : '';
                ?>

                    <div class="project-card swiper-slide" style="height:320px">
                        <div class="project-image-container">
                            <img class="project-image" src="<?php echo $project['image'] ?>" alt="<?php echo $project['name'] ?>">
                        </div>
                        <div class="project-info-container">
                            <h3 class="project-name"><?php echo $project['name'] ?></h3>
                            <p class="project-price">
                                <?php echo $price_integer ?><span class="project-price--s"><?php echo $price_decimal ?></span>
                                <span class="project-price--s">€/mes²</span>
                            </p>
                            <button class="btn btn--project-info" data-id="<?php echo $project['id']; ?>">Más info</button>
                        </div>
                    </div>

                 <?php endforeach; ?>

            </div>

            <div class="swiper-pagination"></div>
        </div>

        <div class="modal" style="display: none">
            <div class="modal-container">
                <h3 class="modal-project-name">Project name</h3>
                <svg class="modal-separator" width="100%" height="1">
                    <line x1="0" y1="0.5" x2="100%" y2="0.5"/>
                </svg>
                <button class="btn btn--buy-project">¡Lo quiero!</button>
            </div>
            <div class="modal-overlay"></div>
        </div>

    </article>
</div>

    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script type="module" src="./js/swiper.js"></script>
    <script>
        const buttonsShowModal = document.querySelectorAll('.btn--project-info');
        const buttonBuy = document.querySelector('.btn--buy-project');
        const modal = document.querySelector('.modal');
        const modalProjectName = document.querySelector('.modal-project-name');

        const projectsData = <?php echo json_encode($PROJECTS); ?>;
        const showModal = (id) => {
            const selectedProject = projectsData.find((project) => project.id === id)
            modalProjectName.textContent = selectedProject.name;
            modal.setAttribute('style', 'display: flex');
        }
        const closeModal = () => {
            modal.setAttribute('style', 'display: none');
            modalProjectName.textContent = '';
        }
        const buyProject = () => {
            console.log("buying project")
            closeModal();
        }

        buttonsShowModal.forEach((button) => {
            button.addEventListener('click', (e) => {
                const currentId = parseInt(e.target.dataset.id);
                showModal(currentId);
            })
        })
        buttonBuy.addEventListener('click', () => buyProject());
                        
    </script>
</body>
</html>