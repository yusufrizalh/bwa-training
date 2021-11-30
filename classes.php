<?php
// mendeklarasikan class
class Mobil
{
    // object terdiri dari: attribute & method
    // mendeklarasikan attribute
    public $merk;
    public $tipe;
    public $roda;

    // mendeklarasikan method
    function set_merk($param_merk)
    {
        $this->merk = $param_merk;
    }
    function set_tipe($param_tipe)
    {
        $this->tipe = $param_tipe;
    }
    function set_roda($param_roda)
    {
        $this->roda = $param_roda;
    }

    function get_merk()
    {
        return $this->merk;
    }
    function get_tipe()
    {
        return $this->tipe;
    }
    function get_roda()
    {
        return $this->roda;
    }

    function kecepatan($kecepatan)
    {
        echo "Melaju dengan kecepatan: " . $kecepatan . " km/jam";
    }
}

// membuat object baru
$avanza = new Mobil();
$mobilio = new Mobil();

// menulis nilai
$avanza->set_merk("Toyota");
$avanza->set_tipe("CUV");
$avanza->set_roda(4);

$mobilio->set_merk("Honda");
$mobilio->set_tipe("Sedan");
$mobilio->set_roda(4);

// membaca nilai
echo "Mobil Avanza: <br>";
echo "Merk: " . $avanza->get_merk() . "<br>";
echo "Tipe: " . $avanza->get_tipe() . "<br>";
echo "Roda: " . $avanza->get_roda() . "<br>";
$avanza->kecepatan(80);
echo "<br>";
echo "<br>";

echo "Mobil Mobilio: <br>";
echo "Merk: " . $mobilio->get_merk() . "<br>";
echo "Tipe: " . $mobilio->get_tipe() . "<br>";
echo "Roda: " . $mobilio->get_roda() . "<br>";
$mobilio->kecepatan(120);
