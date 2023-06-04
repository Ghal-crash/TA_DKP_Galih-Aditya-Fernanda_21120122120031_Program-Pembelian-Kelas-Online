<?php
    class userConfig{
        protected $email;
        protected $password;
        protected $dataUser;
        protected $getRole;

        public function __construct($email, $password){
            $this-> dataUser = [
                (object)[
                    'email'     => "galih@tadkp.com",
                    'username'  => "galih",
                    'password'  => "galih"
                ],
                (object)[
                    'email'     => "aditya@tadkp.com",
                    'username'  => "aditya",
                    'password'  => "aditya"
                ]
            ];
            $this->email = $email;
            $this->password = $password;
        }

        public function login(){
            $user = $this->cekKelengkapan();
            if($user){
                return $get_data = $user->email;
            }else{
                return false;
            }
        }

        protected function cekKelengkapan(){
            foreach($this->dataUser as $key => $value){
                if($value->email == $this->email && $value->password == $this->password){
                    return $value;
                }
            }
            return false;
        }
    }
?>