<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `crud` SET `first_name`= '$first_name',`last_name`='$last_name',
    `email`='$email',`gender`='$gender' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Data updated successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>PHP Crud Application</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #00ff5573;">
        PHP Crud Application
    </nav> 

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit User Information/h3>
            <p class="text-muted">Click update after changing any information</p>
        </div>

        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM 'crud' WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">

                        <div class="col">
                            <label class="from-label">First Name:</label>
                            <input type="text" class="from-control" name="first_name"
                            value="<?php echo $row['first_name'] ?>">
                        </div>

                        <div class="col">
                            <label class="from-label">Last Name:</label>
                            <input type="text" class="from-control" name="last_name"
                            value="<?php echo $row['last_name'] ?>">
                        </div>
                </div>

                <div class="mb-3">
                    <label class="from-label">Email:</label>
                    <input type="email" class="from-control" name="email"
                    value="<?php echo $row['email'] ?>">
                </div>

                <div class="from-group mb-3">
                    <label>Gender:</label>  &nbsp;
                    <input type="radio" class="from-check-input" name="gender"
                    id="male" value="male" <?php echo ($row['gender']=='male')?
                    "checked":""; ?>>
                    <label for="male" class="from-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="from-check-input" name="gender"
                    id="female" value="female" <?php echo ($row['gender']=='female')?
                    "checked":""; ?>>
                    <label for="female" class="form-input-label">Female</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Updat e</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>

            </form>
        </div>
    </div>    

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>