<?php



class LoginController extends BaseController {

    public $auth_config = array(
        'client_id'     => Helper::CLIENT_ID,
        'client_secret' => Helper::CLIENT_SECRET,
        'redirect_uri'  => Helper::REDIRECT_URI,
        'scope'         => array('likes', 'comments', 'relationships')
    );

    public function show()
    {
        $auth = new Instagram\Auth( $this->auth_config );

        $auth->authorize();
    }

} 