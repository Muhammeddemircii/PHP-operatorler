<?php
    $yas=20;
    $mezuniyet="lise";

    $sonuc=($yas>=18 and $mezuniyet=="lise");
    $sonuc=($yas>=18 and ($mezuniyet=="lise" or $mezuniyet=="üniversite"));

    $sonuc= !(false);
    echo var_dump($sonuc);

?>