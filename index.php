<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container d-flex  align-items-center justify-content-center pt-5 mt-5">
        <!-- post method for send input value to the  other php file-->
        <form action="badwords.php" method="post" class="text-center">
            <label class="form-label">Paragraph</label>
            <input type="text" class="form-control" name="paragraph">
            <label class="form-label">Badword</label>
            <input type="text" class="form-control" name="badword">
            <button type="submit" class="btn btn-outline-success mt-4">Invia</button>
        </form>
    </div>

</body>

</html>