
<?php
include_once './controller/Database.php';
class xuly_login extends Database
{
	function thong_tin_user_theo_email($email)
	{
		$lenh_sql = "SELECT * FROM ql_user WHERE email = '$email'";
		$this->setQuery($lenh_sql);
		$result = $this->loadRow();
		return $result;
	}
}
?>
