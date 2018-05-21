<?php
include("db_conn.php");
session_start();

?>
<?php
class Riders{


    var $email;
    var $username;
    var $phone;
    var $password;
    var $rider_id;
    var $token;


    function riderRegistration($phone, $email, $username, $password){
        $phone = mysql_real_escape_string($_POST['phone']);
        $email = mysql_real_escape_string($_POST['email']);
        $username = mysql_real_escape_string($_POST['username']);
        $password = mysql_real_escape_string($_POST['password']);
        if (isset($_POST['register'])){
            if ($phone){
                if ($email){
                    if($username){
                        if($password){
                            $password = md5(md5($password)); //hashing password for storage
                            $sql = 'INSERT INTO riders'.
                            '(phone, email, username, password)'.
                            'VALUES ($phone, $email, $username, $password)';
                            mysql_select_db($dbname);
                            $query = mysql_query($sql,$connection);
                            if (!$query){
                                die("An error occured while registering user:".mysql_error());
                            }else{
                               
                               $msg = "User was created successfully";
                            }
                        }else{
                            $msg =" Please provide a valid password";
                        } 
                    }else{
                        $msg = "Please provide yoyr preffered username";
                    }
                } else{
                    $msg= "Please provide a valid email";
                }
            } else{
                $msg = "Please provide your phone number";
            }
        } else{
            $msg = "Unknown request, please use POST";
        }
    }    
    function riderLogin($email, $password){
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
        if(isset($_POST['login'])){
            if($email){
                if($password){
                    $password = md5(md5($password)); // hashing password for comparing with stored password
                    $sql = 'SELECT `rider_id`, `username` FROM `riders `WHERE `email`==`$email` AND `password`==`$password`';
                            mysql_select_db($dbname);
                    $query = mysql_query($sql, $connection);
                    if(! $query){
                        $msg = "No match found, try registration or verify login credentials";

                    } else {
                        while($row = mysql_fetch_array($query, MYSQL_NUM)) {
                            $this->rider_id = $row['rider_id'];
                            $this->username = $row['username'];
                        }
                        $msg = "Welcome". $this.$username;
                        function rand_char($length) { // generating a random string for using as token
                            $this->token = $token;
                            $token = '';
                            for ($i = 0; $i < $length; $i++) {
                                $token .= chr(mt_rand(33, 126));
                            }
                            return $token;
                        }

                        $sql = "INSERT INTO riders_session".
                                '(rider_id, auth_key)'.
                                'VALUES ($rider_id, $token';
                        mysql_select_db($dbname);
                        $query = mysql_query($sql, $connection);
                        if(! $query){
                            echo "Adding login details to table riders_session failed";
                        } else{
                            echo "login successfully recorded";
                            return  $myObj = array($token, $rider_id);
                        }
                        
                    }
                } else{
                    $msg = "Please provide your password";
                }   
            }else{
                $msg = "Please provide your email";
            }
        }else{
            $msg = "Unkown request, use POST to login";
        }
        

}

}
?>