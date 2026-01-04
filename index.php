<?php

// Name: Md. Rakib Khan
// Designation: PHP Developer, Web Designer
// Contact me: https://web.facebook.com/mark.rakib/
// Website: https://horje.com
// This Script written by Horje Admin

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DNS Records Check Tools PHP Script</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <meta name="description" content="Check DNS Record from a Website. Free Tools for checking DNS Record.">
<meta property="og:title" content="DNS Record Check Tools - Horje" />
<meta name="keywords" content="DNS Check Tools">
<meta property="og:description" content="Check DNS Record from a Website. Free Tools for checking DNS Record." />
<meta property="og:url" content="https://dnscheck.horje.com/" />
<meta property="og:image" content="https://dnscheck.horje.com/images/site/apps/dnscheck/dnscheck.png" />
<meta property="twitter:title" content="DNS Record Check Tools" />
<meta name="twitter:description" content="Check DNS Record from a Website. Free Tools for checking DNS Record." />
<meta name="twitter:image" content="https://dnscheck.horje.com/images/site/apps/dnscheck/dnscheck.png" />
<meta property="article:published_time" content="2026-01-03 01:29:17" />
<meta property="article:modified_time" content="2026-01-03 01:29:17" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" sizes="32x32" href="https://dnscheck.horje.com/favico.png">
  <style>
      /* style.css */
.spinner {
    border: 4px solid rgba(0, 0, 0, 0.1);
    border-left-color: #333;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
    display: none; /* Initially hidden */
    margin: 10px auto;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="https://dnscheck.horje.com">Horje.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="https://dnscheck.horje.com">Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>DNS Record Check Tools</h1>      
    <p>Check DNS Records from a Web Address</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Use a Domain</h3><br>
  
  
    <form action="" method="post">
    <input type="text" id="myInput" name="data" placeholder="Enter a domain" class="k9-margin-bottom">
    <button id="myButton" class="k9-btn k9-ripple k9-green">DNS Records</button>
    </form>
    
<br>

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
  echo "<tr><td>A Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>A Record</td><td class='text-warning'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"MX")) {
  echo "<tr><td>MX Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>MX Record</td><td class='text-warning'>Failed</td></tr>";
}

    if(checkdnsrr($domain,"NS")) {
  echo "<tr><td>NS Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>NS Record</td><td class='text-warning'>Failed</td></tr>";
}

    if(checkdnsrr($domain,"SOA")) {
  echo "<tr><td>SOA Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>SOA Record</td><td class='text-warning'>Failed</td></tr>";
}

    if(checkdnsrr($domain,"PTR")) {
  echo "<tr><td>PTR Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>PTR Record</td><td class='text-warning'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"CNAME")) {
  echo "<tr><td>CNAME Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>CNAME Record</td><td class='text-warning'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"AAAA")) {
  echo "<tr><td>AAAA Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>AAAA Record</td><td class='text-warning'>Failed</td></tr>";
}



    if(checkdnsrr($domain,"A6")) {
  echo "<tr><td>A6 Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>A6 Record</td><td class='text-warning'>Failed</td></tr>";
}

    if(checkdnsrr($domain,"SRV")) {
  echo "<tr><td>SRV Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>SRV Record</td><td class='text-warning'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"NAPTR")) {
  echo "<tr><td>NAPTR Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>NAPTR Record</td><td class='text-warning'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"TXT")) {
  echo "<tr><td>TXT Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>TXT Record</td><td class='text-warning'>Failed</td></tr>";
}


    if(checkdnsrr($domain,"ANY")) {
  echo "<tr><td>ANY Record</td><td class='text-success'>Passed</td></tr>";
} else {
  echo "<tr><td>ANY Record</td><td class='text-warning'>Failed</td></tr>";
}
echo '</table>';





} else {
    echo '<h3>
    <p>Field Cannot empty !</p>
  </h3>';    
}


    
}


?>

    
</div><br>

<br><br>

<footer class="container-fluid text-center">
  <p><a href="https://dnscheck.horje.com">Horje Tools</a> &copy; <?php echo date('Y'); ?></p>
</footer>
</body>
</html>
