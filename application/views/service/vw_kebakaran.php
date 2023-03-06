<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets2/'); ?>scss/modal.scss" rel="stylesheet">

<body>
  <div class=" bg-white p-0">
    <div class=" py-1 bg-dark headhead mb-5">
      <div class="text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Peringatan Kebakaran Hutan</h1>
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
                <a class="nav-item nav-link active" id="nav-obv-tab" data-toggle="tab" href="#nav-obv" role="tab" aria-controls="nav-obv" aria-selected="true">Analisis</a>
                <a class="nav-item nav-link" id="nav-prakiraan-tab" data-toggle="tab" href="#nav-prakiraan" role="tab" aria-controls="nav-prakiraan" aria-selected="false">Prakiraan</a>
                <a class="nav-item nav-link" id="nav-bakar-tab" data-toggle="tab" href="nav-bakar" role="tab" aria-controls="nav-bakar" aria-selected="false">Sistem Peringatan Kebakaran
                  <a class="nav-item nav-link" href="https://spartan.bmkg.go.id/products/static/" target="_blank">Sistem Peringatan Kebakaran</a>
              </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-obv" role="tabpanel" aria-labelledby="nav-obv-tab">
                <!-- Historical Trend Of Seasonal Cumulative Precipitation -->
                <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
                  <div class="col-12 col-sm-6 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_dc_obs.png" alt="First slide" data-target="#carouselExample" data-slide-to="0">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_bui_obs.png" alt="First slide" data-target="#carouselExample" data-slide-to="1">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_isi_obs.png" alt="First slide" data-target="#carouselExample" data-slide-to="2">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_fwi_obs.png" alt="First slide" data-target="#carouselExample" data-slide-to="3">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_ffmc_obs.png" alt="First slide" data-target="#carouselExample" data-slide-to="4">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_dmc_obs.png" alt="First slide" data-target="#carouselExample" data-slide-to="5">
                  </div>
                </div>

                <!-- Modal -->
                <!-- Isi didalam kotaknya nih bro-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExample" data-slide-to="1"></li>
                            <li data-target="#carouselExample" data-slide-to="2"></li>
                            <li data-target="#carouselExample" data-slide-to="3"></li>
                            <li data-target="#carouselExample" data-slide-to="4"></li>
                            <li data-target="#carouselExample" data-slide-to="5"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_dc_obs.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_bui_obs.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_isi_obs.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_fwi_obs.png" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_ffmc_obs.png" alt="Fifth slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_dmc_obs.png" alt="sixth slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="tab-pane fade" id="nav-prakiraan" role="tabpanel" aria-labelledby="nav-prakiraan-tab">
                <!-- Historical Trend Of Annual Average Temperature -->
                <div class="row" id="gallery" data-toggle="modal" data-target="#Modal">
                  <div class="col-12 col-sm-6 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_dc_01.png" alt="Seven slide" data-target="#carousel" data-slide-to="6">
                  </div>
                  <div class="col-12 col-sm-8 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_bui_01.png" alt="Eight slide" data-target="#carousel" data-slide-to="7">
                  </div>
                  <div class="col-12 col-sm-8 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_isi_01.png" alt="Nine slide" data-target="#carousel" data-slide-to="8">
                  </div>
                  <div class="col-12 col-sm-8 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_fwi_01.png" alt="Ten slide" data-target="#carousel" data-slide-to="9">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_ffmc_01.png" alt="Ten slide" data-target="#carousel" data-slide-to="10">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <img class="w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_dmc_01.png" alt="Eleven slide" data-target="#carousel" data-slide-to="11">
                  </div>
                </div>

                <!-- Modal -->
                <!-- Isi didalam kotaknya nih bro-->
                <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="6"></li>
                            <li data-target="#carousel" data-slide-to="7"></li>
                            <li data-target="#carousel" data-slide-to="8"></li>
                            <li data-target="#carousel" data-slide-to="9"></li>
                            <li data-target="#carousel" data-slide-to="10"></li>
                            <li data-target="#carousel" data-slide-to="11"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_dc_01.png" alt="Six slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_bui_01.png" alt="Seven slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_isi_01.png" alt="Eight slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_fwi_01.png" alt="Nine slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_ffmc_01.png" alt="Ten slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="https://web.meteo.bmkg.go.id//media/data/bmkg/fdrs/04_riau_dmc_01.png" alt="Eleven slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-imon-australia" role="tabpanel" aria-labelledby="nav-imon-australia">
                  <a href="https://spartan.bmkg.go.id/products/static/"></a>
                </div> -->
                </div>
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