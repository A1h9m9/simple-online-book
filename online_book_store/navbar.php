<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['username'])) {
    include 'db.php';
    include 'head.php';
?>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <img src="./css/eCommerceproject11100x10050x50.png">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

                    <li><a href="home.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="POST">
                    <input type="search" name="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                    <div class="text-end">
                        <input type="submit" name="submit" class="btn btn-outline-light me-2" value="search">
                        <a href="logout.php"><button type="button" class="btn btn-warning">logout</button></a>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    include 'db.php';
                    $name = $_POST['search'];
                    $stmt = $con->prepare("SELECT * FROM search WHERE name_book ='$name'");
                    $stmt->setFetchMode(PDO::FETCH_OBJ);
                    $stmt->execute();
                    if ($row = $stmt->fetch()) { ?>
                                        <div class="album py-5 bg-light">
                                            <div class="card-body">
                                                <p class="card-text"
                                                <div class="container">
                                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                                        <div class="col">
                                                            <div class="card shadow-sm">
                                                                <img src="css/the-castle-of-otranto-34.jpg" class="card-img-top" alt="...">
                                                                <title>Placeholder</title>
                                                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                                                                </svg>

                                                                <div class="card-body">
                                                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <div class="btn-group">
                                                                            <a href="https://freeditorial.com/en/books/the-castle-of-otranto/downloadbookepub?format2=pdf"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                                                        </div>
                                                                        <small class="text-muted">9 mins</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                    <?php
                                } else {
                                    echo 'not found';
                                }
                            }
                                    ?>
                                        </div>
                                    </div>
                                </div>

    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">categories</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="horror.php">horror</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="programming.php">programming</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
<?php
}
?>