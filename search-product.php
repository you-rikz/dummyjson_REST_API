<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

if(isset($_POST['search_product'])){

$search_product = $_POST['search_product'];
$response = $client->get('products/search?q='. $search_product);
$code = $response->getStatusCode();
$body = $response->getBody();
$search_product=json_decode($body, true);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Search Product</title>
</head>
<body>

<form action = "search-product.php" method="post">

<div class="input-group mb-3 container" style="padding-top: 100px">
  <input type="text" name ="search_product" value="" class="form-control" placeholder="Search Product" >
  <button type="submit" class="btn btn-primary">Search</button> 
</div>

<div class="container">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Brand</th>
      <th scope="col">Category</th>
      <th scope="col">Thumbnail</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($search_product['products'] as $product){?>
    <tr>
      <th scope=row><?php echo $product ['id'];?></th>
      <td><?php echo $product ['title']; ?></td>
      <td><?php echo $product ['description']; ?></td>
      <td><?php echo $product ['price']; ?></td>
      <td><?php echo $product ['brand']; ?></td>
      <td><?php echo $product ['category']; ?></td>
      <td><img src="<?php echo $product ['thumbnail'];?>" width = "200px" height ="200px"></td>
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