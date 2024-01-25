<?php

require_once './../../../models/User.php';

class UpdateController
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function __invoke()
    {
        $id = (int)$_GET['id'];
        $data = $_POST;

        $this->validate($data);
        $this->user->update($id, $data);

        header('Location: /test/index.php');
        exit();
    }

    private function validate(array $data)
    {
        if (empty($data['name']) || !is_string($data['name'])) {
            header('Location: /test/edit.php');
            exit();
        } elseif (empty($data['email']) || !is_string($data['email'])) {
            header('Location: /test/edit.php');
            exit();
        } elseif (empty($data['password']) || !is_string($data['password'])) {
            header('Location: /test/edit.php');
            exit();
        }
    }
}

$updateContoroller = new UpdateController();

$updateContoroller();
