<?php

/**
 * Created by PhpStorm.
 * User: wagner macedo
 * Date: 30/08/2016
 * Time: 21:19
 */
class Cliente
{
    protected $conn;

    protected $id;
    protected $nome;
    protected $email;
    protected $login;
    protected $senha;
    protected $cpf;
    protected $fone;
    protected $dat;

    //métodos

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    protected function listar()
    {
        //query para listar
        $query = "select * from cadastro";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function inserir()
    {
        //query para inserção dos dados
        $query = "Insert into cadastro(nome, email, login, senha, cpf, fone, dat) VALUES(:nome, :email, :login, :senha, :cpf, :fone, str_to_date(:dat, '%d/%m/%Y'))";

        //inserção dos dados
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':email', $this->getEmail());
        $stmt->bindValue(':login', $this->getLogin());
        $stmt->bindValue(':senha', $this->getSenha());
        $stmt->bindValue(':cpf', $this->getCpf());
        $stmt->bindValue(':fone', $this->getFone());
        $stmt->bindValue(':dat', $this->getDat());

        if($stmt->execute()){
            return "Dados inseridos com sucesso!";
        }
    }

    protected function alterar()
    {
        //comando update
        $query = "update cadastro set nome=:nome, email=:email where id=:id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $this->getId());
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':email', $this->getEmail());

        if($stmt->execute()){
            return "Dados alterados com sucesso!";
        }
    }

    protected function deletar($id)
    {
        //comando deletar
        $query = "delete from cadastro where id=:id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $id());

        if($stmt->execute()){
            return "Dados deletador com sucesso!";
        }
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFone()
    {
        return $this->fone;
    }

    /**
     * @param mixed $fone
     */
    public function setFone($fone)
    {
        $this->fone = $fone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDat()
    {
        return $this->dat;
    }

    /**
     * @param mixed $dat
     */
    public function setDat($dat)
    {
        $this->dat = $dat;
        return $this;
    }
}