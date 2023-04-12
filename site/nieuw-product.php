<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw product invoeren</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <form action="verwerk-nieuw-product.php" method="post">

        <div class="form-groep">
            <label for="naamProduct">Naam Product</label>
            <input type="text" name="naamProduct" id="naamProduct">
        </div>
        <div class="form-groep">
            <label for="CategorieProduct">Categorie Product</label>
            <input type="text" name="CategorieProduct" id="CategorieProduct">
        </div>
        <div class="form-groep">
            <label for="prijsProduct">prijs Product</label>
            <input type="text" name="prijsProduct" id="prijsProduct">
        </div>
        <div class="form-groep">
            <label for="merkProduct">merk Product</label>
            <input type="text" name="merkProduct" id="merkProduct">
        </div>

        <button type="submit">maak nieuw product</button>

    </form>

</body>
</html>