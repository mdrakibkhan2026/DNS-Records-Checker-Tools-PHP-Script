<?php

// Name: Md. Rakib Khan
// Designation: PHP Developer, Web Designer
// Contact me: https://web.facebook.com/mark.rakib/
// Website: https://horje.com

?>
<?php
// fetch.php
if (isset($_POST['data'])) {
    $receivedData = htmlspecialchars($_POST['data']);
    // Simulate some processing time
    sleep(2); 
    
// Start

if (!empty($receivedData)) {

function domain($url) {
    $host = parse_url($url, PHP_URL_HOST);
    // If the URL has no scheme, parse_url might fail. 
    // This adds a default scheme to ensure proper parsing if needed.
    if (!$host) {
        $host = parse_url('http://' . $url, PHP_URL_HOST);
    }
    return $host;
}

$domain = domain($receivedData);

    echo '<h3><p>DNS Records Status for '.$domain.':</p></h3>';


    echo "  <div style='overflow-x:auto;'> <table class='table'>";
    echo "<tr><th class='text-center'>Name</th><th class='text-center'>Status</th></tr>";
    if(checkdnsrr($domain,"A")) {
  echo "<tr><td>A Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>A Record</td><td class='k9-text-red'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"MX")) {
  echo "<tr><td>MX Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>MX Record</td><td class='k9-text-red'>Failed</td></tr>";
}

    if(checkdnsrr($domain,"NS")) {
  echo "<tr><td>NS Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>NS Record</td><td class='k9-text-red'>Failed</td></tr>";
}

    if(checkdnsrr($domain,"SOA")) {
  echo "<tr><td>SOA Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>SOA Record</td><td class='k9-text-red'>Failed</td></tr>";
}

    if(checkdnsrr($domain,"PTR")) {
  echo "<tr><td>PTR Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>PTR Record</td><td class='k9-text-red'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"CNAME")) {
  echo "<tr><td>CNAME Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>CNAME Record</td><td class='k9-text-red'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"AAAA")) {
  echo "<tr><td>AAAA Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>AAAA Record</td><td class='k9-text-red'>Failed</td></tr>";
}



    if(checkdnsrr($domain,"A6")) {
  echo "<tr><td>A6 Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>A6 Record</td><td class='k9-text-red'>Failed</td></tr>";
}

    if(checkdnsrr($domain,"SRV")) {
  echo "<tr><td>SRV Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>SRV Record</td><td class='k9-text-red'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"NAPTR")) {
  echo "<tr><td>NAPTR Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>NAPTR Record</td><td class='k9-text-red'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"TXT")) {
  echo "<tr><td>TXT Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>TXT Record</td><td class='k9-text-red'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"ANY")) {
  echo "<tr><td>ANY Record</td><td class='k9-text-green'>Passed</td></tr>";
} else {
  echo "<tr><td>ANY Record</td><td class='k9-text-red'>Failed</td></tr>";
}
echo '</table>';





} else {
    echo '<h3>
    <p>Field Cannot empty !</p>
  </h3>';    
}


    
} else {
    echo '<h3>
    <p>Wrong words !</p>
  </h3>';
}


?>


