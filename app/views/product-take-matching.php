<?php
	$product = array();
	$product[] = array('id'=>1, 'name'=>'Coltalin', 'img'=>'product_450.png', 'symptoms'=>array('流鼻水','噴嚏','鼻塞','發燒','頭痛','喉嚨痛','淚眼'), 'level'=>1);
	$product[] = array('id'=>2, 'name'=>'Coltalin Extra Fast', 'img'=>'product_450.png', 'symptoms'=>array('流鼻水','噴嚏','鼻塞','發燒','頭痛','喉嚨痛','淚眼'), 'level'=>2);
	$product[] = array('id'=>3, 'name'=>'Coltalin ND', 'img'=>'product_450.png', 'symptoms'=>array('鼻塞','發燒','頭痛','喉嚨痛','淚眼'), 'level'=>3);
	$product[] = array('id'=>4, 'name'=>'Coltalin GP', 'img'=>'product_450.png', 'symptoms'=>array('流鼻水','噴嚏','鼻塞','發燒','頭痛','喉嚨痛','乾咳','痰咳','淚眼'), 'level'=>0);
	$product[] = array('id'=>5, 'name'=>'Coltalin GPX', 'img'=>'product_450.png', 'symptoms'=>array('流鼻水','噴嚏','鼻塞','發燒','頭痛','喉嚨痛','乾咳','痰咳','淚眼'), 'level'=>0);
	$product[] = array('id'=>6, 'name'=>'Children Coltain Cold and Flu', 'img'=>'product_450.png', 'symptoms'=>array('流鼻水','噴嚏','鼻塞','發燒','頭痛','喉嚨痛','淚眼'), 'level'=>0);
	$product[] = array('id'=>7, 'name'=>'Children Coltain', 'img'=>'product_450.png', 'symptoms'=>array('流鼻水','噴嚏','鼻塞','發燒','頭痛','喉嚨痛','淚眼'), 'level'=>0);
	$product[] = array('id'=>8, 'name'=>'Fortolin-Nite', 'img'=>'product_450.png', 'symptoms'=>array('發燒','頭痛','喉嚨痛','經痛','牙痛'), 'level'=>0);
	$product[] = array('id'=>9, 'name'=>'Fortolin-Extra', 'img'=>'product_450.png', 'symptoms'=>array('發燒','頭痛','喉嚨痛','經痛','牙痛'), 'level'=>0);
	$product[] = array('id'=>10, 'name'=>'Fortolin', 'img'=>'product_450.png', 'symptoms'=>array('發燒','頭痛','喉嚨痛','牙痛'), 'level'=>0);
	$product[] = array('id'=>11, 'name'=>'Children Fortolin', 'img'=>'product_450.png', 'symptoms'=>array('發燒','頭痛','喉嚨痛','經痛','牙痛'), 'level'=>0);
	$product[] = array('id'=>12, 'name'=>'Magsil/Magsil Lemon', 'img'=>'product_450.png', 'symptoms'=>array('火燒心','胃痛','胃氣脹','胃酸倒流'), 'level'=>0);
	$product[] = array('id'=>13, 'name'=>'Aulzadin', 'img'=>'product_450.png', 'symptoms'=>array('火燒心','胃痛','胃氣脹','胃酸倒流'), 'level'=>0);
	$product[] = array('id'=>14, 'name'=>'NT-Diorea', 'img'=>'product_450.png', 'symptoms'=>array('火燒心','胃痛','胃氣脹','胃酸倒流','肚瀉'), 'level'=>0);
	$product[] = array('id'=>15, 'name'=>'NT-Alergi', 'img'=>'product_450.png', 'symptoms'=>array('流鼻水','噴嚏','淚眼'), 'level'=>0);
	$product[] = array('id'=>16, 'name'=>'Sprinsol', 'img'=>'product_450.png', 'symptoms'=>array('流鼻水','噴嚏','淚眼'), 'level'=>0);
	$product[] = array('id'=>17, 'name'=>'Excaugh', 'img'=>'product_450.png', 'symptoms'=>array('痰咳'), 'level'=>0);
	$product[] = array('id'=>18, 'name'=>'Decaugh', 'img'=>'product_450.png', 'symptoms'=>array('乾咳'), 'level'=>0);
	$product[] = array('id'=>19, 'name'=>'Decaugh II', 'img'=>'product_450.png', 'symptoms'=>array('乾咳'), 'level'=>0);
	$product[] = array('id'=>20, 'name'=>'Moison6', 'img'=>'product_450.png', 'symptoms'=>array('暈船浪'), 'level'=>0);
	$product[] = array('id'=>21, 'name'=>'Nofrozic', 'img'=>'product_450.png', 'symptoms'=>array('喉嚨痛'), 'level'=>0);

	if(isset($_POST['match']) && $_POST['match'] == 'match' && isset($_POST['symptoms']) && !empty($_POST['symptoms'])){
		$matched = array();
		foreach ($product as $key => $value) {
			$valid = true;
			foreach ($_POST['symptoms'] as $keyx => $valuex) {
				if(!in_array($valuex, $value['symptoms'])){
					$valid = false;
				}
			}
			if ($valid) {
				$matched[] = $value['name'];
			}
		}

		$output = array();
		foreach ($product as $key => $value) {
			if(in_array($value['name'], $matched)){
				foreach ($value['symptoms'] as $keyx => $valuex) {
					if(!in_array($valuex, $output))
						$output[] = $valuex;
				}
			}
		}

		$output_product = array();
		foreach ($product as $key => $value) {
			if(in_array($value['name'], $matched))
				$output_product[] = array('id'=>$value['id'], 'name'=>$value['name'], 'img'=>$value['img'], 'level'=>$value['level']);
		}
		echo json_encode(array($output_product, $output));
		die();
	}
?>