<?php
    session_start();
        require 'class/sysconnect.php';
        require 'scripts/sys_register.php';
        $conn_ = $obj_->conn_();
        $obj_->insert($conn_,$_POST);
        $obj_->setSessionObj($obj_);

?>