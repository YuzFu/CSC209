<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Table
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <?php
        $data = [
            "DATES"=>[
			"Feb 1","Feb 8","Feb 15","Feb 21",
			"March 1","March 8","March 15","March 21",
			"April 1","April 8","April 15","April 21"],
		"TOPICS"=>[
			"Installation",
			"Html",
			"Css",
			"Javascript 1",
			"","","","","","","",""],
	    "DESCRIPTIONS"=>[
			"We install software","We make our first Html",
			"We style pages with Css",
			"Get started on Javascript ",
			"","","","","","","","",""]
        ];

        $NROWS = count(reset($data));
        $NCOLS = count($data);
        ?>

        <table>
            <tr>
                <th>Index</th>
                <?php
                foreach ($data as $colName=>$arr) {
                    echo "<th>$colName</th>";
                }
                ?>
            </tr>

            <?php
            for ($i = 0; $i < $NROWS; $i++) {
                echo "<tr>";
                echo "<td>" . ($i+1) . "</td>";
                foreach ($data as $arr) {
                    echo "<td>" . $arr[$i] . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>