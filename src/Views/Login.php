<?php $this->layout('templates/Master', ['title' => 'Login Page']) ?>

<form action="/login" method="post">
    <div>
        <label for="login">Login</label>
        <input type="email" name='login'>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name='password'>
    </div>
    <button type='submit'>Entrar</button>
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
            <a class="nav-link active" aria-current="page" href="/register">Register</a>
            </li>
        </ul>
        </div>
    </div>
<?php $this->stop() ?>