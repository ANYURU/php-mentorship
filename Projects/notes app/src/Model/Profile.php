<?php

    require_once './User.php';
    /**
     * Summary of Profile
     */
    class Profile extends User {
        public $id;
        public $fullname;
        public $bio;
        public $avatar;

        public function __construct( string $id, string $name, string $bio, string $avatar ) {
            parent::__construct(  '', '', $id );
            $this->fullname = $name;
            $this->bio = $bio;
            $this->avatar = $avatar;
        }

        /**
         * Summary of setFullName
         * @param $fullname
         * @return void
         */
        public function setFullName( string $fullname): void {      
            $this->fullname = $fullname;
        }
        /**
         * Summary of getFullName
         * @return string
         */
        public function getFullName(): string {
            return $this->fullname;
        }

        /**
         * Summary of setBio
         * @param string $bio
         * @return void
         */
        public function setBio(string $bio): void {
            $this->bio = $bio;
        }

        /**
         * Summary of getBio
         * @return string
         */
        public function getBio(): string {
            return $this->bio;
        }

        /**
         * Summary of setAvatar
         * @param string $avatar
         * @return void
         */
        public function setAvatar(string $avatar): void {
            $this->avatar;
        }

        /**
         * Summary of getAvatar
         * @return string
         */
        public function getAvatar(): string {
            return $this->avatar;
        }
    }