<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>ricerca</title>
</head>
<body>

    <h1 class="m-3">Cerca l'hotel in base al voto</h1>
    
    <form class="row m-3 pt-4" action="alberghi.php">
        <div class="col-2">
            <input type="number" name="vote" class="form-control" id="validationDefault01" min="0" max="5" value="0" required>
        </div>
        <button class="btn btn-primary col-1" type="submit">Submit form</button>
    </form>

</body>
</html>