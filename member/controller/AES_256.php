<?php
class AES256
{
	private static function pbkdf2( $p, $s, $c, $kl, $a = 'sha1' ) {

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
		$key = $this::pbkdf2($password, "4Bvq75DG", "1000", "32");
		//$text = "yamnuska"; // test plain text
		
		$iv = "pOWaTbO92LfXbh69JkYzfT7P465TNc0h";
		
		$crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_CBC, $iv);
		return base64_encode($crypttext);
	}
	
	public function Decrypt($text, $password)
	{
		// Make sure salt is 8 bytes length
		$key = $this::pbkdf2($password, "4Bvq75DG", "1000", "32");
		//$text = "yamnuska"; // test plain text
		$iv = "pOWaTbO92LfXbh69JkYzfT7P465TNc0h";
		
		$encrypted = $text;
		return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($encrypted), MCRYPT_MODE_CBC, $iv), "0");
	}	
}
$AES256 = new AES256;
?>