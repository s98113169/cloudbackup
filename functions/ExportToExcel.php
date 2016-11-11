<?php 
function ExportExcel($table)
{
 
$filename = "uploads/".strtotime("now").'.csv';
 
$sql = mysql_query("SELECT * FROM $table") or die(mysql_error());
 
$num_rows = mysql_num_rows($sql);
if($num_rows >= 1)
{



	 $row = mysql_fetch_assoc($sql);
	 $fp = fopen($filename, "w");
	 $seperator = "";
	 $comma = "";
	 
	 foreach ($row as $name => $value)
	 {
		 $seperator .= $comma . '' .str_replace('', '""', $name);
		 $comma = ",";
	 }
	 
	 $seperator .= "\n";
	 // $seperator .= "\xEF\xBB\xBF";
	 fwrite($fp, chr(239) . chr(187) . chr(191)); 
	 fputs($fp, $seperator);
	 
	 mysql_data_seek($sql, 0);
	 while($row = mysql_fetch_assoc($sql))
	 {
		 $seperator = "";
		 $comma = "";
		 
		 foreach ($row as $name => $value) 
		 {
			 $seperator .= $comma . '' .str_replace('', '""', $value);
			 $comma = ",";
		 }
		 
		 $seperator .= "\n";
		 // $seperator .= "\xEF\xBB\xBF";
		 fwrite($fp, chr(239) . chr(187) . chr(191)); 
		 fputs($fp, $seperator);
	 }
	 
	 fclose($fp);
	 echo "文件已經準備好 <a href='$filename'>下載!</a>";
}
else
{
 echo "There is no record in your Database";
}
 
 
}

 ?>