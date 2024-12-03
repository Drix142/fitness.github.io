<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = htmlspecialchars($_POST['jmeno']);
    $email = htmlspecialchars($_POST['email']);
    $zprava = htmlspecialchars($_POST['zprava']);

    // Email details
    $prijemce = "mujuvenageq@vintomaper.com";
    $predmet = "Fitness zpráva od: $jmeno";
    $celaZprava = "Jméno: $jmeno\nEmail: $email\nZpráva:\n$zprava";

    // Send email
    if (mail($prijemce, $predmet, $celaZprava)) {
        echo "<p>Zpráva úspěšně poslána.</p>";
    } else {
        echo "<p>Zpráva se nepodařila poslat.</p>";
    }
}
?>
