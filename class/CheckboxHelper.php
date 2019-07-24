<?php

Class CheckboxHelper
{

    static public function Checkbox($name, $type, $option, $classname)
    {
        $input = '
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>' . $name . ' <span>*</span>:</strong>';
        foreach ($option as $key => $value) {
            $input .= '
                    <div class="custom-control custom-checkbox">
		                <input type="checkbox" class="custom-control-input" name="' . $name . '[]" id="' . $value . '"  value="' . $key . '">
                    <label class="custom-control-label" for="' . $value . '">' . $value . '</label></div>';
        }

        $input .= '</select></div></div>';


        return $input;


    }
}

?>

