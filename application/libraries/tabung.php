<?php
class tabung
{
    
    function data($jari, $tinggi)
    {
        $phi = 3.14;
        echo "Phi : $phi <br/>Jari-jari $jari <br/>Tinggi $tinggi";
    }
    function volume($jari, $tinggi)
    {
        $phi = 3.14;
        $volume = $phi * ($jari * $jari) * $tinggi;
        echo "Volume Tabung adalah : ".$volume;
        echo "<hr>";
    }

    function luaspermukaan($jari, $tinggi)
    {
        $phi = 3.14;
        $luaspermukaan = 2 * $phi * $jari * ($jari + $tinggi);
        echo "Luas Permukaan Tabung adalah ".$luaspermukaan;
        echo "<hr>";
    }

    function luasselimut($jari, $tinggi)
    {
        $phi = 3.14;
        $luasselimut = 2 * $phi * $jari * $tinggi;
        echo "Luas Selimut Tabung adalah : ".$luasselimut;
    }
}