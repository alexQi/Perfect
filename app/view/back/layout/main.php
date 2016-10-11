<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perfect framework</title>
	<link href="favicon.ico" rel="shortcut icon" />

	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseSrc; ?>web/css/default.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseSrc; ?>web/js/themes/pepper-grinder/easyui.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseSrc; ?>web/js/themes/icon.css" />

	<script type="text/javascript" src="<?php echo $this->baseSrc; ?>web/js/public.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseSrc; ?>web/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseSrc; ?>web/js/jquery.easyui.min.js"></script>
</head>
<body class="easyui-layout" style="overflow-y: hidden" scroll="no">
	<?php  include($viewFile);?>
</body>
</html>