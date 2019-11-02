<?php
function hitungbarang($kualitas, $kuantitas)
{
    if($kualitas == 'A')
    {
        if($kuantitas > 10)
        {
            $potongan = $kuantitas*500;
            $harga = $kuantitas*3000;
            $total = $harga - $potongan;
            echo("Total Harga Barang : ".$harga."<br>");
		    echo("Potongan : ".$potongan."<br>");
		    echo("Total yang harus dibayar : ".$total."<br>");

        }
        else
        {
            $total = $kuantitas*3000;
		    echo("Total yang harus dibayar : ".$total);
        }
    }
    else if ($kualitas == 'B')
    {
        if($kuantitas > 5)
        {
            $harga = $kuantitas*3000;
            $potongan = $harga*0.5;
            $total = $harga - $potongan;
            echo("Total Harga Barang : ".$harga."<br>");
		    echo("Potongan : ".$potongan."<br>");
		    echo("Total yang harus dibayar : ".$total."<br>");

        }
        else
        {
            $total = $kuantitas*3500;
		    echo("Total yang harus dibayar : ".$total);
        }
    }
    else if ($kualitas == 'C')
    {
        $total = $kuantitas*5000;
        echo("Total yang harus dibayar : ".$total);
    }
    else
    {
        echo("Kualitas barang yang anda masukkan tidak ada");
    }

}

hitungbarang('A', 11);
?>
