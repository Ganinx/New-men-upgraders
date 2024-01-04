<?php

function displayBsClassForm($errors, $input){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(array_key_exists($input, $errors)){
            echo('is-invalid');
        } else {
            echo('is-valid');
        }
    }

}

function displayBsErrorForm($errors, $input){
    if(array_key_exists($input, $errors)){
        echo('<div  class="invalid-feedback">
        '.$errors[$input].'
      </div>');
    }
}

function keepFormValue($input, $result = "")
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo($_POST[$input]);
    } else {
        if (!empty($result)) {
            echo(htmlentities($result[$input]));
        }
    }

}