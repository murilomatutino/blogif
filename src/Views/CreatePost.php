<?php $this->layout('templates/Master', ['title' => 'Create Post']) ?>

<div class="w-25">
  <form  action="/post/create" method="post">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
    </div>
    <div class="mb-3">
      <label for="summary" class="form-label">Summary</label>
      <input type="text" class="form-control" id="summary" aria-describedby="summary" name="summary">
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="file" class="form-control" id="summary" aria-describedby="summary" name="image">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea name="content" id="content" class="form-control h-25"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript" src="../assets/js/text_area.js"></script>