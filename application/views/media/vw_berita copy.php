<body>
	<div class=" bg-white p-0">
		<div class=" py-1 bg-dark headhead mb-5">
			<div class="text-center my-5 pt-5 pb-4">
				<h1 class="display-3 text-white mb-3 animated slideInDown">Berita</h1>
			</div>
		</div>

		<main role="main" class="container">
			<div class="row">
				<div class="col-md-8 blog-main">
					<?php foreach ($berita as $b) : ?>
						<div class="blog-post">
							<h2 class="blog-post-title"><?= $b['title']; ?></h2>
							<p class="blog-post-meta"><?= $b['sub']; ?> - <?= date('d F Y', $b['date_created']); ?> - Stasiun Klimatologi Riau</a></p>
							<center><img src="<?= $b['foto'] ?>" class="img-fluid" alt="" width="800" height="400"></center>
							<p><?= $b['isi'] ?></p>
							<hr>
						</div><!-- /.blog-post -->
					<?php endforeach; ?>
				</div><!-- /.blog-main -->

				<aside class="col-md-4 blog-sidebar">
					<div class="p-3 mb-3 bg-light rounded">
						<h4 class="font-italic">Latest</h4>
					</div>

					<div class="p-3">
						<h4 class="font-italic">Archives</h4>
						<!--
						<ol class="list-unstyled mb-0">
							<li><a href="#">Press Release</a></li>
							<li><a href="#">Eksternal</a></li>
							<li><a href="#">Internal</a></li>
							<li><a href="#">Kerjasama</a></li>
						</ol>
					-->
					</div>
				</aside><!-- /.blog-sidebar -->

			</div><!-- /.row -->

		</main><!-- /.container -->