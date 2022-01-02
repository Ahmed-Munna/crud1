<?php
    require('includ/dbCon.php');
    require('includ/header.php');

    $select_all = "SELECT * FROM `user`";
    $user_data  = mysqli_query($db_connect,$select_all);
?>


    <section>
        <div class="container">
            <div class="row">
                <h3 class="text-center">User list</h3>
                <div class="col-2"></div>
                <div class="col-8">
                <table class="table table-info">
                    <?php
                        if(isset($_GET["delete_success"])){?>
                            <div class="alert alert-danger" role="alert">
                               <?php echo $_GET["delete_success"];?>
                            </div>
                       <?php }?>
                       <?php
                        if(isset($_GET["update_success"])){?>
                            <div class="alert alert-success" role="alert">
                               <?php echo $_GET["update_success"];?>
                            </div>
                       <?php }?>
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">PASSWORD</th>
                            <th scope="col">GENDER</th>
                            <th scope="col">COUNTRY</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($user_data as $user){
                            ?>
                            <tr>
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo ucwords ($user['name'])?></td>
                            <td><?php echo ucwords ($user['email'])?></td>
                            <td><?php echo ucwords ($user['pass'])?></td>
                            <td><?php echo ucwords ($user['gender'])?></td>
                            <td><?php echo ucwords ($user['country'])?></td>
                            <td><a class="btn btn-primary" href="single_post.php?id=<?php echo $user['id'] ?>">View</a>
                            <a class="btn btn-danger" href="delete_user.php?id=<?php echo $user['id']?>">Delete</a>
                            <a class="btn btn-success" href="update_post.php?id=<?php echo $user['id']?>">Update</a>
                        
                            </td>
                            </tr>
                            <?php }?>
                        </tbody>
                        </table>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>









<?php
    require('includ/footer.php');
?>