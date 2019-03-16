   <div class="container">

        <?php
            if ($_SESSION['loggedIn']=='yes'):
//LOGIN API
        
            $sql = 'SELECT * FROM marketer where email="'.$_SESSION['loggedInEmail'].'"';
            $result = mysqli_query($dbc, $sql);
            $row = mysqli_fetch_array($result);  
        
         ?>
                        
            <div id="dashboard" >
				<div class="glyphicon glyphicon-user"></div>
				<p>Hello <?php echo $_SESSION['user']; ?>!</p>
				<div>Today's Session Read Points: <p id="session-read-points"><?php echo $row['sessionReadPoints']; ?></p></div>
				<div>Total Read Points: <p id="total-read-points"><?php echo $row['totalReadPoints']; ?></p></div>
				<div>Referral url: <p><a id="refUrl" target="_blank" href="<?php echo $row['referralUrl']; ?>"><?php echo $row['referralUrl']; ?></p></a></div>
				<div>Referral points: <p><?php echo $_SESSION['referralPoints']; ?></p></div>
			</div>

             
             <?php   
            else:
        ?> 
      <div><a href="signup.php"><div class="glyphicon glyphicon-user"></div> Sign Up</a>
	  </div>
      <div><a href="login.php"><div class="glyphicon glyphicon-log-in"></div> Login</a>
</div>
        
        <?php
            endif;
        
        ?>

       <div id="winnersBanner"> Some other people are playing this game right now. Who will win today's gift from jumia?</div><hr>
        <div class="row">
           
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                     NAME
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                     TODAY'S SESSION
                 </div>
      
        </div><hr>
        <div class="row">
            <?php 
        
            $sql1 = 'SELECT * FROM marketer ORDER BY sessionReadPoints DESC';
            $result1 = mysqli_query($dbc, $sql1);
            $winner=1;
            while($row1 = mysqli_fetch_array($result1)):
            ?>
             
           
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                     <?php echo $winner.'. '.$row1['first name']; ?>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                      <?php echo $row1['sessionReadPoints']; ?>
                 </div>
            
        <?php   
            $winner++;
            endwhile;
        ?>
        </div>
</div>