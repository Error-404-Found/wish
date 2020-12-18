<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhani Greeting Card</title>
    <!-- Primary Meta Tags -->
    <meta name="title" content="Hey there, <?php echo $name; ?>> has sent you gifts this Festive Season!
">
    <meta name="description" content="Let’s begin this new year with Prosperity, Health, Wealth & Positivity!. Here are some gifts for you. Merry Christmas and a Happy New Year 2021">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Hey there, <?php echo $name; ?>> has sent you gifts this Festive Season!
">
    <meta property="og:description" content="Let’s begin this new year with Prosperity, Health, Wealth & Positivity!. Here are some gifts for you. Merry Christmas and a Happy New Year 2021">
    <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Hey there, <?php echo $name; ?>> has sent you gifts this Festive Season!
">
    <meta property="twitter:description" content="Let’s begin this new year with Prosperity, Health, Wealth & Positivity!. Here are some gifts for you. Merry Christmas and a Happy New Year 2021">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- <p id="name"></p>
    <form method="get" class="form-style-9">
        <div style="text-align:center; margin-bottom:30px;"><img style="display:inline-block;" border="0" width="179"
                height="auto" src="images/sb-sign-logo.png" alt="Social Beat"></div>
        <ul>
            <input type="text" name="name" class="field-style field-split align-center" id="userName" placeholder="Full Name"
                required="" style="width: 66%;height: 25px;"><br><br>
            <li>
                <input type="submit" name="submit" class="align-center-btn" value="Go" onclick="updatename();">
            </li>
        </ul>
    </form> -->

    <form method="get">
        </br><button type="button" onclick="createFaction()">create faction</button>
        <input placeholder="name" id="factionName" name="factionName">
    </form>
    <p id="test1"></p>
    
    <input onchange="createFaction1(this.value)" onkeyup="createFaction1(this.value)" placeholder="type somthing ..." id="factionName1" name="factionName1">
<p id="test2"></p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // function updatename(){
        //     var name = document.getElementById('userName'),
        //     userName = name.value;

        //     document.getElementById('name').innerHTML = userName;
        // }
        function createFaction() {
            var name = document.getElementById('factionName'),
            factionName = name.value;

            document.getElementById('test1').innerHTML = factionName;
        }
        function createFaction1(faction) {
           document.getElementById('test2').innerHTML = faction;
        }
    </script>
</body>
</html>