<?php
//we need to define the page that we are on as the page
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//switch

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Our Home';
        $body = 'home';
        break;
    case 'about.php':
        $title = 'About Page';
        break;
    case 'daily.php':
        $title = 'Our Daily Page';
        $body = 'daily inner';
        break;
    case 'people.php':
        $title = 'People Page';
        break;
    case 'contact.php':
        $title = 'Our Contact Page';
        $body = 'daily inner';
        break;
    case 'gallery.php':
        $title = 'Gallery Page';
        break;
    case 'thx.php':
        $title = 'Thank You Page';
        break;
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['people.php'] = 'People';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

ob_start();
date_default_timezone_set('America/Los_Angeles');//sets timezone


//GLOBAL VARIABLE are capitallized and start with $_GET
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today){
    case 'Sunday':
        $nfl = 'Packers';
        $description = 'The Green Bay Packers are a professional American football team based in Green Bay, Wisconsin. The Packers compete in the National Football League as a member club of the National Football Conference North division';
        $photo = '../images/green.png';
        $alt = 'Green Bay';
        break;
    case 'Monday':
        $nfl = 'Chiefs';
        $description = 'The Kansas City Chiefs are a professional American football team based in Kansas City, Missouri. The Chiefs compete in the National Football League as a member club of the league';
        $photo = '../images/chief.png';
        $alt = 'Kansas City';
        break;
    case 'Tuesday':
        $nfl = 'Buccaneers';
        $description = 'The Tampa Bay Buccaneers are a professional American football team based in Tampa, Florida. The Buccaneers compete in the National Football League as a member club of the leagues National Football Conference South division.';
        $photo = '../images/buc.png';
        $alt = 'Tampa Bay';
        break;
    case 'Wednesday':
        $nfl = '49ers';
        $description = 'The San Francisco 49ers are a professional American football team based in the San Francisco Bay Area.';
        $photo = '../images/49.png';
        $alt = 'San Francisco';
        break;
    case 'Thursday':
        $nfl = 'Rams';
        $description = 'The Los Angeles Rams are a professional American football team based in the Los Angeles metropolitan area. The Rams compete in the National Football League as a member of the National Football Conference West division.';
        $photo = '../images/ram.png';
        $alt = 'Los Angeles';
        break;
    case 'Friday':
        $nfl = 'Patriots';
        $description = 'The New England Patriots are a professional American football team based in the Greater Boston area. They compete in the National Football League as a member club of the leagues American Football Conference East division.';
        $photo = '../images/pat.png'; 
        $alt = 'New England';
        break;
    case 'Saturday':
        $nfl = 'Dallas';
        $description = 'Worst Team in the League';
        $photo = '../images/dallas.png';
        $alt = 'Dallas';
        break;
}

/* Contact Page */
$email = '';
$comments = '';
$fname = '';
$lname = '';
$visitor = '';
$pLang = '';
$regions = '';
$privacy = '';

$fNameErr = '';
$lNameErr = '';
$emailErr = '';
$visitorErr = '';
$phoneErr = '';
$pLangErr = '';
$regionsErr = '';
$commentsErr = '';
$privacyErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['fname'])) {
        $fNameErr = 'Please enter your first name';
    } else {
        $fname = $_POST['fname'];
    }

    if(empty($_POST['lname'])) {
        $lNameErr = 'Please enter your last name';
    } else {
        $lname = $_POST['lname'];
    }

    if(empty($_POST['email'])) {
        $emailErr = 'Please enter your Email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['visitor'])) {
        $visitorErr = 'Please choose the type of visitor';
    } else {
        $visitor = $_POST['visitor'];
    }

    if(empty($_POST['phone'])) { // if empty, type in your number
    $phoneErr = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phoneErr = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if

    if(empty($_POST['pLang'])) {
        $pLangErr = 'Please choose atleast one programming language';
    } else {
        $pLang = $_POST['pLang'];
    }

    if($_POST['regions'] == NULL) {
        $regionsErr = 'Please select your region';
    } else {
        $regions = $_POST['regions'];
    }

    if(empty($_POST['comments'])) {
        $commentsErr = 'Your comments, please!!';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacyErr = 'You cannot pass go!';
    } else {
        $privacy = $_POST['privacy'];
    }

    //our plang function
    function pLang($pLang) {
        $my_return = '';
        if(!empty($_POST['pLang'])) {
            $my_return = implode(', ', $_POST['pLang']);
        } else {
            $pLangErr = 'Select atleast 1 programming language';
        }
        return $my_return;
    }//end pLang function

    if(isset($_POST['fname'],
             $_POST['lname'],
             $_POST['email'],
             $_POST['visitor'],
             $_POST['phone'],
             $_POST['regions'],
             $_POST['pLang'],
             $_POST['comments'],
             $_POST['privacy'])) {
    $to = 'duckhunterjr@gmail.com';
    $subject = 'Test email '.date('m/d/y, h i A');
    $body = '
    First Name: '.$fname.' '.PHP_EOL.'
    Last Name: '.$lname.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    visitor: '.$visitor.' '.PHP_EOL.'
    Phone Number: '.$phone.' '.PHP_EOL.'
    Regions: '.$regions.' '.PHP_EOL.'
    pLang: '.pLang($pLang).' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    ';

        if(!empty($fname&&
                $lname&&
                $visitor&&
                $pLang&&
                $regions&&
                $email&&
                $phone&&
                $comments&&
                $privacy)&&preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $headers = array(
            'From'=> 'no-reply@studentswa.com',
            'Reply to:'=>''.$email.'');

            mail($to,$subject,$body,$headers);
            header('Location:thx.php');
        }//close if !empty
    }//close isset

}// END server request

/* Index.php image page */
$photos[0] = 'aristotle';
$photos[1] = 'epictetus';
$photos[2] = 'marcus';
$photos[3] = 'plato';
$photos[4] = 'seneca';

function random_images($photos) {
    $my_return = '';
    $i = rand(0,4);
    $selected_image = ''.$photos[$i].'.jpg'; 
    return $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}

?>