<?php

    class Person{
//        public $name;
//        protected $middlename;
        protected $surname;
        private $name;
        private $email;
        public static $ageLimit = 50;

        /**
         * Person constructor.
         * @param $name
         * @param $email
         */
        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__ . '~~~created<br>';
        }

        /**
         * Person destructor.
         */
        public function __destruct(){
            echo __CLASS__ . '~~~destroyed<br>';
        }

        /**
         * __CLASS__ is a string w.r.t. a class that is its name
         * @return string
         */
        public static function className(){
            return __CLASS__;
        }

        /**
         * Set first name of person
         * @param $name
         */
        public function setFirstName($name){
            $this->name = $name;
        }

        /**
         * Get first name of person
         * @return mixed
         */
        public function getFirstName(){
            return $this->name;
        }

        /**
         * Set email of person
         * @param $email
         */
        public function setEmail($email){
            $this->email = $email;
        }

        /**
         * Get email of person
         * @return mixed
         */
        public function getEmail(){
            return $this->email;
        }

    }


    class Customer extends Person{
        private $balance;

        /**
         * Customers constructor.
         * @param $name
         * @param $email
         * @param $balance
         */
        public function __construct($name, $email, $balance){
            # Because Parent is an overloaded constructor, we must initialize it with a special constructor method
            parent::__construct($name, $email);
            $this->balance = $balance;
            $this->surname = 'Johansen';
            echo __CLASS__ . '~~~created<br>';
        }

        /**
         * Customer destructor.
         */
        public function __destruct(){
            echo __CLASS__ . '~~~destroyed<br>';
        }

        /**
         * __CLASS__ is a string w.r.t. a class that is its name
         * @return string
         */
        public static function className(){
            return __CLASS__;
        }

        /**
         * Set Customer balance
         * @param $balance
         */
        public function setBalance($balance){
            $this->balance = $balance;
        }

        /**
         * Get Customer balance
         * @return mixed
         */
        public function getBalance(){
            return $this->balance;
        }

        public function getSurname(){
            return $this->surname;
        }
    }


    $global_val = 499;
    $regular_val = 667;

    /**
     * Access a globally defined variable within scope of a function
     */
    function useGlobal(){
        global $global_val;
        echo $global_val . '<br>';
    }

    /**
     * Treat passed parameter as a reference, and modify it
     * @param $ref_num
     */
    function useRef(&$ref_num){
        $ref_num++;
    }

    /**
     * Take optional 2nd argument, apply default if not supplied
     * @param $var1
     * @param int $var2
     * @return float|int
     */
    function applyDefaults($var1, $var2 = 5){
        return $var1 * $var2;
    }




    echo useRef($regular_val) . '<br>';
    echo applyDefaults(Customer::$ageLimit) . '<br>';
    echo applyDefaults(3, 6) . '<br>';


    $person1 = new Person('John', 'johnny@phobos.io');
    $person1->setFirstName('James');
    echo $person1->getFirstName() . '<br>';
    echo 'Name of the instantiated class was: ' . Person::className() . '<br>';

    $customer1 = new Customer('Tony', 'go@gun.net', 5777.67);
    echo 'Name of the instantiated class was: ' . Customer::className() . '<br>';
    #echo 'Name of the instantiated class was: ' . Customer::className() . '<br>';


    echo $customer1->getBalance() . ' balance for customer: ' . $customer1->getSurname() . '<br>';
?>