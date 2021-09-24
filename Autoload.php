<?php
	function CargadorClase($class)
    {
        //echo $class."<br />";
       if(is_file('Controller/'.$class.'.Controller.php')) 
       {
            
       }
       else if(is_file('Model/'.$class.'.Model.php')) 
       {
            
       }
       else if(is_file('Framework/Smarty/'.$class.'.class.php')) 
       {
            
       }
    }
    
    spl_autoload_register('CargadorClase');
?>