<?php

class MyDatabas{
    private $MyDB;
    private $results;

    public function __construct()
    {
        $this->connectDB();
        $sql="SELECT * FROM posts ORDER BY id DESC ";
        if(!$this->results=$this->MyDB->query($sql)){
            die("ett fel har inträffat['.$this->MyDB->error.']");
        }
        $this->close_connection();
    }

    public function connectDB(){
        $this->MyDB=mysqli_connect('localhost', 'root', '', 'varor') or die('Fel vid anslutning');
        //$this->MyDB=mysqli_connect('studentmysql.miun.se', 'iska2101', 'iojvxhrb', 'iska2101') or die('Fel vid anslutning');
    }
    public function close_connection(){$this->MyDB->close();}

    public function delete($index){
        $this->connectDB();
       $sql="DELETE FROM posts WHERE id=$index";
       $this->results=$this->MyDB->query($sql) or die("Fel vid SQL-fråga");
       $this->close_connection();

    }
    public function insert_2_DB($name,$text,$date){
        $this->connectDB();
        echo $name." ".$text." ".$date;
        $sql="INSERT INTO posts(customer_name,comment,date)VALUES('$name','$text','$date');";
        $this->results=$this->MyDB->query($sql) or die("Fel vid SQL-fråga");
        $this->close_connection();
    }

    public function get_results(){
        return $this->results;
    }
};
