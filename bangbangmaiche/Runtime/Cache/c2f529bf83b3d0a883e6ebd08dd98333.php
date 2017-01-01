<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<th>suggest_name</th>
			<th>username</th>
			<th>want</th>
			<th>time</th>
			<th>评价1</th>
			<th>评价2</th>
			<th>评价3</th>		
		</tr>
		<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
				<td><?php echo ($v["suggest_name"]); ?></td>
				<td><?php echo ($v["user_name"]); ?></td>
				<td><?php echo ($v["want"]); ?></td>
				<td><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
				<td><a href="<?php echo U('Wap/adminjudgescount',array('id'=>$v['id'],'content'=>'good'));?>">好</a></td>
				<td><a href="<?php echo U('Wap/adminjudgescount',array('id'=>$v['id'],'content'=>'ok'));?>" >中</a></td/>
				<td><a href="<?php echo U('Wap/adminjudgescount',array('id'=>$v['id'],'content'=>'bad'));?>">差</a></td>
				<!-- <td><a href="<?php echo U('MsgManage/delete',array('id'=>$v['id']));?>">删除</a></td> -->
			</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan='5' align='center'>
				<?php echo ($page); ?>
			</td>
		</tr>	
	</table>
	
</body>
</html>