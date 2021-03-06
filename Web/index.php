<?php
$scriptUrl = '//'.htmlspecialchars($_SERVER['HTTP_HOST']).'/widget.js';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Qiita Widget</title>
	<link rel="stylesheet" type="text/css" media="screen,tv" href="css/bootstrap.min.css" />
	<style>
	body {
		background-color: #59bb0b;
		padding: 100px 0;
	}
	</style>
</head>
<body>

<div class="container">
	<h1 style="text-align: center; margin-bottom: 30px; color: #fff;">Qiita Widget</h1>

	<div class="row">
		<div class="span2"></div>
		<div class="span8">
			<div class="hero-unit">
				<div class="input-prepend">
					<span class="add-on">http://qiita.com/users/</span><input class="span3" size="16" type="text" placeholder="username or username@github" id="username">
					<button type="button" class="btn" id="get_code_button">Get Code</button>

				</div>
				<pre id="code">&lt;a class=&quot;qiita-timeline&quot; href=&quot;https://qiita.com/users/{&#12518;&#12540;&#12470;&#21517;}&quot; data-qiita-username=&quot;{&#12518;&#12540;&#12470;&#21517;}&quot;&gt;{&#12518;&#12540;&#12470;&#21517;}&#12398;tips&lt;/a&gt;
&lt;script src=&quot;<?php echo $scriptUrl ?>&quot;&gt;&lt;/script&gt;</pre>

				<div id="preview" style="margin: auto; width: 300px; "></div>
				<div style="text-align: center; margin-top: 20px;">
					<a href="https://github.com/suin/qiita-widget">fork on github</a>
				</div>
			</div>

			<hr>

			<footer>
				<p>Qiita Widget created by <a href="http://qiita.com/users/suin">suin</a></p>
			</footer>
		</div>
		<div class="span2"></div>
	</div>

</div>
<script src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">

jQuery(function(){
	var code = '<a class="qiita-timeline" href="https://qiita.com/users/__username__" data-qiita-username="__username__">__username__のtips</a><'+'script src="<?php echo $scriptUrl ?>"><'+'/script>';
	$('#get_code_button').click(function(){
		var username = $('#username').val();
		if ( username ) {
			var _code = code.replace(/__username__/g, username);
			$('#code').text(_code);
			$('#preview').html('<iframe src="preview.php?username='+username+'" frameborder="no" id="frame" style="height:600px"></iframe>');
		}
	});
});
</script>
</body>
</html>