<?php $this->layout('templates/Master', ['title' => 'Create Post']) ?>

<form action="/post/create" method="post">
    <div>
        <label for="title">Title</label>
        <input type="text" name='title'>
    </div>
    <div>
        <label for="content">Content</label><br>
        <input type="text" name='content'>
    </div>
    <button type="submit">Criar</button>
</form>
