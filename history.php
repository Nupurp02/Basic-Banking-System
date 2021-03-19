<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <style>
            body{
                background-image: url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwoHCAgICAkRBwcIBw0HBwcHCg8ICQcKFR0WFiARExMYHSggGBolJxMVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDQ0ODg0NFysdExkrKysrKysrLSsrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIALcBFAMBIgACEQEDEQH/xAAZAAEBAQEBAQAAAAAAAAAAAAAAAwIBBAf/xAAfEAEBAQACAwEBAQEAAAAAAAAAEhEBYQIhcbFBgTH/xAAXAQEBAQEAAAAAAAAAAAAAAAAAAgED/8QAFhEBAQEAAAAAAAAAAAAAAAAAABES/9oADAMBAAIRAxEAPwD7h4/84+Oscc+uPjug0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzoCfjz64+O6lxz64+GqiarpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKroloQqfHl6KS48nadIiqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqU6lThCpceRSXHl64+FLiKrRSVFNhVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaEqCFT48vXHw1Pjn1/juukS3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3oxrhBjj+fHXOP58dakAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABzjn8GOOfTutY0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDTrGgJceXop5+PP0X26ZTXoop577dvsyVeinnvsvsyV6KKee+y+zJXoopC+3L7MleiinnvsvsyV6KKee+y+zJXoop577L7MleiikL7cvsyV6KKee+y+zJXoop577dvsyVeinnvsvsyV6KKQvty+zJXoop577L7Mleiinnvt2+zJV6Kee+y+zJXoop577L7MleinXnvsMlebjy9cO08/Hl64+O07ZRV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV7EKCFQ48vXDtJ8eX4UtClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClCdOghx5euPjtI8eX47Somq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCqUJUNhWOOfx3XBqXdNcAd01wB3TXAHdNcAd01wB3TXAHdNcAd01wB3TXAHdNcAd01wB3TXAHdNcAd01wB3TXAHdHAHdcBo//9k=");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: right 50px;
            }
    </style>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet"
            href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>

<body>

    <!--Navbar-->
    <?php
        include 'navbar.php';
        ?>

	<div class="container">
        <h2 class="text-center pt-4">Transfer History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-sm table-condensed table-bordered table-striped table-light">
        <thead class="thead-dark">
            <tr>
                
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';
            $sql ="select * from history";
            $query =mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            
            <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
            <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
            <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
            <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

</body>
</html>