<?php $this->layout('templates/Master', ['title' => 'Home Page']) ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 ">
            <div class="row row-cols-2">
                <?php foreach ($posts as $post): ?>
                    <div class="card col-5 mb-5 me-5 p-0">
                        <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $post->title ?></h5>
                            <p class="card-text"><?= $post->summary ?></p>

                            <div>
                                Author: <?= $post->author ?><br>
                                Create: <?= $post->create_at ?>
                            </div>

                            <a href="post/show?id=<?= $post->id?>" class="btn btn-primary mt-2">See more</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- aba pesquisa-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search">
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>

            <!-- aba categorias -->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Web Design</a></li>
                                <li><a href="#!">HTML</a></li>
                                <li><a href="#!">Freebies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">JavaScript</a></li>
                                <li><a href="#!">CSS</a></li>
                                <li><a href="#!">Tutorials</a></li>
                                 <li><a href="#!">Python</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>