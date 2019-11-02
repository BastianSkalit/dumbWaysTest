<html>
<head>
    <title>Add News</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="action_news.php" method="post" name="form1" enctype="multipart/form-data"
        <table width="25%" border="0">
            <tr> 
                <td>Title</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr> 
            <tr> 
                <td>Image</td>
                <td><input type="file" class="custom-file-input" name="image"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr> 
                <td>Penulis</td>
                <td>
                    <select name="id_user">
                    <?php 
                        include 'include/config.php';       
                        $user_result = mysqli_query($config, "SELECT * FROM user ORDER BY id_user DESC");
                        while($user_data = mysqli_fetch_array($user_result)) {         
                    ?>
                        <option value="<?php echo($user_data['id_user']);?>">
                            <?php echo($user_data['name']);?>
                        </option>
                    <?php
                        }
                    ?>
                    </select>
            </tr>

            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['role'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$role')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>