<?php


class LoginController extends BaseController {

    const CLIENT_ID = 'cc217dda7dda45178e1a83594eb7db8e';
    const CLIENT_SECRET = '8458182fea814756bfad6e77a4bd26a5';
    const REDIRECT_URI = 'http://photoplanet.dev:8000/';
//    const OAUTH_URL = 'https://instagram.com/oauth/authorize/?client_id=cc217dda7dda45178e1a83594eb7db8e&redirect_uri=http://photoplanet.dev:8000/&response_type=code';

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