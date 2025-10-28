<html>
  <head>
    <title><?=$this->e($title)?></title>
  </head>
  <body>
    <header>
      <nav>
        <?php if ($this->section('navbar')): ?>
            <?=$this->section('navbar')?>
        <?php else: ?>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/post/create">Create post</a></li>
                <li><a href="/profile">Profile</a></li>
                <li><a href="/logout">logout</a></li>
            </ul>
        <?php endif ?>
      </nav>
    </header>
    <main>
      <?=$this->section('content')?>
    </main>
    <footer>
        blogif
    </footer>
  </body>
</html>
