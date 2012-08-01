<?PHP
class bodhiauth {
	var $apikey='ef4500841e341802dda3ba5c89664f9a';
	function do_post_request($url, $data, $optional_headers = null)
        {
          $params = array('http' => array(
                      'method' => 'POST',
                      'content' => $data
                    ));
          if ($optional_headers !== null) {
            $params['http']['header'] = $optional_headers;
          }
          $ctx = stream_context_create($params);
          $fp = @fopen($url, 'rb', false, $ctx);
          if (!$fp) {
            throw new Exception("Problem with $url, $php_errormsg");
          }
          $response = @stream_get_contents($fp);
          if ($response === false) {
            throw new Exception("Problem reading data from $url, $php_errormsg");
          }
          return $response;
        }	
		
	function checkPass($user,$pass)
        {
                //set POST variables
                //$apikey='ef4500841e341802dda3ba5c89664f9a';
                $url = 'http://homes.bodhilinux.com/~jose/index.php';
                $fields = 'apiKey='.$this->apikey.'&username='.$user.'&password='.$pass.'&method=auth';
                $result = $this->do_post_request($url,$fields);
                $info = json_decode($result);
                $result = $info->message->authenticated;
                if($result=='true')
                {
                        return true;
                }
                else
                {
                        return false;
                }
        }

        function getUserData($user,$pass)
        {
                //$apikey='ef4500841e341802dda3ba5c89664f9a';
                $url = 'http://homes.bodhilinux.com/~jose/index.php';
                $fields = 'apiKey='.$this->apikey.'&username='.$user.'&password='.$pass.'&method=load';
                $result = $this->do_post_request($url,$fields);
                $info = json_decode($result);
                return $info;
        }
}
?>
