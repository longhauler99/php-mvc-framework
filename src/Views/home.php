<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="text-center">
                <h1 class="h1">Welcome to Simple PHP MVC Starter!</h1>
            </div>
            <div class="alert alert-light">
                <ul>
                    <?php if (!empty($journals)) {
                        foreach ($journals as $journal) :?>
                            <li><?= $journal->name ?> (<?= $journal->publishedYear ?>)</li>
                        <?php endforeach;
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Your content here -->

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


