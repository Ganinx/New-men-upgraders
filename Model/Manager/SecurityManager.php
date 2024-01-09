<?php



class SecurityManager extends DbManager
{

    public function findAll(){
        $arrayQuery = [];
        $query = $this->bdd->query("SELECT * FROM users");
        $results = $query->fetchAll();

        foreach ($results as $result){
            $arrayQuery[] = new User($result["id"],$result['lastname'],$result["firstname"],$result["email"],$result["password"]);
        }
        return $arrayQuery;


    }


    public function findByEmail(){

        $user =null;

        $query = $this->bdd->prepare("SELECT * FROM users WHERE email = :email");

        $query->execute([
            "email"=>$_POST["email"]
        ]);
        $result = $query->fetch();

        if ($result){
            $user = new User($result["id"],$result['lastname'],$result["firstname"],$result["email"],$result["password"]);
        }

        return $user;
    }

    public function findOne($id){
        $query = $this->bdd->prepare("SELECT * from user Where id= :id");
        $query ->execute(["id"=>$id]);
        $result = $query->fetch();

        $user = null;
        if($result){
            $user = new User($result["id"],$result['lastname'],$result["firstname"],$result["email"],$result["password"]);
        }
        return $user;
    }

    public function deleteOne($id){
        $query = $this->bdd->prepare("DELETE from users Where id= :id");
        $query ->execute(["id"=>$id]);
    }

    public function add($obj){
        $query = $this->bdd->prepare("INSERT INTO users (firstname,lastname,email,password) VALUES (:firstname,:lastname,:email,:password)");
        $query->execute(["firstname" => $obj->getFirstname(),
            "lastname"=>$obj->getLastname(),
            "email"=>$obj->getEmail(),
            "password"=>$obj->getPassword(),
        ]);
    }


}