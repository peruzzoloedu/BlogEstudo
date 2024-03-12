<?php

class autor{

private String $idautor;
private String $endereco;
private String $telefone;
private String $email;

public function getIdautor()
{
return $this->idautor;
}

public function setIdautor($idautor)
{
$this->idautor = $idautor;

return $this;
}

public function getEndereco()
{
return $this->endereco;
}

public function setEndereco($endereco)
{
$this->endereco = $endereco;

return $this;
}

public function getTelefone()
{
return $this->telefone;
}

public function setTelefone($telefone)
{
$this->telefone = $telefone;

return $this;
}
 
public function getEmail()
{
return $this->email;
}

public function setEmail($email)
{
$this->email = $email;

return $this;
}
}
?>