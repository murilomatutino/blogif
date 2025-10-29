<?php $this->layout('templates/Master', ['title' => 'Home Page']) ?>

<h1>Home</h1>
<section>
    <?php foreach ($posts as $post): ?>
    <article>
        <h2><?php echo $post->title ?></h2>
        <p><?php echo $post->content ?></p>
        <div>
            Author: <?php echo $post->author ?><br>
            Create: <?php echo $post->create_at ?>
        </div>
        <div>
            <h3>Comments</h3>
            <div>
                <?php foreach ($comments as $comment): ?>
                    <?php if ($comment->id_post == $post->id): ?>
                    <div>
                        <?php echo $comment->content ?>. Author: <?php echo $comment->author ?>
                    </div>
                    <?php endif ?>
                <?php endforeach; ?>
            </div>
            <form action="/comment/create" method='post'>
                <div>
                    <input type="hidden" name="id_post" value="<?php echo $post->id ?>">
                    <input type="hidden" name="author_comment" value="<?php echo  $id_user ?>">
                    <input type="text" name="content_comment">
                    <button type="submit">Comment</button>
                </div>
            </form>
        </div>
    </article>
    <?php endforeach; ?>
</section>