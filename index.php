<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Belajar Bootstrap</title>
</head>

<body class="bg-grey">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3">
                <div class="container">
                    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">Link</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="text" placeholder="Search">
                            <button class="btn btn-primary" type="button">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/7.jpeg" alt="tarik tambang" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Tarik Tambang</h3>
                            <p>Kalian Ingat Terakhir Main Tarik Tambang??</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/8.jpeg" alt="egrang" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Balap Karung</h3>
                            <p>Balap Karung Permainan Sangat Seru!!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/9.jpeg" alt="bahagia" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Bahagia</h3>
                            <p>Bahagia Dengan Teman Masa Kecil Sangatlah Indah</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-3 col-md-12 com-sm-12 bg-info text-light">
                <h1>Menu Kiri</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe incidunt nobis labore debitis, consectetur vero delectus magnam quisquam culpa, in beatae praesentium unde magni quae vitae laborum obcaecati porro iusto! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet ipsum illo eos sequi, nostrum praesentium veritatis velit earum optio ipsam veniam odio nam quod, labore inventore provident nesciunt dignissimos consequuntur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, omnis? Ea iure explicabo quidem at ullam itaque ipsa tempore. Exercitationem eius animi modi necessitatibus voluptas neque doloribus dolor asperiores saepe.</p>
            </div>
            <div class="col-12 col-lg-6 col-md-12 com-sm-12 bg-white">
                <ul class="breadcrumb pt-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Data Mahasiswa</li>
                </ul>
                <p>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Apple</button>
                    <button type="button" class="btn btn-primary">Samsung</button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Sony</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Tablet</a>
                            <a class="dropdown-item" href="#">Smartphone</a>
                        </div>
                    </div>
                </div>
                </p>
                <h1>Belajar Bootstrap</h1>
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Sorry...</strong> Akun Anda belum aktif, silahkan melengkapi <a href="#" class="alert-link">Profile</a>.
                </div>
                <div class="progress">
                    <div class="progress-bar bg-danger progress-bar progress-bar-striped progress-bar-animated" style="width:70%"></div>
                </div>
                <br>
                <p>
                    <button class="btn btn-danger">
                        <span class="spinner-border spinner-border-sm"></span>
                        Sabar..
                    </button>
                </p>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#myModal">
                    Open modal
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Informasi Masa Kecil</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                Permainan Masa Kecil Pasti Hampir tiap hari, aku bermain dengan teman-teman perumahanku. Mereka ada banyak sekali. Kadang mereka membuatku tertawa, kadang menangis. Tapi semuanya bagiku indah, semua yang aku lakukan bersama teman-teman.
                                <br> Kami biasa bermain petak umpet, kelereng, lompat tali, balogo, gambar, renang di sungai, dll. kami pernah mencoba permainan menyenangkan itu, meski kami main dengan keceriaan dari hati kami.
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="accordion">

                    <div class="card">
                        <div class="card-header">
                            <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum..
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                Collapsible Group Item #2
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum..
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                Collapsible Group Item #3
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum..
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <p><img src="images/1.jpg" alt="Main Bola" class="img-thumbnail mx-auto d-block img-fluid"></p>
                <p><a type="button" class="btn btn-primary" href="tambah.php" data-bs-toggle="tooltip" data-bs-placement="right" title="Tambah Data">Tambah Data</a></p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered ">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>Nama</th>
                                <th>NPM</th>
                                <th>Kelas</th>
                                <th>Stasus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Edit | Hapus</td>
                                <td>Helmi</td>
                                <td>2010010612</td>
                                <td>3N TI</td>
                                <td><span class="badge bg-primary">Hadir</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Edit | Hapus</td>
                                <td>Ucok</td>
                                <td>2010010612</td>
                                <td>3N TI</td>
                                <td><span class="badge bg-success">Izin</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Edit | Hapus</td>
                                <td>Bambang</td>
                                <td>2010010612</td>
                                <td>3N TI</td>
                                <td><span class="badge bg-warning">Sakit</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Edit | Hapus</td>
                                <td>Toli</td>
                                <td>2010010612</td>
                                <td>3N TI</td>
                                <td><span class="badge bg-danger">Alfa</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                    <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="bottom" title="Popover Header" data-bs-content="Some content inside the popover">Toggle popover</button>
                </div>
                <hr>
                <p>Lorem ipsum, dolor sit amet <small> consectetur adipisicing elit.</small>Sit ducimus quam itaque <mark> ut possimus a sequi molestias assumenda </mark> quasi laudantium eligendi rem porro voluptas soluta, ab molestiae numquam. Id, quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, corporis. Rerum consequatur itaque repellat minus tempore facere quos voluptatem aut dolores! Reiciendis repudiandae tempore ipsam. Nam sapiente quidem dignissimos est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem sit consequuntur cum sunt similique sed culpa enim quo nemo libero voluptas laudantium, soluta, possimus dicta aperiam perspiciatis delectus doloremque aliquid?</p>
            </div>
            <div class="col-12 col-lg-3 col-md-12 com-sm-12 bg-info text-light">
                <h1>Menu Kanan</h1>
                <div class="list-group pb-3">
                    <a href="#" class="list-group-item list-group-item-action active disabled">Jurusan</a>
                    <a href="#" class="list-group-item list-group-item-action">Teknik Informatika</a>
                    <a href="#" class="list-group-item list-group-item-action">Sistem Informasi</a>
                </div>
                <div class="card" style="width:100%">
                    <img class="card-img-top" src="images/2.jpg" alt="Card image">
                    <div class="card-body text-black">
                        <h4 class="card-title">Masa Kecil</h4>
                        <p class="card-text">Bahagia</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore possimus, nam velit culpa veniam officia debitis nesciunt iure distinctio ea nihil, molestias quae aspernatur natus modi voluptas laborum eligendi laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat praesentium quam exercitationem saepe, rerum dolore reiciendis corrupti tempore, quaerat neque eos odio placeat facere rem ratione, molestiae at repellat. Laudantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, quod. Quaerat aut quae voluptas, repudiandae non quibusdam molestiae pariatur, quasi deleniti neque voluptate omnis autem nobis nihil natus blanditiis in!</p>
                <div class="toast show">
                    <div class="toast-header">
                        Toast Header
                        <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                    </div>
                    <div class="toast-body">
                        Some text inside the toast body
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col bg-dark py-3 text-white text-center">
                <p>copyright &copy; Muhammad Helmina 2021</p>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })

        document.getElementById("toastbtn").onclick = function() {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl)
            })
            toastList.forEach(toast => toast.show())
        }
    </script>

</body>

</html>