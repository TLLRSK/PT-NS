<?php include './public/dataProjectsCarousel.php'; ?>

<section class="section">
    <?php include 'header.php'; ?>

    <?php include 'swiper.php'; ?>
    
    <?php include 'modal.php'; ?>
</section>

<script>
    const projectsData = <?php echo json_encode($PROJECTS); ?>;       
</script>