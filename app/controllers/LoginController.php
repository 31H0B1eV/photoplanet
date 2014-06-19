<?php


class LoginController extends BaseController implements Helper {

    public $auth_config = array(
        'client_id'     => self::CLIENT_ID,
        'client_secret' => self::CLIENT_SECRET,
        'redirect_uri'  => self::REDIRECT_URI,
        'scope'         => array('likes', 'comments', 'relationships')
    );

    public function show()
    {
        $auth = new Instagram\Auth( $this->auth_config );

        $auth->authorize();
    }

} 