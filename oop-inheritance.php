<?php
/*
    Nama tugas : OOP Inheritance (pewarisan class)
    Nama siswa : Muhammad Yusup
    Kelas      : X-RPL
    Sekolah    : SMKN 10 JAKARTA
    Tanggal    : Rabu, 14 Februari 2018
*/
    
    class motor{
        public $warna;
        public $merk;
        public $jenis;

        function __construct(){
            $this->warna = "";
            $this->merk = "";
            $this->jenis = "";
        }

        public function getWarna(){
            return $this->warna;
        }
        
        public function getMerk(){
            return $this->merk;
        }

        public function getJenis(){
            return $this->jenis;
        }


        public function setWarna($warna){
            $this->warna = $warna;
        }
        
        public function setMerk($merk){
            $this->merk = $merk;
        }

        public function setJenis($jenis){
            $this->jenis = $jenis;
        }

        function __desctruct(){
            // nothing to do here wkwk
        }
    }

    // 

    class matic extends motor{
        public function setSpesifikasi($merk, $warna){
            $this->setMerk($merk);
            $this->setJenis('matic');
            $this->setWarna($warna);
        }

        public function summary(){
            return $this->getMerk()." jenisnya ".$this->getJenis()." dan warnanya ".$this->getWarna().".<br>";
        }
    }

    class bebek extends motor{
        public function setSpesifikasi($merk, $warna){
            $this->setMerk($merk);
            $this->setJenis('bebek');
            $this->setWarna($warna);
        }

        public function summary(){
            return $this->getMerk()." jenisnya ".$this->getJenis()." dan warnanya ".$this->getWarna().".<br>";
        }
    }

    class underbone extends motor{
        public function setSpesifikasi($merk, $warna){
            $this->setMerk($merk);
            $this->setJenis('underbone');
            $this->setWarna($warna);
        }

        public function summary(){
            return $this->getMerk()." jenisnya ".$this->getJenis()." dan warnanya ".$this->getWarna().".<br>";
        }
    }

    class sport extends motor{
        public function setSpesifikasi($merk, $warna){
            $this->setMerk($merk);
            $this->setJenis('sport');
            $this->setWarna($warna);
        }

        public function summary(){
            return $this->getMerk()." jenisnya ".$this->getJenis()." dan warnanya ".$this->getWarna().".<br>";
        }
    }

    $motor_matic = new matic();
    $motor_matic->setSpesifikasi("Yamaha Lexi 125", "Biru");
    echo $motor_matic->summary();

    $motor_matic->setSpesifikasi("Honda Vario CBS", "Silver");
    echo $motor_matic->summary();

    echo "<br><br>";

    $motor_bebek = new bebek();
    $motor_bebek->setSpesifikasi("Yamaha Jupiter", "Hitam");
    echo $motor_bebek->summary();

    $motor_bebek = new bebek();
    $motor_bebek->setSpesifikasi("Honda Revo", "merah");
    echo $motor_bebek->summary();

    echo "<br><br>";

    $motor_underbone = new underbone();
    $motor_underbone->setSpesifikasi("Satria F 150", "Hitam");
    echo $motor_underbone->summary();

    $motor_underbone = new underbone();
    $motor_underbone->setSpesifikasi("Yamaha Jupiter MX 150", "merah");
    echo $motor_underbone->summary();

    echo "<br><br>";

    $motor_sport = new sport();
    $motor_sport->setSpesifikasi("Honda CBR 150 R", "merah");
    echo $motor_sport->summary();

    $motor_sport = new sport();
    $motor_sport->setSpesifikasi("Yamaha R15", "biru");
    echo $motor_sport->summary();

    $motor_sport = new sport();
    $motor_sport->setSpesifikasi("Suzuki GSX R 150", "biru");
    echo $motor_sport->summary();
?>
