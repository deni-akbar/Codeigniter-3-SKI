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
            <div class="col-md-2">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="3">Tabel Kuota</th>
                        </tr>
                        <tr>
                            <th scope="col">#</th>
                            <th>Kode Stand</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($quota as $db) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?php echo $db->kd_stand; ?></td>
                                <td><?php echo $db->jumlah; ?></td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="col-md-10">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="6">Tabel Antrian</th>
                            <th colspan="2">
                            <a href="<?= base_url('pameran/tambah')?>" class="btn btn-success">
                    Tambah Pemesanan
                </a>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal Pesan</th>
                            <th>Kode Stand</th>
                            <th>No antri</th>
                            <th>PDF File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($antrian as $db) : ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?php echo $db->nama; ?></td>
                                <td><?php echo $db->email; ?></td>
                                <td><?php echo $db->tanggal_pesan; ?></td>
                                <td><?php echo $db->kd_stand; ?></td>
                                <td><?php echo $db->no_antri; ?></td>
                                <td><a href="<?= base_url('pameran/importPDF')."?no_urut=".$db->no_antri ?>">Download</a></td>
                            </tr>
                        <?php
                            $no++;
                        endforeach;
                        ?>
                    </tbody>
                </table>

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