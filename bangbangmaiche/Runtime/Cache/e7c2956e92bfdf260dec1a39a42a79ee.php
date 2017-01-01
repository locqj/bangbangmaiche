<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<th>carhave_name</th>
			<th>name</th>
			<th>phone</th>
			<th>carinfo</th>
			<th>price</th>
			<th>time</th>
			<th>评价1</th>
			<th>评价2</th>
			<th>评价3</th>		
		</tr>
		<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
				<td><?php echo ($v["carhave_name"]); ?></td>
				<td><?php echo ($v["name"]); ?></td>
				<td><?php echo ($v["phone"]); ?></td>
				<td><?php echo ($v["carinfo"]); ?></td>
				<td><?php echo ($v["price"]); ?></td>
				<td><?php echo (date('y-m-d H:i',$v["time"])); ?></td>
				<td><a href="<?php echo U('Wap/admincarhavejudgescount',array('id'=>$v['id'],'content'=>'good'));?>">好</a></td>
				<td><a href="<?php echo U('Wap/admincarhavejudgescount',array('id'=>$v['id'],'content'=>'ok'));?>" >中</a></td/>
				<td><a href="<?php echo U('Wap/admincarhavejudgescount',array('id'=>$v['id'],'content'=>'bad'));?>">差</a></td>
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