<?php require_once '../action/login-check.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <title>Add a new restaurant</title>
    </head>
    <body>
        <?php include 'navigation.php' ?>
        <form action="../action/submit-restaurant" method="post" enctype="multipart/form-data">
            <h2>Add a new restaurant</h2>
            <div class="upload-box">
                <p>
                    <strong>Upload a picture of the restaurant</strong>
                </p>
                <input class="subheading" name="image" type="file" accept="image/png, image/jpeg" />
            </div>
            <div>
                <input type="name" name="name" placeholder="Restaurant name" maxlength="255" required />
            </div>
            <div>
                <input type="cuisine" name="cuisine" placeholder="Type of cuisine" maxlength="50" />
            </div>
            <div>
                <input type="location" name="location" placeholder="Location" maxlength="50" />
            </div>
            <div>
                <input type="url" name="url" placeholder="URL" maxlength="50" />
            </div>
            <div>
                <input class="submit-button" type="submit" value="Add restaurant" />
            </div>
        </form>
    </body>
</html>