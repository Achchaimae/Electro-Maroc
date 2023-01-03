<?php
require_once '../Model/ClientModel.php';
class ClientController
{
    protected $client;
    public function __construct()
    {
        $this->client = new ClientModel();
    }
    public function listclient()
    {
        $result = $this->client->listclient();
        return $result;
    }
    public function getclient($id)
    {
        $result = $this->client->getclient($id);
        return $result;
    }
    public function deleteclient($id)
    {
        $this->client->deleteclient($id);
    }
    public function searchclient($nom)
    {
        $result = $this->client->searchclient($nom);
        return $result;
    }
}
