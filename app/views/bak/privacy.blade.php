<?php $page="privacy";
	  $banner_title="Privacy Policy";
?>
<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="privacy">
@include('layouts.header') 
@include('layouts.navbar')  
    <section id="content">
        <div class="container">
            <div class="col-md-12">
                <h3 class="title blue">{{$title}}</h3>
				{{$content}}
            </div>
        </div>
    </section>
   	@include('layouts.footer')
</body>
</html>