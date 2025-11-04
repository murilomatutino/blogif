<?php $this->layout('templates/Master', ['title' => 'Home Page']) ?>

<div class="row row-cols-1 row-cols-md-2 g-4 w-75">
    <?php foreach ($posts as $post): ?>

    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post->title ?></h5>
                <p class="card-text"><?php echo $post->summary ?></p>

                <div>
                    Author: <?php echo $post->author ?><br>
                    Create: <?php echo $post->create_at ?>
                </div>

                <a href="post/show?id=<?= $post->id?>" class="btn btn-primary mt-2">See more</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>