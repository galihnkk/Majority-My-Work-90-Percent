<?php
// Ambil agama dari tabel project berdasarkan id_session klien
$project = $this->db->get_where('project', ['id_session' => $clients->id_session])->row();
$religion = $project->religion ?? ''; // Pastikan tidak error jika religion kosong

$islam = strtolower($religion) === 'islam'; // Cek apakah agama Islam

// Ambil data vendor dari database berdasarkan id_session klien
$vendors = $this->db->get_where('vendor', ['id_session' => $clients->id_session])->result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if($project->religion === 'Islam') { ?>
	<title>brandname <?= $clients->f_bride_cname ?> dan <?= $clients->m_bride_cname ?></title>
	<?php } elseif ($project->religion === 'Kristen') { ?>
	<title>brandname <?= $clients->m_bride_cname ?> dan <?= $clients->f_bride_cname ?></title>
	<?php } ?>
	<!-- favicon -->
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/backend/mb.png" type="image/x-icon">
	<!-- animate css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/animate.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/bootstrap.min.css">
	<!-- plugin -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/plugin.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/owl.carousel.min.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/style.css">
	<!-- responsive css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/responsive.css">
    <!-- Tight Theme -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/assets/css/lite.css">
	<style>.box {
            width: 40%; /* Setengah lebar halaman */
            margin: 5px auto; /* Tengah secara horizontal */
            border: 2px solid black; /* Border hitam */
            padding: 15px; /* Jarak dalam */
            text-align: justify; /* Teks rata kanan kiri */
            font-weight: bold; /* Teks tebal */
            font-size: 20px; /* Ukuran teks lebih besar */
            line-height: 1.8; /* Jarak antar baris */
        }</style>
</head>

