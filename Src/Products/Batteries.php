<?php
/**
 * Created by PhpStorm.
 * User: A M Robiul Islam
 * Date: 1/5/2019
 * Time: 8:09 PM
 */

namespace Metro\Products;
use PDO;
use PDOException;

class Batteries{

    public $id, $uId,$vehicleMake,$vehicleModel,$vehicleYear,$vehicleVariant,
        $vehicleType,$ccaRating,$partNumber,$warranty,$price,$comment,$status;

    public $aid,$vehicleRegNum,$vehicleColor,$streetAddress,$citproductStorey,$appointmentDate,$appointmentTime,$firstName,$lastName,$email,$phone;

    public $create_at,$updated_at,$deleted_at;

    public $appointmentId;

    public $data, $productId;
    public $conn;


    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=saifelif_metro', 'root', '');
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    // assign data into variable
    public function assign($data) {
        if (!empty($data['uId'])) {
            $this->uId = $data['uId'];
        }

        if (!empty($data['productId'])) {
            $this->productId = $data['productId'];
        }

        if (!empty($data['vMake'])) {
            $this->vehicleMake = $data['vMake'];
        }

        if (!empty($data['vModel'])) {
            $this->vehicleModel = $data['vModel'];
        }
        if (!empty($data['vYear'])) {
            $this->vehicleYear = $data['vYear'];
        }
        if (!empty($data['vVariant'])) {
            $this->vehicleVariant = $data['vVariant'];
        }

        if (!empty($data['vType'])) {
            $this->vehicleType = $data['vType'];
        }

        if (!empty($data['ccaRating'])) {
            $this->ccaRating = $data['ccaRating'];
        }else{
            $this->ccaRating = "";
        }

        if (!empty($data['partNumber'])) {
            $this->partNumber = $data['partNumber'];
        }else{
            $this->partNumber = "";
        }

        if (!empty($data['warranty'])) {
            $this->warranty = $data['warranty'];
        }

        if (!empty($data['price'])) {
            $this->price = $data['price'];
        }

        if (!empty($data['comment'])) {
            $this->comment = $data['comment'];
        }else{
             $this->comment = "";
        }

        if (!empty($data['status'])) {
            $this->status = $data['status'];
        }

        if (!empty($data['vehicleRegNum'])) {
            $this->vehicleRegNum = $data['vehicleRegNum'];
        }

        if (!empty($data['vehicleColor'])) {
            $this->vehicleColor = $data['vehicleColor'];
        }
        if (!empty($data['streetAddress'])) {
            $this->streetAddress = $data['streetAddress'];
        }

        if (!empty($data['city'])) {
            $this->city = $data['city'];
        }
        if (!empty($data['appointmentDate'])) {
            $this->appointmentDate = $data['appointmentDate'];
        }

        if (!empty($data['appointmentTime'])) {
            $this->appointmentTime = $data['appointmentTime'];
        }
        if (!empty($data['firstName'])) {
            $this->firstName = $data['firstName'];
        }

        if (!empty($data['lastName'])) {
            $this->lastName = $data['lastName'];
        }
        if (!empty($data['email'])) {
            $this->email = $data['email'];
        }

        if (!empty($data['phone'])) {
            $this->phone = $data['phone'];
        }

        // appointment id
        if (!empty($data['aid'])) {
            $this->appointmentId = $data['aid'];
        }




        $this->status = 1;

        return $this;
    }


