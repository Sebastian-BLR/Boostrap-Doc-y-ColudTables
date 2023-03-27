
<?php 
$url= '/' . strtolower($place);
$actual = $_SERVER['REQUEST_URI'] !== $url;
?>
<nav aria-label="...">
  <ul class="pagination justify-content-end me-3">
    <li class="page-item <?= $actual ?: 'disabled'?> ">
      <a class="page-link" href="<?= $url ?>">Anterior</a>
    </li>
    <li class="page-item <?= $url !== $_SERVER['REQUEST_URI']?: 'active'  ?>"><a class="page-link"
        href="<?= $url ?>">1</a></li>
    <li class="page-item  <?= $url . '/2' !== $_SERVER['REQUEST_URI']?: 'active'  ?>" aria-current="page">
      <a class="page-link" href="<?= $url ?>/2">2</a>
    </li>
    <li class="page-item">
      <a class="page-link <?= !$actual ?: 'disabled'?>" href="<?= $url ?>/2">Siguiente</a>
    </li>
  </ul>
</nav>