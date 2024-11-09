<?php
    class UserNotFound extends Exception {}
    class UserAlreadyExists extends Exception {}
    class PasswordsDontMatch extends Exception {}
    class DataBase extends mysqli {
        public function __construct() {
            parent::__construct("localhost", "root", "", "java-site", 3306);
        }
        private function sessionControl() {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
        public function loginUser($email, $password) {
            $user = $this->getUserBy($email, $password);
            $this->sessionControl();
            $_SESSION['login'] = $user['id'];
            return $user;
        }
        public function registerUser($email, $name, $password, $password_repeat) {
            try {
                $this->getUserBy($email, $password);
            } catch (Exception $e) {
                if ($password != $password_repeat) {
                    throw new PasswordsDontMatch("Passwords don't match");
                }
                $query = "INSERT INTO `users`
                    (`id`, `email`, `name`, `password`, `administrator`, `course_id`) VALUES 
                    (DEFAULT, '$email', '$name', SHA1('$password'), DEFAULT, DEFAULT)";
                if (!$this->query($query)) {
                    return new Exception("Unable to register user");
                }
                return $this->getUserBy($email, $password);
            }
            throw new UserAlreadyExists("User already exists");
        }

        public function logoutUser() {
            $this->sessionControl();
            $_SESSION['login'] = null;
            header('Refresh: 0');
        }
        public function getUserBy(string $email, string $password) {
            $query = "SELECT * FROM `users` WHERE email='$email' AND password=SHA1('$password')";
            $result = $this->query($query);
            if (empty($result)) {
                throw new UserNotFound("User not found");
            }
            $user = $result->fetch_assoc();
            if (empty($user)) {
                throw new UserNotFound("User not found");
            }
            return $user;
        }
        public function getUser($id) {
            $query = "SELECT * FROM `users` WHERE id=$id";
            $result = $this->query($query);
            if (empty($result)) {
                throw new UserNotFound("User not found");
            }
            $user = $result->fetch_assoc();
            if (empty($user)) {
                throw new UserNotFound("User not found");
            }
            return $user;
        }
    }
?>