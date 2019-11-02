<?php 
    function sort_data($array)
    {
        for ($i=1; $i <= 10; $i++) 
        { 
            echo "angka".$array[$i]." : ";
            // for ($i=1; $i <= 10; $i++) 
            // { 
            //     echo "angka".$i." : ";
            //     for 
            // }
        }
    }

    $input = [1,2,3,4,5];
    sort_data($input);

?>

