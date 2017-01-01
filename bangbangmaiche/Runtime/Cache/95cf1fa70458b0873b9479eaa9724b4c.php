<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>suggest</title>
</head>
<body>
	<form action='<?php echo U('Shop/sub_shop');?>' method='post' enctype="multipart/form-data">
	<span>产品标题:</span>
	<input type='text' id='title' name='title'>
	<br>
	<span>价格:</span>
	<input type="text" id='price'name='price'>
	<br>
	<span>产品描述:</span>
	<textarea name="descripe" id="descripe" cols="30" rows="10"></textarea><br>
	<div class="result" >上传允许文件类型：gif png jpg 图像文件，并生成2张缩略图，其中大图带水印，生成后会删除原图。</div><br>
    <?php if(!empty($data)): ?><img src="__UPLOAD__/m_<?php echo ($data["image"]); ?>" /> <img src="__UPLOAD__/s_<?php echo ($data["image"]); ?>" /><?php endif; ?>
            <input type="file" name="image" id="img"/>
        <!-- <input type="submit" value="上传" id="button">  -->
	<input type='submit' id='sub' value='sub' >

</form>
</body>
</html>