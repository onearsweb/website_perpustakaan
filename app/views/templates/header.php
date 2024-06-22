<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="<?=baseURL; ?>/css/bootstrap.min.css">
    <!-- Title Web -->
    <title><?= $data['title'] ?></title> 
</head>
<body>
    <!-- Navbar -->
     <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?=baseURL;?>">Pustakars</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=baseURL;?>">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?=baseURL;?>/anggota/index">Anggota</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
     </div>
</body>
</html>