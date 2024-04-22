<?php 

class user{
    public $name = 'Akash';
    // User modifer, function, function name
    public function etc(){
        echo "Akash Roy";
    }
}
$result = new user;
if($result instanceof user){
    echo "User Name is valid. ";
}

// Var_Dump($result-> name)
// var_dump($result->etc());
print_r($result->etc()."<br>") ;


class btn{
    public $email;

    public function set($anyemail){

        if(!filter_var($anyemail,FILTER_VALIDATE_EMAIL)){
            echo "Email is not Valid!";
        }
        $this->email = $anyemail;
    }

    public function get(){
        return "Email : ". strtolower($this->email);
    }
}

$getEmail = new btn;

$getEmail->set('akash2754@gmail.com');

echo $getEmail->get();