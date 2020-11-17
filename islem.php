<?php include "baglan.php" ?>


<?php

if (isset($_FILES['dosya'])) {
    $hata = $_FILES['dosya']['error'];
    if ($hata != 0) {
        echo 'Yüklenirken bir hata gerçekleşmiş.';
    } else {
        $boyut = $_FILES['dosya']['size'];
        if ($boyut > (1024 * 1024 * 3)) {
            echo 'Dosya 3MB den büyük olamaz.';
        } else {
            $tip = $_FILES['dosya']['type'];
            $isim = $_FILES['dosya']['name'];
            $uzanti = explode('.', $isim);
            $uzanti = $uzanti[count($uzanti) - 1];
            if ($tip != 'image/jpeg' || $uzanti != 'jpg') {
                echo 'Yanlızca JPG dosyaları gönderebilirsiniz.';
            } else {
                $dosya = $_FILES['dosya'];
                copy($dosya, 'dosyalar/' . $_FILES['dosya']['name']);
                echo 'Dosyanız upload edildi!';
            }
        }
    }
}


echo $dosya;


if (isset($_POST['dosyakaydet'])) {
	$ayarekle=$db->prepare("INSERT INTO dosya SET
		dosya_yol=:dosya_yol
		");

	$insert=$ayarekle->execute(array(
		'dosya_yol' => $_FILES['dosya']['name']
	));


	if ($insert) {

		Header("Location:index.php?durum=ok");

	} else {

		Header("Location:index.php?durum=no");
	}

}



?>