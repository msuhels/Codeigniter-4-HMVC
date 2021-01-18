<?php namespace App\Modules\Welcome\Models;

class WelcomeModel
{
    public function getUsers()
    {
        // Write your function here to perform database operation
        return $data['users'] = array(array('name'=> 'Steve'),array('name'=> 'John'),array('name'=> 'Amanda')); 
        
    }
}