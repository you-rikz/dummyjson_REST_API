<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$response = $client->get('users' );
$code = $response->getStatusCode();
$body = $response->getBody();
$users=json_decode($body)-> users;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        h1 {
            text-align: center;
        }


    </style>
</head>
<body>
    <h1> All Users </h1>

    <div class="container">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Maiden Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Blood Type</th>
      <th scope="col">Image</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user){?>
    <tr>
      <td scope=row><?php echo $user->firstName?></td>
      <td><?php echo $user ->maidenName ?></td>
      <td><?php echo $user ->lastName ?></td>
      <td><?php echo $user ->age ?></td>
      <td><?php echo $user ->email ?></td>
      <td><?php echo $user ->phone?></td>
      <td><?php echo $user ->bloodGroup ?></td>
      <td><img src="<?php echo $user ->image?>" width = "200px" height ="200px"></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>