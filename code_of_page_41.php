<?php

class Sample {
    public const PI = 3.1416;

    protected const DIR_AVATAR = 'images/avatar';
    protected const DEFAULT_AVATAR_IMAGE = 'avatar_default.jpg';

    private const DB_URL = '127.0.0.1:3306/sampledb';
    private const DB_USERNAME = 'root';
    private const DB_PASSWORD = '';

    public function getConnection() {
        $conn = new mysqli(self::DB_URL, self::DB_USERNAME, self::DB_PASSWORD);
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        } else {
            echo "Connected Successfully\n";
            return $conn;
        }
        return null;
    }
}

$obj = new Sample();
$obj->getConnection();
echo Sample::PI;
?>
