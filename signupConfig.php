<?php
require_once("db.php");

class signupConfig
{
    private $id;
    private $firstName;
    private $lastName;
    private $address;
    protected $dbCnx;

    //creating constructor of our class
    public function __construct($id = 0, $firstname = "", $lastname = "", $address = "")

    {
        // $this->id = $id;
        // $this->firstname = $firstname;
        // $this->lastname = $lastname;
        // $this->address = $address;

        //Creating PDO object that will conect to the database
        $this->dbCnx = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    //getter and setter

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setfirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getfirstName()
    {
        return $this->firstName;
    }

    public function setlastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getlastName()
    {
        return $this->lastname;
    }

    public function setAddres($adress)
    {
        $this->adress = $adress;
    }

    public function getAddress()
    {
        return $this->address;
    }

    //inserting data into db

    public function insertData()
    {

        try {
            $stm = $this->dbCnx->prepare("INSERT INTO workers(`firstname`, `lastname`, `address`) VALUES(?,?,?)");
            $stm->execute([$this->firstname, $this->lastname, $this->address]);
            echo ("data saved successfully");
            print_r($this->firstName);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function fetchAll()
    {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM  workers");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function fetchOne()
    {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM workers WHERE id =?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function update()
    {
        try {
            $stm = $this->dbCnx->prepare("UPDATE workers SET firstname=?, lastname=?, address=? WHERE id = ?");
            $stm->execute([$this->firstname, $this->lastname, $this->address, $this->id]);
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function delete(){
        try{
          $stm = $this->dbCnx->prepare("DELETE FROM workers WHERE id = ?");
          $stm->execute($this->id);
          return $stm->fetchAll();
          echo "Successifully deleted!";
        }
        catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
