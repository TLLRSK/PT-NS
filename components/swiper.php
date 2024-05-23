<div class="swiper">
    <div class="swiper-wrapper project-carrousel">
        <?php include './public/projects.php'; ?>
        <?php foreach ($PROJECTS as $project):
            $price_parts = explode(',', $project['price']);
            $price_integer = $price_parts[0];
            $price_decimal = isset($price_parts[1]) ? ',' . $price_parts[1] : '';
        ?>

            <div class="project-card swiper-slide" style="height:320px">

                <div class="project-image-container gradient--<?php echo $project['gradient']?>">
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
<script src="node_modules/swiper/swiper-bundle.min.js"></script>
<script type="module" src="./js/swiper.js"></script>
<script>
    const projectsData = <?php echo json_encode($PROJECTS); ?>;       
</script>
