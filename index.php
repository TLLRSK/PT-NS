<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
        include './src/projects.php';
        foreach ($PROJECTS as $project):
    ?>
        <div class="project-card">
            <h3 class="project-name"><?php echo $project['name'] ?></h3>
            <img class="project-image" src="<?php echo $project['image'] ?>" alt="<?php echo $project['name'] ?>">
            <p class="project-price">
                <?php echo $project['price'] ?>
                <span class="project-price--span">€/mes²</span>
            </p>
            <button class="btn-project-info">Más información</button>
        </div>
    
    <?php endforeach; ?>
</div>
</body>
</html>