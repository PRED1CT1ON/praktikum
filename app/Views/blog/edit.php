<?= $this->include('templates/header') ?>
<div class="mt-4">
    <h1>Edit Post</h1>
    <form action="/blog/update/<?= $post['id'] ?>" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="<?= $post['title'] ?>">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content"><?= $post['content'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" name="category" id="category" value="<?= $post['category'] ?>">
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" name="tags" id="tags" value="<?= $post['tags'] ?>">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
<?= $this->include('templates/footer') ?>
