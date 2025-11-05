<?php $this->layout('templates/Master', ['title' => 'Login Page']) ?>

<div class="d-flex h-50 w-100 justify-content-center align-items-center">
  <form  action="/login" method="post" class="border rounded p-3">
    <div class="mb-3">
      <label for="email1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
      <div id="email" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name='password'>
    </div>
    <button type="submit" class="btn btn-primary">Log in</button>
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
            <a class="nav-link active" aria-current="page" href="/register">Register</a>
            </li>
        </ul>
        </div>
    </div>
<?php $this->stop() ?>