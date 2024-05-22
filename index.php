<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiper Example</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css">
</head>
<body>
    <article class="article">
        <h2>Escoge tu proyecto ideal y fináncialo en cómodas cuotas² Diferentes importes, mismos servicios incluidos</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper project-carrousel">
                <?php
                    include './src/projects.php';
                    foreach ($PROJECTS as $project):
                ?>
                <div class="project-card swiper-slide" style="height:320px">
                    <img class="project-image" src="<?php echo $project['image'] ?>" alt="<?php echo $project['name'] ?>">
                    <h3 class="project-name"><?php echo $project['name'] ?></h3>
                    <p class="project-price">
                        <?php echo $project['price'] ?>
                        <span class="project-price--span">€/mes²</span>
                    </p>
                    <button class="btn-project-info">Más información</button>
                </div>
            
            <?php endforeach; ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </article>
</div>

    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>
</html>