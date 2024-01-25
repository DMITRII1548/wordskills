<?php 

require_once './../../../models/User.php';

class StoreController 
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function __invoke()
    {
        $data = $_POST;

        $this->validate($data);
        $this->user->create($data);

        header('Location: /test/index.php');
        exit();  
    }

    private function validate(array $data)
    {
        if (empty($data['name']) || !is_string($data['name'])) {
            header('Location: /test/index.php');
            exit();
        } elseif (empty($data['email']) || !is_string($data['email'])) {
            header('Location: /test/index.php');
            exit();
        } elseif (empty($data['password']) || !is_string($data['password'])) {
            header('Location: /test/index.php');
            exit();
        }
    }
}

$storeContoroller = new StoreController();

$storeContoroller();