<?php
// include database connection file
include 'include/config.php';

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_news= $_POST['id_news'];

    $title=$_POST['title'];
    $image=$_POST['image'];
    $deskripsi=$_POST['deskripsi'];
    $file_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    // update news data
    $result = mysqli_query($config, "UPDATE news SET title='$title', image='$image',deskripsi='$deskripsi' WHERE id_news=$id_news");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected news data based on id
// Getting id from url
$id_news = $_GET['id_news'];

// Fetech user data based on id
$result = mysqli_query($config, "SELECT title, image, deskripsi, create_time, user.id_user, name as penulis FROM news JOIN user ON news.id_user=user.id_user ORDER BY id_news DESC");

while($news_data = mysqli_fetch_array($result))
{
    $title          = $news_data['title'];
    $image          = $news_data['image'];
    $deskripsi      = $news_data['deskripsi'];
    $create_time    = $news_data['create_time'];
    $id_user        = $news_data['id_user'];
    $penulis        = $news_data['penulis'];
}
?>
<html>
<head>  
    <title>Edit News Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_news" method="post" action="edit_news.php" enctype="multipart/form-data>
        <table border="0">
            <tr> 
                <td>Title</td>
                <td><input type="text" name="title" value=<?php echo $title;?>></td>
            </tr>
            <tr> 
                <td>Image</td>
                <img src="image/<?php echo $image;?>">
                <input type="file" class="custom-file-input" name="image">
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
            </tr>
            <tr> 
                <td>Penulis</td>
                <td>         
                    <select name="role">
                        <?php    
                            $user_result = mysqli_query($config, "SELECT * FROM user ORDER BY id_user DESC"); 
                            while($user_data = mysqli_fetch_array($user_result))
                            {
                        ?>      
                        <option value="<?php echo($user_data['id_user']);?>" <?php if ($user_data['id_user']==$id_user){echo("selected");}?>><?php echo($user_data['name']);?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><input type="hidden" name="id_news" value=<?php echo $_GET['id_news'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>