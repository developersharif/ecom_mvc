<?php
class Action extends controller
{
    public function logout()
    {
        setcookie('cuser', '', time() - (86400 * 30), "/");
        header("location: ../home");
    }
}