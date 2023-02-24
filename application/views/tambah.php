<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>TES SKI</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1>Tambah Pemesanan</h1>
                <?php if (validation_errors()) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php } ?>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><?= $this->session->flashdata('success') ?></strong>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('err')) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong><?= $this->session->flashdata('err') ?></strong>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                    </div>

                </div>
                <form action="<?= base_url('pameran/tambahSave') ?>" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Stand</label>
                        <select name="kd_stand" class="form-control ">
                            <?php foreach ($stand as $db) : ?>
                                <option value="<?= $db->kd_stand ?>"><?= $db->nama . " ($db->kd_stand)" ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Pemesan">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email Pemesan" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Pesan</label>
                        <input type="date" class="form-control" placeholder="Tanggal Pemesanan" name="tanggal_pesan">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                        <a href="<?= base_url('pameran') ?>" class="btn btn-secondary">Back</a>
                    </div>

            </div>

            </form>
        </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>