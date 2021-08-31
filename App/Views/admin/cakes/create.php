<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cakes create</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT ?>/admin">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?= DOCUMENT_ROOT ?>/admin/cakes">Cake</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">

        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Cake infomation</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?= DOCUMENT_ROOT ?>/admin/cakes/store" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="category">Categories</label>
                        <select name="category" type="email" class="form-control" id="category" placeholder="" required>
                            <option value="" disabled selected>Select one</option>
                            <?php foreach ($data['categories'] as $i => $category) : ?>

                                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>

                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input name="price" type="number" class="form-control" id="price" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input name="size" type="text" class="form-control" id="size" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" type="text" class="form-control" id="discription" placeholder="" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cakeimage">Cake image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="cakeimage" type="file" class="custom-file-input" id="cakeimage" required>
                                <label class="custom-file-label" for="cakeimage">Choose file</label>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer float-right">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</section>