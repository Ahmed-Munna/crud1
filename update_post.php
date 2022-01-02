<?php
    require('includ/dbCon.php');
    require('includ/header.php');
    $id                 = $_GET["id"];
    $update_data        = "SELECT * FROM user WHERE id=$id";
    $user_update_data   = mysqli_query($db_connect,$update_data);
    $update_data_assoc  = mysqli_fetch_assoc($user_update_data);
?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                    <div class="col-8">
                        <form action="update_user_post.php" method="post">
                        <div class="mb-3">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" value="<?php echo $update_data_assoc["name"] ?>" class="form-control" name="name">
                                <strong class="text-danger"><?php
                                if(isset($_GET["nam_err"])){
                                    echo $_GET["nam_err"];
                                }
                            ?></strong>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="text" class="form-control" value="<?php echo $update_data_assoc["email"] ?>" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <strong class="text-danger"><?php
                                if(isset($_GET["email_err"])){
                                    echo $_GET["email_err"];
                                }
                            ?></strong>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="text" value="<?php echo $update_data_assoc["pass"] ?>" class="form-control" name="password" id="exampleInputPassword1">
                                <strong class="text-danger"><?php
                                if(isset($_GET["pass_err"])){
                                    echo $_GET["pass_err"];
                                }
                            ?></strong>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </div>
                        </form>
                    </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>


<?php
    require('includ/footer.php');
?>
