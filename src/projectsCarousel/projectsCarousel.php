<?php include './public/dataProjectsCarousel.php'; ?>


<section class="section">
    <h2 class="section-header">
        <?php echo $HEADER ?>
    </h2>
    
    <?php include 'swiper.php'; ?>
    
    <?php include 'modal.php'; ?>
</section>

<script>
    const projectsData = <?php echo json_encode($PROJECTS); ?>;       
</script>