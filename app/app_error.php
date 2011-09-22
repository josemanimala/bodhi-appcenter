    <?php
    class AppError extends ErrorHandler {
	    function accessDenied($params) {
    		 $this->controller->set('url', $params['url']);
   		 $this->_outputMessage('access_denied');
    }

    }
    ?>

