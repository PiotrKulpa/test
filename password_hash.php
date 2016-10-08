<?php
//uzytkownik wprowadza hasło za pomoca pola input
$input = 'ala ma kota';

//hasło zaostaje zaszyfrowane za pomoca komendy password_hash
$hash =  password_hash($input, PASSWORD_BCRYPT)."\n";

//porownujemy hash z wprowadzonym haslem
if (password_verify($input, $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}



?>