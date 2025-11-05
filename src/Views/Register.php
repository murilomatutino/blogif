<?php $this->layout('templates/Master', ['title' => 'Register Page']) ?>

<div class="d-flex w-100 justify-content-center align-items-center">
  <form  action="/register" method="post" class="border w-25 rounded p-3">
    <div class="mb-3">
      <label for="social_name" class="form-label">Social Name</label>
      <input type="text" class="form-control" id="social_name" aria-describedby="social_name" name="social_name">
    </div>
    <div class="mb-3">
      <label for="first_name" class="form-label">First Name</label>
      <input type="text" class="form-control" id="first_name" aria-describedby="first_name" name="first_name">
    </div>
    <div class="mb-3">
      <label for="last_name" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="last_name" aria-describedby="last_name" name="last_name">
    </div>
    <div class="mb-3">
      <label for="birth_day" class="form-label">Birth day</label>
      <input type="date" class="form-control" id="birth_day" aria-describedby="birth_day" name="birth_day">
    </div>
    <div class="mb-3">
      <label for="phone_number" class="form-label">Phone number</label>
      <input type="text" class="form-control" id="phone_number" aria-describedby="phone_number" name="phone_number">
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