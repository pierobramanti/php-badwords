<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bad Words</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 border">
                <form action="./badwords.php" method="GET">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <div class="control-label fw-bolder">
                                    Digita Qualcosa
                                </div>
                                <input type="text" class="form-control" name="" placeholder="Digita Qualcosa" >
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <div class="control-label fw-bolder">
                                    Digita Qualcosa
                                </div>
                                <input type="text" class="form-control" name="" placeholder="Digita Qualcosa" >
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-danger" > Ottieni</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>