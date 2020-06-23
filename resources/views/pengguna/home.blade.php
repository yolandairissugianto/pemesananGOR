<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    
	@include('pengguna.templates._head')

	<title>Beranda</title>
	<style>
		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}

		.tp-video-play-button {
			display: none !important;
		}

		.tp-caption {
			white-space: nowrap;
		}
	</style>
</head>

<body class="stretched">

	<div id="wrapper" class="clearfix">

		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<div id="logo">
						<a href="{{ ('pengguna.home') }}" class="standard-logo" data-dark-logo="images/logo gor 4.png"><img
								src="{{ asset('images/logo gor 4.png') }}" alt="Canvas Logo"></a>
						<a href="{{ ('pengguna.home') }}" class="retina-logo" data-dark-logo="images/logo gor 4.png"><img
								src="{{ asset('images/logo gor 4.png') }}" alt="Canvas Logo"></a>
					</div>
		
					<nav id="primary-menu">
						<ul>
							<li class="current"><a href="{{ route('pengguna.home') }}">
									<div>Home</div>
								</a>
							</li>
							<li><a href="{{ route('pengguna.fasilitas') }}">
									<div>Fasilitas</div>
								</a>
							</li>
							<li class="mega-menu"><a href="{{ route('pengguna.daftar_acara') }}">
									<div>Acara</div>
								</a>
							</li>
							<li class="mega-menu"><a href="{{ route('pengguna.artikel') }}">
									<div>Artikel</div>
								</a>
							</li>
						</ul>

						{{-- <div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i
									class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value=""
									placeholder="Type &amp; Hit Enter..">
							</form>
						</div> --}}
					</nav>
				</div>
			</div>
		</header>

		<section id="slider" class="slider-element revslider-wrap slider-parallax clearfix">
			<div class="slider-parallax-inner">
				<div id="rev_slider_579_1_wrapper" class="rev_slider_wrapper fullscreen-container"
					data-alias="default-slider" style="padding:0px;">

					<div id="rev_slider_579_1" class="rev_slider fullscreenbanner" style="display:none;"
						data-version="5.1.4">
						<ul>
							<li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1000"
								data-thumb="{{ asset('images/slider/rev/main/IMG20191230112448.jpg') }}" data-saveperformance="off"
								data-title="Welcome to Canvas">

								<img src="{{ asset('images/slider/rev/main/IMG20191230112448.jpg') }}" alt="" data-bgposition="center center"
									data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
									class="rev-slidebg" data-no-retina>

								<div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-10','-10']"
									data-fontsize="['50','50','50','36']" data-lineheight="['50','50','60','50']"
									data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
									data-speed="800" data-start="1200" data-easing="easeOutQuad" data-splitin="none"
									data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
									data-endspeed="1000" data-textAlign="center" data-width="['800','800','560','400']"
									data-height="none" data-whitespace="['normal','nowrap','normal','normal']"
									data-endeasing="Power4.easeIn" style="z-index: 3; white-space: normal;">Selamat
									Datang di Website Kawasan GOR Olahraga Trisanja</div>
								<div class="tp-caption ltl tp-resizeme revo-slider-desc-text"
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']" data-voffset="['80','80',100,'130']"
									data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
									data-speed="800" data-start="1400" data-easing="easeOutQuad" data-splitin="none"
									data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1"
									data-endspeed="1000" data-textAlign="center" data-width="['800','800','560','400']"
									data-height="none" data-endeasing="Power4.easeIn"
									style="z-index: 3; width: 750px; max-width: 750px; white-space: normal;">Kita tidak
									berhenti berolahraga karena menjadi renta. Kita menjadi renta karena berhenti
									berolahraga</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="divcenter center clearfix" style="max-width: 900px;">
						<h1>Selamat Datang di <span>Website GOR Trisanja</span>.</h1>
						<h2>Kita tidak berhenti berolahraga karena menjadi renta. Kita menjadi renta karena berhenti
							berolahraga</h2>
					</div>
					<div class="line"></div>


					</a>
					<div class="container clearfix">
						<div class="col_three_fifth topmargin-sm bottommargin">
							<img data-animate="fadeInLeftBig" src="{{ asset('images/services/gor depan.jpg') }}" alt="Imac">
						</div>
						<div class="col_two_fifth topmargin-sm bottommargin-lg col_last">
							<div class="heading-block topmargin">
								<h2>Fasilitas GOR Trisanja</h2>
								<span>Beberapa Fasilitas yang ada di GOR Trisanja</span>
							</div>
							<p>Fasilitas yang dimiliki meliputi Lapangan Outdoor, lapangan Indoor, Kolam Renang dan
								Halaman Depan</p>
							<a href="{{ route('pengguna.fasilitas') }}"
								class="button button-border button-rounded button-large noleftmargin topmargin-sm">Lebih Lanjut</a>
						</div>
						<div class="line"></div>
					</div>

					<div class="container clearfix">
						<div class="col_two_third nobottommargin">
							<div class="fancy-title title-border">
								<h4>Recent Posts</h4>
							</div>
							<div class="col_half nobottommargin">
								<div class="ipost clearfix">
									<div class="entry-image">
										<a href="#"><img class="image_fade" src="{{ asset('images/magazine/thumb/berita1.jpg') }}"
												alt="Image"></a>
									</div>
									<div class="entry-title">
										<h3><a href="blog-single.html">Wawali Jumadi Hadiri Upacara Peringatan Hari
												Infanteri di GOR Trisanja Slawi</a></h3>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i>19 Desember 2019</li>
									</ul>
									<div class="entry-content">
										<p>Wakil Wali Kota Tegal Muhamad Jumadi, menghadiri upacara Penyerahan Simbul
											Yudha Wastu Pramuka Jaya dan Peringatan Hari Infanteri ke 71 Tahun 2019, di
											Lapangan Sepak Bola GOR Trisanja Slawi</p>
									</div>
								</div>
							</div>
							<div class="col_half col_last nobottommargin">
								<div class="ipost clearfix">
									<div class="entry-image">
										<a href="#"><img class="image_fade" src="{{ asset('images/magazine/thumb/berita2.jpg') }}"
												alt="Image"></a>
									</div>
									<div class="entry-title">
										<h3><a href="blog-single.html">Gor Indoor Trisanja Slawi Resmi Dimiliki Pemkab
												Tegal</a></h3>
									</div>
									<ul class="entry-meta clearfix">
										<li><i class="icon-calendar3"></i> 29 April 2019</li>
									</ul>
									<div class="entry-content">
										<p>Penyerahan gor yang diresmikan sejak 25 Januari 2019 lalu oleh Kementerian
											Pemuda dan Olahraga (Kemenpora) itu diserahkan kepada Pemkab Tegal,
											bertempat di Ruang Rapat Bupati Tegal.</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="col_one_third nobottommargin col_last">
							<div class="fancy-title title-border">
								<h4>Jam Operasional</h4>
							</div>
							<div class="well topmargin ohidden">
								<p>Jam Operasional GOR Trisanja</p>
								<ul class="iconlist nobottommargin">
									<li><i class="icon-time color"></i> <strong>Setiap Hari : </strong> 6 Pagi s/d 6
										Sore</li>
									<li><i class="icon-time text-danger"></i> <strong>Jika ada acara tertentu GOR tidak
											dapat digunakan secara umum</strong></li>
								</ul>
								<i class="icon-time bgicon"></i>
							</div>
						</div>
						<div class="clear"></div>
					</div>

				</div>
			</div>
	</div>
	</section>

	@include('pengguna.templates._footer')
	</div>

	<div id="gotoTop" class="icon-angle-up"></div>

	@include('pengguna.templates._scripts')
</body>

</html>