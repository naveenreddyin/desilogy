<?php
      function is_loggedin() { 
      	$ci =& get_instance();
        if($ci->aauth->is_loggedin())
        	return TRUE;
        else
        	return FALSE;
      }
?>