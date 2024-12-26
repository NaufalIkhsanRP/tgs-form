<?php
    $namalengkap = $_POST['namalengkap'];
    $gender = $_POST['gender'];
    $nomormahasiswa = $_POST['nomormahasiswa'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $smester = $_POST['smester'];
    $cerita = $_POST['cerita'];

    $conn = new mysqli('localhost','root','','formtst');
    if($conn->connect_error){
        die ('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into regist(namalengkap, gender, nomormahasiswa, email, number, smester, cerita)
        values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssisiss",$namalengkap, $gender, $nomormahasiswa, $email, $number, $smester, $cerita);
        $stmt->execute();
        echo "Pendaftaran berhasil..";
        $stmt->close();
        $conn->close();
    }

?>