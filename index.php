<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <title>Basic Banking System</title>
        <style>
            body{
                background-image: url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwoHCAgICAkRBwcIBw0HBwcHCg8ICQcKFR0WFiARExMYHSggGBolJxMVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDQ0ODg0NFysdExkrKysrKysrLSsrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIALcBFAMBIgACEQEDEQH/xAAZAAEBAQEBAQAAAAAAAAAAAAAAAwIBBAf/xAAfEAEBAQACAwEBAQEAAAAAAAAAEhEBYQIhcbFBgTH/xAAXAQEBAQEAAAAAAAAAAAAAAAAAAgED/8QAFhEBAQEAAAAAAAAAAAAAAAAAABES/9oADAMBAAIRAxEAPwD7h4/84+Oscc+uPjug0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzoCfjz64+O6lxz64+GqiarpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKroloQqfHl6KS48nadIiqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqU6lThCpceRSXHl64+FLiKrRSVFNhVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaEqCFT48vXHw1Pjn1/juukS3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3oxrhBjj+fHXOP58dakAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABzjn8GOOfTutY0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDTrGgJceXop5+PP0X26ZTXoop577dvsyVeinnvsvsyV6KKee+y+zJXoopC+3L7MleiinnvsvsyV6KKee+y+zJXoop577L7MleiikL7cvsyV6KKee+y+zJXoop577dvsyVeinnvsvsyV6KKQvty+zJXoop577L7Mleiinnvt2+zJV6Kee+y+zJXoop577L7MleinXnvsMlebjy9cO08/Hl64+O07ZRV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV7EKCFQ48vXDtJ8eX4UtClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClCdOghx5euPjtI8eX47Somq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCqUJUNhWOOfx3XBqXdNcAd01wB3TXAHdNcAd01wB3TXAHdNcAd01wB3TXAHdNcAd01wB3TXAHdNcAd01wB3TXAHdHAHdcBo//9k=");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: right 50px;
            }
        </style>

        <!--CDN-->

        <link rel="stylesheet"
            href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        

    </head>

    <body>

        <!--Navbar-->
        <?php
        include 'navbar.php';
        ?>
        <br>

        <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-md-6 col-sm-12 text-center">
                <h1 class="font-weight-bold">QUICKEST WAY TO TRANSFER MONEY</span></h1>
                <p class="lead">Personal Banking Services</p>
        
                <br>
                <br>
                <button type="button" class="btn btn-primary btn-lg" onclick="location.href = 'customers.php';">Customer
                  Details</button>
                <button type="button" class="btn btn-primary btn-lg" onclick="location.href = 'moneytransfer.php';">Transfer
                  Money</button>
              </div>
            </div>
        </div>
        <br>
        <br>

        <section class="Task " id="about">
            <h2 class="section-title" style="color:#195164;font-weight: bolder;text-align: center;">Basic Banking System</h2>
            <div class="about__container bd-grid">
                
                <div>
                    <h3 class="subtitle" style="margin-left: 700px;margin-top: 50px;font-weight: bolder;">#Task 02</h3>
                </div>
            </div>
        </section>

    </body>
</html>