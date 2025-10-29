<?php $this->layout('templates/Master', ['title' => 'Register Page']) ?>

<form action="/register" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name='name'>
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name='email'>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name='password'>
    </div>
    <button type='submit'>Register</button>
</form>

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