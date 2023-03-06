<body>
    <div class=" bg-white p-0">
        <!--= Embed Menu = "Informasi Gas Rumah Kaca" ; Akun = Budi Setiawan ; Kode = div_grk ==-->
        <div class=" py-1 bg-dark headhead mb-5">
            <div class="text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Informasi Kualitas Udara</h1>
            </div>
        </div>
        <section id="tabs">
            <div>
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-imon-australia-tab" data-toggle="tab" href="#nav-imon-australia" role="tab" aria-controls="nav-imon-australia" aria-selected="true">Informasi Gas Rumah Kaca</a>
                                <a class="nav-item nav-link" id="nav-imon-west-tab" data-toggle="tab" href="#nav-imon-west" role="tab" aria-controls="nav-imon-west" aria-selected="false">Informasi Partikulat PM2.5</a>
                                <a class="nav-item nav-link" id="nav-cold-tab" data-toggle="tab" href="#nav-cold" role="tab" aria-controls="nav-cold" aria-selected="false">Informasi Partikulat SPM</a>
                                <a class="nav-item nav-link" id="nav-analisis-tab" data-toggle="tab" href="#nav-analisis" role="tab" aria-controls="nav-analisis" aria-selected="false">Infomasi pH Air Hujan</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-imon-australia" role="tabpanel" aria-labelledby="nav-imon-australia">
                                <center>
                                    <div class='tableauPlaceholder hidden' id='div_grk' style='position: relative'>
                                        <object class='tableauViz' style='display:none;'>
                                            <param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
                                            <param name='embed_code_version' value='3' />
                                            <param name='site_root' value='' />
                                            <param name='name' value='InformasiGasRumahKaca/InfoGRK' />
                                            <param name='tabs' value='no' />
                                            <param name='toolbar' value='yes' />
                                            <param name='animate_transition' value='yes' />
                                            <param name='display_static_image' value='yes' />
                                            <param name='display_spinner' value='yes' />
                                            <param name='display_overlay' value='yes' />
                                            <param name='display_count' value='yes' />
                                            <param name='device' value='desktop' />
                                            <param name='language' value='en-US' />
                                        </object>
                                    </div>
                                </center>
                                <center> 
                                        <img src="<?php echo base_url('/assets/img/iklim1/GasRumahKaca1.png'); ?>" width='900' height='400'> </br>
                                </center>
                            </div>

                            <div class="tab-pane fade" id="nav-imon-west" role="tabpanel" aria-labelledby="nav-imon-west">
                                <div class='tableauPlaceholder hidden' id='div_partikulatauto' style='position: relative'>
                                    <object class='tableauViz' style='display:none;'>
                                    <param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
                                    <param name='embed_code_version' value='3' />
                                    <param name='site_root' value='' />
                                    <param name='name' value='iklim_bmkg/InformasiPartikulat3' />
                                    <param name='tabs' value='no' />
                                    <param name='toolbar' value='yes' />
                                    <param name='animate_transition' value='yes' />
                                    <param name='display_static_image' value='yes' />
                                    <param name='display_spinner' value='yes' />
                                    <param name='display_overlay' value='yes' />
                                    <param name='display_count' value='yes' />
                                    <param name='device' value='desktop' />
                                    <param name='language' value='en-US' />
                                        <param name='filter' value='Lokasi=PEKANBARU' />
                                    </object>
                                </div>
                                <center> 
                                    <img src="<?php echo base_url('/assets/img/iklim1/pm25.png'); ?>" width='900' height='400'> </br>
                            </center>
                            </div>
                            <div class="tab-pane fade" id="nav-cold" role="tabpanel" aria-labelledby="nav-cold">
                                <div class='tableauPlaceholder hidden' id='div_partikulat' style='position: relative'>
                                    <object class='tableauViz' style='display:none;'>
                                        <param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
                                        <param name='embed_code_version' value='3' />
                                        <param name='site_root' value='' />
                                        <param name='name' value='PartikulatSPM/DashboardSPM' />
                                        <param name='tabs' value='no' />
                                        <param name='toolbar' value='yes' />
                                        <param name='animate_transition' value='yes' />
                                        <param name='display_static_image' value='yes' />
                                        <param name='display_spinner' value='yes' />
                                        <param name='display_overlay' value='yes' />
                                        <param name='display_count' value='yes' />
                                        <param name='device' value='desktop' />
                                        <param name='language' value='en-US' />
                                        <!-- <param name='filter' value='Lokasi=RIAU'/> -->
                                    </object>
                                </div>
                            <center> 
                                    <img src="<?php echo base_url('/assets/img/iklim1/spm.png'); ?>" width='900' height='400'> </br>
                            </center>
                            </div>
                            <div class="tab-pane fade" id="nav-analisis" role="tabpanel" aria-labelledby="nav-analisis">
                            <div class='tableauPlaceholder hidden' id='div_phhujan' style='position: relative'><object class='tableauViz'
                                style='display:none;'>
                                <param name='host_url' value='https%3A%2F%2Fvisklim.bmkg.go.id%2F' />
                                <param name='embed_code_version' value='3' />
                                <param name='site_root' value='' />
                                <param name='name' value='pHAirHujan/DashboardpH' />
                                <param name='tabs' value='no' />
                                <param name='toolbar' value='yes' />
                                <param name='animate_transition' value='yes' />
                                <param name='display_static_image' value='yes' />
                                <param name='display_spinner' value='yes' />
                                <param name='display_overlay' value='yes' />
                                <param name='display_count' value='yes' />
                                <param name='device' value='desktop' />
                                <param name='language' value='en-US' />
                                </object>
                            </div>
                                <center> 
                                    <img src="<?php echo base_url('/assets/img/iklim1/phHujan.png'); ?>" width='900' height='400'> </br>
                            </center>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <script type='text/javascript'>
            var divElement = document.getElementById('div_grk');
            var vizElement = divElement.getElementsByTagName('object')[0];
            if (divElement.offsetWidth > 800) {
                vizElement.style.width = '1000px';
                vizElement.style.height = '900px';
            } else if (divElement.offsetWidth > 500) {
                vizElement.style.width = '1000px';
                vizElement.style.height = '900px';
            } else {
                vizElement.style.width = '100%';
                vizElement.style.height = '900px';
            }
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://visklim.bmkg.go.id/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>

        <!--==========================================================================-->
        <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
        <!--= Embed Menu = "Informasi Partikulat PM2.5" ; Akun = Budi Setiawan ; Kode = div_partikulatauto ==-->


        <script type='text/javascript'>
            var divElement = document.getElementById('div_partikulatauto');
            var vizElement = divElement.getElementsByTagName('object')[0];
            if (divElement.offsetWidth > 800) {
                vizElement.style.width = '1000px';
                vizElement.style.height = '900px';
            } else if (divElement.offsetWidth > 500) {
                vizElement.style.width = '1000px';
                vizElement.style.height = '900px';
            } else {
                vizElement.style.width = '100%';
                vizElement.style.height = '900px';
            }
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://visklim.bmkg.go.id/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>

        <!--=======================================================================================-->
        <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
        <!--= Embed Menu = "Informasi Partikulat SPM" ; Akun = Kadarsah ; Kode = div_partikulat ==-->


        <script type='text/javascript'>
            var divElement = document.getElementById('div_partikulat');
            var vizElement = divElement.getElementsByTagName('object')[0];
            if (divElement.offsetWidth > 800) {
                vizElement.style.width = '1000px';
                vizElement.style.height = '900px';
            } else if (divElement.offsetWidth > 500) {
                vizElement.style.width = '1000px';
                vizElement.style.height = '900px';
            } else {
                vizElement.style.width = '100%';
                vizElement.style.height = '900px';
            }
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://visklim.bmkg.go.id/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>

        <!--=================================================================================-->
        <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
        <!--= Embed Menu = "Informasi pH Air Hujan" ; Akun = Kadarsah ; Kode = div_phhujan ==-->


        <script type='text/javascript'>
            var divElement = document.getElementById('div_phhujan');
            var vizElement = divElement.getElementsByTagName('object')[0];
            if (divElement.offsetWidth > 800) {
                vizElement.style.width = '1000px';
                vizElement.style.height = '900px';
            } else if (divElement.offsetWidth > 500) {
                vizElement.style.width = '1000px';
                vizElement.style.height = '900px';
            } else {
                vizElement.style.width = '100%';
                vizElement.style.height = '900px';
            }
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://visklim.bmkg.go.id/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>