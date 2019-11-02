<?php
function generate($jumlah)
{   
    for($x=1;$x<=$jumlah;$x++)
    { 
        $template = "XXXX-XXXX-XXXX-XXXX";//bentuk
        $k = strlen($template);
        $sernum = "";
        for ($i=0; $i<$k; $i++)
        {
            switch($template[$i])
            {
                case 'X': $sernum .= chr(rand(65,90)); break;
                // case '9': $sernum .= rand(0,9); break;
                case '-': $sernum .= '-'; break;
            }
        }
        echo ("".$sernum."<br />");
    }
    
}


generate(3);
?>