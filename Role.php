<?php
class Role { 
private string $_role;

public function __construct (string $role) {
    $this-> _role = $role;
}
public function getRole () {
    return $this-> _role;
}



}


?>