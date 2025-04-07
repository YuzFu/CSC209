<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Advanced File
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <h2>fexist</h2>
        <?php
        $wofolder = file_exists("webdictionary.txt");
        $wfolder = file_exists("external/webdictionary.txt");
        echo "Whether the file exists in the same folder: $wofolder <br>";
        echo "Whether the file exists in an internal folder: $wfolder";
        ?>

        <h2>glob</h2>
        <?php
        echo "The txt files in the same folder: ";
        print_r(glob("*.txt"));
        echo "<br>The txt files in the internal folder: ";
        print_r(glob("external/*.txt"));
        ?>
    </body>
</html>