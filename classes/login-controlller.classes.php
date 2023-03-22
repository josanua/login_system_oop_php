<?php

class loginController extends Login
{
    private $uid;
    private $pwd;

    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }


    /**
     * Check form data and Set User if OK.
     * @return void
     */
    public function loginUser()
    {
        if ($this->emptyInput() === false) {
            // echo "Empty input!"
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput()
    {
        $result;

        if (empty($this->uid || $this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}