<?php
//This session prevents to access ADMIN DASHBOARD directly...
session_start();
if(!isset($_SESSION["email"]))
{
    //after session failed it will redirected to login page 
    header("location: http://localhost:8081/weenanada/adminlogs.html");
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../css/dashpages.css">
</head>
<body>
    <div class="orderstable">
        <div class="recent-payments">
            <div class="heading">
                <h2>Add New Products</h2>
            </div>
            <form method="post" action="http://localhost:8081/weenanada/php/addproduct.php" name="addnew">
            <div class="inputs">
                <input type="text" placeholder="Product Name" name="name" id="product-name" onkeyup="validateName('product-name')">
                <textarea type="textarea" placeholder="Description" name="description" id="product-desc" onkeyup="validateDesc('product-desc')"></textarea>
                <input type="text" placeholder="Design" name="design" id="product-design" onkeyup="validateDesign('product-design')">
                <input type="text" placeholder="Weight" name="weight" id="product-weight" onkeyup="validateWeight('product-weight')">
                <div class="cus-select">
                <select name="category" id="product-category" onkeyup="validateSelection('product-category')" required>
                    <option value="Category">Select Category</option>
                    <option value="Piano">Piano</option>
                    <option value="Classical Guitar">Classical Guitar</option>
                    <option value="Electric Guitar">Electric Guitar</option>
                    <option value="Drum Set">Drum Set</option>
                    <option value="Jaltarang">Jaltarang</option>
                    <option value="Violin">Violin</option>
                    <option value="Saxophone">Saxophone</option>
                    <option value="Flute">Flute</option>
                    <option value="Clarinet">Clarinet</option>
                    <option value="Trumpet">Trumpet</option>
                    <option value="Xylophone">Xylophone</option>
                    <option value="Veena">Veena</option>
                    <option value="Tabla">Tabla</option>
                    <option value="Sitar">Sitar</option>
                </select>
                </div>
                <input type="text" placeholder="Color" name="color" id="product-color" onkeyup="validateColor('product-color')">
                <input type="text" placeholder="Stocks" name="stock" id="product-stock" onkeyup="validateStock('product-stock')">
                <input type="text" placeholder="Price" name="price" id="product-price" onkeyup="validatePrice('product-price')">
            </div>
            <div class="btn">
                <button class="save" onclick="return validateAddition()">Save</button>
            </div>
            </form>    
    </div>
    <script type="text/javaScript" src="../js/add_new_validation.js"></script>
    <div class="orderstable">
        <div class="recent-payments">
            <div class="heading">
                <h2>New Category</h2>
            </div>
            <div class="inputs">
                <input type="text" placeholder="Product Name" name="name">
            </div>
            <div class="btn">
                <button class="save">Save</button>
            </div>    
    </div>
</body>
</html>