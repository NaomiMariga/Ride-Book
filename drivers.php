<?php
include("db_conn.php");
session_start();

?>
<?php
class Drivers{


    var $email;
    var $username;
    var $phone;
    var $password;
    var $token;
    var $driver_id;


    function driverRegistration($phone, $email, $username, $password){
        $phone = mysql_real_escape_string($_POST['phone']);
        $email = mysql_real_escape_string($_POST['email']);
        $username = mysql_real_escape_string($_POST['username']);
        $password = mysql_real_escape_string($_POST['password']);
        if ($phone){
            if ($email){
                if($username){
                    if($password){
                        $password = md5(md5($password)); //hashing password for storage
                        $sql = 'INSERT INTO drivers'.
                        '(driver_id, phone, email, username, password)'.
                        'VALUES ($driver_id, $phone, $email, $username, $password)';
                        mysql_select_db($dbname);
                        $query = mysql_query($sql,$connection);
                        if (!$query){
                            die("An error occured while registering user:".mysql_error());
                        }else{
                            $msg = "User was created successfully";
                        } 
                    }else{
                        $msg = " Please provide a valid password";
                    } 
                }else{
                    $msg = "Please provide your preffered username";
                }
            } else{
                $msg = "Please provide a valid email";
            }
        } else{
            $msg = "Please provide your phone number";
        }
    }    
    function driverLogin($email, $password){
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
        if(isset($_POST['login'])){
            if($email){
                if($password){
                    $password = md5(md5($password)); //hashing password for comparing with stored password
                    $sql = 'SELECT `driver_id`, `username` FROM `drivers `WHERE `email`==`$email` && `password`==`$password`';
                    mysql_select_db($dbname);
                    $query = mysql_query($sql, $connection);
                    if(! $query){
                        $msg = "No match found, try registration or verify login credentials";

                    } else {
                        while($row = mysql_fetch_array($query, MYSQL_NUM)) {
                            $this->driver_id = $row['driver_id'];
                            $this->username = $row['username'];
                        }
                        $msg = "Welcome". $username;
                        function rand_char($length) { // generating random string for use as authentication token
                            $this->token = $token;
                            $token = '';
                            for ($i = 0; $i < $length; $i++) {
                            $token .= chr(mt_rand(33, 126));
                            }
                            return $token;
                        }
                        $sql = "INSERT INTO drivers_session".
                        '(driver_id, auth_key)'.
                        'VALUES ($driver_id, $token';
                        mysql_select_db($dbname);
                        $query = mysql_query($sql, $connection);
                        if(! $query){
                            echo "Adding login details to table drivers_session failed";
                        } else{
                            echo "login successfully recorded";
                            return $myObj = array($token, $driver_id);
                        }
                        
                    }
                } else {
                    $msg = "Please provide valid password";
                }
            } else {    
                $msg = "Please provide a valid email";
            }
        } else{
            $msg = "Unknown request, use POST to login";
        }   
    }
}

?>