<?php


function isEmpty($value){
    return empty($value);
}

function isValidEmail($value){
   $clean = filter_var($value, FILTER_VALIDATE_EMAIL);
   if($clean == false){
       return false;
   }

   return filter_var($clean, FILTER_VALIDATE_EMAIL);
}

$errors = [];

if ($_SERVER['PHP_SELF'] == 'POST'){
   $naam = $_POST("naam");
   $email = $_POST("email");
   $bericht = $_POST("bericht");

   if(isEmpty($naam)){
       $errors['naam'] = 'Vul uw naam in';
   }
   if(!isValidEmail($email)){
       $errors['email'] = 'Ongeldig email adres';
   }
   if(isEmpty($bericht)){
    $errors['bericht'] = 'Vul uw bericht in';
   }
   
   print_r($errors);

   if(count($errors) == 0){
    $params = [
        'naam' => $naam,
        'email' => $email,
        'bericht' => $bericht
       ];
       $statement->execute($params);    
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Formulier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="contact">

        <form action="" method="POST">
            <div class="form__field">
                <label for="naam">Naam</label>
                <input type="text" name="naam" id="naam" placeholder="Vul uw naam in" required> 
            </div>
            <div class="form__field">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Vul uw email in" required> 
            </div>
            <div class="form__field">
                <label for="bericht">Bericht</label>
                <textarea name="bericht" id="bericht" placeholder="Vul uw bericht in" required></textarea>
            </div>

            <button type="submit" class="form__button">Versturen</button>
        </form>

    </section>
</body>

</html>