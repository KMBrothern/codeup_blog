<?php

class LoginController extends BaseController {


    // get route
    public function login()
    {

        return View::make('auth.login');
    }
    // post route
    public function doLogin()
    {
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $email = Input::get('email');
            $password = Input::get('password');


            if (Auth::attempt(array('email' => $email, 'password' => $password))) 
            {
                Session::flash('successMessage', 'Login successfull!');

                return Redirect::intended();
            } else {

                Session::flash('errorMessage', 'Login failed, something went wrong!');

                return Redirect::action('LoginController@login')->withInput();
            }
        }

    }
        // $email = Input::get('email');
        // $password = Input::get('password');


        // if (Auth::attempt(array('email' => $email, 'password' => $password))) 
        // {
        //     Session::flash('successMessage', 'Login successfull!');

        //     return Redirect::intended();
        // } else {

        //     Session::flash('errorMessage', 'Oops, something went wrong!');
        //      return Redirect::action('LoginController@login')->withInput();
        // }


    // get route
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }



}