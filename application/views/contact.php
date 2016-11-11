<div class="header-form">
	<div class="content">
		<div class="logo">
			<a href="http://www.genesis.com.tw/cloudbackup/"><img src="<?= base_url('/img/genesis_logo.png'); ?>" alt=""></a>
		</div>
		<div class="backbn">
			<a class="button2" href="http://www.genesis.com.tw/cloudbackup/">回首頁</a>
		</div>
		<div class="topmsg">
			<h1>我對晉泰備份雲有興趣</h1>
			
			<h2>請留下資料，我們將有專人與您聯絡，謝謝！</h2>
		</div>
	</div>
</div>

<section>
	<div class="content">
		<!-- <form method="POST" id="submit_form"> -->
		<?php echo validation_errors() ?>
		<form action="<?= base_url('records/insertRecords') ?>" method="post">
		<div class="form-row">
			<div class="form-label">
				<div class="red">* 為必填</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-label">
				<label class="wide required" for="name">姓名</label>
			</div>
			<div class="form-input">
				<input id="name" type="text" name="name">
			</div>
		</div>
		

		<div class="form-row">
			<div class="form-label">
				<label class="wide required" for="company_name">公司名稱</label>	
			</div>
			<div class="form-input">
				<input id="company_name" type="text" name="company_name">
			</div>
		</div>
		

		<div class="form-row">
			<div class="form-label">
				<label class="wide required" for="department">部門</label>
			</div>
			<div class="form-input">
				<input id="department" type="text" name="department">
			</div>
		</div>
		

		<div class="form-row">
			<div class="form-label">
				<label class="wide required" for="employees">公司規模</label>
			</div>
			<div class="form-input">
				<input type="radio" name="employees" value="50人以下"> <label for="50人以下">50人以下</label>
				<input type="radio" name="employees" value="50~200人"> <label for="50~200人">50~200人</label>
				<br>
				<input type="radio" name="employees" value="200~500人"> <label for="200~500人">200~500人</label>
				<input type="radio" name="employees" value="500人以上"> <label for="500人以上">500人以上</label>
			</div>
		</div>

		<div class="form-row">
			<div class="form-label">
				<label class="wide required" for="title">職稱</label>
			</div>
			<div class="form-input">
				<input id="title" type="text" name="title">
			</div>
		</div>
		

		<div class="form-row">
			<div class="form-label">
				<label class="wide required" for="telephone">電話</label>
			</div>
			<div class="form-input">
				<input id="telephone" type="text" name="telephone">
			</div>
		</div>
		

		<div class="form-row">
			<div class="form-label">
				<label class="wide required" for="email">Email</label>
			</div>
			<div class="form-input">
				<input id="email" type="text" name="email">
			</div>
		</div>

		<div class="form-row">
			<div class="block">
				請回答以下問題，讓我們能更了解您的需求，提供更適合您的服務，謝謝！
			</div>

		</div>
		
		<div class="form-row">
			<div class="form-label">
				<label class="wide" for="question1" name="qestion1">生產環境有哪些（複選）</label>
			</div>
			<div class="form-input">
				<input type="checkbox" name="question1[]" value="Hyper-V"> Hyper-V
				<input type="checkbox" name="question1[]" value="vSphere"> vSphere
				<input type="checkbox" name="question1[]" value="Windows"> Windows 實體機
				<input type="checkbox" name="question1[]" value="Linux"> Linux 實體機
			</div>
		</div>
		

		<div class="form-row">
			<div class="form-label">
				<label class="wide" for="question2">資料保護的預算</label>
			</div>
			
			<div class="form-input">
				<input type="radio" name="question2" value="50萬(含)以內"> <label for="50萬(含)以內">50萬(含)以內</label>
				<input type="radio" name="question2" value="50~100(含)萬"> <label for="50~100(含)萬">50~100(含)萬</label>
				<input type="radio" name="question2" value="100萬以上"> <label for="100萬以上">100萬以上</label>
			</div>
		</div>
		

		<div class="form-row">
			<div class="form-label">
				<label class="wide" for="question3">備份與還原需求</label>
			</div>
			
				
			<div class="form-input">
				<input type="radio" name="question3" value="虛擬機整機"> <label for="虛擬機整機">虛擬機整機</label>
				<input type="radio" name="question3" value="實體機整機(Windows)"> <label for="實體機整機(Windows)">實體機整機(Windows)</label>
				<br>
				<input type="radio" name="question3" value="實體機整機(Linux)"> <label for="實體機整機(Linux)">實體機整機(Linux)</label>
				<input type="radio" name="question3" value="實體機/虛擬機資料庫"> <label for="實體機/虛擬機資料庫">實體機/虛擬機資料庫</label>
			</div>
		</div>
		
		

		<div class="form-row">
			<div class="form-label">
				<label class="wide" for="question4">異地備份需求</label>
			</div>
				
			<div class="form-input">
				<input type="radio" name="question4" value="已經導入(磁帶送到異地)"> <label for="已經導入(磁帶送到異地)">已經導入(磁帶送到異地)</label>
				<input type="radio" name="question4" value="已經導入(軟體抄寫)"> <label for="已經導入(軟體抄寫)">已經導入(軟體抄寫)</label>
				<br>
				<input type="radio" name="question4" value="有需求尚無適當場所"> <label for="有需求尚無適當場所">有需求尚無適當場所</label>
				<input type="radio" name="question4" value="有需求無足夠預算"> <label for="有需求無足夠預算">有需求無足夠預算</label>
			</div>
		</div>
		

		<div class="form-row">
			<div class="form-label">
				<label class="wide" for="question5">公有雲應用狀況（複選）</label>
			</div>

			<div class="form-input">
				<input type="checkbox" name="question5[]" value="microsoft_azure"><label for="Microsoft">Microsoft Azure</label>
				<input type="checkbox" name="question5[]" value="microsoft_office_365"><label for="Microsoft Office 365">Microsoft Office 365</label>
				
				<input type="checkbox" name="question5[]" value="hicloud"><label for="HiCloud">HiCloud</label>
				<br>
				<input type="checkbox" name="question5[]" value="google_cloud"><label for="Google Cloud">Google Cloud</label>
				
				<input type="checkbox" name="question5[]" value="aws"><label for="AWS">AWS</label>
				<input type="checkbox" name="question5[]	" value="others"><label for="其他">其他</label>
			</div>
		</div>
		
		<p><input type="submit" id="" name="submit" value="送出資料" class="button"></p>
		
		</form>

		<div id="responses"></div>
	</div>
</section>




