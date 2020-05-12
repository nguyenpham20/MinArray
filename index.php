<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$array = [2,3,4,5,6,-1];
$min = $array[0];
for ($i=0;$i<count($array);$i++) {
    if ($min>$array[$i]) {
        $min = $array[$i];
            echo "$min";

    }
}
?>
</body>
</html>
