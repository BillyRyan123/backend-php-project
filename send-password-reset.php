<?php

$email= $_POST['email'];

$token= bin2hex(random_bytes(16));

$token_hash= hash("sha256", $token);

$expiry=date("Y-m-s H:i:s",time()+ 60 * 30);

$mysqli= require `_DIR_`."/db_conn.php";

$mysql="UPDATE `admin`
SET reset_token_hash=?,
reset_token_expires_at=?
WHERE email=?";

$stmt= $mysqli->prepare($sql);
$stmt->bind_param("sss",$token_hash, $expiry,$email);

$stmt->execute();


if($mysqli->affected_rows){

}
