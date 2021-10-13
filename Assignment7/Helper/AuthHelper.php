<?php

class authFunctions {
    public $userFile;

    #getter and setter for the user file variable
    public function getUserFile() {
        return $this->userFile;
    }

    public function setUserFile($userFile) {
        $this->userFile = $userFile;
    }

    #function takes the users email, password, and a file of users as input,
    #and registers the user if all that arguments are valid.
    public function signup($email, $password){
        #makes sure password has at least 2 special characters
        if(preg_match('/[^A-Za-z0-9][A-Za-z0-9]*[^A-Za-z0-9]/',$password)) {
            #if the file exists, reads through the file to make sure the email isn't already in use.
            if(file_exists($this->userFile)) {
                $usrFile = fopen($this->userFile, 'r');
                while ($row = fgetcsv($usrFile)) {
                    if($email == $row[0]) {
                        print("Email is already in use\n");
                        return;
                    }
                }
                fclose($usrFile);
            }
            else {
                print("The user file entered does not exist\n");
                return;
            }
        }
        else {
            print("Password requires at least 2 special characters\n");
            return;
        }

        #encrypts the password and stores the email and password into the user file
        $encryptedPass = password_hash($password, PASSWORD_BCRYPT);
        $addToFile = fopen($this->userFile, 'a');
        fputcsv($addToFile, array($email, $encryptedPass));
        fclose($addToFile);

        #redirects the user to the sign in page
        #header("Location:signin.php");
    }

    #This function takes a users email, password, and a file of users as input.
    #It then will sign in the user if the arguments are valid.
    public function signin($email, $password){
        $registeredUser = false;

        #if the file exists, it reads through the file to make sure the email
        #and password arguments are valid. Then sets the registeredUser value to
        #true for later use.
        if(file_exists($this->userFile)) {
            $usrFile = fopen($this->userFile, 'r');
            while ($row = fgetcsv($usrFile)) {
                if($email == $row[0] and password_verify($password, $row[1]) == true)
                    $registeredUser = true;
            }
            fclose($usrFile);
        }
        else {
            print("The user file entered does not exist");
            return;
        }

        #if the user is registered, then it sets the session email and password variables.
        if($registeredUser) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            print("success");
            #header("Location:../index.php");
        }
        else
            print("Invalid username or password");
    }

    #this function unsets the email and password session variables, sets the logged session variable to false, and then
    #destroys the session. 
    public function signout(){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        $_SESSION['logged'] = false;
        #header("Location:../index.php");
    }

    #this function checks to make sure the email and password session variables are set, in which
    #these variables determine if a user is logged in or not. The logged session variable will be
    #set to true if someone is logged in, and false if no one is logged in.
    public function is_logged(){
        if(isset($_SESSION['email']) and isset($_SESSION['password']))
            $_SESSION['logged'] = true;
        else
            $_SESSION['logged'] = false;
    }

}
?>