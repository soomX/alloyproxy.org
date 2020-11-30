<?php
 function UniqueMachineID($salt = "") {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        $temp = sys_get_temp_dir().DIRECTORY_SEPARATOR."diskpartscript.txt";
        if(!file_exists($temp) && !is_file($temp)) file_put_contents($temp, "select disk 0\ndetail disk");
        $output = shell_exec("diskpart /s ".$temp);
        $lines = explode("\n",$output);
        $result = array_filter($lines,function($line) {
            return stripos($line,"ID:")!==false;
        });
        if(count($result)>0) {
            $result = array_shift(array_values($result));
            $result = explode(":",$result);
            $result = trim(end($result));       
        } else $result = $output;       
    } else {
        $result = shell_exec("blkid -o value -s UUID");  
        if(stripos($result,"blkid")!==false) {
            $result = $_SERVER['HTTP_HOST'];
        }
    }   
    return md5($salt.md5($result));
}

$uid1 = "";

if($uid1 == UniqueMachineID()){

}else{
echo(UniqueMachineID());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <titleSchoology</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="__alloy_style.css" rel="stylesheet">
    <link href="box.css" rel="stylesheet" type="text/css" />
    <script src="script.js"></script>
</head>
<body >
<div class="container">
<h1>bypass website | alive for 1 week(s)</h1>
<form class="url" method="POST" action="/session/">
    <input placeholder="https://www.google.com" name="url" id="iurl" type="text">
    <button type="submit" id="btn">Go!</button>
    <a href="">Kept up-to-date for schools that blocked Alloy.</a>
</form>
</div>
</div>
    <section></section>
</body>
</html>
