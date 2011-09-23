class AppError extends ErrorHandler {
 
    function oopsError($params) {
    $this->controller->set('page', $params['page']);
    $this->_outputMessage('oopsError');
    }
 
}
