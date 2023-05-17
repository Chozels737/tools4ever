<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>nieuw gebruiker invoeren</title>
    </head>

    <body>
        <h1>nieuw product maken </h1>
        <form action="verwerk-nieuw-gebruiker.php" method="post">
            <div class="form-groep">
                <label for="email">email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-groep">
                <label for="firstname">firstname</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="form-groep">
                <label for="lastname">lastname</label>
                <input type="text" name="lastname" id="lastname">

            </div>
            <div class="form-groep">
                <label for="password">password</label>
                <input type="password" name="password"id="password">
            </div>
            <div class="form-groep">
                <label for="address">address</label>
                <input type="text" name="address" id="address">
            </div>

            <div class="form-groep">
                <label for="city">city</label>
                <input type="text" name="city" id="city">
            </div>


            <div class="form-groep">
                <label for="role">choose a role</label>
                <select id="role" name="role">
                    <option value="employee">employee</option>
                    <option value="administrator">admin</option>
                    <option value="customer">customer</option>
                </select>
            </div>

            <button type="submit">maak gebruiker aan</button>
        </form>
    </body>

    </html>
</body>

</html>