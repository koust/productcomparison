<?php namespace Project\Controllers;

    use Validation,Post,DB,Method,Session,Redirect;
class Login extends Controller
{

    /**
     * The codes to run at startup.
     * It enters the circuit before all controllers. 
     * You can change this setting in Config/Starting.php file.
     */
    public function main(String $params = NULL)
    {
        # The theme is activated.
        # Location: Resources/Themes/Default/
        Theme::active('Admin');
        
        # The current settings are being configured.
        Masterpage::headPage('Sections/head')
                  ->bodyPage('Login/main');

        if(Session::select('oturum')){

            Redirect::wait(1)->action('dashboard');
            return;
        }
        $email = Method::post('email');
        $pass = Method::post('pass');
        if(DB::isExists('users', 'useremail', $email) and DB::isExists('users', 'userpassword', $pass)){
            Session::insert('oturum', 1);
            Redirect::wait(1)->action('dashboard');
        }
    }


    public static function checkSession(){
        if(Session::select('oturum') != 1){

            Redirect::action('login');
        }
    }

    public function exit(){
        Session::delete('oturum');
       Redirect::action('login');
    }
}