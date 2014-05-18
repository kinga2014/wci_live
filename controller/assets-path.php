<?php
class assets {
	
	public function path($dir, $filename, $IsLive, $IsParent = "") {
		if($IsLive) {
			return $IsParent."assets/".$dir."/".$filename;
			
		}
		else {
			return $IsParent."weconx/assets/".$dir."/".$filename;
		}
	}
}
$Assets = new assets;
?>