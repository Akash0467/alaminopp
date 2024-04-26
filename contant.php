<?php 
    
    class User 
    {
        // const - constant_name - value
        const MSG = "Now we are leaning constant feature";
    
        public function getConstant()
        {
            return self::MSG;
        }
    
    }
    $user = new User;
    echo $user->getConstant();

?>