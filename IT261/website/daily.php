<?php 

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}
$day_array = array(
    "Sunday" => "Sunday",
    "Monday" => "Monday",
    "Tuesday" => "Tuesday",
    "Wednesday" => "Wednesday",
    "Thursday" => "Thursday",
    "Friday" => "Friday",
    "Saturday" => "Saturday",
);

// switch

switch($today){
    case 'Sunday':
        $nfl = 'Green Bay';
        $description = 'The Green Bay Packers are a professional American football team based in Green Bay, Wisconsin. The Packers compete in the National Football League as a member club of the National Football Conference North division';
        $photo = 'images/green.png';
        $alt = 'Packers';
        break;
    case 'Monday':
        $nfl = 'Kansas City';
        $description = 'The Kansas City Chiefs are a professional American football team based in Kansas City, Missouri. The Chiefs compete in the National Football League as a member club of the league';
        $photo = 'images/chief.png';
        $alt = 'Chiefs';
        break;
    case 'Tuesday':
        $nfl = 'Tampa Bay';
        $description = 'The Tampa Bay Buccaneers are a professional American football team based in Tampa, Florida. The Buccaneers compete in the National Football League as a member club of the leagues National Football Conference South division.';
        $photo = 'images/buc.png';
        $alt = 'Buccaneers';
        break;
    case 'Wednesday':
        $nfl = 'San Francisco';
        $description = 'The San Francisco 49ers are a professional American football team based in the San Francisco Bay Area.';
        $photo = 'images/49.png';
        $alt = '49ers';
        break;
    case 'Thursday':
        $nfl = 'Los Angeles';
        $description = 'The Los Angeles Rams are a professional American football team based in the Los Angeles metropolitan area. The Rams compete in the National Football League as a member of the National Football Conference West division.';
        $photo = 'images/ram.png';
        $alt = 'Rams';
        break;
    case 'Friday':
        $nfl = 'New England';
        $description = 'The New England Patriots are a professional American football team based in the Greater Boston area. They compete in the National Football League as a member club of the leagues American Football Conference East division.';
        $photo = 'images/pat.png'; 
        $alt = 'Patriots';
        break;
    case 'Saturday':
        $nfl = 'Dallas';
        $description = 'Worst Team in the League';
        $photo = 'images/dallas.png';
        $alt = 'Dallas';
        break;
}

include "includes/header.php" ?>
    <div id="wrapper" class="<?php echo $nfl; ?>">
        <main>
            <h1><?php echo $today; ?> is for <?php echo $nfl; ?></h1>
            <p><?php echo $description; ?></p>
        </main>
        
        <aside>
            <div id="image">
                <img id="nflPhoto" src="<?php echo $photo; ?>" alt="<?php echo $alt; ?>" >
            </div>
            
        </aside>

        <div id="listWrapper">
            <h3>NFL Teams</h3>
            <ul>
                <?php 
                    foreach($day_array as $nfl => $day){
                        echo '<li><a href="daily.php?today='.$day.'">'.$nfl.'</a></li>';
                    };
                ?>
            </ul>

        </div> <!--End listWrapper-->
<?php include "includes/footer.php" ?>