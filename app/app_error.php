<<<<<<< HEAD
    <?php
    class AppError extends ErrorHandler {
	    function accessDenied($params) {
    		 $this->controller->set('url', $params['url']);
   		 $this->_outputMessage('access_denied');
    }

    }
    ?>

=======
<?PHP
class AppError extends ErrorHandler {
 	var $helpers = array('Html', 'Session','Javascript', 'Ajax');
    function oopsError($params) {
    $this->controller->set('page', $params['page']);
    $this->_outputMessage('oopsError');
    }
 
}
?>
>>>>>>> 5cf4764c439d9f92f51dfc10608efad5658b75fb
