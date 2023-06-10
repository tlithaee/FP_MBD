<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/pembayaran.css">
    <style>
        .navbar-brand {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
        <nav class="navbar shadow p-3 mb-5 bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo_tulisan.png" alt="logo" class="logo-image">
                </a>
                <a class="navbar-brand" href="manage_acc.php">
                    <img src="images/Male User.png" alt="logo" class="user-image">
                </a>
            </div>
        </nav>

    <main class="container">
        <div class="payment">
            <div class="space">
                <div class="d-flex space">
                    <label class="p-2 fs-7 fw-bold">Total Harga :</label>
                        <div class="d-flex fs-7 fw-bold">
                            <input type="text" readonly class="form-control-plaintext" id="harga" value="Rp500.000,00-">
                        </div>
                </div>

                <div class="space">
                    <h6 class="p-2">Name on Card :</h6>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Name">
                        </div>
                </div>

                <label class="p-2 ">Card Number :</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" data-mask="0000 0000 0000 0000" placeholder="Card Number" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                       
            </div>
                
            <div class="row space">
                <div class="col">
                    <h6 class="p-2">Valid Until :</h6>
                        <div class="input-group mb-2">
                                <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                </div>
                <div class="col">
                    <h6 class="p-2">CVV :</h6>
                        <div class="input-group mb-3">
                            <input type="type" class="form-control" aria-label="Username" data-mask="000" placeholder="000" aria-describedby="basic-addon1">
                        </div>
                </div>
               
                <div class="d-flex align-items-center flex-column mt-auto">
                    <button type="button" class="btn btn-primary d-flex align-items-center flex-column" style="height: 50px; font-size: 16px;" data-bs-toggle="modal" data-bs-target="#passModal">
                    Bayar
                    </button>
                </div>

                <div class="modal fade" id="passModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="d-flex justify-content-center">
                                <img src="images/Ok.png" alt="logo" class="check-image">
                            </div>
                            
                            <div class="modal-header d-flex justify-content-center text-primary">
                                    <h1 class="modal-title p-3 fs-3 fw-bold" id="ModalLabel">
                                        Pembayaran Berhasil
                                    </h1>
                            </div>
                        
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="modal-body d-flex align-items-center flex-column mt-auto">
                                    <h5 class="p-2 fw-bold booking">
                                        Kode Booking : 08.01x31.12
                                        <input type="text" readonly class="form-control-plaintext" id="booking" value="">
                                    </h5>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>