<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $font = [
            'Times New Roman',
            'Calibri',
            'Arial',
            'Segoe UI'
        ];
        $karep = [
            'adsdfhsfghdfgsdfgtg',
            'asdshfdfaftqrgtd',
            'asdfhdgasdfasfgasf',
            'asdsdfsdfahdfgd',
            'adadhfgsadga',
            'adasdfhsrtyergdasd',
            'ffffffff',
            'dddddd'
        ];
        $werno = [
            'red',
            'blue',
            'green'
        ];
        ?>
        <table border="1">
        <?php
        $countt = count($karep);
        $fontt = $font[array_rand($font)];
        $karepp = $karep[array_rand($karep)];
        $weerno = $werno[array_rand($werno)];
        echo "<tr><th colspan='2'>asadfasdfasdfasdf " . date('d F Y') . "</th></tr>";
        echo "<tr><td width='50%' rowspan='" . ($countt + 1) . "' style='background: $weerno'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit delectus corrupti, quod consequuntur tempore laboriosam vitae voluptatem atque cupiditate nisi cumque rerum tenetur tempora harum nihil illum modi officia. Quaerat!</td></tr>";
        for($i=0;$i < $countt;$i++) {
            $fontt = $font[array_rand($font)];
        $karepp = $karep[array_rand($karep)];
        $weerno = $werno[array_rand($werno)];
            echo "<tr>";
            echo "<td style='font-family: $fontt; color: $weerno'>$karepp ($fontt)</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <hr>
    <br>
    <ul>
        <?php
        for($a=0;$a < $countt;$a++) {
            $fontt = $font[array_rand($font)];
            $karepp = $karep[array_rand($karep)];
            $weerno = $werno[array_rand($werno)];
            echo "<li style='font-family: $fontt; color: $weerno'>";
            echo "$karepp ($fontt)";
            echo "</li>";
        }
        ?>
        </li>
</body>
</html>