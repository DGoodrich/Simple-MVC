<?php

class Home extends Controller
{
    /**
     * The default controller method
     * @param string $name
     */
    public function index($name = '')
    {
        if(empty($name)) {
            /** This is just for demo purposes
             * IF no username is passed through the URL
             * Then it will look in the database for the first record
             * If no record found the return guest
             **/
            if(isset(User::find(1)->username)) {
                $name = User::find(1)->username;
            } else {
                $name = 'Guest';
            }
        }

        $this->view('home/index', [
            'name' => $name
        ]);
    }

    public function create ($username = '', $email = '')
    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }

}