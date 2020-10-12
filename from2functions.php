<?php 
    function DisplayOption($options){
        foreach($options as $option){
            printf("<option value='%s'>%s<option>\n",strtolower($option),ucwords($option));
            // echo "<option value='{$option}'>{$option}<option>";
        }
    }
?>
