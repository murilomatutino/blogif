<?php $this->layout('templates/Master', ['title' => 'Post Page']) ?>

<div class="d-flex w-100 justify-content-center mb-5">
<div class="w-50">
<h1><?= $post->title ?></h1>

<p><?= $post->content ?></p>

<section class="mt-5">
        <div class="card bg-light">
            <div class="card-body">
                <!-- Comment form-->
                <form action="/comment/create" method='post' class="mb-4">
                    <input type="hidden" name="id_post" value="<?= $post->id ?>">
                    <input type="hidden" name="author_comment" value="<?= $id_user ?>">
                    <textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!" name="content_comment" required></textarea>
                    <button type="submit" class="btn btn-primary mt-3">Comment</button>
                </form>
            
                <?php foreach ($comments as $comment): ?>
                    <?php if ($comment->id_post == $post->id): ?>
                    <div>
                        <!-- Single comment-->
                        <div class="d-flex mb-2">
                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/1a191a/fff.png&text=<?= $comment->author[0]?>" alt="user profile image" /></div>
                            <div class="ms-3">
                                <div class="fw-bold"><?= $comment->author ?></div>
                                <?= $comment->content ?>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                <?php endforeach; ?>                
            </div>
        </div>
    </section>
</div>
</div>