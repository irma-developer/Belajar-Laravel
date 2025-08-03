<?php
class Siswa{
    public $nama;
    public $nilai;

    public function __construct($nama, $nilai) {
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    public function status() {
        return $this->nilai >= 75 ? "LULUS🎉" : "REMEDIAL😢";
    }
}
?>

