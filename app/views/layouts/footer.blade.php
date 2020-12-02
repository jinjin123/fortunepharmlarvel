@include('global')
<?php

if ($lang=='eng'){
$policy_title="Privacy policy";
$disclaimer="Terms of Use & Disclaimer";
$copyright="Copyright @ 2015 Fortune Pharmacal Co. Ltd.";
}else if ($lang=='cht'){
$policy_title="私隱政策";
$disclaimer="使用條款及免責聲明";
$copyright="版權屬幸福醫藥有限公司所有 &copy; 2015";
}else{
$policy_title="私隐政策";
$disclaimer="使用条款及免责声明";
$copyright="版权属幸福医药有限公司所有&copy; 2015";
}

?>

<footer id="footer">
	<div class="container-fluid">
		<div class="container-fluid-40">
			<div class="footer-link">
				<ul>
					<li><a href="{{$GLOBALS['home_directory']}}{{$lang}}/privacy">{{$policy_title}}</a></li>
					<li><a href="{{$GLOBALS['home_directory']}}{{$lang}}/terms">{{$disclaimer}}</a></li>
				</ul>
			</div>
			<div class="copyright"><p>{{$copyright}}</p></div>
		</div>
	</div>
</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71965534-1', 'auto');
  ga('send', 'pageview');

</script>
