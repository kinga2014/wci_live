<?php
class Queries
{
	public static $server = "mysql-connection.weconx.com";
	public static $user = "root";
	public static $password = "@BC12abc";
	public static $database = "kpadb_weconx";
	
	// public static $server = "localhost";
	// public static $user = "root";
	// public static $password = "@BC12abc";
	// public static $database = "kpadb_weconx";
	
	private static $errMsg = "";
	private static $ItHas = FALSE;
	public static $last_Id = 0;

	public function Select($query)
	{
		$con = mysql_connect($this::$server, $this::$user, $this::$password) or die("could not connect".mysql_error());
	 	mysql_select_db($this::$database, $con);
		
		$q = mysql_query($query);
		if($cell = mysql_fetch_array($q)) {
			$strResult = (int)$cell[0];
		}
		else {
				
			$strResult = 0;
		}
		return $strResult;
	}
	
	public function Fetch_Array($query, $multi, $label)
	{
		$con = mysql_connect($this::$server, $this::$user, $this::$password) or die("could not connect".mysql_error());
	 	mysql_select_db($this::$database, $con);
		$q = mysql_query($query);
		if($multi)
		{
			$result = array();
			while ($a = mysql_fetch_array($q)) {
				
				if ($label) {
					$result[] = array('label' => $a[0]);
				}
				else {
					$result[] = $a;
				}
			}
			return $result;
		}
		else {
			return mysql_fetch_array($q);
		}
	}
	
	public function Execute($query)
	{
		try
		{
			$con = mysql_connect($this::$server, $this::$user, $this::$password) or die("could not connect".mysql_error());
		 	mysql_select_db($this::$database, $con);
			mysql_query($query);
			$this::$last_Id = mysql_insert_id();
			mysql_close($con);
			return TRUE;
		}
		catch(exception $ex)
		{
			$this::$errMsg = $ex;
		}
		return $this::$errMsg;
	}
	
	private function pbkdf2( $p, $s, $c, $kl, $a = 'sha1' ) {

	    $hl = strlen(hash($a, null, true)); # Hash length
	    $kb = ceil($kl / $hl);              # Key blocks to compute
	    $dk = '';                           # Derived key
	
	    # Create key
	    for ( $block = 1; $block <= $kb; $block ++ ) {
	
	        # Initial hash for this block
	        $ib = $b = hash_hmac($a, $s . pack('N', $block), $p, true);
	
	        # Perform block iterations
	        for ( $i = 1; $i < $c; $i ++ )
	
	            # XOR each iterate
	            $ib ^= ($b = hash_hmac($a, $b, $p, true));
	
	        $dk .= $ib; # Append iterated block
	    }
		
	    # Return derived key of correct length
	    return substr($dk, 0, $kl);
	}
	
	public function Encrypt($text, $password)
	{
		// Make sure salt is 8 bytes length
		$key = $this->pbkdf2($password, "4Bvq75DG", "1000", "32");
		//$text = "yamnuska"; // test plain text
		$iv = "pOWaTbO92LfXbh69JkYzfT7P465TNc0h";
		
		$crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_CBC, $iv);
		return base64_encode($crypttext);
	}
	
	public function Decrypt($text, $password)
	{
		// Make sure salt is 8 bytes length
		$key = $this->pbkdf2($password, "4Bvq75DG", "1000", "32");
		//$text = "yamnuska"; // test plain text
		$iv = "pOWaTbO92LfXbh69JkYzfT7P465TNc0h";
		
		$encrypted = $text;
		return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($encrypted), MCRYPT_MODE_CBC, $iv), "0");
	}	
}
$Queries = new Queries;
?>