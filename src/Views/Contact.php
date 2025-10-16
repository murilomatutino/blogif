<?php $this->layout('templates/Master', ['title' => 'Contact Page']) ?>

<h1>Contact Page</h1>
<p>Hello</p>

<form action='/contact' method="post">
    <input type="text" name='email'>
    <button type="submit">Enviar</button>
</form>
