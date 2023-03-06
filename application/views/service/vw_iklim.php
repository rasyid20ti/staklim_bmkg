<body>
	<div class=" bg-white p-0">
		<div class=" py-1 bg-dark headhead mb-5">
			<div class="text-center my-5 pt-5 pb-4">
				<h1 class="display-3 text-white mb-3 animated slideInDown">Perubahan Iklim</h1>
			</div>
		</div>
		<section id="tabs">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 ">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Curah Hujan Kumulatif Musiman</a>
								<!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Suhu Rata-Rata Tahunan</a> -->
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<!-- Historical Trend Of Seasonal Cumulative Precipitation -->
								<div class='tableauPlaceholder' id='div_histrendprcptot' style='position: relative'>
									<noscript>
										<a href='#'>
											<img alt='DB ' src='https://public.tableau.com/static/images/Hi/HistoricalTrendofSeasonalCumulativePrecipitation/DB/1_rss.png' style='border: none' />
										</a>
									</noscript>

									<object class='tableauViz' style='display:none;'>
										<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
										<param name='embed_code_version' value='3' />
										<param name='path' value='shared&#47;BTTY5JRFZ' />
										<param name='toolbar' value='yes' />
										<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;BT&#47;BTTY5JRFZ&#47;1.png' />
										<param name='animate_transition' value='yes' />
										<param name='display_static_image' value='yes' />
										<param name='display_spinner' value='yes' />
										<param name='display_overlay' value='yes' />
										<param name='display_count' value='yes' />
										<param name='language' value='en-US' />
									</object>
								</div>
								<br>
								
								<center> 
									<img src="<?php echo base_url('/assets/img/iklim1/Perubahan Iklim.png'); ?>" width='900' height='400'> </br>
								</center>
							<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
								<!-- Historical Trend Of Annual Average Temperature -->
								<!-- <div class='tableauPlaceholder ' id='div_histrendtm' style='position: relative'>
									<noscript>
										<a href='#'>
											<img alt='DB ' src='https://public.tableau.com/static/images/Hi/HistoricalTrendofAnnualAverageTemperature/DB/1_rss.png' style='border: none' />
										</a>
									</noscript>
									<object class='tableauViz' style='display:none;'>
										<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
										<param name='embed_code_version' value='3' />
										<param name='path' value='shared&#47;BTTY5JRFZ' />
										<param name='toolbar' value='yes' />
										<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;BT&#47;BTTY5JRFZ&#47;1.png' />
										<param name='animate_transition' value='yes' />
										<param name='display_static_image' value='yes' />
										<param name='display_spinner' value='yes' />
										<param name='display_overlay' value='yes' />
										<param name='display_count' value='yes' />
										<param name='language' value='en-US' />
									</object>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Main Menu -->

		<!-- Script Prakiraan Iklim !-->
		<script type='text/javascript'>
			var divElement = document.getElementById('div_histrendprcptot');
			var vizElement = divElement.getElementsByTagName('object')[0];
			if (divElement.offsetWidth > 800) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '827px';
			} else if (divElement.offsetWidth > 500) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '827px';
			} else {
				vizElement.style.width = '100%';
				vizElement.style.height = '1427px';
			}
			var scriptElement = document.createElement('script');
			scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
			vizElement.parentNode.insertBefore(scriptElement, vizElement);
		</script>
		<!--Script Sinar Ultraviolet !-->
		<script type='text/javascript'>
			var divElement = document.getElementById('div_histrendtm');
			var vizElement = divElement.getElementsByTagName('object')[0];
			if (divElement.offsetWidth > 800) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '827px';
			} else if (divElement.offsetWidth > 500) {
				vizElement.style.width = '1000px';
				vizElement.style.height = '827px';
			} else {
				vizElement.style.width = '100%';
				vizElement.style.height = '1377px';
			}
			var scriptElement = document.createElement('script');
			scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
			vizElement.parentNode.insertBefore(scriptElement, vizElement);
		</script>