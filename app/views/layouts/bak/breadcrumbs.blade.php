<section id="breadcrumbs">
    <div class="container">
    	<?php foreach ($breadcrumbs as $key => $value):?>
    		<?php if($key != 0):?><span>/</span><?php endif;?>
    		<a href="<?=$value['link']?>"><?=$value['name']?></a>
    	<?php endforeach;?>
    </div>
</section>