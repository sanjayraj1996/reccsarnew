<?php
	$country = $this->Viewmodel->country();
	foreach($country as $k => $v){
		if(!empty($v['r_univ_name'])) {
			$hd[$v['r_country_name']][] = $v;
			$link[$v['r_country_name']]['link'] = $v['idcountry'];
		} else {
			$hd[$v['r_country_name']] = [];
			$link[$v['r_country_name']]['link'] = $v['idcountry'];
		}
	}
	$training = $this->Viewmodel->training_menu();
	foreach($training as $s => $d){
		if(!empty($d['r_course_name'])) {
			$hs[$d['r_training_category']][] = $d;
			$link[$d['r_training_category']]['link'] = $d['idtraining'];
		} else {
			$hs[$d['r_training_category']] = [];
			$link[$d['r_training_category']]['link'] = $d['idtraining'];
		}
	}
?>
<header class="main-header-area">
	<div class="navbar-area navbar-style-two-with-color">
		<div class="main-responsive-nav">
			<div class="container">
				<div class="main-responsive-menu">
					<div class="logo">
						<a href="<?php echo base_url(''); ?>">
							<img src="<?php echo base_url('assets/images/black-logo.png'); ?>" style="width: 100px;" class="black-logo" alt="image">
							<img src="<?php echo base_url('assets/images/logo.png'); ?>" class="white-logo" style="width: 100px;" alt="image">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main-navbar">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="<?php echo base_url(''); ?>">
						<img src="<?php echo base_url('assets/images/black-logo.png'); ?>" style="width: 140px;" class="black-logo" alt="image">
						<img src="<?php echo base_url('assets/images/logo.png'); ?>" class="white-logo" style="width: 140px;" alt="image">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<?php $uriMethod_name=$this->router->fetch_method(); ?>
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a href="<?php echo base_url(''); ?>" class="nav-link <?= ($uriMethod_name == 'index') ? 'active':''; ?>">Home</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('about'); ?>" class="nav-link <?= ($uriMethod_name == 'about') ? 'active':''; ?>">About</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('services'); ?>" class="nav-link <?= ($uriMethod_name == 'services') ? 'active':''; ?>">Services</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link <?= ($uriMethod_name == 'university' ||  $uriMethod_name == 'universitydetail') ? 'active':''; ?>">
									University 
									<i class="ri-arrow-down-s-line"></i>
								</a>
								<ul class="dropdown-menu">
									<?php 
										foreach($hd as $hk => $hv){ 
											$class = (count($hv) > 0)?"dropdown-submenu":"";
									?>
									<li class="<?=$class?>">
										<a href="<?php echo base_url('university/').$link[$hk]['link']?>"><?=$hk?><?php if(count($hv) > 0){ ?><i class="ri-arrow-right-s-line"></i><?php } ?></a>
										<?php if(count($hv) > 0){ ?>
										<ul class="dropdown-menu">
											<?php foreach($hv as $huk => $huv){ ?>
											<li class="nav-item">
												<a href="<?= base_url('universitydetail/').$huv['id']?>" class="nav-link"><?=$huv['r_univ_name']?></a>
											</li>
											<?php } ?>
										</ul>
										<?php } ?>
									</li>
									<?php } ;?>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link <?= ($uriMethod_name == 'courses' ||  $uriMethod_name == 'coursesdetail') ? 'active':''; ?>">
									Courses 
									<i class="ri-arrow-down-s-line"></i>
								</a>
								<ul class="dropdown-menu">
									<?php 
										foreach($hs as $hk => $hv){ 
											$class = (count($hv) > 0)?"dropdown-submenu":"";
									?>
									<li class="<?=$class?>">
										<a href="<?php echo base_url('courses/').$link[$hk]['link']?>" class="nav-link"><?=$hk?><?php if(count($hv) > 0){ ?><i class="ri-arrow-right-s-line"></i><?php } ?></a>
										<?php if(count($hv) > 0){ ?>
										<ul class="dropdown-menu">
											<?php foreach($hv as $huk => $huv){ ?>
											<li class="nav-item">
												<a href="<?= base_url('coursesdetail/').$huv['id']?>" class="nav-link"><?=$huv['r_course_name']?></a>
											</li>
											<?php } ?>
										</ul>
										<?php } ?>
									</li>
									<?php } ;?>
								</ul>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('contact'); ?>" class="nav-link <?= ($uriMethod_name == 'contact') ? 'active':''; ?>">Contact</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url(''); ?>" class="nav-link">Study Material</a>
							</li>
						</ul>
						<div class="others-options d-flex align-items-center">
							<div class="option-item">
								<div class="side-menu-btn">
									<i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div class="others-option-for-responsive">
			<div class="container">
				<div class="dot-menu">
					<div class="inner">
						<div class="circle circle-one"></div>
						<div class="circle circle-two"></div>
						<div class="circle circle-three"></div>
					</div>
				</div>
				<div class="container">
					<div class="option-inner">
						<div class="others-options d-flex align-items-center">
							<div class="option-item">
								<i class="search-btn ri-search-line"></i>
								<i class="close-btn ri-close-line"></i>
								<div class="search-overlay search-popup">
									<div class='search-box'>
										<form class="search-form">
											<input class="search-input" placeholder="Search..." type="text">
											<button class="search-button" type="submit">
												<i class="ri-search-line"></i>
											</button>
										</form>
									</div>
								</div>
							</div>
							<div class="option-item">
								<div class="side-menu-btn">
									<i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>