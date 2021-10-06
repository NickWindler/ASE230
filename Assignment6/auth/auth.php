<?php

#function takes the users email, password, file of users, and the file of banned users as input. First, it makes
#sure that the password contains 2 or more special characters. After that, it checks to see if the input banned file
#exists, and then reads through the file to make sure the email the user entered isn't among the banned emails listed
#in the file. Shortly after, the same process is done for the user file, except this time it checks to make sure the 
#email isn't already in use. Once the inputs get through all of the checks, it encrypts the password and adds it to the
#file of users. The function then redirects you to the sign in page.
function signup($email, $password, $userFile, $bannedFile){
    if(preg_match('/[^A-Za-z0-9][A-Za-z0-9]*[^A-Za-z0-9]/',$password)) {
        if(file_exists($bannedFile)) {
            $file = fopen($bannedFile, 'r');
            while ($row = fgetcsv($file)) {
                if($email == $row[0]) {
                    print("This email is banned");
                    return;
                }
            }
            fclose($file);
        }
        else {
            print("The banned file entered does not exist");
            return;
        }

        if(file_exists($userFile)) {
            $usrFile = fopen($userFile, 'r');
            while ($row = fgetcsv($usrFile)) {
                if($email == $row[0]) {
                    print("Email is already in use");
                    return;
                }
            }
            fclose($usrFile);
        }
        else {
            print("The user file entered does not exist");
            return;
        }
    }
    else {
        print("Password requires at least 2 special characters");
        return;
    }

    $encryptedPass = password_hash($password, PASSWORD_BCRYPT);
    $addToFile = fopen($userFile, 'a');
    fputcsv($addToFile, array($email, $encryptedPass));
    fclose($addToFile);

    header("Location:signin.php");
}

#This function takes a users email, password, file of users, and the file of banned users as input. First, it 
#creates a registeredUser variable that will be used to check if the email and password are that of a valid user.
#Then it checks to see if the banned file exists, and if it does, it will read through the file to make sure the 
#email entered as input, isn't in the banned file. If the email isn't banned, it will go on to check if the email and 
#password entered by the user is inside the user file (after checking to see if the file exists), if so, it will 
#set registeredUser to true. If the registeredUser is true, then it will go on to set the email and password session
#variables to indicate that the user has been logged in, and then direct them to the members page. If the user isn't
#a registered user then it will give them a message letting them know that their username or password is invalid.
function signin($email, $password, $userFile, $bannedFile){
    $registeredUser = false;

    if(file_exists($bannedFile)) {
        $file = fopen($bannedFile, 'r');
        while ($row = fgetcsv($file)) {
            if($email == $row[0]) {
                print("This email is banned");
                return;
            }
        }
        fclose($file);
    }
    else {
        print("The banned file entered does not exist");
        return;
    }

    if(file_exists($userFile)) {
        $usrFile = fopen($userFile, 'r');
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

    if($registeredUser) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        print("success");
        header("Location:members_page.php");
    }
    else
        print("Invalid username or password");
}

#this function unsets the email and password session variables, sets the logged session variable to false, and then 
#destroys the session. After the session is destroyed, the user is then directed to the public page.
function signout(){
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    $_SESSION['logged'] = false;
    session_destroy();
    header("Location:public_page.php");
}

#this function checks to make sure the email and password session variables are set. If these two variables are set,
#then the logged session variable is set to true, if they aren't set, then the logged variable is set to false. The
#logged variable essentially checks to see if a user is logged in or not.
function is_logged(){
    if(isset($_SESSION['email']) and isset($_SESSION['password']))
        $_SESSION['logged'] = true;
    else
        $_SESSION['logged'] = false;
}
