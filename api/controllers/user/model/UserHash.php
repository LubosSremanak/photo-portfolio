<?php

class UserHash implements \JsonSerializable
{

    private string $name;
    private string $password;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}