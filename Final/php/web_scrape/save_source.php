<!-- https://www.w3schools.com/php/func_string_stripos.asp -->

<?php

// include the Simple HTML DOM parser library
include_once("simple_html_dom.php");

// specify the target website's URL
$url = "https://www.smith.edu/your-campus/residence-life/smith-houses";

// initialize an array to store all product data
$linkList = array();
$neighborhoodInfo = array();

// create a function to scrape product data from a given URL
function scraperList($url) {
    global $linkList;
    global $neighborhoodInfo;

    // log the currently scraped page
    echo "Scraping page: $url <br>";

    // initialize a cURL session
    $curl = curl_init();

    // set the website URL
    curl_setopt($curl, CURLOPT_URL, $url);

    // return the response as a string
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // follow redirects
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 

    // ignore SSL verification (not recommended in production)
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    // execute the cURL session
    $htmlContent = curl_exec($curl);

    // check for errors
    if ($htmlContent === false) {
        // handle the error
        $error = curl_error($curl);
        echo "cURL error: " . $error;
        exit;
    }

    // close cURL session
    curl_close($curl);

    $html = str_get_html($htmlContent);

    foreach ($html->find('a.quick-links__link') as $link) {
        $name = trim($link->plaintext);
        $href = "https://www.smith.edu" . $link->href;

        // Separate out "Neighborhood Info" links
        if (stripos($name, 'Info') !== false) {
            $neighborhoodInfo[] = [
                'name' => $name,
                'url' => $href
            ];
        } else {
            $linkList[] = [
                'name' => $name,
                'url' => $href
            ];
        }
    }
}

// Start the scrape
scraperList($url);

// Save as JSON
file_put_contents("../../data/neighborhoodInfo.json", json_encode($neighborhoodInfo, JSON_PRETTY_PRINT));
file_put_contents("../../data/linkList.json", json_encode($linkList, JSON_PRETTY_PRINT));
echo "neighborhoodInfo.json and linkList.json saved";
?>
