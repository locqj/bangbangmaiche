<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>suggest</title>
</head>
<body>
	<form action='<?php echo U('Activity/sub_activity');?>' method='post' enctype="multipart/form-data">
	<span>活动主题:</span>
	<input type='text' id='theme' name='theme'>
	<br>
	<span>地点:</span>
	<input type="text" id='address'name='address'>
	<br>
	<span>时间段:</span>
	<input type="text" id='activitytime' name ='activitytime'><br>
	<span>活动描述:</span>
	<textarea name="descripe" id="descripe" cols="30" rows="10"></textarea><br>
	<div class="result" >上传允许文件类型：gif png jpg 图像文件，并生成2张缩略图，其中大图带水印，生成后会删除原图。</div><br>
    <?php if(!empty($data)): ?><img src="__UPLOAD__/m_<?php echo ($data["image"]); ?>" /> <img src="__UPLOAD__/s_<?php echo ($data["image"]); ?>" /><?php endif; ?>
            <input type="file" name="image" id="img"/>
        <input type="submit" value="上传" id="button"> 
	<input type='submit' id='sub' value='sub' >

</form>
</body>
</html>