<?php
            $this->user_validation($username, $password, $email, $first_name, $last_name, $nickname, $bio);
?>
<form action="" method="post" name="frmreg">
    <table>
    <tr>
        <td><label for="username">Username <strong>*</strong></label></td>
        <td><input type="text" name="username" ></td>
    </tr>
     
    <tr>
        <td><label for="password">Password <strong>*</strong></label></td>
        <td><input type="password" name="password"></td>
    </tr>

    <tr>
        <td><label for="email">Email <strong>*</strong></label></td>
        <td><input type="text" name="email"></td>
    </tr>
     
    <tr>
        <td><label for="firstname">Firstname <strong>*</strong></label></td>
        <td><input type="text" name="first_name"></td>
    </tr>

    <tr>
        <td><label for="lastname">Lastname <strong>*</strong></label></td>
        <td><input type="text" name="last_name" ></td>
    </tr>

    <tr>
        <td><label for="nickname">Nickname <strong>*</strong></label></td>
        <td><input type="text" name="nickname" ></td>
    </tr>
     
    <tr>
        <td><label for="bio">About <strong>*</strong></label></td>
        <td><textarea name="bio" cols="40" rows="4"></textarea></td>
    </tr>
     
    <tr>
        <td><input type="submit" name="register" value="Register"/></td>
    </tr>
    </table>    
</form>

<?php
        $this->complete_registration();
?>