<?php
function cetak_gambar($size)
{
    for ($i=1; $i<=$size; $i++)
    {
        for ($a=1; $a<=$size; $a++)
        {
            if($i%2 == 0)
            {
                if($a%2 == 0)
                {
                    echo '=';
                }
                else
                {
                    echo '*';
                }
            }
            else
            {
                if($a%3 == 0)
                {
                    echo '=';
                }
                else
                {
                    echo '*';
                }
            }
            
        }
        echo '<br>';
    }
}

cetak_gambar(5);
?>
