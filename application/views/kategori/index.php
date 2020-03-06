<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <?php $this->load->view("includes/site_style"); ?>
</head>


<!--============= start main area -->
<body>
    <!-- APP NAVBAR ==========-->
    <?php $this->load->view("includes/head"); ?>
    <!--========== END app navbar -->

    <!-- APP ASIDE ==========-->
   
    <!--========== END app aside -->

    <!-- navbar search -->
    <?php $this->load->view("kategori/content"); ?>
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