<?php
echo password_hash("1234", PASSWORD_BCRYPT)."\n";


$hash = '$2y$10$Llme1nljLV2c6qmvyNj6y.Eov2J10.BMdQSUc6SI7i2tLJVXl49Nu';

if (password_verify('1234', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}



?>