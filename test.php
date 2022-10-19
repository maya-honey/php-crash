<?php 
class User {
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function get_name(){
        return $this->name;
    }
    function get_email(){
        return $this->email;
    }
}

$user1 = new User('Brad', 'brad@gmail.com', '343434');

echo '<p>' . $user1->get_name() . '</p>';
echo '<p>' . $user1->get_email() . '</p>';

class employee extends User {
    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '434343', 'Manager');

echo $employee1->get_title();

?>