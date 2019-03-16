<?php require ('header.php'); 

 if (isset($_GET['url'])&&isset($_GET['name'])){
    $url = $_GET['url']; // path to your JSON file 
    $yesterday=date('d.m.Y',strtotime("-1 days"));
    $data = file_get_contents($url.'/wp-json/wp/v2/posts?_embed&per_page=25'); // put the contents of the file into a variable

	$characters = json_decode($data); // decode the JSON feed$characters = json_decode($data); // decode the JSON feed

?>
<div class="container" > 
    <div class="row">
      <div class="sidebar-dashboard col-lg-3 col-md-4 col-xs-4 col-sm-5">
            <?php require('sidebar.php'); ?>
            
        </div>

    <div id="cage" class="floater col-lg-9 col-md-7 col-xs-7 col-sm-7">
        		<h1><?php echo $_GET['name']; ?> </h1>
        		<div id="news-box">
    <?php
    if ($_SESSION['loggedIn']=='yes'){
        $ticker = 'I have read this headline';
        $titleCopy = '<input type="text" class="title-tester" placeholder="enter the headline here">';
    }
        $adTime = 0;
    	foreach ($characters as $character) :
    ?>
        <?php if($adTime%5!=0){
            include ('adsense.php');
        } ?>
            <div>
          		<p class="title"><?php echo $character->title->rendered; ?> </p>
          		<img src="<?php echo $character->_embedded->{'wp:featuredmedia'}[0]->source_url; ?>" alt="" >
        		<div><?php echo $character->excerpt->rendered; ?></div>
        		<a href="<?php echo $character->guid->rendered; ?>" target="_blank">Read more</a>
        		<?php echo $titleCopy; ?><button id="<?php echo str_replace(" ","-",$_GET['name']).$character->id; ?>" class="read-ticker"><?php echo $ticker; ?></button><br><p></p>
    		</div>
    		<?php $adTime++; ?>
    
    <?php
    	endforeach;
    ?>

    <!-- news box ends -->
    </div>
    <?php require ('footer.php'); ?>
</div>
<!-- row ends here -->
</div>
	<!--Container ends -->
	</div>
<?php
   }
?>

<?php require ('footerMain.php'); ?>