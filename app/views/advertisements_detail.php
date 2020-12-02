<?php

if(isset($_POST['id']) && is_numeric($_POST['id'])){
	$detail = array();
	$detail[] = array('id'=>1, 'title'=>'2014 幸福醫藥 電視廣告 - 幸福胃的素', 'date'=>'發佈日期: 2014年3月1日', 'description'=>'每個當媽媽的都應該看！也應該為自己當媽媽而自豪！香港難得比較正面的商業宣傳。', 'youtube'=>'khz3spl9wfI');
	$detail[] = array('id'=>2, 'title'=>'2014 幸福醫藥 電視廣告 - 幸福胃的素', 'date'=>'發佈日期: 2014年3月2日', 'description'=>'2', 'youtube'=>'eZbYNhKWLOU');
	$detail[] = array('id'=>3, 'title'=>'2014 幸福醫藥 電視廣告 - 幸福胃的素', 'date'=>'發佈日期: 2014年3月3日', 'description'=>'3', 'youtube'=>'D9IIoRTJ9l0');
	$detail[] = array('id'=>4, 'title'=>'2014 幸福醫藥 電視廣告 - 幸福胃的素', 'date'=>'發佈日期: 2014年3月4日', 'description'=>'4', 'youtube'=>'FgKrpKxOM0Y');
	$detail[] = array('id'=>5, 'title'=>'2014 幸福醫藥 電視廣告 - 幸福胃的素', 'date'=>'發佈日期: 2014年3月5日', 'description'=>'5', 'youtube'=>'9EjW0S-ZOLA');
	$detail[] = array('id'=>6, 'title'=>'2014 幸福醫藥 電視廣告 - 幸福胃的素', 'date'=>'發佈日期: 2014年3月6日', 'description'=>'6', 'youtube'=>'khz3spl9wfI');


	foreach ($detail as $key => $value) {
		if($value['id'] == $_POST['id'])
			echo json_encode($detail[$key]);
	}
	die();
}
?>