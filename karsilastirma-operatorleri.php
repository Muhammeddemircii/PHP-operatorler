<?php
    $a="10";
    $b=20;
    $username = "sadikturan";
    $sonuc = ($a == $b);
    $sonuc = ($username == "sadikturan");
    $sonuc = ($username != "sadikturan");
    $sonuc = ($a === $b); //tipleri eşitse 
    $sonuc = ($a !== $b);
    $sonuc = ($a >= $b);
    $sonuc = ($a <= $b);
    $sonuc = ($a <=> $b); //a b'ye eşit mi diye sorar sayısal veri gösterir. sol taraf büyükse 1 sağ taraf büyükse -1 verisi dönderir.
    echo var_dump($sonuc);




?>