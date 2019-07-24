<?php
Class RadioHelper{

	static public function Radio($name,$type,$option,$classname){
	$input = '
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
            <strong>'.$name.' <span>*</span>:</strong>';
		foreach($option as $key=>$value){
			$input .= ' <div class="custom-control custom-radio">
 <input type="radio" class="custom-control-input" name="'.$name.'[]" id="'.$value.'"  value="'.$key.'">
        <label class="custom-control-label" for="'.$value.'"> '.$value.'</label> </div> ';
		}
		
	$input.='</div></div>';

	 
	return $input;
	

	}

 

}
?>

