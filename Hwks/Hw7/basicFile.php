<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Basic Files
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <h2>Readfile Function</h2>
        <?php
        echo readfile("external/webdictionary.txt");
        ?>

        <h2>fopen, fread, and fclose</h2>
        <?php
        $openfile = fopen("external/webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($openfile,filesize("external/webdictionary.txt"));
        fclose($openfile);
        ?>

        <h2>fcreate and fwrite</h2>
        <?php
        $writefile = fopen("external/newfile.txt", "w") or die("Unable to open file!");
        $date = "Today is " . date("Y/m/d") . ", " . date("l") . ".<br>";
        fwrite($writefile, $date);
        $time = "The time is " . date("h:i:sa") . ".<br>";;
        fwrite($writefile, $time);
        fclose($writefile);
        ?> 
    </body>
</html>