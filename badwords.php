<?php
// variables 
$paragraph = $_POST["paragraph"];
$badword = $_POST["badword"];
?>

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
        <!-- variables printing by echo propriety -->
        <h1 class="border rounded-4 border-secondary p-3">
            <?php echo "$paragraph $badword"; ?>
        </h1>


    </div>

</body>

</html>