<?php
 include 'config.php';

if(isset($_POST['submit']))
{
	$amount = $_POST['amount'];
	$toUser = $_POST['to'];
    $fromUser = $_GET['id'];
    
    $sql = "SELECT * from customers where id=$fromUser";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customers where id=$toUser";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Please Enter A Valid Amount")';
        echo '</script>';
    }
    else if($amount > $sql1['balance']) 
    {
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")'; 
        echo '</script>';
    }
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }
    else {
        
                $newBalance = $sql2['balance'] + $amount;
                $sql = "UPDATE customers set balance=$newBalance where id=$toUser";
                mysqli_query($conn,$sql);
				
                $newBalance = $sql1['balance'] - $amount;
                $sql = "UPDATE customers set balance=$newBalance where id=$fromUser";
                mysqli_query($conn,$sql);

                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO history(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Was Successful');
                                     window.location='moneytransfer.php';
                           </script>";
                    
                }

                $newBalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <style>
        body{
            background-image: url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwoHCAgICAkRBwcIBw0HBwcHCg8ICQcKFR0WFiARExMYHSggGBolJxMVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDQ0ODg0NFysdExkrKysrKysrLSsrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIALcBFAMBIgACEQEDEQH/xAAZAAEBAQEBAQAAAAAAAAAAAAAAAwIBBAf/xAAfEAEBAQACAwEBAQEAAAAAAAAAEhEBYQIhcbFBgTH/xAAXAQEBAQEAAAAAAAAAAAAAAAAAAgED/8QAFhEBAQEAAAAAAAAAAAAAAAAAABES/9oADAMBAAIRAxEAPwD7h4/84+Oscc+uPjug0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzoCfjz64+O6lxz64+GqiarpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKrpqWmkKroloQqfHl6KS48nadIiqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqUUnRRCqU6lThCpceRSXHl64+FLiKrRSVFNhVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaKSoohVaEqCFT48vXHw1Pjn1/juukS3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3prGmkG9NY00g3oxrhBjj+fHXOP58dakAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABzjn8GOOfTutY0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDQzpoNDOmg0M6aDTrGgJceXop5+PP0X26ZTXoop577dvsyVeinnvsvsyV6KKee+y+zJXoopC+3L7MleiinnvsvsyV6KKee+y+zJXoop577L7MleiikL7cvsyV6KKee+y+zJXoop577dvsyVeinnvsvsyV6KKQvty+zJXoop577L7Mleiinnvt2+zJV6Kee+y+zJXoop577L7MleinXnvsMlebjy9cO08/Hl64+O07ZRV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV6KQoohV7EKCFQ48vXDtJ8eX4UtClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClFJ0UClCdOghx5euPjtI8eX47Somq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCq0UlRRCqUJUNhWOOfx3XBqXdNcAd01wB3TXAHdNcAd01wB3TXAHdNcAd01wB3TXAHdNcAd01wB3TXAHdNcAd01wB3TXAHdHAHdcBo//9k=");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right 50px;
        }
    </style>

    <!--CDN-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet"
            href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">

</head>

<body>
    <?php
        include 'navbar.php';
        ?>
    <div class="container">
        <h2 class="text-center">TRANSACTION</h2>
            <?php
                include 'config.php';
                $bank=$_GET['id'];
                $sql = "SELECT * FROM  customers where id=$bank";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-hover table-sm table-condensed table-bordered table-light">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Balance</th>
                    </tr>
                </thead>
                <tr>
                    <td class="text-center py-2"><?php echo $rows['id'] ?></td>
                    <td class="text-center py-2"><?php echo $rows['name'] ?></td>
                    <td class="text-center py-2"><?php echo $rows['email'] ?></td>
                    <td class="text-center py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br>
        <label>TRANSFER TO:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Select A Customer</option>
            <?php
                 include 'config.php';

                $bank=$_GET['id'];
                $sql = "SELECT * FROM customers where id!=$bank";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br><br>
            <label>ENTER AMOUNT:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn btn-outline-primary btn-lg" name="submit" type="submit" id="myBtn">Transfer Money</button>
            </div>
        </form>
    </div>

</body>
</html>