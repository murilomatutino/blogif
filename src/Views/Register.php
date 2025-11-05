<?php $this->layout('templates/Master', ['title' => 'Register Page']) ?>

<div class="d-flex h-50 w-100 justify-content-center align-items-center">
  <form  action="/register" method="post" class="border rounded p-3">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
    </div>
    <div class="mb-3">
      <label for="password1" class="form-label">Password</label>
      <input type="password" class="form-control" id="password1" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>

<?php $this->start('navbar') ?>
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BlogIF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/login">Login</a>
            </li>
        </ul>
        </div>
    </div>
<?php $this->stop() ?>