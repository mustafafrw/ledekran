<!DOCTYPE html>
<html lang="tr">

<?php $this->load->view("includes/header"); ?>
<!--============= start main area -->
<body>
    <!-- APP NAVBAR ==========-->
    <?php $this->load->view("includes/head"); ?>
    <!--========== END app navbar -->

    <!-- APP ASIDE ==========-->
   
    <!--========== END app aside -->

    <!-- navbar search -->
    <?php $this->load->view("iletisim/content"); ?>
    <!-- .navbar-search -->

    <!-- APP MAIN ==========-->
    <!-- .wrap -->

        <!-- APP FOOTER -->
    <?php $this->load->view("includes/footer"); ?>
        <!-- /#app-footer -->
    
    <!--========== END app main -->

    <?php $this->load->view("includes/site_script"); ?>

</body>
</html>