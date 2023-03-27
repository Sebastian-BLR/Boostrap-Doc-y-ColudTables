<nav class="navbar navbar-expand-lg bg-body-tertiary bg-secondary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" style="min-width: 114px;"><?php echo $place ?? 'Navar' ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo '/' !== $_SERVER['REQUEST_URI'] ?: 'active' ?>" aria-current="page" href="/">Hepers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo '/components' !== $_SERVER['REQUEST_URI'] ?: 'active' ?>" href="/components">Components</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo '/templates' !== $_SERVER['REQUEST_URI'] ?: 'active' ?>" href="/templates">Templates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo '/tables' !== $_SERVER['REQUEST_URI'] ?: 'active' ?>" href="/tables" >Tables</a>
        </li>
      </ul>
    </div>
  </div>
</nav>