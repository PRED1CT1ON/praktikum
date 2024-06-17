<?= $this->include('templates/header') ?>
<div class="mt-4">
    <h1>Blog Posts</h1>
    <a class="btn btn-primary mb-3" href="/blog/create">Create Post</a>
    <ul class="list-group">
        <?php foreach($posts as $post): ?>
            <li class="list-group-item">
                <a href="/blog/view/<?= $post['id'] ?>"><?= $post['title'] ?></a>
                <span class="float-right">
                    <a class="btn btn-sm btn-info" href="/blog/edit/<?= $post['id'] ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="/blog/delete/<?= $post['id'] ?>">Delete</a>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<?= $this->include('templates/footer') ?>
