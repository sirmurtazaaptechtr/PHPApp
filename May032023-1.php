<?php
    function writetofile($text){
        $myfile = fopen('TheText.txt','a') or die("unable to open file!");
        fwrite($myfile,$text);
        fclose($myfile);
        $myfile = fopen('TheText.txt','r') or die("unable to open file!");
        echo fread($myfile,filesize('TheText.txt'));
        fclose($myfile);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="May032023-1.php" method="post">
        <textarea name="theText" id="theText" cols="30" rows="10" placeholder="Wirte some text here"></textarea>
        <input type="submit" value="Save">
    </form>    
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $text = $_POST['theText'];
            echo "<h4>Content of Your file...</h4>";
            writetofile($text);
        }
    ?>
    <?php        
        $myfile = fopen('myfile.txt','w') or die("unable to open file!");
        $txt = 'This text is written via php language...';
        fwrite($myfile,$txt);
        $txt = 'This is another text is written via php language...';
        fwrite($myfile,$txt);
        fclose($myfile);        
        // $myfile = fopen('myfile.txt','r') or die("unable to open file!");
        // echo fread($myfile,filesize('myfile.txt'));
        // fclose($myfile);

        $myfile = fopen('myfile.txt','a') or die("unable to open file!");
        $txt = 'Ali Baba Chalis Choor';
        fwrite($myfile,$txt);
        $txt = 'Alif Laila';
        fwrite($myfile,$txt);
        fclose($myfile);        
        
    ?>
</body>
</html>