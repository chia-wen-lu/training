<?= $this->extend('templates\default') ?>
<?= $this->section('content') ?>

<div>
    <form action="/PostController/store" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1> Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Posts Title</label>
                    <input id="title" type="text" name="title">
                    <br><br>
                    <label for="content" class="col-md-4 col-form-label">Posts Content</label>
                    <textarea id="content" name="content"></textarea>
                </div>
				<br>
                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>