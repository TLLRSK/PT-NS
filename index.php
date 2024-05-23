<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiper Example</title>
    
    <link rel="stylesheet" href="css/style.css">
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

        <div class="modal">
            <div class="modal-container">
                <h3 class="modal-project-name">Project name</h3>
                <svg class="modal-separator" width="100%" height="1">
                    <line x1="0" y1="0.5" x2="100%" y2="0.5"/>
                </svg>
                <button class="btn btn--buy-project" data-id="null">¡Lo quiero!</button>
            </div>
            <div class="modal-overlay"></div>
        </div>

    </article>
</div>
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script type="module" src="./js/swiper.js"></script>
    <script>
        const projectsData = <?php echo json_encode($PROJECTS); ?>;       
    </script>
    <script type="module" src="./js/modal.js"></script>
</body>
</html>