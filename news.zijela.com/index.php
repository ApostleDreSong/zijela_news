<?php require ('header.php');
if(isset($_GET['refId'])):
    $_SESSION['refId']=$_GET['refId'];
endif;
?>

<div class="container">
    <div class="row">
        
        <div class="sidebar-dashboard col-lg-3 col-md-4 col-xs-4 col-sm-5">
            <?php 
            require('sidebar.php'); ?>
            
        </div>
        <div class="floater col-lg-9 col-md-7 col-xs-7 col-sm-7">
            <div>
              <h3>Why not get rewarded for getting informed?</h3>
              <h3>Zijela News Aggregator is a Newspaper reading game app</h3>
              <h3>When you read featured headlines on our site after signing up, you stand a chance to win loads of gifts, on a daily, weekly, monthly and yearly basis from select stores ranging from jumia, konga to amazon. </h3>
              <h3>Sign up ->> Click on your choice newspaper ->> Click I have read this news item after reading an headline ->> Your stats are updated inside your dashboard ->> Boom! you are a winner</h3> 
              <h3>Daily wins are evaluated on how many news items you read in a reading session. If you close your browser or your session ends after 20 minutes of inactivity, your read points
              is saved and used in the daily draw of winners. If you start another reading session, your previous session is added to your total read points but your session will start afresh and your new session
              points will be used in the daily draw of winners.</h3> 
              <h3>Total read points is used in the monthly and yearly draw of customers</h3>
            </div>
            <div>
              <h1><a href="/signup.php">Sign up</a> now to start making money</h1>
            </div>
            <?php require ('footer.php'); ?>
        </div>
    </div>

</div>

<?php require ('footerMain.php'); ?>