    // store a product in tbl_batteries
    public function productStore(){

        $uId = uniqid('', true);
        if(!empty($this->vehicleMake) || !empty($this->vehicleModel) || !empty($this->vehicleYear) ||
            !empty($this->vehicleVariant) || !empty($this->vehicleType) || !empty($this->partNumber) || !empty($this->warranty)|| !empty($this->price)){

            $qry = "INSERT INTO `tbl_batteries` (`id`, `uId`,`vehicleMake`, `vehicleModel`, `vehicleYear`, `vehicleVariant`, `vehicleType`, `ccaRating`, `partNumber`, `warranty`, `price`, `comment`,`status`, `created_at`, `updated_at`, `deleted_at`) 
VALUES(NULL ,:uId,:vehicleMake,:vehicleModel,:vehicleYear,:vehicleVariant,:vehicleType,:ccaRating,:partNumber,:warranty,:price,:comment,:status,:created_at,:updated_at,:deleted_at) ";
            $q = $this->conn->prepare($qry);
            $q->execute(array(
                ':uId' =>$uId,
                ':vehicleMake' =>$this->vehicleMake,
                ':vehicleModel' =>$this->vehicleModel,
                ':vehicleYear' =>$this->vehicleYear,
                ':vehicleVariant' =>$this->vehicleVariant,
                ':vehicleType' =>$this->vehicleType,
                ':ccaRating' =>$this->ccaRating,
                ':partNumber' =>$this->partNumber,
                ':warranty' =>$this->warranty,
                ':price' =>$this->price,
                ':comment' =>$this->comment,
                ':status' =>'1',
                ':created_at' =>date("Y-m-d G:i:s"),
                ':updated_at' =>'0000-00-00 00:00:00',
                ':deleted_at' =>'0000-00-00 00:00:00'
            ));
            $rows = $q->rowCount();
            if($rows > 0){
                return 1;
            }else{
                print_r($q->errorInfo());
            }

        }
    }

    // store a an appointment in tbl_appointment
    public function store(){

        $aid = uniqid('', true);
        if(!empty($this->productId) || !empty($this->vehicleRegNum) || !empty($this->vehicleColor) ||
            !empty($this->streetAddress) || !empty($this->appointmentDate) || !empty($this->appointmentTime) || !empty($this->firstName) || !empty($this->lastName)|| !empty($this->email) || !empty($this->phone)){

            $qry = "INSERT INTO `tbl_appointment` (`id`, `aid`, `pid`, `vehicleRegNum`, `vehicleColor`, `streetAddress`, `city`, `appointmentDate`, `appointmentTime`, `firstName`, `lastName`, `email`, `phone`,`status`, `created_at`, `updated_at`, `deleted_at`) VALUES(NULL ,:aid,:pid,:vehicleRegNum,:vehicleColor,:streetAddress,:city,:appointmentDate,:appointmentTime,:firstName,:lastName,:email,:phone,:status,:created_at,:updated_at,:deleted_at) ";
            $q = $this->conn->prepare($qry);
            $q->execute(array(
                ':aid' =>$aid,
                ':pid' =>$this->productId,
                ':vehicleRegNum' =>$this->vehicleRegNum,
                ':vehicleColor' =>$this->vehicleColor,
                ':streetAddress' =>$this->streetAddress,
                ':city' =>$this->city,
                ':appointmentDate' =>$this->appointmentDate,
                ':appointmentTime' =>$this->appointmentTime,
                ':firstName' =>$this->firstName,
                ':lastName' =>$this->lastName,
                ':email' =>$this->email,
                ':phone' =>$this->phone,
                ':status' =>'0',
                ':created_at' =>date("Y-m-d G:i:s"),
                ':updated_at' =>'0000-00-00 00:00:00',
                ':deleted_at' =>'0000-00-00 00:00:00'
            ));
            $rows = $q->rowCount();
            if($rows > 0){
                return 1;
            }else{
                print_r($q->errorInfo());
            }

        }
    }

