<?php

require_once './../../../models/User.php';

class DestroyController 
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function __invoke()
    {
        $id = (int)$_GET['id'];

        $this->user->delete($id);

        header('Location: /test/index.php');
        exit();
    }
}

$destoroyController = new DestroyController();
$destoroyController();