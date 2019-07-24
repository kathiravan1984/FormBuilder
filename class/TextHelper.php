<?php

Class TextHelper
{

    static public function Text($name, $type, $classname)
    {
        return '
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>' . $name . ' <span>*</span>:</strong>
                <input type="' . $type . '" name="' . $name . '" class="form-control form-control-alternative"/>
            </div>
        </div>';

    }
}

?>
