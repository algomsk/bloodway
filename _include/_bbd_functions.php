<?php
/**
 * Created by PhpStorm.
 * User: vijay
 * Date: 04-Oct-17
 * Time: 4:15 PM
 */
class _bbd_functions
{
    private $conn;

    function __construct() {
        require_once 'DB_Connect.php';
        $db = new Db_Connect();
        $this->conn = $db->connect();
    }

    function __destruct() {
    }

    public function getCurrentLocation()
    {
        $sql = "SELECT * FROM current_location LIMIT 1";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function storeCurrentLocation($lat,$lng)
    {
        $sql = "INSERT INTO current_location (lat, lng) VALUES ($lat,$lng)";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function updateCurrentLocation($lat,$lng,$id)
    {
        $sql = "UPDATE current_location SET lat=$lat, lng=$lng WHERE id=$id";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getLatLongNearBy($lat,$lng)
    {
        $allNearby=array();
//        SELECT `latitude`,`longitude` FROM bb_directory WHERE `latitude` BETWEEN 24.523225399999998-0.2 AND 24.523225399999998+0.2 AND `longitude` BETWEEN 72.7951346-0.2 AND 72.7951346+0.2
        $sql = "SELECT * FROM bb_directory WHERE `latitude` BETWEEN $lat-0.2 AND $lat+0.2 AND `longitude` BETWEEN $lng-0.2 AND $lng+0.2";
//        $sql = "SELECT * FROM bb_directory LIMIT 2000";

//        $query = sprintf("SELECT id, name, address, lat, lng, ( 3959 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM markers HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",

        $result = $this->conn->query($sql);
//        return $result->num_rows;
        if($result->num_rows < 2)
        {
            $sql = "SELECT * FROM bb_directory WHERE `latitude` BETWEEN $lat-0.4 AND $lat+0.4 AND `longitude` BETWEEN $lng-0.4 AND $lng+0.4";
            $result = $this->conn->query($sql);
        }

        while ($row = $result->fetch_assoc()) {
            $allNearby[] = $row;
        }
        return $allNearby;
    }

    public function getAllLatLng()
    {
        $allLoc=array();
                $sql = "SELECT * FROM bb_directory";
                $result = $this->conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    $allLoc[] = $row;
                }
            return $allLoc;
    }


}