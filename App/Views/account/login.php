
<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login <small>It's free!</small></h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?= DOCUMENT_ROOT ?>/account/authenticate" method="POST">

                        <?php if (isset($data['error'])) : ?>

                            <?php foreach ($data['error'] as $index => $error) : ?>

                                <p style="color: red;"><?= $error ?></p>

                            <?php endforeach; ?>

                        <?php endif; ?>

                        <?php if (isset($data['message'])) : ?>

                            <?php foreach ($data['message'] as $index => $message) : ?>

                                <p style="color: #428bca;"><?= $message ?></p>

                            <?php endforeach; ?>

                        <?php endif; ?>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
                        </div>
                        <input type="submit" value="Login" class="btn btn-danger btn-block">
                        <p style="margin-top: 20px;" class="text-center">No account? <a href="<?= DOCUMENT_ROOT ?>/account/register">Register</a> </p>
                        <!-- <a class="d-block text-center mt-2" href="">Have an acount? Sign In</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>