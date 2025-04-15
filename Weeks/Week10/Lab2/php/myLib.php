<?php
function extractFolderNumber($filepath) {
    $basename = basename(dirname($filepath));
    $weekNrString = substr($basename, -1);
    $weekNr = (int)$weekNrString;
    echo "This is work for Lab $weekNrString. <br><br>";
}
?>