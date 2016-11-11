
	<!-- <form method="POST" id="submit_form"> -->
	<?php echo validation_errors() ?>
	<form action="<?= base_url('records/insertRecords') ?>" method="post">
		<label for="question1" name="qestion1">生產環境有哪些:</label>
		<input type="checkbox" name="question1[]" value="vSphere"> vSphere
		<input type="checkbox" name="question1[]" value="Windows"> Windows 
		<input type="checkbox" name="question1[]" value="Linux"> Linux
		<br>

		<label for="question2">資料保護的預算: </label>
		<select id="question2" name="question2">
			<option value="" diabled selected> -- 請選擇 -- </option>
			<option value="50萬(含)以內">50萬(含)以內</option>
			<option value="50~100(含)萬">50~100(含)萬</option>
			<option value="100萬以上">100萬以上</option>
		</select>
		<br>

		<label for="question3">備份與還原需求：</label>
		<select id="question3" name="question3">
			<option value="" diabled selected> -- 請選擇 -- </option>
			<option value="虛擬機整機">虛擬機整機</option>
			<option value="實體機整機(Windows)">實體機整機(Windows)</option>
			<option value="實體機整機(Linux)">實體機整機(Linux)</option>
			<option value="實體機/虛擬機資料庫">實體機/虛擬機資料庫</option>
		</select>
		<br>

		<label for="question4">異地備份需求：</label>
		<select id="question4" name="question4">
			<option value="" diabled selected> -- 請選擇 -- </option>
			<option value="已經導入(磁帶送到異地)">已經導入(磁帶送到異地)</option>
			<option value="已經導入(軟體抄寫)">已經導入(軟體抄寫)</option>
			<option value="有需求尚無適當場所">有需求尚無適當場所</option>
			<option value="有需求無足夠預算">有需求無足夠預算</option>
		</select>
		<br>

		<label for="question5">公有雲應用狀況：</label>
		<select id="question5" name="question5">
			<option value="" diabled selected> -- 請選擇 -- </option>
			<option value="microsoft_azure">Microsoft</option>
			<option value="microsoft_office_365">Microsoft Office 365</option>
			<option value="hicloud">HiCloud</option>
			<option value="google_cloud">Google Cloud</option>
			<option value="aws">AWS</option>
			<option value="others">其他</option>
		</select>
		<br>

		<label for="name">姓名：</label>
		<input id="name" type="text" name="name">
		<br>

		<label for="company_name">公司名稱：</label>	
		<input id="company_name" type="text" name="company_name">
		<br>

		<label for="department">部門：</label>
		<input id="department" type="text" name="department">
		<br>

		<label for="employees">公司規模：</label>
		<select name="employees" id="employees">
			<option value="" diabled selected> -- 請選擇 -- </option>
			<option value="50人以下">50人以下</option>
			<option value="50~200人">50~200人</option>
			<option value="200~500人">200~500人</option>
			<option value="500人以上">500人以上</option>
		</select>
		<br>

		<label for="title">職稱：</label>
		<input id="title" type="text" name="title">
		<br>

		<label for="telephone">電話：</label>
		<input id="telephone" type="text" name="telephone">
		<br>

		<label for="email">Email：</label>
		<input id="email" type="text" name="email">
		<br>
		
		<input type="submit" id="" name="submit" value="submit">
	</form>

	<div id="responses"></div>


