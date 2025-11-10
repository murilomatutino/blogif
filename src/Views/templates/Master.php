<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/" />
  <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.4.3/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-oMIIhJL1T5s+PxJr6+Qb0pO1IRFB6OGMM+J57UBT3UQKxSVsb++MkXpu9cLqaJxu" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.4.3/dist/js/coreui.bundle.min.js" integrity="sha384-SWhFOmxmv1pfTLKVBW7q8uossvuaWNeQFdmaWi6xdldiUjyqG9F6V2R2BOC8gkxx" crossorigin="anonymous"></script>
  <meta name="theme-color" content="#712cf9" />
  <title><?=$this->e($title)?></title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <?php if ($this->section('navbar')): ?>
            <?=$this->section('navbar')?>
        <?php else: ?>
            <div class="sidebar sidebar-narrow-unfoldable border-end">
  <div class="sidebar-header border-bottom">
    <div class="sidebar-brand">Blogif</div>
  </div>
  <ul class="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/">
        <i class="bi bi-house-door nav-icon"></i> Home
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/post/create">
        <i class="bi bi-plus-circle nav-icon"></i> Criar Publicação
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="bi bi-person nav-icon"></i> Perfil
        <span class="badge bg-primary ms-auto">Novo</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/contact">
        <i class="bi bi-telephone nav-icon"></i> Contato
      </a>
    </li> 
  </ul>
  <ul class="sidebar-nav sidebar-nav-bottom">
    <li class="nav-item">
      <a class="nav-link" href="/logout">
        <i class="bi bi-box-arrow-right nav-icon"></i> Sair
      </a>
    </li>
  </ul>
</div>
        <?php endif ?>
      </nav>
    </header>
    <main class="w-100 min-vh-100 mt-3">
      <?=$this->section('content')?>
    </main>
    <footer class="p-3 bg-dark text-white text-center">
        @blogif - All rights reserved
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
