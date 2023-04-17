<?php 
    class User {
        protected $id;
        private $email;
        private $password;

        // Constructor
        public function __construct( string $email, string $password, string $id = null ) {
            if ( $id === null ):
                $this->id = $this->generateUniqueId();
            else:
                $this->id = $id;
            endif;
            $this->email = $email;
            $this->password = $password;
        }

        public function getEmail(): string {
            return $this->email;
        }

        private function getPassword(): string {
            return $this->password;
        }

        public function getId(): string {
            return $this->id;
        }

        private function generateUniqueId(): string {
            $id = uniqid();
            /**
             * Check if the user already is already in the database. 
             * Check if the user has an ID.
             */
            return $id;
        }
        
    }

