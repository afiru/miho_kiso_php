<?php
    class miho {
        public $a;
        public function set_name($name) {
            $this->a = $name;
            return $this->a;
        }
    }
    class naoki extends miho {
        public function echo_name($name){
            echo $this->set_name($name);
        }
    }
    
    $b = new naoki();
    $b->echo_name('-----');
?>