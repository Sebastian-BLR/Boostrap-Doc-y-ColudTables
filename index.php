<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8 ">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-black">

  <?php
     if($_SERVER['REQUEST_URI'] === '/'){
         include_once __DIR__ . '/views/helpers.php';
        }
     elseif($_SERVER['REQUEST_URI'] === '/components'){
        include_once __DIR__ . '/views/components.php';       
        
     }elseif($_SERVER['REQUEST_URI'] === '/components/2'){
        include_once __DIR__ . '/views/components_2.php';    

     }elseif($_SERVER['REQUEST_URI'] === '/templates'){
        include_once __DIR__ . '/views/plantillas.php';
     }elseif($_SERVER['REQUEST_URI'] === '/tables'){
        include_once __DIR__ . '/views/tables.php';
     }
    ?>

  <footer>
    <!-- place footer here -->

    <?php  //var_dump($_SERVER['REQUEST_URI'])?>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/scr/js/components.js"></script>
</body>

</html>