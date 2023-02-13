<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <?php
        function sanitize($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }

            if ($_SERVER['REQUEST_METHOD'] === "POST") {

                $flag = true;

                $firstname = sanitize($_POST['firstname']);
                $lastname = sanitize($_POST['lastname']);
                $fathersname = sanitize($_POST['fathersname']);
                $mothersname = sanitize($_POST['mothersname']);
                $gender = sanitize($_POST['gender']);
                $DOB = sanitize($_POST['DOB']);
                $BG = sanitize($_POST['BG']);
                
                $email = sanitize($_POST['email']);
                $phone = sanitize($_POST['phone']);
                $web = sanitize($_POST['web']);
                $address = sanitize($_POST['address']);

                $username = sanitize($_POST['username']);
                $password = sanitize($_POST['password']);

                if (empty($firstname)) {
                    echo "<p align='center'>Please fill up the firstname .</p>";
                    $flag = false;
                }
                if (empty($lastname)) {
                    echo "<p align='center'>Please fill up the lastname.</p>";
                    $flag = false;
                }
                if (empty($fathersname)) {
                    echo "<p align='center'>Please fill up the father's name.</p>";
                    $flag = false;
                }
                if (empty($mothersname)) {
                    echo "<p align='center'>Please fill up the mother's name.</p>";
                    $flag = false;
                }
                if (empty($DOB)) {
                    echo "<p align='center'>Please fill up the Date of Birth.</p>";
                    $flag = false;
                }
                if (empty($gender)) {
                    echo "<p align='center'>Please fill up the Gender Information.</p>";
                    $flag = false;
                }
                if (empty($email)) {
                    echo "<p align='center'>Please fill up the email properly.</p>";
                    $flag = false;
                }      
                if (empty($phone)) {
                    echo "<p align='center'>Please fill up the phone number.</p>";
                    $flag = false;
                }
                if (empty($address)) {
                    echo "<p align='center'>Please fill up the address information.</p>";
                    $flag = false;
                }
                if (empty($username)) {
                    echo "<p align='center'> Please select a username .</p>";
                    $flag = false;
                }
                if (empty($password)) {
                    echo "<p align='center'>Please fill up the password properly.</p>";
                    $flag = false;	
                }
                if($flag===true){
                echo '
                <div align="center">
                <table>
                <th>
                    <td>

                    </td>
                    
                    <td>

                        <fieldset>
                            <legend>General Information :</legend>
                            <table align="center">
                                <th>
                                    <td align="left">
                                        <b> <label for="firstname">First Name : </label> 
                                        <br><br>            
                                        <label for="lastname">Last Name :  </label>
                                        <br><br>             
                                        <label for="fathersname">Fathers Name : </label>
                                        <br><br>             
                                        <label for="mothersname">Mothers Name : </label>
                                        <br><br>
                                        <label for="gender">Gender : </label>
                                        <br><br>
                                        <label for="DOB">Date of Birth :  </label>
                                        <br><br>
                                        <label for="BG">Blood Group :  </label> 
                                        <b/>
                                                        
                                    </td>
                                    <td>
                                        '.$firstname.'
                                        <br><br>
                                        '.$lastname.'
                                        <br><br>
                                        '.$fathersname.'
                                        <br><br>
                                        '.$mothersname.'
                                        <br><br>
                                        '.$gender.'
                                        <br><br>
                                        '.$DOB.'
                                        <br><br>
                                        '.$BG.'            
                                    </td>
                                </th>
                            </table>
                        </fieldset>
                    
                        <fieldset>
                            <legend>Contact Information :</legend>
                            <table align="center">
                                <th>
                                    <td>
                                        <b><label for="email"><b/> Email :</label>
                                        <br><br>
                                        <b><label for="phone"><b/> Phone/Mobile :</label>
                                        <br><br>
                                        <b><label for="web"><b/> Website :</label>
                                        <br><br>
                                        <b><label for="address"><b/> Address :</label>

                                    </td>
                                    <td>
                                        '.$email.'
                                        <br><br>
                                        '.$phone.'
                                        <br><br>
                                        '.$web.'
                                        <br><br>
                                        '.$address.'          
                                    </td>
                                </th>
                            </table>
                        </fieldset>
                    
                        <fieldset>
                            <legend>Account Information</legend>
                            <table align="center">
                                <th>
                                    <td>
                                        <b>
                                        <label for ="sername">Username :</label><br><br>
                                        <label for ="password">Password :</label>
                                        <b/>
                                    </td>
                                    <td>
                                        '.$username.'
                                        <br><br>
                                        '.$password.'
                                    </td>
                                </th>
                            </table>
                        </fieldset>
                
                        <table align="center">
                            <th>
                                <td>
                
                                    <button type = "submit">Register</button>
                
                                </td>
                            </th>
                        </table>

                    </td>
                    <td>

                    </td>
                </th>
            </table>
            <p align = "center">Alredy have an account ? Login <a href="Login.html">here</a></p>
                </div>
                ';
                } 
            }
?>
</body>
</html>