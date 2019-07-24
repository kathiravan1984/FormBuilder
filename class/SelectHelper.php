<?php
Class SelectHelper{

	static public function enableSelect2Script(){
	     echo '<link rel="stylesheet" href="css/select2.css" />
		<script src="js/select2.js"></script>';
   	} 

	static public function Select($name,$type,$option,$multiple,$select,$classname){
	$multiple_value = $multiple ? 'multiple' : '';

	if($multiple_value){
		$selectbox_name = '[]';
	}else{
		$selectbox_name = '';
	}


	$input = '
    <div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
            <strong>'.$name.' <span>*</span>:</strong>';
	$input .= '<select name="'.$name.$selectbox_name.'" id="'.$name.'" '.$multiple_value.'  class="role-class">';
		foreach($option as $key=>$value){
		 $input .= '<option value="' . $key . '">' . $value . '</option>';
		}
		
	$input.='</select></div></div>';

	if($select){
		$input .='<script>
				$(document).ready(function() {
					    $("#'.$name.'").select2();
				});
			 </script>';
	}


	return $input;
	

	}

 
}
?>