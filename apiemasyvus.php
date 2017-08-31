<pre>
<?php
 
/*
 
$tekstas = "Šiandien nuostabi Diena.";
 
strtolower($tekstas);           // šiandien nuostabi diena.
strtoupper($tekstas);           //
 
strlen("1234567");              // 7
strpos($tekstas, "nuostabi");   // 9
 
str_replace("Diena", "Naktis", $tekstas);
 
 
ucwords("ignas");               // Ignas
str_shuffle($tekstas);
rtrim($tekstas, ".");
ltrim($tekstas, " ");
 
$tekstoSablonas = "Sveiki %s, jusu rezultatas yra %s";
 
$tekstas = sprintf("Sveiki %s, jusu rezultatas yra %s", "Ignai", "patenkinamas");
 
// MASYVAI
 
$masyvas1 = [99, "desimt", 55, 14];
$masyvas2 = ['Alfa', '15min','delfi','Lrytas'];
 
$masyvas3 = [[5,8],[8,7],[4,2],[7,8]]; // masyvai masyve arba multidimensinis masyvas
 
echo $masyvas3[1][1];
*/
 
$user1 = ["Vardas" => "Petras", "Pavarde" => "Jonaitis", "Amzius" => 91];
$user2 = ["Vardas" => "Jonas", "Pavarde" => "Petraitis", "Amzius" => 19];
$user3 = ["Vardas" => "Kazys", "Pavarde" => "Antanaitis", "Amzius" => 11];
 
$users = [$user1, $user2, $user3];
 
?>
 
<table width="100%">
    <tr>
        <td>Vardas</td>
        <td>Pavarde</td>
        <td>Amžius</td>
    </tr>
    <?php
        foreach ($users as $single_user) {
            echo "<tr>
            <td>" . $single_user['Vardas'] . "</td>
            <td>" . $single_user['Pavarde'] . "</td>
            <td>" . $single_user['Amzius'] . "</td>
            </tr>";
        }
    ?>
</table>
 
 
<?php
/*
$tekstas = "Laba diena";
 
$exploded = explode(" ", $tekstas); //grazina array
$imploded = implode("," $masyvas2); //grazina string
 
var_export($masyvas); // parodo kintamaji
 
sort($masyvas); // surusiuoja pagal dydi ir pakeicia raktus
asort($masyvas); // surusiuoja bet nepakeicia raktu
 
 
shuffle($masyvas);
 
$masyvas3 = array_merge($masyvas1, $masyvas2);
$masyvas4 = array_slice($masyvas2, 0, 2); // 1 reiskia kuriuo elementu pradedam ir kiek isimam
 
array_push(array, var)
count($masyvas2);
 
$users[count($users) - 1]