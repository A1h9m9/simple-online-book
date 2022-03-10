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
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/9781911204954.jpg" class="card-img-top" alt="...">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://doc-08-bg-docs.googleusercontent.com/docs/securesc/68vf0t2u86q6akesf1ahsp72rqfiqnvd/12shr28vnl17phq4s55eu1bh0f2o00ig/1646769600000/05545903529364580533/13099648785403666188/15vpU_lhZphDyWXEKhhx_M0zc3-mIMrqv?e=download&ax=ACxEAsZaPQGHPKDsKUtwDUymE8tYC5-L4HogECcZDge8YsXZDDPUY2cNcL6r0xEsgHXNS4uQH67qmBiKyot8hurHazKHTYfzWZOfbrv5k7sTIKUHoVMaBzqacymzM3i6DslvdjIv0yTVJo90zLremXg_KIsR-aeNbWnTy8Ok52ZPwET0nhqoMAqGVkCCQzysYpbP9qk3RFgwYCOCgLlt3t9MAgNXHPTsLk8zs1MZanmZ64fMmMsFrWkD9Mbr7-jJYL43NPRTT5mK_Did-pQNoQM0r_AAuQ6JAa-0iR5vbFDr2mvL1esFqkXMFFZ73G0Wyqv7NYvHwcbJ6NOZ7qMXU_gQEtPo9s7v-zx4hN8rfSFbRRaor7TKYQ1hIqsHuq3-aEGEvMKC2R0BqoymCwyusxTcuStW2BpQKRmJVhGhBPE6irZNLbmU3X5Hl2IK_JlK87neCZQAoDxAdMqgb_Db7v9NGnqfto0vnhSP2IGS4oH_nv0Zfrdp6BuAJqb5Huu4xyOYTYor9f9F7d5YRQBM_cSnWL_71iX-FHbkClgk6WHPm-AATrOZKVNyD4RnjZefxthrYdEkf8WX8PFWSrC9-FEEyk90pLOkyp-cK16NYO33FuWZopfOxJxAHPY7NQlmxt_it2O9gB93NbMTNpTPc48AAcRLQt2qU08YwvqQcTw&authuser=0"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/MV5BMTkzY2Y3ZTMtYTg4Yy00OTNjLTlkNjctMGVlZDMwZWIxMzA0XkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_.jpg" class="card-img-top" alt="...">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://doc-08-bg-docs.googleusercontent.com/docs/securesc/68vf0t2u86q6akesf1ahsp72rqfiqnvd/s9p215i2ptstm2lci5idij18lbr965b6/1646767725000/05545903529364580533/13099648785403666188/15vpU_lhZphDyWXEKhhx_M0zc3-mIMrqv?e=download&ax=ACxEAsbn4FuRZtzfgych3KZtpg5uvOmkQNUghqhVbKSyuEU29h4MbxpyHFoLgw4UpxVhGk7F1u2ciiWr7X4lPjk8BCaRqYYLPQRYPuzUlIVwvbGAOTYukDrId3LXZVTmvfRDuXnqVSFZ-78F9ixnhtMZ9dYYH51vuTTG_XoraGGy_-wT5t2HUtGY2NgvMOU2fEzc2a-grYutViiXql3FmTDmbNag1ph1B6urYKGWem0ipmKPhs84GQh-0axKI1GcBCnLllumY2TbYGXngY7xmDWL1G9bbj1r60NHFA60KwrG6ear_Bwke_8ptaHrvwCegSYK0aZ4GGI39tz_9js6e7oSYyg3MCITvfwnZtXbf80CFyzDVzz3Uuiib6YXwYrlSUWNomfFZgXCXeDBP86h7wNIn-CKHY5lba72NtfG7l8VM3LpZeBMHIsO-zqjxfI-iUouoQ2VhbN7Zk8v2uAKFylUgWb9Fpau-xxm_oD2LGZffeezyD_N3lcG-RUjNeKkoylYz0X7BmlNtURdw7KFpz5SDeRPCxvIEzeH9w-mLbYtW9Eg5F1exdJakXjXpluldzHPYn6eoLKdgZpAP5tiW5ZxGUd8f2lrWS8AIdYak_aJ6dCLOJO9B1ifeO-TC_oPf9ryj98tAUe4f2rhNBJ_NqSRzGVHSEtAewaYJUpdBnk&authuser=0&nonce=rj4eticg9nvsk&user=13099648785403666188&hash=2vgr09f0qhsrjdolsgq3jqeokovijocb"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/the-tragedy-of-hamlet-prince-of-denmark-16.jpg" class="card-img-top" alt="...">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://doc-04-bg-docs.googleusercontent.com/docs/securesc/68vf0t2u86q6akesf1ahsp72rqfiqnvd/lvsh63jjhi9ad3q0oq362ikobia46a26/1646769525000/05545903529364580533/13099648785403666188/1s1fdKbJdFA9o9tSRgm5X-Gu_KBrc8hJW?e=download&ax=ACxEAsYXAVVs2swNz0y-FBC7vcBtFs4P1_K35qV5ZQ32-16phkIJGs65Zd0HfAzT-oeOZTWnOAISDBvVzTXPO99_3zibMAlG1HoSfGjM1RaSPuFJEj-dvU5Y4dP5R7eKMaZS1Y6V0MJE9PSU-vxesYSBmDbVa_8zh7Dshv41-we3kcaDhGRYMSll1gztjdcwJkiKkuoZoFD1WJRCVaXKrFvavuPB9_D9LSCeF-_VZgbGwkSJWR8SbK7FmoPWDDDQX4DQcoo3fpB0I66SpXkA36_RrpBCYr4oI_5EDkuFZaFXVgezPsqXAZv9tdPWgyMzqnEPUxAR5wPtnzzUJtAkPFBeDMGj7FdZba69hvoQrsRv5cb6VCC_AfRtCsSmykAuMUHRwoL4GdLQ03uBd9dDdaNEdkAeuswSip_-MuJG0vDjtmepY5MPItYedGA365U379Ct5NtxAOshW9sQtcFsEsbFjye4LaTFKyLs2jFVDX5XQinwexi73x9236ONPQP9DEEFeJ4uvHY_VNptEAmZNI_QK2kT57r_TJg6AtfVBUPuG6PoWl9RSKCTCBzF1NnDYr2x6uILcztveREjHN_JdpnMtzQJ-NHZ6ZDAFWgAGrlDet1J-1gJhI5F46y3I_nWoTHne9hTtC8iHGKQOSB_YasQpknnAyU4JhCJQIXLT3c&authuser=0&nonce=obmnjs1u4ueja&user=13099648785403666188&hash=hf74d4ihcb8eie9sgbq7rs8a2aqlg5ni"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/510oPoVSDFL.jpg" class="card-img-top" alt="...">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://doc-08-bg-docs.googleusercontent.com/docs/securesc/68vf0t2u86q6akesf1ahsp72rqfiqnvd/u0vr29otmuid1bc3fkem97onikllilu6/1646768550000/05545903529364580533/13099648785403666188/1sIDfBu6zP-2LUwuT0a-drnLXMxn4Hgp3?e=download&ax=ACxEAsZK6AuyiEFP9UV9n8Jkz0W8AjFlaBqDFnQ4GL9NSzpaVSjCDW4dv_IdQNqHqZJxlLJuuGnx-FYNtOKGGVkJ3EdiIvEmaIiy8rkxnNJoWUgth5lENvjaN7OrQU6gN-_CRg2Wb-olkJ5awJL65maG9RgmDe9mUx6jfjNpr_ClJhEUFJrARk6Dh0cSNVIyzxty1hICcSeRVdRdJT7fH8W3Mph1gE6bYHLeAhNqRRcRL5O8MXQMKOCLJ4kz6DsVFjSecRTbe1yYfPadJdWQDZqzYIJ4nbiiglwlbP1_pDcuNWVhsjebtcVZMp0WLkpBgE10n3pBPiD4x2sILe4m5qMLTiP2fyi3JG6j6QlfclwEnrio1NXxclkYuYzblLgZw6CUJvJxUmSTAWrwNe0rYr7yuHx0ZHAS-OSRE1V7xVAS4QboCkqlimfiUrvDEuSvDYvPSrPFoKc_JXNmGAaQXH_rGe6TDzWCu-w8wgApathUt159Y5dzLXZRy3npSOc_VKn9VPyEV-bQ-l4Rw7r9_eWtppc2UONCQSJw8u2Q-Shcq4W4GXtHlL5EI3n-P7xek-mbEDRZNUebIg6FRy9EspBwpFWXGQil9cLF9YafX02ldI6ETa7JAtoiCn2OV7Hyveq8fCCnYi-_OJ1LsPwZXtC-SOpJm8ao8md3kl56OuM&authuser=0"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>

                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="css/the-legend-of-sleepy-hollow-104.jpg" class="card-img-top" alt="...">

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://doc-0o-bg-docs.googleusercontent.com/docs/securesc/68vf0t2u86q6akesf1ahsp72rqfiqnvd/joab8ekpljt6ddgbvcpm1rfpdciqikil/1646769225000/05545903529364580533/13099648785403666188/17bNlGw6wR9AegAySjnZTgXLD4gBRkgJv?e=download&ax=ACxEAsZ_UVmROkpTnJ5_cBbr9EC7Tnp5hzomCnP4wtvMwMIHoEB6nCEdaQKPuk_BK-BRR56yjIlPCnBeOvzRXY84Sii_TB67zMxW8YUwkzexJc3FcdDHmkKs2hWgI8HfHczLTrfLgkA850-IIpAHMW95TnWOi4LLi21yAwdLevYZeSa9t9UwgUQxdGlhPbSIzDyqtLF_1x9lgzzzj1yoYUiJ-ICcfw2bqeUOJdXJwcAPiMX8ixd1kPEjkP06w71qy34LPlYIH1aNwRVR8vTKtoI0ZHV1QhI6txdz_wcLEtOEzXNTVx_oAjTWi6MU3ar9QaAEWxysu6DYXm4lamL5HdeSMS7JNc4s01-vqXr2F0lluBO6aXdicacAWsrS6C24oHgze8xfEINJXmyqP4J42AcRVla5cchZ2fUbCe_TyQVDDYa90HPNhYDYEdR11Fbn3wqZNxPZssIvw6HLSC_yKlrguVqdNrbuIcArmI42M7x0UCiCs-xxfe1YcVyLqvOa3oNcmPzQ6Rwit00WQbsnmy5-6A8QEF5d9-KiqMcz3vqxNTwDKByQXbevx7H9g3YNWczbaUTbV2DOfFSYpxh4dtJq8rsRTmOmdGQ1FSeD6KgdnUw2ZbxkJoYAcE2KV0tLJxtKyFtN5RfhY_-HWhneATBPvYjidhHh0BVIQtRUV90&authuser=0"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
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