    // get make list
    public function getMakeList() {
        try {
            $Query = "SELECT DISTINCT vehicleMake FROM tbl_batteries ORDER BY vehicleMake ASC";
            $q = $this->conn->query($Query);
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }


    // get model list
    public function getModelList() {
        try {
            $Query = "SELECT DISTINCT vehicleModel FROM tbl_batteries WHERE vehicleMake = '$this->vehicleMake'";
            $q = $this->conn->query($Query);
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }

    // get model list
    public function getYearList() {
        try {
            $Query = "SELECT DISTINCT vehicleYear FROM tbl_batteries WHERE vehicleMake = '$this->vehicleMake' AND vehicleModel = '$this->vehicleModel'";
            $q = $this->conn->query($Query);
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }

    // get model list
    public function getVariantList() {
        try {
            $Query = "SELECT DISTINCT vehicleVariant FROM tbl_batteries WHERE vehicleMake = '$this->vehicleMake' AND vehicleModel = '$this->vehicleModel' AND vehicleYear = '$this->vehicleYear'";
            $q = $this->conn->query($Query);
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }

    // chk product already has in batteries table
    public function hasProduct() {
        try {
            $Query = "SELECT * FROM tbl_batteries WHERE vehicleMake = '$this->vehicleMake' AND vehicleModel = '$this->vehicleModel' AND vehicleYear = '$this->vehicleYear' AND vehicleVariant = '$this->vehicleVariant' 
AND vehicleType = '$this->vehicleType' AND ccaRating = '$this->ccaRating' AND partNumber = '$this->partNumber' AND warranty = '$this->warranty' AND price = '$this->price'";
            $q = $this->conn->query($Query);
            $rowCount = $q->rowCount();
            return $rowCount;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }


    // chk product to add an appointment
    public function chkProduct() {
        try {
            $Query = "SELECT uId FROM tbl_batteries WHERE uID = '$this->productId'";
            $q = $this->conn->query($Query);
            $rowCount = $q->rowCount();
            return $rowCount;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }

    // get type info
    public function getTypeInfo() {
        try {
            $Query = "SELECT * FROM tbl_batteries ORDER BY vehicleMake ASC";
            $q = $this->conn->query($Query);
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }

    public function getBatteriesTypeInfo(){

        try {
            $Query = "SELECT * FROM tbl_batteries WHERE vehicleMake = '$this->vehicleMake' AND vehicleModel = '$this->vehicleModel' AND vehicleYear = '$this->vehicleYear' AND vehicleVariant = '$this->vehicleVariant' ";
            $q = $this->conn->query($Query);
//            $q->execute(array(
//                ':make' => 'Alfa Romeo',
//                ':model' => '90',
//                ':year' => '1985 to 1988',
//                ':variant' => 'ALL'
//            ));
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;

    }


    public function getBatteriesSingleTypeInfo(){

        try {
            $Query = "SELECT * FROM tbl_batteries WHERE vehicleMake = '$this->vehicleMake' AND vehicleModel = '$this->vehicleModel' AND vehicleYear = '$this->vehicleYear' AND vehicleVariant = '$this->vehicleVariant' AND vehicleType = '$this->vehicleType' ";
            $q = $this->conn->query($Query);
//            $q->execute(array(
//                ':make' => 'Alfa Romeo',
//                ':model' => '90',
//                ':year' => '1985 to 1988',
//                ':variant' => 'ALL'
//            ));
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;

    }

    // get all new appointment list
    public function getAppointmentList() {
        try {
            $Query = "SELECT * FROM tbl_appointment ORDER BY appointmentDate ASC";
            $q = $this->conn->query($Query);
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }


    // get an appointment details info
    public function getAppointmentDetailsWithProductDetails(){

        try {
            $Query = "SELECT * FROM tbl_appointment INNER JOIN tbl_batteries ON tbl_appointment.pid = tbl_batteries.uid WHERE tbl_appointment.aid = :appointmentId";
            //$q = $this->conn->query($Query);
            $q = $this->conn->prepare($Query);
            $q->execute(array(
               ':appointmentId' => $this->appointmentId,
            ));
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;

    }

    // get product details
    public function getProductDetailsByAppointmentId(){

        try {
            $Query = "SELECT * FROM tbl_batteries WHERE uid =:productId ";
            //$q = $this->conn->query($Query);
            $q = $this->conn->prepare($Query);
            $q->execute(array(
                ':productId' => $this->productId,
            ));
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;

    }

    // get all product list
    public function getProductList() {
        try {
            $Query = "SELECT * FROM tbl_batteries ORDER BY created_at DESC";
            $q = $this->conn->query($Query);
            $rowCount = $q->rowCount();
            if ($rowCount > 0) {
                while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
                    $this->data[] = $row;
                }
                return $this->data;
            } else {
                return $rowCount;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }

    // get all product number
    public function countAllProduct() {
        try {
            $Query = "SELECT * FROM tbl_batteries";
            $q = $this->conn->query($Query);
            return $rowCount = $q->rowCount();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }

    // get all appointments number
    public function countAllAppointments() {
        try {
            $Query = "SELECT * FROM tbl_appointment";
            $q = $this->conn->query($Query);
            return $rowCount = $q->rowCount();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }

    // get all customer number
    public function countAllCustomers() {
        try {
            $Query = "SELECT * FROM tbl_appointment";
            $q = $this->conn->query($Query);
            return $rowCount = $q->rowCount();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this;
    }








}