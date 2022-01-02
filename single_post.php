<?php
    include('includ/dbCon.php');
    include('includ/header.php');
    $id                = $_GET["id"];
    $single_user_query = " SELECT * FROM user WHERE id=$id";
    $single_user_data  = mysqli_query($db_connect,$single_user_query);
    $asscoseated       = mysqli_fetch_assoc($single_user_data);
?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header text-center"><h3>Single User Information</h3></div>
                        <div class="card-footer">
                            <table class="table table-dark">
                                <div class="row">
                                        <tr>
                                            <th>NAME</th>
                                            <td><?php echo $asscoseated["name"] ?></td>
                                        </tr>  
                                        <tr>
                                            <th>EMAIL</th>
                                            <td><?php echo $asscoseated["email"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>PASSWORD</th>
                                            <td><?php echo $asscoseated["pass"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>GENDER</th>
                                            <td><?php echo $asscoseated["gender"] ?></td>
                                        </tr>
                                        <tr>
                                            <th>COUNTRY</th>
                                            <td><?php echo $asscoseated["country"] ?></td>
                                        </tr>
                                </div>
                            </table>
                        </div>
                        <a href="reg_post.php" class="btn text-danger">Back</a>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>


<?php 
    include('includ/footer.php');
?>