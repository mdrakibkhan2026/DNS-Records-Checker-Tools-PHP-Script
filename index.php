<?php

// Name: Md. Rakib Khan
// Designation: PHP Developer, Web Designer
// Contact me: https://web.facebook.com/mark.rakib/
// Website: https://horje.com

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
  
  
    <form>
    <input type="text" id="myInput" placeholder="Enter a domain" class="k9-margin-bottom">
    <button id="myButton" class="k9-btn k9-ripple k9-green">DNS Records</button>
    </form>
    
    
       <div id="loadingSpinner" class="spinner"></div>
    <div id="result"></div>
    
</div><br>

<br><br>

<footer class="container-fluid text-center">
  <p><a href="https://dnscheck.horje.com">Horje Tools</a> &copy; <?php echo date('Y'); ?></p>
</footer>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const myInput = document.getElementById('myInput');
    const myButton = document.getElementById('myButton');
    const loadingSpinner = document.getElementById('loadingSpinner');
    const resultDiv = document.getElementById('result');

    myButton.addEventListener('click', () => {
        const inputValue = myInput.value;

        // Show loading spinner
        loadingSpinner.style.display = 'block';
        myButton.disabled = true; // Disable button during loading

        // Create a new XMLHttpRequest object
        const xhr = new XMLHttpRequest();

        // Configure the request
        xhr.open('POST', 'data.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Define what happens on successful data reception
        xhr.onload = () => {
            if (xhr.status === 200) {
                resultDiv.innerHTML = xhr.responseText;
            } else {
                resultDiv.innerHTML = 'Error: ' + xhr.status;
            }
            // Hide loading spinner and re-enable button
            loadingSpinner.style.display = 'none';
            myButton.disabled = false;
        };

        // Define what happens in case of an error
        xhr.onerror = () => {
            resultDiv.innerHTML = 'Network error.';
            loadingSpinner.style.display = 'none';
            myButton.disabled = false;
        };

        // Send the request with the input value
        xhr.send('data=' + encodeURIComponent(inputValue));
    });
});
</script>
</body>
</html>
