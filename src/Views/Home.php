<?php $this->layout('templates/Master', ['title' => 'Home Page']) ?>

<h1>Home</h1>
<section>
    <?php foreach ($posts as $post): ?>
    <article>
        <h2><?php echo $post->title ?></h2>
        <p><?php echo $post->content ?></p>
        <aside>
            Author: <?php echo $post->author ?><br>
            Create: <?php echo $post->create_at ?>
        </aside>
    </article>
    <?php endforeach; ?>
</section>