<?php
function hitung_kembalian($uang_belanja, $uang_diterima)
{
    $uang = $uang_diterima - $uang_belanja;

    $pecahan50  =   $uang/50000;
    $sisa50     =   $uang%50000;

    $pecahan20  =   $sisa50/20000;
    $sisa20     =   $sisa50%20000;

    $pecahan10  =   $sisa20/10000;
    $sisa10     =   $sisa20%10000;

    $pecahan5   =   $sisa10/5000;
    $sisa5      =   $sisa10%5000;

    $pecahan2   =   $sisa5/2000;
    $sisa2      =   $sisa5%2000;

    $pecahan1   =   $sisa2/1000;
    $sisa1      =   $sisa2%1000;

    $pecahan500 =   $sisa1/500;
    $sisa500    =   $sisa1%500;

    if((int)$pecahan50>0)
    {
        echo ''.(int) $pecahan50.'X 50000 <br>';
    }
    if((int)$pecahan20>0)
    {
        echo ''.(int) $pecahan20.'X 20000 <br>';
    }
    if((int)$pecahan10>0)
    {
        echo ''.(int) $pecahan10.'X 10000 <br>';
    }
    if((int)$pecahan5>0)
    {
        echo ''.(int) $pecahan5.'X 5000 <br>';
    }
    if((int)$pecahan2>0)
    {
        echo ''.(int) $pecahan2.'X 2000 <br>';
    }
    if((int)$pecahan1>0)
    {
        echo ''.(int) $pecahan1.'X 1000 <br>';
    }
    if((int)$pecahan500>0)
    {
        echo ''.(int) $pecahan500.'X 500 <br>';
    }

}

hitung_kembalian(110500, 200000);
?>
