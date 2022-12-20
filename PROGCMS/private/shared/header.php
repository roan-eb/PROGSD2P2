<?php


$root = substr(
    $_SERVER['SCRIPT_NAME'],
    0,
    strpos($_SERVER['SCRIPT_NAME'], '/public') + 10
);
define("ROOT_URL", $root);

function url_path($path)
{
    if ($path[0] != '/') {
        $path = "/" . $path;
    }
    return ROOT_URL . $path;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo url_path("PROGCMS/public/style.css") ?>">
    <title>Opdracht</title>
</head>

<body>
    <header>
        <h2>Nieuwe header</h2>
    </header>
</body>

</html> 