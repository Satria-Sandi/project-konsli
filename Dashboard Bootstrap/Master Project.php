<from?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 100vh;">
          <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fw-bold fs-3 ms-3">CODM</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="Home.html" class="nav-link text-white" aria-current="page">
                <i class="bi bi-houses me-2 fs-5"></i>
                Home
              </a>
            </li> 
            <li>
              <a href="Master Project.html" class="nav-link active bg-light text-dark">
                <i class="bi bi-folder me-2 fs-5"></i>
                Master Project
              </a>
            </li>
            <li>
              <a href="Master Service.html" class="nav-link text-white">
                <i class="bi bi-tools me-2 fs-5"></i>
                Master Service
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <strong>CHICIRO ZYRO</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">Profille</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Account</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
  
  <div class="col-md-10" style="background-color: white;">
    <div class="container-fluid">
        <div class="row p-3">
            <h1 class="mt-2 text-center">Share Game</h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h6>Data Game</h6>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </thead>
                            <tbody>
                            <tr>
                                   <?php
                                   $x = 1;
                                      include 'koneksi.php';
                                        $query = mysqli_query($koneksi, "SELECT * FROM pr ");
                                        while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                            <td> <?php echo $x++ ?></td>
                                            <td> <?php echo $data ['nama']?></td>
                                            <td> <?php echo $data ['tanggal']?></td>
                                            <td> <?php echo $data ['deskripsi']?></td>
                                          <td><button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-info-circle"></i></button>
                                                <a href="edit.php?id=<?php echo $data ['id'];?>" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                                <a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></a>
                                              </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                          </table>
                          <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <th scope="row">2.</th>
                                    <td>MULTI PLAYER</td>
                                    <td></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, laborum.</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-success ms-1" data-bs-toggle="modal" data-bs-target="#detailproject2"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#delete"><i class="bi bi-trash"></i></button>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                          <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <th scope="row">3.</th>
                                    <td>VICTORY</td>
                                    <td></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, laborum.</td>
                                    <td>
                                        <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-success ms-1" data-bs-toggle="modal" data-bs-target="#detailproject2"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger ms-1" data-bs-toggle="modal" data-bs-target="#delete"><i class="bi bi-trash"></i></button>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                          
                          <div class="modal modal-fade" tabindex="-1" id="detailproject">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Info Game</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>GAME</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Done</button>
                                    </div>
                                  </div>
                                </div>
                          </div>
                          <div class="modal fade" id="detailproject2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Message</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                  <input type="text" class="form-control bg-light" id="" aria-describedby="">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-success">Save changes</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">You sure want to delete this Message?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger ">Delete</button>
                              </div>
                            </div>
                          </div>
                      </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6>Tambah Project</h6>
                    </div>
                    <div class="card-body">
                        <form action="simpan.php" method="POST">
                        <div class="row">
                <div class="">
                    <div class="form-group">
                        <label class="text-dark" for="nama">nama</label>
                        <input class="form-control" id="nama" name="nama" type="text"
                        placeholder="masukan nama">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="">
                    <div class="form-group">
                        <label class="text-dark" for="tanggal">tanggal</label>
                        <input class="form-control" id="tanggal" name="tanggal" type="date"
                        placeholder="masukan kelas">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="">
                    <div class="form-group">
                        <label class="text-dark" for="deskripsi">deskripsi</label>
                        <input class="form-control" id="deskripsi" name="deskripsi" type="text"
                        placeholder="masukan absen">
                    </div>
                </div>
            </div>


            <div class="text-center">
                <button type="submit" id="submit" name="submit" class="">submit</button>
            </div>
                    <div class="card-footer">
                        </from>
              
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>