<?php

Class DatePickerHelper{

	static public function DatePicker($name,$type,$classname){
        return '
<div class="form-group">
	<div class="input-group date">
<input type="'.$type.'" name="' . $name . '" class="'.$classname.'"/>
     </div>
</div>';

	}
}
?>
