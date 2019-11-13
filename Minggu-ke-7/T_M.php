<?php
    //submit nama
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        echo "Nama = $nama <br>";

        //submit alamat
        if(isset($_POST['alamat'])){
            $alamat= $_POST['alamat'];
            if($alamat!=""){
                echo "Alamat = $alamat";
            }
        }

        //submit jenis kelamin
        echo "<br>";
        if(isset($_POST['kelamin'])){
            $kel= $_POST['kelamin'];
            echo "Jenis Kelamin = $kel";
        }

        //submit golongan darah
        echo "<br>";
        if(isset($_POST['goldar'])){
            $goldar= $_POST['goldar'];
            echo "Golongan Darah = $goldar";
        }

        //submit hobi
        echo "<br>";
        if(isset($_POST['hobi'])){
            $hobi= $_POST['hobi'];
            echo "Hobi = $hobby";
        }
        
        //submit keterangan lainnya
        echo "<br>";
        if(isset($_POST['lainnya'])){
            $Keterangan= $_POST['lainnya'];
            if($alamat!=""){
                echo "Keterangan Lain = $lainnya";
            }
        }
    }
?>