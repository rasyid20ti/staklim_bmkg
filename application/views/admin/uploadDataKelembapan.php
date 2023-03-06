<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/0-dummy.css" />
<script defer src="<?= base_url('assets/'); ?>js/1b-read-csv.js"></script>

<body>
    <div class="container">
        <h1 class="h3 mb-8 text-gray-800"><?= $title; ?></h1>
        <form action="" enctype="multipart/form-data" method="post" role="form">
            <div class="card">
                <center>
                    <div class="card-header"><b>Pilih File CSV</b></div>
                    <div class="card-body">
                        <input style="padding-left: 95px;" type="file" accept=".csv" name="file" id="file" />
                        <!-- <br><a style="font-size: 15px;" href="https://drive.google.com/file/d/1HQiafrN796QcR_io1SMRp2CDM7o0q_04/view" target="_blank">Contoh Format File .CSV</a> -->
                    </div>
                    <div class="card-body">
                        <button type="submit" disabled="disabled" class="btn btn-primary" id="submit1" name="submit1" value="submit1">Tambah Data</button>
                        <button type="submit" disabled="disabled" class="btn btn-primary" id="submit2" name="submit2" value="submit2">Update Data</button>
                    </div>
                    <table id="demoTable"></table>
                </center>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>


    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
    di dalam session sukses  -->
    <?php if (@$_SESSION['sukses']) { ?>
        <script>
            swal("Selamat!", "<?php echo $_SESSION['sukses']; ?>", "success");
        </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']);
    } ?>
    <script>
        $(document).ready(function() {
            $('#file').on('input change', function() {
                if ($(this).val() != '') {
                    $('#submit1').prop('disabled', false);
                    $('#submit2').prop('disabled', false);
                } else {
                    $('#submit1').prop('disabled', true);
                    $('#submit2').prop('disabled', true);
                }
            });
        });
    </script>
</body>