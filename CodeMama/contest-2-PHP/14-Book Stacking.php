<?php
    # Write your PHP code from here

    class Stack{
        private $stackval;

        public function __construct(){
            $this->stackval = [];
        }
        
        public function push($val){
            array_push($this->stackval, $val);
        }

        public function pop(){
            if(!empty($this->stackval))
            {
                echo end($this->stackval).PHP_EOL;
                array_pop($this->stackval);
            }else{
               
                echo "-1".PHP_EOL;
            }
        }
    }

    fscanf(STDIN, "%d", $n);
    $stack = new Stack();
    while($n--){
        fscanf(STDIN, "%d%d", $do, $val);
        if($do == 1){
            $stack->push($val);
        }else{
           $stack->pop(); 
        }
    }
?>