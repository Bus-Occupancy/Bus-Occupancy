<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ----font CDN---- -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    
    <!-- --------font CDN------ -->
    <title>Buses</title>
    <?php 
        require("functions.php");
    ?>
    
</head>
<!-- ------------------get all the rows with all fields from bus table---------- -->
<?php $bus_data = $db->getBusData('buses');
    $bus_count=1; // to display table header only once
?>

<body>  
<header class="header-container">
    <p class="title"><a href="./index.htm">BUS OCCUPANCY</a></p>
    <nav class="nav-bar">
        <ul>
            <li><a href="./index.htm">HOME</a></li>
            <li><a href="./buses.php">BUSES</a></li>
            <li><a href="./contact.php">CONTACT US</a></li>
        </ul>
    </nav>
</header>
<div class="busPage-bg">
    <table class="table-container">
        <!-- -------------iterate through all the row-------------- -->
    <?php foreach($bus_data as $bus_row) {?>
        <thead>
        <?php if($bus_count==1){?>
        <tr>
            <td>Bus No</td>
            <td>Source</td>
            <td>Destination</td>
            <td>Count</td>
            <td>Status</td>
        </tr>
        </thead>
        <?php } ?>
        <tbody>
            <tr>
                <td><?php echo $bus_row['bus_no']?></td>
                <td><?php echo $bus_row['source']?></td>
                <td><?php echo $bus_row['destination']?></td>
                <td><?php echo $bus_row['count']?></td>
                <td><span></span><div class="gauge">
                    <div class="gauge__body">
                        <div class="gauge__fill"></div>
                        <div class="gauge__cover"></div>
                    </div>
                </div></td>
            </tr>
            
        </tbody>
       
        <?php $bus_count++;} ?>
    </table>
</div>  
    <footer class="footer-container">
        <div class="footer-content">
             <p>BUS OCCUPANCY</p>
            <hr>
            <ul class="social-links">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/im_ajmal_k/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCRDnaxGwNRZ49o3jDe1vvzQ/featured?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <p class="credits">Copyright &copy;2020 BUS OCCUPANCY. Designed by <span>Ajmal | Vaishnavi | Heet</span></p>
        </div> 
            
    </footer>
    
</body>
</html>
<!-- ------------------get all the rows with only count field from bus table---------- -->
<?php $countArray =$db->getCount('buses');
    //  print_r($countArray);
     $countAssoArray =  array();
     
     for($i=1; $i<=count($countArray);$i++){
        //  print_r($countArray[$i]);
         $countAssoArray[$i] = $countArray[$i-1]['count'];
     }
     
?>

<script>
var encoded_array = <?php echo json_encode($countAssoArray) ?>;
showCount(encoded_array,<?php echo count($countArray) ?>);

</script>

