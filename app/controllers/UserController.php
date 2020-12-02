<?php
 
class UserController extends BaseController {
  
    public function getIndex()
    {
    	if(Auth::check()){
    		return Redirect::intended('/admin');
    	
    	}else
        	return View::make('login.index');
    }
 
   public function postIndex()
    {
        $username = Input::get('username');
        $password = Input::get('password');
 
        if (Auth::attempt(array('username' => $username, 'password' => $password)))
        {
          return Redirect::intended('/admin');
        }
 
        return Redirect::back()
            ->withInput()
            ->withErrors('That username/password combo does not exist.');
    }
 
    public function getLogin()
    {
        return Redirect::to('/');
    }
	
  
    public function getLogout()
    {
       	 Auth::logout();
		 return Redirect::to('/cpanel');
         //return 'Log out sucessfully';
         //return View::make('login.index');
    }
   	
 
}