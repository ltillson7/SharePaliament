<!DOCTYPE html>
    <html lang="en">
        
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="style.css">
            <title>Web Services Final Project</title>
        </head>

        <body>

        <header id="header">
            <div class="headerText"><h1>Share Parliament!</h1></div>
            <div class="navDiv">
                <ul id="main-nav" class="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="MPView.php">MPs</a></li>
                    <li><a href="billsView.php">Bills</a></li>
                    <li><a href="https://openparliament.ca/api/"> Parliament API</a></li>
                </ul>
            </div>
        </header>
        <main id="main">
            <h2>Why Share Parliament? <img id="flag" src="images/Flag_of_Canada.PNG" alt="Canadian Flag"/> </h2>

            <img id="coatOfArms" src="images/Coat_of_arms_of_Canada.PNG" alt="Canadian Coat of Arms"/>
            <div id="explanation">
                <p>Engaging in the political process is especially important in our current political climate, at the moment
                    trust in our political processes are at an all-time low. With such little trust in government, We should know 
                    what bills our government is passing, and who our leaders are because to be engaged in the political process is 
                    to better understand where the faults exist. When we understand our political problems we are better equipt to enact change.</p>
                <p>This site is essentially the bare minimum anyone can do to be politically engaged. To share current bills 
                    and who represents you may raise some awareness to local or federal issues, however, as a society we need 
                    to better construct a political consciousness.</p>
                <p>The API I used to construct this site is linked in the navigation, and has more information on the goings-on in Canadian Parliament.
                    It has transcripts, debates, information on recent votes as well as access to several different Json files, only 2 of which I have used here.</p>
            </div>
        </main>
        <footer id="footer">
            <div class="headerText"><p>Thanks for Visiting!</p></div>
            <div class="navDiv">
                <ul id="sec-nav" class="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="MPView.php">MPs</a></li>
                    <li><a href="billsView.php">Bills</a></li>
                    <li><a href="https://openparliament.ca/api/"> Parliament API</a></li>
                </ul>
            </div>
        </footer>
        </body>
    </html>