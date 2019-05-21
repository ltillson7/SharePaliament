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

            <script>
            window.fbAsyncInit = function() {
                FB.init({
                appId            : '339858363383134',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v3.2'
                });
            };
            </script>
            
            <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>

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
            <h2>Share Your MP! <img id="flag" src="images/Flag_of_Canada.PNG" alt="Canadian Flag"/> </h2>
            <p>This Page is to easily share information about Canadian Politicians. </p>
            <div class="container">
                <div class="card-deck">
                    <?php
                        require_once "MP.php";
                    ?>
                </div>
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

            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
        
        <script>
            var shareBtns = document.getElementsByClassName("btn-share");
            // console.log(shareBtns);

            for (var i = 0; i < shareBtns.length; i++) {

                shareBtns[i].addEventListener('click', shareItem , false) 

            }
            function shareItem (e) {
                var currentId = e.target.getAttribute('data-id');
                FB.ui({
                    method: 'share',
                    display: 'popup',
                    href: window.location.href + "#"+currentId,
                    }, function(response){
                    }
                    
                    );
            }

            document.getElementById('shareBtn').onclick = function() {
            FB.ui({
                method: 'share',
                display: 'popup',
                href: window.location.href,
            }, function(response){});
            }
            </script>
        </body>
    </html>