<body>
	<!-- preloader area start -->
	<div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- preloader area end -->
	<!-- Menu toggle Icon Start -->
	<div class="toggle-icon">
    <div id="nav-icon3">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- Menu toggle Icon End -->
	<!-- Main Website wrapper start -->
	<div id="main">
		<!--Main-Menu Area Start-->
		<div class="mainmenu-area">
			<nav class="my-navbar">
				<ul class="navbar-links">
					<li class="mynav-item active">
						<a class="mynav-link active" href="#home">Home</a>
					</li>
					<li class="mynav-item">
						<a class="mynav-link" href="#about">About</a>
					</li>
					<li class="mynav-item">
						<a class="mynav-link" href="#resume">TBA Texts</a>
					</li>
					<li class="mynav-item portfolio">
						<a class="mynav-link portfolio" href="#concept">Concepts</a>
					</li>
					<li class="mynav-item">
						<a class="mynav-link" href="#blog">Agenda</a>
					</li>
					<li class="mynav-item">
						<a class="mynav-link" href="#contact">Rate Us</a>
					</li>
				</ul>
			</nav>
		</div>
		<!--Main-Menu Area Start-->

		<!--Hero Area Start-->
		<section class="home section-bg active" id="home" >
			<div class="h-100vh d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="main-profile-image">
								<img src="<?php echo base_url()?>assets/frontend/assets/images/logo.png" alt="">
							</div>
						</div>
						<div class="col-lg-6  align-self-center">
							<div class="hero-box text-left">
								<span class="greeting">Our Special Day</span>
								

								<?php $project = $this->Crud_m->view_where('project', array('id_session' => $clients->id_session))->row(); ?>							

								<?php if($project->religion === 'Islam') {?>

								<h2 class="name">
                				<?= $clients->f_bride_cname ?><span> & </span><?= $clients->m_bride_cname ?>
								</h2>

								<h4 class="header_title"><?= hari($clients->wedding_date) ?>, <?= tgl_indo($clients->wedding_date) ?> | <?= $clients->location ?></h4>
								<a id="g-p-f-h" class="pagelink mybtn mybtn-bg" href="#concept"><span><i
											class="far fa-calendar-check"></i>Our Concepts</span></a>


								<?php }elseif ($project->religion === 'Kristen'){ ?>

								<h2 class="name">
                				<?= $clients->m_bride_cname ?><span> & </span><?= $clients->f_bride_cname ?>
								</h2>

								<h4 class="header_title"><?= hari($clients->wedding_date) ?>, <?= tgl_indo($clients->wedding_date) ?> | <?= $clients->location ?></h4>
								<a id="g-p-f-h" class="pagelink mybtn mybtn-bg" href="#concept"><span><i
											class="far fa-calendar-check"></i>Our Concepts</span></a>

								<?php } ?>




							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Hero Area End-->

		<!-- About Area Start -->
		<section id="about" class="about-area section-padding section-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2 class="s-h-title">
								About <span>Us</span>
							</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						<h3 class="mb-0">TBA</h3>
						<!-- <a href="<?= site_url('clients/c_edit/'. $clients->id_session) ?>" class="mybtn mybtn-bg mt-2 mt-md-0"> <span><i class="fas fa-user"></i>Edit Data</span> </a> -->
					</div>
						<!-- <div class="about-box">
							<div class="row">
								<div class="col-lg-12 d-flex align-self-center">
									<div class="about-content">
										<ul class="info-list">
											<li>
												<span class="title">Nama Lengkap : </span>
												<span class="value"><?= $clients->f_bride_fname ?></span>
											</li>
											<li>
												<span class="title">Nama Panggilan : </span>
												<span class="value"><?= $clients->f_bride_cname ?></span>
											</li>
											<?php if (!empty($clients->f_bride_fathername)) : ?>
											<li>
												<span class="title">Nama Ayah : </span>
												<span class="value"><?= $clients->f_bride_fathername ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->f_bride_fathercname)) : ?>
											<li>
												<span class="title">Nama Panggilan Ayah : </span>
												<span class="value"><?= $clients->f_bride_fathercname ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->f_bride_freplacementname)) : ?>
											<li>
												<span class="title">Nama Pengganti Ayah : </span>
												<span class="value"><?= $clients->f_bride_freplacementname ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->f_bride_freplacementcname)) : ?>
											<li>
												<span class="title">Nama Panggilan Pengganti Ayah : </span>
												<span class="value"><?= $clients->f_bride_freplacementcname ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->f_bride_mothername)) : ?>
											<li>
												<span class="title">Nama Ibu : </span>
												<span class="value"><?= $clients->f_bride_mothername ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->f_bride_mothercname)) : ?>
											<li>
												<span class="title">Nama Panggilan Ibu : </span>
												<span class="value"><?= $clients->f_bride_mothercname ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->f_bride_mreplacementname)) : ?>
											<li>
												<span class="title">Nama Pengganti Ibu : </span>
												<span class="value"><?= $clients->f_bride_mreplacementname ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->f_bride_mreplacementcname)) : ?>
											<li>
												<span class="title">Nama Panggilan Pengganti Ibu : </span>
												<span class="value"><?= $clients->f_bride_mreplacementcname ?></span>
											</li>
											<?php endif; ?>
											<li>
												<span class="title">Pengantin Anak Ke : </span>
												<span class="value"><?= $clients->f_bride_nchild ?> dari <?= $clients->f_bride_hsibling ?> Bersaudara</span>
											</li>
											<li>
												<span class="title">Nama Saudara Kandung : </span>
												<span class="value"><?= nl2br($clients->f_bride_sibling) ?></span>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-lg-12">
					<h3>Data Pengantin Pria</h3>
						<div class="about-box">
							<div class="row">
								<div class="col-lg-12 d-flex align-self-center">
									<div class="about-content">
										<ul class="info-list">
											<li>
												<span class="title">Nama Lengkap : </span>
												<span class="value"><?= $clients->m_bride_fname ?></span>
											</li>
											<li>
												<span class="title">Nama Panggilan : </span>
												<span class="value"><?= $clients->m_bride_cname ?></span>
											</li>
											<?php if (!empty($clients->m_bride_fathername)) : ?>
											<li>
												<span class="title">Nama Ayah : </span>
												<span class="value"><?= $clients->m_bride_fathername ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->m_bride_fathercname)) : ?>
											<li>
												<span class="title">Nama Panggilan Ayah : </span>
												<span class="value"><?= $clients->m_bride_fathercname ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->m_bride_freplacementname)) : ?>
											<li>
												<span class="title">Nama Pengganti Ayah : </span>
												<span class="value"><?= $clients->m_bride_freplacementname ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->m_bride_freplacementcname)) : ?>
											<li>
												<span class="title">Nama Panggilan Pengganti Ayah : </span>
												<span class="value"><?= $clients->m_bride_freplacementcname ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->m_bride_mothername)) : ?>
											<li>
												<span class="title">Nama Ibu : </span>
												<span class="value"><?= $clients->m_bride_mothername ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->m_bride_mothercname)) : ?>
											<li>
												<span class="title">Nama Panggilan Ibu : </span>
												<span class="value"><?= $clients->m_bride_mothercname ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->m_bride_mreplacementname)) : ?>
											<li>
												<span class="title">Nama Pengganti Ibu : </span>
												<span class="value"><?= $clients->m_bride_mreplacementname ?></span>
											</li>
											<?php endif; ?>
											<?php if (!empty($clients->m_bride_mreplacementcname)) : ?>
											<li>
												<span class="title">Nama Panggilan Pengganti Ibu : </span>
												<span class="value"><?= $clients->m_bride_mreplacementcname ?></span>
											</li>
											<?php endif; ?>
											<li>
												<span class="title">Pengantin Anak Ke : </span>
												<span class="value"><?= $clients->m_bride_nchild ?> dari <?= $clients->m_bride_hsibling ?> Bersaudara</span>
											</li>
											<li>
												<span class="title">Nama Saudara Kandung : </span>
												<span class="value"><?= nl2br($clients->m_bride_sibling) ?></span>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- <div class="row">
					<div class="col-lg-12">
					<h3>Detail Pernikahan</h3>
						<div class="about-box">
							<div class="row">
								<div class="col-lg-12 d-flex align-self-center">
									<div class="about-content">
										<ul class="info-list">
											<li>
												<span class="title">Tanggal Pernikahan : </span>
												<span class="value"><?= hari($clients->wedding_date) ?>, <?= tgl_indo($clients->wedding_date) ?></span>
											</li>
											<li>
												<span class="title">Lokasi Acara : </span>
												<span class="value"><?= $clients->location ?></span>
											</li>
											<?php if ($islam) : ?>
											<li>
												<span class="title">Mahar : </span>
												<span class="value"><?= $clients->mahr ?></span>
											</li>
											<li>
												<span class="title">Simbolis Seserahan : </span>
												<span class="value"><?= $clients->handover ?> </span>
											</li>
											<li>
												<span class="title">Jubir Kel. Pria  : </span>
												<span class="value"><?= $clients->m_spokesman ?></span>
											</li>
											<li>
												<span class="title">Jubir Kel. Wanita : </span>
												<span class="value"><?= $clients->f_spokesman ?></span>
											</li>
											<li>
												<span class="title">Nama Penghulu : </span>
												<span class="value"><?= $clients->wedding_officiant ?></span>
											</li>
											<li>
												<span class="title">Wali Nikah : </span>
												<span class="value"><?= $clients->guardian ?></span>
											</li>
											<li>
												<span class="title">Saksi Dari Pria : </span>
												<span class="value"><?= $clients->m_witness ?></span>
											</li>
											<li>
												<span class="title">Saksi Dari Wanita : </span>
												<span class="value"><?= $clients->f_witness ?></span>
											</li>
											<li>
												<span class="title">Qori/Saritilawah : </span>
												<span class="value"><?= $clients->qori ?></span>
											</li>
											<li>
												<span class="title">Nasihat Pernikahan : </span>
												<span class="value"><?= $clients->advice_doa ?></span>
											</li>
											<li>
												<span class="title">Pengapit Pengantin Wanita : </span>
												<span class="value"><?= $clients->clamp ?></span>
											</li>
											<li>
												<span class="title">Pembawa Kalung Melati dari Kel. Wanita : </span>
												<span class="value"><?= $clients->jasmine_carrier ?></span>
											</li>
											<li>
												<span class="title">Pembawa Mahar/Mas Kawin dari Kel. Pria : </span>
												<span class="value"><?= $clients->mahr_carrier ?></span>
											</li>
											<li>
												<span class="title">Pembawa Cincin dari Kel. Pria : </span>
												<span class="value"><?= $clients->ring_carrier ?></span>
											</li>
											<li>
												<span class="title">Koor. Kel. Pria : </span>
												<span class="value"><?= $clients->male_coor ?></span>
											</li>
											<li>
												<span class="title">Koor. Kel. Wanita : </span>
												<span class="value"><?= $clients->female_coor ?></span>
											</li>
											<?php else : ?>
											<li>
												<span class="title">Koor. Kel. Pria : </span>
												<span class="value"><?= $clients->male_coor ?></span>
											</li>
											<li>
												<span class="title">Koor. Kel. Wanita : </span>
												<span class="value"><?= $clients->female_coor ?></span>
											</li>
                                            <li>
                                                <span class="title">Pendeta : </span>
                                                <span class="value"><?= $clients->pastor ?></span>
                                            </li>
                                            <li>
                                                <span class="title">Gereja : </span>
                                                <span class="value"><?= $clients->church ?></span>
                                            </li>
                                            <li>
                                                <span class="title">Pemimpin Doa : </span>
                                                <span class="value"><?= $clients->prayer ?></span>
                                            </li>
                                            <li>
												<span class="title">Sambutan Pernikahan : </span>
                                                <span class="value"><?= $clients->wedding_speech ?></span>
                                            </li>
                                            <?php endif; ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>

		</section>
		<!-- About Area End -->

		<!-- Resume Area Start -->
		<section id="resume" class="about-area section-padding section-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2 class="s-h-title">
								TBA <span>Texts</span>
							</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="about-box">
							<div class="row">
								<div class="col-lg-12 d-flex align-self-center">
									<div class="about-content">


								<!-- <?php if($project->religion === 'Islam') {?>
										<?php if (!empty($clients->wedding_ceremony)) : ?>
											<a href="<?= $clients->wedding_ceremony ?>" target="_blank" class="mybtn mybtn-bg"> 
												<span><i class="fas fa-download"></i>Susunan Acara Akad</span> 
											</a>
										<?php endif; ?>
										<?php if (!empty($clients->reception_afterward)) : ?>
											<a href="<?= $clients->reception_afterward ?>" target="_blank" class="mybtn mybtn-bg"> 
												<span><i class="fas fa-download"></i>Susunan Acara Resepsi</span> 
											</a>
										<?php endif; ?>
										<?php if (!empty($clients->id_session)) : ?>
											<a href="<?= site_url('naskah/data_pengantin/pdf/'. $clients->id_session) ?>" class="mybtn mybtn-bg"> 
												<span><i class="fas fa-download"></i>Susunan Panitia</span> 
											</a>
										<?php endif; ?>
										<?php if (!empty($clients->list_photo)) : ?>
											<a href="<?= $clients->list_photo ?>" target="_blank" class="mybtn mybtn-bg"> 
												<span><i class="fas fa-download"></i>List Tamu/Foto</span> 
											</a>
										<?php endif; ?>
								


								<?php }elseif ($project->religion === 'Kristen'){ ?>
										<?php if (!empty($clients->wedding_ceremony)) : ?>
											<a href="<?= $clients->wedding_ceremony ?>" target="_blank" class="mybtn mybtn-bg"> 
												<span><i class="fas fa-download"></i>Susunan Acara Pemberkatan</span> 
											</a>
										<?php endif; ?>
										<?php if (!empty($clients->reception_afterward)) : ?>
											<a href="<?= $clients->reception_afterward ?>" target="_blank" class="mybtn mybtn-bg"> 
												<span><i class="fas fa-download"></i>Susunan Acara Resepsi</span> 
											</a>
										<?php endif; ?>
										<?php if (!empty($clients->id_session)) : ?>
											<a href="<?= site_url('naskah/data_pengantin/pdf/'. $clients->id_session) ?>" class="mybtn mybtn-bg"> 
												<span><i class="fas fa-download"></i>Susunan Panitia</span> 
											</a>
										<?php endif; ?>
										<?php if (!empty($clients->list_photo)) : ?>
											<a href="<?= $clients->list_photo ?>" target="_blank" class="mybtn mybtn-bg"> 
												<span><i class="fas fa-download"></i>List Tamu/Foto</span> 
											</a>
										<?php endif; ?>
								
								<?php } ?> -->
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if ($islam) : ?>
				<div class="row">
					<div class="col-lg-12">
					<h3>TBA</h3>
						<div class="about-box">
							<div class="row">
								<div class="col-lg-12 d-flex align-self-center">
									<div class="about-content">
                  <h4 class="text-xl font-bold text-center mb-4">TITLE</h4>
