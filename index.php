<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>𝑻𝒓 𝑺𝒆𝒓𝒊𝒂𝒍𝒔</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:900");
        html {
            display: grid;
            width : 100%
        }
        body {
            display: grid;
            background: #183059;
        }



        .container {
            position: relative;
            margin: auto;
            overflow: hidden;
            width: auto;
            height: auto;
        }

        h1 {
            font-family: "Lato", sans-serif;
            text-align: center;
            margin-top: 1em;
            font-size: 1em;
            text-transform: uppercase;
            letter-spacing: 5px;
            color: #F6F4F3;
        }

        #timer {
            color: #F6F4F3;
            text-align: center;
            text-transform: uppercase;
            font-family: "Lato", sans-serif;
            font-size: .7em;
            letter-spacing: 5px;
            margin-top: 1%;
        }
        .seconds {
            display: inline-block;
            padding: 20px;
            width: 100px;
            border-radius: 5px;
        }

        .seconds {
            background: #F0A202;
        }

        .numbers {
            font-family: "Montserrat", sans-serif;
            color: #183059;
            font-size: 4em;
        }


        footer {
            position: fixed;
            bottom: 0;
            right: 0;
            text-transform: uppercase;
            padding: 10px;
            font-family: "Lato", sans-serif;
            font-size: 0.7em;
        }
        footer p {
            letter-spacing: 3px;
            color: #EF2F3C;
        }
        footer a {
            color: #F6F4F3;
            text-decoration: none;
        }
        footer a:hover {
            color: #276FBF;
        }
    </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
    <h1>Creating download link...</h1>
    <div id="timer"></div>
</div>
<!-- partial -->
<script>
    let counter = 21;

    const interval = setInterval(() => {
        counter--;
        document.getElementById("timer").innerHTML =
            " \
        <div class=\"seconds\"> \
          <div class=\"numbers\">" + counter + "</div>seconds</div> \
</div>";
        if(counter === 0){ clearInterval(interval);
        }
    },1000);
</script>
<?php
    function runquery($query){
    $con = "https://papyraceous-cities.000webhostapp.com/runquery.php?apikey=HjR4cF8&query=";
    $a = explode(" ",$query);
    $b = implode("|", $a);
    $run = $con.$b;
    return json_decode(file_get_contents($run),true);
}

$select = runquery("SELECT * FROM `urls` WHERE shortenid='$_GET['url']'");
$resave = $select['longurl'];
if($resave !== "ندارم😢"){
    header("refresh: 20;url=$resave");
}else{
    header("refresh: 10;url=https://proxy.turkcyber.ml/-----https://t.me/trserials");
}
?>
</body>
</html>
