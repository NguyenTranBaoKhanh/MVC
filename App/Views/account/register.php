<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    body{
    background-color: #525252;
}
.centered-form{
	margin-top: 100px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style> -->
<!-- ---- Include the above in your HEAD tag -------- -->

<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Register <small>It's free!</small></h3>

                </div>
                <div class="panel-body">
                    <?php if (isset($data['error'])) : ?>

                        <?php foreach ($data['error'] as $index => $error) : ?>

                            <p style="color: red;"><?= $error ?></p>

                        <?php endforeach; ?>

                    <?php endif; ?>
                    <form role="form" action="<?= DOCUMENT_ROOT ?>/account/signup" method="POST">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="last_name" class="form-control input-sm" placeholder="Phone">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="address" id="" class="form-control input-sm" placeholder="Address">
                        </div>

                        <div class="form-group">
                            <input onkeyup="checkEmail()" type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                            <p style="margin-top: 5px;" class="" id="checkEmailMessage"></p>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                        <!--<div class="form-group">-->
                        <!--    <label for="">Avatar</label>-->
                        <!--	<input type="file" name="avatar" id="avatar" class="form-control input-sm">-->
                        <!--</div>-->

                        <input type="submit" value="Register" class="btn btn-danger btn-block">
                        <p style="margin-top: 20px;" class="text-center">Have an account? <a href="<?= DOCUMENT_ROOT ?>/account">Log In</a> </p>
                        <!-- <a class="d-block text-center mt-2" href="">Have an acount? Sign In</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
    function checkEmail() {

        var email = document.getElementById('email');

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("demo").innerHTML = this.responseText;
                console.log(this.responseText);

                if(this.responseText==="false"){
                    document.getElementById('checkEmailMessage').innerHTML="Email already exists!";
                    document.getElementById('checkEmailMessage').style.color="red"
                }else if(this.responseText==="true"){
                    document.getElementById('checkEmailMessage').innerHTML="Email valid!";
                    document.getElementById('checkEmailMessage').style.color="green"
                }else{
                    document.getElementById('checkEmailMessage').innerHTML="";
                }

                if(email.value==""){
                    document.getElementById('checkEmailMessage').innerHTML="";
                }
            }
        };
        xhttp.open("GET", "<?= DOCUMENT_ROOT ?>/account/checkEmail?email=" + email.value, true);
        xhttp.send();
    }
</script>