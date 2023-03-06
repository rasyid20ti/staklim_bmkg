<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets2/'); ?>scss/modal.scss" rel="stylesheet">

<body>
  <div class=" bg-white p-0">
    <div class=" py-1 bg-dark headhead mb-5">
      <div class="text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Prakiraan Curah Hujan</h1>
      </div>
    </div>
    <!-- Gallery -->
    <!-- Modal nih Bro-->
    <section id="tabs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 ">
            <nav>
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Prakiraan Curah Hujan Deterministik</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Prakiraan Curah Hujan Probabilistik</a>
              </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <center>
                  <img src="http://web.meteo.bmkg.go.id//media/data/bmkg/mfy/ecmwf/prakiraan/hjn24/Indonesia/24hr_rr_Indo_wrf10km_20220714_00UTC.png" class="img-responsive" alt="Responsive image" width="80%" height="80%" />
                </center>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <!-- Historical Trend Of Annual Average Temperature -->
                <center>
                  <img src="http://web.meteo.bmkg.go.id//media/data/bmkg/probabilistic//POE5_24hrprec_20220714000000.png" class="img-responsive" alt="Responsive image" width="80%" height="80%" />
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Main Menu -->




    <!-- Custom Styling Toggle. For demo purposes only. -->
    <script>
      function switchStyle() {
        if (document.getElementById('styleSwitch').checked) {
          document.getElementById('gallery').classList.add("custom");
          document.getElementById('exampleModal').classList.add("custom");
        } else {
          document.getElementById('gallery').classList.remove("custom");
          document.getElementById('exampleModal').classList.remove("custom");
        }
      }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>