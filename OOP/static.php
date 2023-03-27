<?php  

class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return 'halo ' . self::$angka++ . ' kali' .'<br>';
    }
}


echo ContohStatic::$angka;

echo "<hr>";

echo ContohStatic::halo();
echo ContohStatic::halo();
echo ContohStatic::halo();

echo "<br>";
echo "<hr>";
echo "<hr>";

class Contoh {
    public static $angka = 1; //Jika mengubah Properties Menjadi static maka Nilai Static akan selalu tetap meskipun object di instansiasi berulang kali

    public function halo()
    {
        return 'halo ' . self::$angka++ .' kali'. '<br>';
    }
}

$objek = new Contoh;

echo "<br>";
echo $objek-> halo();
echo $objek-> halo();
echo $objek-> halo();
echo $objek-> halo();

echo "<hr>";
echo "<hr>";

$objek2 = new Contoh;
echo "<br>";
echo $objek2-> halo();
echo $objek2-> halo();
echo $objek2-> halo();
echo $objek2-> halo();