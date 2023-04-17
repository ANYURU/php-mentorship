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

        /**
         * Summary of getEmail
         * @return string
         */
        public function getEmail(): string {
            return $this->email;
        }

        /**
         * Summary of getPassword
         * @return string
         */
        private function getPassword(): string {
            return $this->password;
        }

        /**
         * Summary of getId
         * @return string
         */
        public function getId(): string {
            return $this->id;
        }

        /**
         * Summary of getUniqueId
         * @return string
         */
        private function generateUniqueId(): string {
            $id = uniqid();
            /**
             * Check if the user already is already in the database. 
             * Check if the user has an ID.
             */
            return $id;
        }
        
    }

