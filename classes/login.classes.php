<?php

/**
 * Signup Class with Methods to use for database querying
 */

class Login extends Dbh
{

    protected function getUser($uid, $pwd) {
        $stmt = $this->connect()->prepare('SELECT user_pwd FROM users WHERE user_uid = ?;');

        if(!$stmt->execute(array($uid, $pwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["user_pwd"]);

        $stmt = null;
    }
}