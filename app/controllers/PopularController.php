<?php


class PopularController extends BaseController {


    protected $auth_config = array(
        'client_id'     => Helper::CLIENT_ID,
        'client_secret' => Helper::CLIENT_SECRET,
        'redirect_uri'  => Helper::REDIRECT_URI,
        'scope'         => array('likes', 'comments', 'relationships')
    );

    public function getAccessToken($code)
    {
        $apiData = array(
            'client_id'       => $this->auth_config['client_id'],
            'client_secret'   => $this->auth_config['client_secret'],
            'grant_type'      => 'authorization_code',
            'redirect_uri'    => $this->auth_config['redirect_uri'],
            'code'            => $code
        );

        $apiHost = 'https://api.instagram.com/oauth/access_token';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiHost);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($apiData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $jsonData = curl_exec($ch);
        curl_close($ch);

        return $jsonData;
    }

    public function login()
    {
        header(
"Location: https://instagram.com/oauth/authorize/?client_id=cc217dda7dda45178e1a83594eb7db8e&redirect_uri=http://photoplanet.dev:8000/&response_type=code"
        );
        exit;
    }

    public function logout()
    {
        unset($_COOKIE['instagram_access_token']);
        setcookie("instagram_access_token", "", time()-3600);

        header('Location: /');
        exit;
    }

    public function get_current_user()
    {

        if(isset($_COOKIE['instagram_access_token'])) {

            $instagram = new Instagram\Instagram;
            $instagram->setAccessToken($_COOKIE['instagram_access_token']);

            $current_user = $instagram->getCurrentUser()->getData();

            return $current_user;
        } else {
            throw new Exception('ERROR in get_current_user() method');
        }

    }

    public function show()
    {
        if(!isset($_COOKIE['instagram_access_token']) and isset($_GET['code'])) {

            $access_token = $this->getAccessToken($_GET['code']);

            $access_token = json_decode($access_token);

            setcookie('instagram_access_token', $access_token->access_token);
            $_COOKIE['instagram_access_token'] = $access_token->access_token;
        }

        $client = new Guzzle\Service\Client('https://api.instagram.com/');

        $response = $client->get("v1/media/popular?client_id=".Helper::CLIENT_ID)->send();

        $result = $response->json();

        return View::make('popular', ['result' => $result['data'],
            'current_user' => isset($_COOKIE['instagram_access_token']) ? $this->get_current_user() : null]);
    }

    public function search()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['search_tag'] != '') {
            $search_tag = trim(strip_tags($_POST['search_tag']));

            $instagram = new Instagram\Instagram;
            $instagram->setAccessToken($_COOKIE['instagram_access_token']);

            $tags = $instagram->searchTags($search_tag);

            return View::make('popular', ['tags' => $tags, 'current_user' => $this->get_current_user()]);
        }

        return View::make('popular', ['current_user' => $this->get_current_user()]);
    }
} 