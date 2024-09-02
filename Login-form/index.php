<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <body>
        <main>
            <form action="includes/formhandler.php"method="post">
                <label for="firstname">Firstname</label>
                <input id="firstname" type="text" name="firstname" placeholder="firstname">

                <label for="lastname">Lastname</label>
                <input id="lastname" type="text" name="lastname" placeholder="lastname">

                <label for="gender">Gender ?</label>
                <input id="gender"name="gender">
                    <optional value="none">None</option>
                    <optional value="male">Male</option>
                    <optional value="female">Female</option>

                </select>
                <button type="submit">Submit</button>
            </form>
</body>
</html> 