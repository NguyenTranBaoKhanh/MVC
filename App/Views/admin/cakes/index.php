<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cakes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= DOCUMENT_ROOT ?>/admin">Home</a></li>
                    <li class="breadcrumb-item active">Cakes</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header ">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Cakes list</h5>
                            <a class="btn btn-primary" href="<?= DOCUMENT_ROOT ?>/admin/cakes/create">Create</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Size</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['cakes'] as $i => $cake) : ?>
                                    <tr>
                                        <td><?= ($i + 1) ?></td>
                                        <td><?= $cake['name'] ?></td>
                                        <td><?= $cake['price'] ?></td>
                                        <td><?= $cake['size'] ?></td>
                                        <td><img style="max-width: 100px;" class="img-thumbnail mx-auto d-block" src="<?= IMAGES_URL ?>/cakes/<?= $cake['image'] ?>" alt="cake"></td>
                                        <td>
                                            <div class=" text-center">
                                                <a id="edit" href="<?= DOCUMENT_ROOT ?>/admin/cakes/edit/<?= $cake['id'] ?>" type="button" class="btn btn-primary mr-2">Edit</a>
                                                <a id="delete" href="<?= DOCUMENT_ROOT ?>/admin/cakes/delete/<?= $cake['id'] ?>" type="button" class="btn btn-danger" >Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