</br></br>
        <p class="text-lg">Text</p>

										<!-- <a href="<?= site_url('naskah/jubir_cpp/pdf/'. $clients->id_session) ?>" class="mybtn mybtn-bg"> <span><i class="fas fa-download"></i>Download </span> </a>								 -->
										
									</div>
									
								</div>
							</div>
						</div>
						</div>
					</div>
				<div class="row">
					<div class="col-lg-12">
					<h3>TBA</h3>
						<div class="about-box">
							<div class="row">
								<div class="col-lg-12 d-flex align-self-center">
									<div class="about-content">
                  <h4 class="text-xl font-bold text-center mb-4">TITLE</h4>
</br></br>
        <p class="text-lg">Text</p>

										<!-- <a href="<?= site_url('naskah/jubir_cpw/pdf/'. $clients->id_session) ?>" class="mybtn mybtn-bg"> <span><i class="fas fa-download"></i>Download </span> </a>								 -->
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
						<div class="col-lg-12">
						<h3>TBA</h3>
							<div class="about-box">
								<div class="row">
									<div class="col-lg-12 d-flex align-self-center">
										<div class="about-content">
                    <h4 class="text-xl font-bold text-center mb-4">TITLE</h4>
</br>
        <p class="text-lg leading-relaxed">Text</p>

        <h4 class="text-xl font-bold text-center mb-4">TITLE</h4>
