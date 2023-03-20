<?php

class SignupController
{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __cunstruct($uid, $pwd, $pwdRepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->uid = $email;
    }

    private function emptyInput()
    {
        $result;

        if (empty($this->uid || $this->pwd || $this->pwdRepeat || $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidUid()
    {
        $result;

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail()
    {
        $result;

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function pwdMatch()
    {
        $result;

        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}