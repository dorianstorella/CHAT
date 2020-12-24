<?php 

class Form 
{
    //public $VAR_label='hey';
    
    public function mrof($VAR_action, $VAR_method)
    {
        echo '<form action=', $VAR_action, ' method=', $VAR_method , '>';
    }

    public function label($VAR_label) 
    {
        echo '<label for=',$VAR_label,'>',$VAR_label,'</label>' ;
    }

    public function input($VAR_TEXT, $VAR_NAME)
    {
        echo '<input type=', $VAR_TEXT, ' name=', $VAR_NAME, ' id=', $VAR_NAME, ' value="2000-01-01">';
    }
}