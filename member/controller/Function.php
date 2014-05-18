<?php
class Functions{
	public function Sentence_Case($string) {
		$string = strtoupper($string);
	    $sentences = preg_split('/([.?!]+)/', $string, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE); 
	    $new_string = ''; 
	    foreach ($sentences as $key => $sentence) { 
	        $new_string .= ($key & 1) == 0? 
	            ucfirst(strtolower(trim($sentence))) : 
	            $sentence.' '; 
	    } 
	    return trim($new_string); 
	} 
	
	public function Sentence_Cap($impexp, $sentence_split) {
	    $textbad=explode($impexp, $sentence_split);
	    $newtext = array();
	    foreach ($textbad as $sentence) {
	        $sentencegood=ucfirst(strtolower($sentence));
	        $newtext[] = $sentencegood;
	    }
	    $textgood = implode($impexp, $newtext);
	    return $textgood;
	}
}
$Function = new Functions;
?>