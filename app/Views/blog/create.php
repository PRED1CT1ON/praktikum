<?= $this->include('templates/header') ?>
<div class="mt-4">
    <h1>Create Post</h1>
    <form action="/blog/store" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content"></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" name="category" id="category">
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" name="tags" id="tags">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<?= $this->include('templates/footer') ?>