</br>
        <p class="text-lg leading-relaxed text-justify">Text</p>
											<!-- <a href="<?= site_url('naskah/izin_menikah/pdf/'. $clients->id_session) ?>" class="mybtn mybtn-bg"> <span><i class="fas fa-download"></i>Download </span> </a>								 -->
											
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="row">
					<div class="col-lg-12">
					<h3>TBA</h3>
						<div class="about-box">
							<div class="row">
								<div class="col-lg-12 d-flex align-self-center">
									<div class="about-content">
                  <h4 class="text-xl font-bold text-center mb-4">TITLE</h4>
</br></br>
        <p class="text-lg">Text</p>
										<!-- <a href="<?= site_url('naskah/terima_kasih/pdf/'. $clients->id_session) ?>" class="mybtn mybtn-bg"> <span><i class="fas fa-download"></i>Download </span> </a>								 -->
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php else : ?>
				<div class="row">
					<div class="col-lg-12">
					<h3>TBA</h3>
						<div class="about-box">
							<div class="row">
								<div class="col-lg-12 d-flex align-self-center">
									<div class="about-content">
                  <h4 class="text-xl font-bold text-center mb-4">TITLE</h4>
</br></br>
<Text class="indent text-lg text-justify">Text</p>
										<!-- <a href="<?= site_url('naskah/terima_kasih2/pdf/'. $clients->id_session) ?>" class="mybtn mybtn-bg"> <span><i class="fas fa-download"></i>Download </span> </a>								 -->
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</section>
		<!-- Resume Area End -->

		<!-- Portfolio Area Start -->
		<section id="portfolio" class="project-gallery section-padding  section-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2 class="s-h-title">
								Event <span>Concepts</span>
							</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row project-gallery-item">
							<?php 
							$order = ['Venue', 'MC Akad', 'MC Pemberkatan', 'MC Resepsi', 'Wedding Organizer', 'MUA', 'Perlengkapan Catering', 'Catering', 'Dokumentasi', 'Dekorasi', 'Entertainment'];
							usort($vendors, function($a, $b) use ($order) {
								$pos_a = array_search($a->type, $order);
								$pos_b = array_search($b->type, $order);
								return $pos_a - $pos_b;
							});
							foreach ($vendors as $vendor) : ?>
							<div class="mix col-md-6 col-lg-6 gallery-item cat-1 cat-3">
								<a href="<?php echo site_url('clients/c_concept?id_session=' . $vendor->id_session . '&vendor_id=' . $vendor->vendor_id); ?>" class="gallery-item-content pp">
									<div class="item-thumbnail">
									<?php if(empty($vendor->photo1)){?>
										<img src="<?php echo base_url()?>assets/frontend/blank.png?>" alt="" style="width: 100%; height: 300px; object-fit: cover;">
									<?php } else { 
										$partner_path = FCPATH . 'uploads/partner/' . $vendor->photo1;
										if (file_exists($partner_path)) { ?>
											<img src="<?php echo base_url()?>uploads/partner/<?= $vendor->photo1 ?>" alt="" style="width: 100%; height: 300px; object-fit: cover;">
										<?php } else { ?>
											<img src="<?php echo base_url()?>uploads/<?= $vendor->photo1 ?>" alt="" style="width: 100%; height: 300px; object-fit: cover;">
										<?php } 
									} ?>

										<div class="content-overlay">
											<div class="content">
												<h4 class="project-title">
													<?= $vendor->type ?>
												</h4>
												<span class="project-category"><?= $vendor->vendor ?></span>
											</div>
										</div>
									</div>
								</a>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Portfolio Area End -->

		<!-- Blog List  Area Start -->
		<section class="blogs blog-page sidebar section-padding  section-bg" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2 class="s-h-title">
								Event <span>Agenda</span>
							</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="blog-box">
									<div class="blog-images">
										<img src="<?php echo base_url()?>assets/frontend/assets/images/1.jpg" class="img-fluid" alt="">
									</div>
									<div class="blog-details">
										<ul class="post-meta-one">
											<li>
												<p><i class="fa fa-clock-o"></i><?= !empty($agenda->brainstorming) ? hari($agenda->brainstorming) . ', ' . tgl_indo($agenda->brainstorming) : 'Tanggal belum ditentukan' ?></p>
											</li>
										</ul>

										<div class="blog-title">
											TBA
										</div>
										<p class="text">
											#
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="blog-box">
									<div class="blog-images">
										<img src="<?php echo base_url()?>assets/frontend/assets/images/2.jpg" class="img-fluid" alt="">
									</div>
									<div class="blog-details">
										<ul class="post-meta-one">
											<li>
												<p><i class="fa fa-clock-o"></i><?= !empty($agenda->technical_meeting) ? hari($agenda->technical_meeting) . ', ' . tgl_indo($agenda->technical_meeting) : 'Tanggal belum ditentukan' ?></p>
											</li>
										</ul>

										<div class="blog-title">
											TBA
										</div>
										<p class="text">
											#
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="blog-box">
									<div class="blog-images">
										<img src="<?php echo base_url()?>assets/frontend/assets/images/3.jpg" class="img-fluid" alt="">
									</div>
									<div class="blog-details">
										<ul class="post-meta-one">
											<li>
												<p><i class="fa fa-clock-o"></i><?= !empty($agenda->final_revision) ? hari($agenda->final_revision) . ', ' . tgl_indo($agenda->final_revision) : 'Tanggal belum ditentukan' ?></p>
											</li>
										</ul>

										<div class="blog-title">
											TBA
										</div>
										<p class="text">
											#
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="blog-box">
									<div class="blog-images">
										<img src="<?php echo base_url()?>assets/frontend/assets/images/4.jpg" class="img-fluid" alt="">
									</div>
									<div class="blog-details">
										<ul class="post-meta-one">
											<li>
												<p><i class="fa fa-clock-o"></i><?= !empty($agenda->loading_decoration) ? hari($agenda->loading_decoration) . ', ' . tgl_indo($agenda->loading_decoration) : 'Tanggal belum ditentukan' ?></p>
											</li>
										</ul>

										<div class="blog-title">
											TBA 
										</div>
										<p class="text">
											# 
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="blog-box">
									<div class="blog-images">
										<img src="<?php echo base_url()?>assets/frontend/assets/images/5.jpg" class="img-fluid" alt="">
									</div>
									<div class="blog-details">
										<ul class="post-meta-one">
											<li>
												<p><i class="fa fa-clock-o"></i><?= !empty($agenda->wedding_day) ? hari($agenda->wedding_day) . ', ' . tgl_indo($agenda->wedding_day) : 'Tanggal belum ditentukan' ?></p>
											</li>
										</ul>

										<div class="blog-title">
											TBA
										</div>
										<p class="text">
											#
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="blog-box">
									<div class="blog-images">
										<img src="<?php echo base_url()?>assets/frontend/assets/images/6.jpg" class="img-fluid" alt="">
									</div>
									<div class="blog-details">
										<ul class="post-meta-one">
											<li>
												<p><i class="fa fa-clock-o"></i><?= !empty($agenda->honeymoon) ? hari($agenda->honeymoon) . ', ' . tgl_indo($agenda->honeymoon) : 'Tanggal belum ditentukan' ?></p>
											</li>
										</ul>

										<div class="blog-title">
											TBA
										</div>
										<p class="text">
											#
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog List  Area End -->

		<!-- Contact Us Area Start -->
		<section class="contact contact-info-area section-padding  section-bg" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h2 class="s-h-title">
								Rate <span>Us</span>
							</h2>
							Ulasan Mereka Menjadi Saksi Kinerja brandname Dalam Memberikan Yang Terbaik Di Setiap Pernikahan
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-review">
							<div class="reviewr">
								<div class="img">
									<img src="<?php echo base_url()?>assets/frontend/assets/images/rev1.png" alt="">
								</div>
								<div class="content">
									<h4 class="name">
										Name
									</h4>
									<p>
										Event
									</p>
								</div>
							</div>
							<div class="stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="content">
								<p>
									Review
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-review">
							<div class="reviewr">
								<div class="img">
									<img src="<?php echo base_url()?>assets/frontend/assets/images/samson.png" alt="">
								</div>
								<div class="content">
									<h4 class="name">
										Name
									</h4>
									<p>
										Event
									</p>
								</div>
							</div>
							<div class="stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="content">
								<p>
									review
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-review">
							<div class="reviewr">
								<div class="img">
									<img src="<?php echo base_url()?>assets/frontend/assets/images/arsyad.png" alt="">
								</div>
								<div class="content">
									<h4 class="name">
										Name
									</h4>
									<p>
										Event
									</p>
								</div>
							</div>
							<div class="stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="content">
								<p>
									Review
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-review">
							<div class="reviewr">
								<div class="img">
									<img src="<?php echo base_url()?>assets/frontend/assets/images/dini.png" alt="">
								</div>
								<div class="content">
									<h4 class="name">
										Name
									</h4>
									<p>
										Event
									</p>
								</div>
							</div>
							<div class="stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="content">
								<p>
									Review
								</p>
							</div>							
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-review">
								<div class="reviewr">
									<div class="img">
										<img src="<?php echo base_url()?>assets/frontend/assets/images/yasmine.png" alt="">
									</div>
									<div class="content">
										<h4 class="name">
											Name
										</h4>
										<p>
											Event
										</p>
									</div>
								</div>
								<div class="stars">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
								<div class="content">
									<p>
										Review
									</p>
								</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-review">
							<div class="reviewr">
								<div class="img">
									<img src="<?php echo base_url()?>assets/frontend/assets/images/ghazy2.png" alt="">
								</div>
								<div class="content">
									<h4 class="name">
										Name
									</h4>
									<p>
										Event
									</p>
								</div>
							</div>
							<div class="stars">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
							<div class="content">
								<p>
									Review
								</p>
							</div>
						</div>
					</div>				
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading">
							<h3 class="">
								<span>Review Kamu Sangat Berarti Untuk Perkembangan #</span>
							</h3>
							<a href=# target="_blank" class="mybtn mybtn-bg"> <span><i class="fas fa-hand-holding-heart"> Berikan Ulasan Disini</i></span> </a> 
						</div>
					</div>
				</div>

				<!--/.row-->
			</div>
		</section>
		<!-- Contact Us Area End -->
	</div>
	<!-- Main Website wrapper End -->

	<!-- Blog Modal Start-->
	<div class="modal fade" id="blogmodal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</div>
					<div class="blog-details">
						<div class="blog-content">
							<div class="feature-image">
								<img src="<?php echo base_url()?>assets/frontend/assets/images/b1.jpg" class="img-fluid" alt="">
							</div>
							<div class="content">
								<h3 class="title">
									By an outlived insisted procured improved am. Paid hill fine ten now love even leaf.
								</h3>
								<ul class="post-meta">
									<li>
										<a href="#">
											<i class="fas fa-user-tie"></i>
											<span>Alex Jole</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i>
											<span>
												February 21, 2019
											</span>
										</a>
									</li>

								</ul>
								<p>
									Now for manners use has company believe parlors. Least nor party who wrote while did. Excuse formed as
									is agreed admire so on result parish. Put use set uncommonly announcing and travelling. Allowance
									sweetness direction to as necessary. Principle oh explained excellent do my suspected conveying in.
								</p>
								<p>
									Least nor party who wrote while did. Excuse formed as is agreed admire so on result parish. Put use
									set
									uncommonly announcing and travelling.
								</p>
							
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Blog Modal End-->

	<!-- Main jquery and all jquery plugin hear -->
  <script src="<?php echo base_url()?>assets/frontend/assets/js/jquery.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/js/magnific-popup.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/js/circel.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/js/typed.min.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/js/mixitup.min.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/js/main.js"></script>

</body>

</html>