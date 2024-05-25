<?php require_once 'src/functions.php'; ?>

<div class="swiper">
    <div class="swiper-wrapper project-carousel">
        <?php foreach ($PROJECTS as $project):?>
            <?php
                $price_parts = formatPrice($project['price']);
            ?>
            
            <div class="project-card swiper-slide" style="height:320px">
            
                <div class="project-image-container gradient--<?php echo $project['gradient']?>">
                    <img class="project-image" src="<?php echo $project['image'] ?>" alt="<?php echo $project['name'] ?>">
                </div>

                <div class="project-info-container">
                    <h3 class="project-name"><?php echo $project['name'] ?></h3>
                
                    <p class="project-price">
                        <?php echo $price_parts['integer'] ?>,<span class="project-price--s"><?php echo $price_parts['decimal'] ?> €/mes²</span></p>
                    </p>

                    <button class="btn btn--project-info" data-id="<?php echo $project['id']; ?>">
                        <!-- Button content defined in ·Project info btn· at variables.scss -->
                    </button>

                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="swiper-pagination"></div>
</div>

<script src="node_modules/swiper/swiper-bundle.min.js"></script>
<script type="module" src="./js/swiper.js"></script>