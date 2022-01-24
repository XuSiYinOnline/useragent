<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include dirname(__FILE__) . '/useragent.php';
$useragent = UserAgentFactory::analyze($_SERVER['HTTP_USER_AGENT']);
?>
<!DOCTYPE html>
<html lang="cn">
<head>
  <title>UserAgent</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css">
</head>
<body>

	<p>代理:  <?php echo $useragent->useragent; ?></p>
	<p>平台:  <?php echo $useragent->platform['type'] ?>
    <p>设备:  <img src="<?php echo $useragent->device['image'] ?>"/></p>
    <p>系统:  <img src="<?php echo $useragent->os['image'] ?>"/><?php echo $useragent->os['title'] ?></p>
    <p>浏览器:  <img src="<?php echo $useragent->browser['image'] ?>"/><?php echo $useragent->browser['title'] ?></p>

</body>
</html>