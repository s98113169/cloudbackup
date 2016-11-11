<?php 
	include("functions/connection.php");
	include("functions/ExportToExcel.php");

	if(isset($_POST['submit'])) {
		ExportExcel("records");
	}
	
 ?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/stylesheets/records.css');?>"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<header>
		<div class="heading">
			<h1>資料列表</h1>
			<form name="export" method="post">
				<input class="export" type="submit" value="輸出" name="submit">
			</form>
			<a id="logout" href="<?= base_url('records/logout') ?>">登出</a>

		</div>
	</header>

	<div class="table">
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>姓名</th>
					<th>公司名稱</th>
					<th>部門</th>
					<th>公司規模</th>
					<th>職稱</th>
					<th>電話</th>
					<th>Email</th>
					<th>生產環境</th>
					<th>預算</th>
					<th>份與還原需求</th>
					<th>異地備份需求</th>
					<th>公有雲應用狀況</th>
					<th>時間</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($records as $record) {   ?>
					<tr>
						<td><?php echo $record->id; ?></td>
						<td><?php echo $record->name; ?></td>
						<td><?php echo $record->company_name; ?></td>
						<td><?php echo $record->department; ?></td>
						<td><?php echo $record->employees; ?></td>
						<td><?php echo $record->title; ?></td>
						<td><?php echo $record->telephone; ?></td>
						<td><?php echo $record->email; ?></td>
						<td><?php echo $record->question1; ?></td>
						<td><?php echo $record->question2; ?></td>
						<td><?php echo $record->question3; ?></td>
						<td><?php echo $record->question4; ?></td>
						<td><?php echo $record->question5; ?></td>
						<td><?php echo $record->timestamp; ?></td>
						
					</tr>

				<?php } ?>
			</tbody>
			
		</table>
	</div>


	<footer>
		

	</footer>
	
	<!-- <script type="text/javascript" src="/script/script.js"></script> -->
</body>
</html>
