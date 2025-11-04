<?php $this->layout('templates/Master', ['title' => 'Post Page']) ?>

<div class="w-50">
<h1><?= $post->title ?></h1>

<p><?= $post->content ?></p>

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
        <input type="text" class="form-control w-50 d-inline me-2" name="content_comment" required>
        <button type="submit" class="btn btn-primary">Comment</button>
    </div>
</form>
</div>
</div>
