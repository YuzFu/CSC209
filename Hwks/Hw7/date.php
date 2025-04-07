<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP Date
        </title>

        <style>
            html {
                padding:10px;
            }
        </style>
    </head>

    <body>
        <h2>Date</h2>
        <?php
        echo "Today is " . date("Y/m/d") . ", " . date("l") . ".<br>";
        ?>

        <h2>Time</h2>
        <?php
        echo "The time is " . date("h:i:sa") . ".<br>";
        ?>

        <h2>Timezone</h2>
        <?php
        $timezone = date_default_timezone_get();
        echo "The timezone is $timezone .<br>";
        date_default_timezone_set("America/New_York");
        echo "The timezone is " . date("h:i:sa") . ".<br>";
        ?>

        <h2>Upcoming Weekdays</h2>
        <?php
        $startdate = strtotime("Wednesday");
        $enddate = strtotime("May 02");

        while ($startdate < $enddate) {
            echo date("M d", $startdate) . "<br>";
            $startdate = strtotime("+1 week", $startdate);
        }
        ?>

        <h2>Countdown</h2>
        <?php
        $due = strtotime("May 02");
        $day = ceil(($due-time())/60/60/24);
        echo "There are " . $day . " days until the end of the semester.";
        ?>
    </body>
</html>