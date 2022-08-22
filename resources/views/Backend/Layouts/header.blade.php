<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/boxicons.min.css">
    <link rel="stylesheet" href="/css/style.css">


    <title>Book Shop</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand logo-text" href="#">Book Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="add_post">Add Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="posts">Edit/Delete Post</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
@yield('content')
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
