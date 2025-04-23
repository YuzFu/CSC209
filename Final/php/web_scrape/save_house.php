<!-- https://www.zenrows.com/blog/web-scraping-php#retrieve-html -->
<!-- https://www.w3schools.com/php/func_string_trim.asp -->
<!-- https://stackoverflow.com/questions/1935918/php-substring-extraction-get-the-string-before-the-first-or-the-whole-strin -->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// include the Simple HTML DOM parser library
include_once("simple_html_dom.php");

// specify the target website's URL
$urls = json_decode(file_get_contents('../../data/linkList.json'), true);

// initialize an array to store all product data
$houseData = array();

// create a function to scrape product data from a given URL
function scraper($url, $name) {
    global $houseData;

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

    // create a new Simple HTML DOM instance
    $html = str_get_html($htmlContent);

    $house = [];

    $house["name"] = $name;
    $house["url"] = $url;

    $parts = explode('/', $url);
    $key = array_search('smith-houses', $parts);
    $neighborhoodSlug = $parts[$key + 1];
    $house["neighborhood"] = ucwords(str_replace('-', ' ', $neighborhoodSlug));

    $img = $html->find("div.image img", 0);
    $house["image"] = $img ? "https://www.smith.edu" . $img->src : null;

    $description = "";
    $div = $html->find("div.text", 0);
    if ($div) {
        $paragraphs = $div->find("p");
        foreach ($paragraphs as $p) {
            $description .= trim($p->plaintext) . "\n";
        }
    }
    $house["description"] = trim($description);

    $table = $html->find("table.tablefield", 0);
    if ($table) {
        $rows = $table->find("tr");
        foreach ($rows as $row) {
            $cells = $row->find("td");
            if (count($cells) == 2) {
                $label = trim($cells[0]->plaintext);
                $value = trim($cells[1]->plaintext);
                $house[$label] = $value;
            }
        }
    }

    $houseData[] = $house;
    echo "$name saved to houses.json <br>";
}

// Start the scrape
foreach ($urls as $entry) {
    scraper($entry['url'], $entry['name']);
}

// Save as JSON
file_put_contents("../../data/houses.json", json_encode($houseData, JSON_PRETTY_PRINT));
echo "House data saved to houses.json";
?>
