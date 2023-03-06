<link href="<?php echo base_url('assets2/'); ?>css/bayar.css" rel="stylesheet">

<body>
	<div class=" bg-white p-0">
        <div class="headerBayar">
            <div class="container-fluid">
                <div class='row'>
                    <div class="col" style="padding-top:100px; padding-left:80px;">
                        <center>
                            <h5>&nbsp;&nbsp;&nbsp;Pembayaran Tarif Pengajuan</h5>
                        </center>
                    </div>
                    <div class='col' style="padding-left: 10px;">
                        <img src="<?= base_url('assets2/images/icon/pembayaran.png'); ?> "style="width:450px; height:300px" />
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <?= $this->session->flashdata('message'); ?>
                <!--<div class="form-group"> <select id="asal" name="asal" class="form-select">
            <option value="umum">Umum</option> <option value="instansi">Instansi</option>
            <option value="pelajar">pelajar</option> </select> </div>-->
                <div class="clearfix">
                    <div class="float-left">

                    </div>
                </div>

                <div class="container">
                    <h3>Mengunggah token Anda, lalu tekan Cari untuk memasukkan bukti bayar</h3>
                    <form action="<?= base_url('Home/cari'); ?>" method="POST" style="flex-direction: row; align-items:center">
                        <div class="input-group mb-3">
                            <!-- <div class="form-group"> -->
                            <input required type="text" class="form-control" name="token" id="token" placeholder="Masukkan Token Anda" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                            </div>
                            <!-- </div> -->
                        </div>
                    </form>


                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="row g-4"><div class="col-md-6 wow fadeIn"
    data-wow-delay="0.1s"><iframe class="position-relative rounded w-100 h-100"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d637.4752883839107!2d101.45792723313977!3d0.46998557692730253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5af183e1d2f75%3A0x1178dd3f78b3635b!2sFF95%2BX67%2C%20Jl.%20Unggas%2C%20Simpang%20Tiga%2C%20Kec.%20Bukit%20Raya%2C%20Kota%20Pekanbaru%2C%20Riau%2028288!5e0!3m2!1sen!2sid!4v1652319160515!5m2!1sen!2sid"
    frameborder="0" style="min-height: 350px; border:0;" allowfullscreen=""
    aria-hidden="false" tabindex="0"></iframe></div><div class="col-md-6"><div
    class="wow fadeInUp" data-wow-delay="0.2s"><form><div class="row g-3"><div
    class="col-md-6"><div class="form-floating"><input type="text"
    class="form-control" id="name" placeholder="Your Name"><label for="name">Your
    Name</label></div></div><div class="col-md-6"><div class="form-floating"><input
    type="email" class="form-control" id="email" placeholder="Your Email"><label
    for="email">Your Email</label></div></div><div class="col-12"><div
    class="form-floating"><input type="text" class="form-control" id="subject"
    placeholder="Subject"><label for="subject">Subject</label></div></div><div
    class="col-12"><div class="form-floating"><textarea class="form-control"
    placeholder="Leave a message here" id="message" style="height:
    150px"></textarea><label for="message">Message</label></div></div><div
    class="col-12"><button class="btn btn-primary w-100 py-3" type="submit">Send
    Message</button></div></div></form></div></div></div>-->

        <!-- Contact End -->
        <!-- <script type="text/javascript">
    $(document).ready(function() {
        var dropDownValue = $('#asal').val();
        $('#submit_button').click(function() {
            if ($('#asal').val() == "pelajar") {
                window.location = "Search/search_maha";
            }
            if ($('#asal').val() == "instansi") {
                window.location = "Search/search_insta";
            }
        });
    });
</script> -->