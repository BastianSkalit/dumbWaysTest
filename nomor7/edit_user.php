<?php
// include database connection file
include 'include/config.php';

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_user    = $_POST['id_user'];
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $role       = $_POST['role'];

    // update user data
    $result = mysqli_query($config, "UPDATE user SET name='$name',email='$email',role='$role' WHERE id_user=$id_user");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id_user'];

// Fetech user data based on id
$result = mysqli_query($config, "SELECT * FROM user WHERE id_user=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $role = $user_data['role'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_user.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Role</td>
                <td>
                    <select name="role">
                        <option value="1" <?php if ($role==1){echo("selected");}?>>Super Admin</option>
                        <option value="2" <?php if ($role==2){echo("selected");}?>>Admin</option>
                        <option value="3" <?php if ($role==3){echo("selected");}?>>User</option>
                    </select>
            </tr>
            <tr>
                <td><input type="hidden" name="id_user" value=<?php echo $_GET['id_user'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>