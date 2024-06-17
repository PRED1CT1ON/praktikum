<?= $this->include('templates/header') ?>
<div class="mt-4">
    <h1><?= $post['title'] ?></h1>
    <div class="mb-3">
        <p><?= $post['content'] ?></p>
        <p><strong>Category:</strong> <?= $post['category'] ?></p>
        <p><strong>Tags:</strong> <?= $post['tags'] ?></p>
    </div>
    <h2>Comments</h2>
    <ul class="list-group mb-3">
        <?php foreach($comments as $comment): ?>
            <li class="list-group-item"><?= $comment['comment'] ?></li>
        <?php endforeach; ?>
    </ul>
    <form action="/blog/comment/<?= $post['id'] ?>" method="post">
        <div class="form-group">
            <label for="comment">Add Comment</label>
            <textarea class="form-control" name="comment" id="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->include('templates/footer') ?>
