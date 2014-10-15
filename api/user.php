<?php
        
    if(session_id() == '') {
        session_start();
    }

    require_once 'api.php';

    if (empty($selectingDatabase)) {
        $thisDir = dirname(__FILE__);
        require( dirname($thisDir) . '/db_operations/db_connection.php');
    }

    class UserController extends API
    {

        /**
         * Example of an Endpoint
         */
         protected function user() {
            if ($this->method == 'GET') {

                if(!isset($_SESSION['user_id'])) {
                    return "User not Authenticated! You must be logged in to view this resource.";
                }

                $id = $_SESSION['user_id'];
                
                $result = mysql_query(
                    "SELECT * from user where id = '" . $id . "'"
                );

                while ($row = mysql_fetch_array($result)) 
                {
                    $new_array[$row['id']]['id'] = $row['id'];
                    $new_array[$row['id']]['username'] = $row['username'];
                }

                return $new_array;


            } else {
                return "Only accepts GET requests";
            }
         }

         protected function login() {

            if ($this->method == 'POST') {
                
                if (empty($_POST['username']) || empty($_POST['password'])) {
                    
                    $data = json_decode(file_get_contents('php://input'), true);

                    if (empty($data['username']) || empty($data['password'])) {
                        return "Username or Password not provided!";
                    }

                    $_POST['username'] = $data['username'];
                    $_POST['password'] = $data['password'];
                }

                $username = $_POST['username'];
                $password = $_POST['password'];

                $password = sha1($password);

                $result = mysql_query(
                    "SELECT id from user where username = '" . $username . "' && password = '"
                    . $password . "'"
                );

                $login = mysql_num_rows($result);

                if($login > 0){
                    $user_id =  mysql_result($result, 0);
                    $_SESSION['user_id'] = $user_id;

                    return "Successful login!";
                }
                
                return "Invalid Credentials!";
                
                
            } else {
                return "Only accepts POST requests";
            }
        }

        protected function logout() {
            
            if(!isset($_SESSION['user_id'])) {
                return "Not LoggedIn!";
            }

            $_SESSION['user_id'] = null;
            return "Successfully Logged Out!";
        }
     }
?>