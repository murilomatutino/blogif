<?php $this->layout('templates/Master', ['title' => 'Home Page']) ?>

<div class="row row-cols-1 row-cols-md-2 g-4 w-75">
    <?php foreach ($posts as $post): ?>

    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post->title ?></h5>
                <p class="card-text"><?php echo $post->content ?></p>

                <div>
                    Author: <?php echo $post->author ?><br>
                    Create: <?php echo $post->create_at ?>
                </div>

                <div class="mt-3"> 
                    <h6>Comments</h6>
                    <div>
                        <?php foreach ($comments as $comment): ?>
                            <?php if ($comment->id_post == $post->id): ?>
                            <div>
                                <?php echo $comment->content ?>. Author: <?php echo $comment->author ?>
                            </div>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </div>

                    <form action="/comment/create" method='post' class="mt-3">
                        <div>
                            <input type="hidden" name="id_post" value="<?php echo $post->id ?>">
                            <input type="hidden" name="author_comment" value="<?php echo  $id_user ?>">
                            <input type="text" name="content_comment" required>
                            <button type="submit">Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>