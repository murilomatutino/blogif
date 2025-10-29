<?php $this->layout('templates/Master', ['title' => 'Register Page']) ?>

<h1>Register Page</h1>

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
    <ul>
        <li><a href="/login">Login</a></li>
    </ul>
<?php $this->stop() ?>