<?php
class Connetion
{

    private $connect;
    public function __construct()
    {

        $this->connect = new mysqli('localhost', 'root', '', 'bdservis');
    }

    public function getServis()
    {

        $query =  $this->connect->query('SELECT * FROM servicios');


        $misDatos = [];
        $i = 0;

        while ($row = $query->fetch_assoc()) {

            $misDatos[$i] = $row;
            $i++;
        }
        return $misDatos;

    }
}
