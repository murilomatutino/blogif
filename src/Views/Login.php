<?php $this->layout('templates/Master', ['title' => 'Login Page']) ?>

<h1>Login Page</h1>

<form action="" method="post">
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