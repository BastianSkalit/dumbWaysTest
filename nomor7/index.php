<?php
// Create database connection using config file
include 'include/config.php';

// Fetch all users data from database
$result = mysqli_query($config, "SELECT * FROM user ORDER BY id_user DESC");
$news = mysqli_query($config, "SELECT id_news, title, image, deskripsi, create_time, name as penulis FROM news JOIN user ON news.id_user=user.id_user ORDER BY id_news DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
    <a href="add_user.php">Add New User</a><br/><br/>
    <table width='80%' border=1>
        <tr>
            <th>Name</th> 
            <th>Email</th> 
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['name']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['role']."</td>";    
            echo "<td><a href='edit_user.php?id_user=$user_data[id_user]'>Edit</a> | <a href='delete_user.php?id_user=$user_data[id_user]'>Delete</a></td></tr>";        
        }
        ?>
    </table>
    <br>
    <a href="add_news.php">Add News</a><br/><br/>
    <table width='80%' border=1>
        <tr>
            <th>Title</th> 
            <th>Image</th> 
            <th>Description</th>
            <th>Create Time</th>
            <th>Penulis</th>
            <th>Action</th>
        </tr>
        <?php  
        while($news_data = mysqli_fetch_array($news)) {
        ?>         
            <tr>
                <td><?php echo($news_data['title']);?></td>
                <td><img src='image/<?php echo($news_data['image']);?>'></td>
                <td><?php echo($news_data['deskripsi']);?></td></td>
                <td><?php echo($news_data['create_time']);?></td></td>  
                <td><?php echo($news_data['penulis']);?></td></td>        
                <td>
                    <a href="edit_news.php?id_news=<?php echo($news_data['id_news']);?>"> Edit</a> | 
                    <a href="delete_news.php?id_news=<?php echo($news_data['id_news']);?>">Delete</a>
                </td>
            </tr>        
        <?php
            }
        ?>
    </table>
</body>
</html>