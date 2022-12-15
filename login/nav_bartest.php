

    <head>
    <!-- bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- biitstrap js  -->
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css_part/navbar.css">
    </head>

    <div id="header">
        <!--navbar-->
    <div id="navbar">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Travel_nearby-nsysu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../content_page/php_part/Introduction.php">Introduction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../content_page/php_part/Blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../content_page/php_part/features.php">Features</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../content_page/php_part/attr.php">Attractions</a></li>
            <li><a class="dropdown-item" href="../content_page/php_part/rest.php">restaurants</a></li>
            <li><a class="dropdown-item" href="../content_page/php_part/dess.php">Desserts</a></li>
            <li><a class="dropdown-item" href="../content_page/content_page/php_part/acco.php">Accommodation & Transportation</a></li>
          </ul>
        </li>
    
        <li class="nav-item">
<?php
if (!(isset($_SESSION["web_project"]))) {
?>
    <a class="nav-link" href="../../login/login_index.php">Sign in</a>
<?php
}else{
?>
    <a class="nav-link" href="../../login/logout.php">Sign out</a>
<?php
}   
?> 
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
<!--navbar_end-->
