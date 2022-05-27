<?php 

//Single Quote
echo 'Nama : ';
echo 'Omar Khadaffi';
echo "\n";

//Double Quotes
echo "Nama : ";
echo "Omar Khadaffi";
echo "\n";
    //bisa pake escape sequence
    echo "Othman\t Omar\t khadaffi\n";

//Multiline String (heredoc & Nowdoc)
    //heredoc (seperti double quote)
    echo
    <<<OMR
    Omar adalah seorang pelajar yang hidup di   Jakarta
    Ia lahir di tanggal 14 oktober tahun 2004 "ditempat"
    Tidur rumah sakit

    
    OMR;

    //Nowdoc (Seperti Single quote)
    echo
    <<<'OMR'
    Omar adalah seorang pelajar yang hidup di   Jakarta
    Ia lahir di tanggal 14 oktober tahun 2004 "ditempat"
    Tidur rumah sakit

    OMR;




?>