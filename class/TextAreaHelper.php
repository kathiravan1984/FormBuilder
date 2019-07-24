<?php

Class TextAreaHelper{


static public function enableEditorScript(){
		 echo '<script src="js/ckeditor/ckeditor.js" type="text/javascript"></script>   

';
   	} 


static public function TextArea($title,$editor,$classname){
        $input =  '
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
            <strong>'.$title.' <span>*</span>:</strong>
<textarea name="' . $title . '" id="' . $title . '" class="form-control form-control-alternative"></textarea>
                                                           

        </div>
</div>
';

	if($editor){

	$input .='<script type="text/javascript">
				CKEDITOR.replace('.$title.');
				</script>';
	}

    	return $input;

}
}
?>
