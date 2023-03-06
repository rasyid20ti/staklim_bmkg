<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <link href="<?= base_url('assets2/img/logo.png'); ?>" rel="icon">
  <meta name="author" content="">
  <link rel="stylesheet" href="style.css">

  <title>
    <?= $title; ?>
  </title>

  <script src="<?= base_url('assets/tinymce/js/tinymce/tinymce.dev.js'); ?>"></script>
  <script src="<?= base_url('assets/tinymce/js/tinymce/plugins/table/plugin.dev.js'); ?>"></script>
  <script src="<?= base_url('assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js'); ?>"></script>
  <script src="<?= base_url('assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js'); ?>"></script>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->

  <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- import bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
  </link>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Load file library jQuery melalui CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Untuk Snipping Tracking Cek Status Tiket -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <style>
    #mapid {
      height: 65vh;
      width: 100vw;
    }

    /*Legend specific*/
    .legend {
      size: 1000%;
      padding: 6px 8px;
      font: 14px Arial, Helvetica, sans-serif;
      background: white;
      background: rgba(255, 255, 255, 0.8);
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      border-radius: 5px;
      line-height: 24px;
      color: #555;
    }

    .legend h4 {
      text-align: center;
      font-size: 16px;
      margin: 2px 12px 8px;
      color: #777;
    }

    .legend span {
      float: left;
      position: relative;
      bottom: 3px;
    }

    .legend a {
      float: left;
      position: relative;
      bottom: 3px;
    }

    .legend i {
      width: 18px;
      height: 18px;
      float: left;
      margin: 0 10px 0 20px;
      opacity: 0.7;
    }

    .legend i.icon {
      background-size: 18px;
      background-color: rgba(255, 255, 255, 1);
    }
  </style>


  </div>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">