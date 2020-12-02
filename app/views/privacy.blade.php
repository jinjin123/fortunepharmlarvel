<?php 
$page="privacy";
$title_lang='title_'.$lang;
$content_lang='content_'.$lang;		
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="terms" class="contact-section contact-us">
	<div id="wrapper">
			@include('layouts/sidebar')
		<!-- Page Content -->
		<div id="page-content-wrapper">
		@include('layouts/header')
	
				@include('layouts/contact-nav')
			<div id="main">
				<div class="container-fluid">
					<section id="terms-wrapper" class="row">
						<div class="col-sm-4 terms-left">
						<h2>{{$policies[0]->$title_lang}}</h2>
						</div>
						<div class="col-sm-8 terms-right">
							{{$policies[0]->$content_lang}}
						</div>
					</div>
				</section>
			</div>
		</div>
		@include('layouts/footer')
	</div>
	<!-- Page Content -->
</div>
</body>
</html>