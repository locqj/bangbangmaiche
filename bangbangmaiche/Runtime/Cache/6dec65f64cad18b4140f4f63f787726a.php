<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<style type="text/css">
    #img{height:22px; border:#000 2px solid}
    #button{height:30px; width:100px;}
</style>
</head>
<body>
    <div class="result" >上传允许文件类型：gif png jpg 图像文件，并生成2张缩略图，其中大图带水印，生成后会删除原图。</div><br>
    <?php if(!empty($data)): ?><img src="__UPLOAD__/m_<?php echo ($data["image"]); ?>" /> <img src="__UPLOAD__/s_<?php echo ($data["image"]); ?>" /><?php endif; ?>
    <form action="http://xwj.565tech.com/Ucar/index.php?m=Image&a=upload" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="img"/>
        <input type="submit" value="上传" id="button"> 
    </form>
</body>
</html>