<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MYFTODO </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
    .form-container {
        max-width: 500px;
        margin: 0 auto;
    }
    .export-button {
        display: block;
        width: 100%;
        padding: 15px;
        font-size: 16px;
        margin-top: 10px;
    }
    .form-group {
        margin-bottom: 15px;
    }
</style>

<div class="form-container mt-4">
<form method="post" action="index.php">
    <div class="form-group">
    <input type="text" name="name">
    <input type="text" name="lastName">
    <button type="submit" class="btn btn-success">Save</button>
    <input type="checkbox" id="exampleCheckbox" name="exampleCheckbox" value="Tanlov">
    </div>
</form>
</div>