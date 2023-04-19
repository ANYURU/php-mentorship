<?php
    require('./Profile.php');

    class ProfileModel {
        private $db;

        public function __construct( $db ) {
            $this->db = $db;
        }

        /**
         * Update a profile in the 
         *
         * @param Profile $profile
         * @return bool true if successful, false otherwise
         */
        public function updateProfile( Profile $profile ): bool {
            $stmt = $this->db->prepare("UPDATE profiles SET fullname = ?, bio = ?, avatar = ? WHERE id = ?");
            $stmt->bind_param("ssss", $profile->getFullName(), $profile->getBio(), $profile->getAvatar(), $profile->getId());
            $result = $stmt->execute();
            $stmt->close();
            return $result;
        }

    }   