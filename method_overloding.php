<?php 
    class Calculate 
    {
        function __call($function_name,$arguments)
         {
            if($function_name == "sum"){
                if(count($arguments) == 2){
                    return array_sum($arguments);
                }else if(count($arguments) == 3){
                    return array_sum($arguments);
                }
            }
         }
    }
    
    $calculate = new Calculate;
    echo $calculate->sum(2,3)."<br>";
    echo $calculate->sum(2,4,8);

?>