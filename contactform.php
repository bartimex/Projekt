<?php

if(isset($_POST['wyślij'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $mailFrom = $_POST['mail'];
    $wiadomosc = $_POST['wiadomosc'];

    $mailTo = 'hisky.cloth@gmail.com';
    $headers = 'From: '.$mailFrom;
    $txt = "Dostałeś wiadomośc e-mail od: ".$imie.".\n\n".$wiadomosc;

    mail($mailTo, $nazwisko, $txt, $headers);
    header("Location: kontakt.php?mailsend");
}
?>