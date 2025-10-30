<?php $this->layout('templates/Master', ['title' => 'Create Post']) ?>

<form  action="/post/create" method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea name="content" id="content" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
