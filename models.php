<?php
   include("db_conn.php");
   session_start();
?>
<?php
    if (!$connection){
    die("connection failed".mysql_error());

    } else{
    echo ("successfully connected to server";
    $sql = 'CREATE DATABASE Ride_book';  // creating a database
    $query = mysqli_query($sql, $conn);

     if (!$query){
     die("An error occurred while creating database:".mysql_error());
     } else{
     echo "Database was successfully created";


     $sql = 'CREATE TABLE users( '.
                  'user_id INT NOT NULL AUTO_INCREMENT, '.
                  'fname VARCHAR(20) NOT NULL, '.
                  'surname VARCHAR(20) NOT NULL, '.
                  'phone  INT NOT NULL, '.
                  'id_number   INT NOT NULL, '.
                  'email VARCHAR(50) NOT NULL,'.
                  'username VARCHAR(50) NOT NULL,'.
                  'password VARCHAR(100) NOT NULL,'.
                  'Registration_date timestamp(14) NOT NULL,'.
                  'primary key ( user_id ))';

     mysql_select_db(Ride_book); // selecting the Ride_book database
     $query = mysql_query($sql, $connection); // creating table users

     if(!$query){
     die("An error occurred creating table users:".mysql_error());

     }else{
     echo "Table users was successfully created"
     $sql = 'CREATE TABLE riders( '.
                 'rider_id INT NOT NULL AUTO_INCREMENT,'.
                 'fname VARCHAR(20) NOT NULL, '.
                 'surname VARCHAR(20) NOT NULL, '.
                 'phone  INT NOT NULL, '.
                 'id_number   INT NOT NULL, '.
                 'email VARCHAR(50) NOT NULL,'.
                 'username VARCHAR(50) NOT NULL,'.
                 'password VARCHAR(100) NOT NULL,'.
                 'Registration_date timestamp(14) NOT NULL,'.
                 'primary key ( rider_id ))';
     mysql_select_db(Ride_book);
     $query = mysql_query($sql, $connection);
     if(!$query){
        die("An error occurred creating table riders:".mysql_error());
     }else{
     echo "Table riders was successfully created";
     $sql = 'CREATE TABLE rides( '.
                'ride_id INT NOT NULL AUTO_INCREMENT,'.
                'user_id INT NOT NULL,'.
                'car_no VARCHAR(50) NOT NULL,'.
                'destination VARCHAR(50) NOT NULL,'.
                'time_posted timestamp(14) NOT NULL,'.
                'foreign key ( user_id),'.
                'primary key ( ride_id ))';

     mysql_select_db(Ride_book);
     $query = mysql_query($sql, $connection);

     if (!$query){
        die("An error occurred while creating table rides:".mysql_error());

     }else{
     echo "Table rides successfully created";

     $sql = 'CREATE TABLE bookings( '.
               'booking_id INT NOT NULL AUTO_INCREMENT,'.
               'ride_id INT NOT NULL,'.
               'user_id INT NOT NULL,'.
               'book_time timestamp(14) NOT NULL,'.
               'foreign key ( ride_id) REFERENCES riders,'.
               'foreign key ( user_id) REFERENCES users,'.
               'primary key ( booking_id ))';

     mysql_select_db(Ride_book);
     $query = mysql_query($sql, $connection);
     if (!$query){
        die("An error occurred creating table bookings:".mysql_error());
     } else{
        echo "Table bookings was successfully created";
        $sql = 'CREATE TABLE user_session( '.
               'session_id INT NOT NULL AUTO_INCREMENT,'.
               'user_id INT NOT NULL,'.
               'auth_key VARCHAR(200),'.
               'session_time timestamp(14) NOT NULL,'.
               'foreign key ( user_id) REFERENCES users,'.
               'primary key ( session_id ))';
        mysql_select_db(Ride_book);
        $query = mysql_query($sql, $connection);
        if (!$query){
            die("An error occurred creating table user_session:".mysql_error());
        }else{
            echo "Table user_session was successfully created";
            $sql = 'CREATE TABLE rider_session( '.
                           'session_id INT NOT NULL AUTO_INCREMENT,'.
                           'rider_id INT NOT NULL,'.
                           'auth_key VARCHAR(200),'.
                           'session_time timestamp(14) NOT NULL,'.
                           'foreign key ( rider_id) REFERENCES riders,'.
                           'primary key (session_id ))';


            mysql_select_db(Ride_book);
            $query = mysql_query($sql, $connection);
        }
     }
     }
     }
     }

     mysql_close($connection) // Terminating the connection
     }
    }
?>
