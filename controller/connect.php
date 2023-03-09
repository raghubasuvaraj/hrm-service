<?php
	
	class database
	{
		
		function connection()
		{
			return mysqli_connect('localhost','elrafact_hrm_db','Data4443!$#','elrafact_hrm_db');
		}
	}

?>