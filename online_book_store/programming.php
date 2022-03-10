<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['username'])) {
    include 'db.php';
    include 'navbar.php';
    $stmt = $con->prepare("SELECT * FROM items");
    $stmt->execute();
    $row = $stmt->fetch();
    $count = $stmt->rowcount();
    if ($count > 0) {
?>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/JavaScriptGrow.png" class="card-img-top" alt="...">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://books.goalkicker.com/JavaScriptBook/JavaScriptNotesForProfessionals.pdf"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/AlgorithmsGrow.png" class="card-img-top" alt="...">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://books.goalkicker.com/AlgorithmsBook/AlgorithmsNotesForProfessionals.pdf"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/CSSGrow.png" class="card-img-top" alt="...">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://books.goalkicker.com/CSSBook/CSSNotesForProfessionals.pdf"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/HTML5Grow.png" class="card-img-top" alt="...">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://books.goalkicker.com/HTML5Book/HTML5NotesForProfessionals.pdf"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/81Q0deul8FL.jpg" class="card-img-top" alt="...">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://doc.lagout.org/programmation/Learning%20PHP,%20MySQL%20%26%20JavaScript_%20with%20jQuery,%20CSS%20%26%20HTML5%20(4th%20ed.)%20%5BNixon%202014-12-14%5D.pdf"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                       
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/41xShlnTZTL._SX376_BO1,204,203,200_.jpg" class="card-img-top" alt="...">

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://mooc.aptikom.or.id/pluginfile.php/1174/mod_resource/content/1/Clean%20Code_%20A%20Handbook%20of%20Agile%20Software%20C%20-%20Robert%20C.%20Martin.pdf"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
}
?>