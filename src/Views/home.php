<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-MVC-APPLICATION</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">PHP-MVC-APP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form name="logout-form" action="/logout" method="POST">
                    <button class="btn btn-sm btn-outline-danger text-light" type="submit" name="logout-btn">Logout</button>
                </form>
            </div>
        </div>
    </nav>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="alert alert-light mt-2">
                <div class="text-center">
                    <h1 class="h1">Welcome to Simple PHP MVC Starter!</h1>
                </div>
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


