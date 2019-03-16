<?php
session_start(); 
 ob_start(); ?>
<html>
<head>
  <meta http-equiv="Content-Language" content="en-us">
  <meta http-equiv="Content-Type"
 content="text/html; charset=windows-1252">
  <meta name="description" content="Get rewarded for getting informed by winning vouchers from Amazon, Jumia and major stores when you read headlines of featured newspapers on our site">
  <meta name="keywords"
 content=" Newspapers, Newspaper, Nigeria, Nigeria Newspapers, List of newspapers in Nigeria,list of newspapers by states of 

Nigeria,Newspapers of Nigeria, list of Nigeriaian newspapers, Nigeriaian Press, List of Regional Newspapers of Nigeria, List of 

Local newspapers in Nigeria,  Directory of Newspapers in Nigeria, Directory of online newspapers of Nigeria, Nigeria directory 

newspapers, epapers of Nigeria, Directory of National Newspapers in Nigeria,  List of Regional Newspapers in states of Nigeria, 

List of all Nigerian Newspapers, Nigerian language newspapers, English Newspaper in Nigeria, Hausa newspapers in Nigeria, Igbo Newspapers in Nigeria, Yoruba newspapers in Nigeria


  ">
  <!-- FACEBOOK META -->
      <meta property="og:title" content="Zijela Newspapers Aggregator"/>
    <meta property="og:description" content="Get rewarded for getting informed by winning vouchers from Amazon, Jumia and major stores when you read headlines of featured newspapers on our site"/>
    <meta property="og:image" content="/images/logo.png"/>
	<meta property="og:image:alt" content="Zijela News Aggregator" />
    <meta property="og:site_name" content="Zijela News"/>
    <meta property="fb:app_id"          content="960203160789115" /> 
    <meta property="og:url" content="https://news.zijela.com"/>
    <meta property="og:type" content="Newspapers"/>
    	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
  
  
  <meta name="Resource-Type" content="Document">
  <meta name="Classification" content="Newspapers">
  <meta name="Distribution" content="Global">
  <meta name="Rating" content="General">
  <meta name="Doc-Type" content="Public">
  <meta name="Doc-Class" content="Completed">
  <meta name="Doc-Rights"
 content="copywritten work of zijela.com">
  <meta name="Abstract"
 content="List of Newspapers in Republic of Nigeria">
  <title>Daily review of Newspapers in Nigeria</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/style.css">
<link rel="icon" type="image/png" href="/images/logo.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="manifest" href="/manifest.json">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-8129016254318897",
          enable_page_level_ads: true
     });
</script>

</head>

<?php 
require ('config.php');

$newsPapers = array(
'Punch Newspapers'=>'http://punchng.com',
  'Vanguard'=>'http://vanguardngr.com',
  'Daily Times'=>'http://dailytimes.ng',
  'The Nation'=>'http://thenationonlineng.net',
  'Sun Newspaper'=>'http://sunnewsonline.com',
  'Guardian'=>'http://guardian.ng',
  'Daily Independent'=>'http://independent.ng',
  'Tribune'=>'http://tribuneonlineng.com',
  'New Telegraph'=>'http://newtelegraphonline.com',
  'Leadership'=>'http://leadership.ng',
  'Daily Post'=>'http://dailypost.ng');
?>
<body id="body">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=960203160789115&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
     <div id="header-jumbo" class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <a href="/index.php"><img src="/images/logo.png"></a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <h2>ZIJELA NEWS AGGREGATOR</h2> 
                </div>
                          <!--      Adsense        -->
                  <div id="adsense" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <script type="text/javascript">
                            google_ad_client = "ca-pub-8129016254318897";
                            google_ad_slot = "1694241735";
                            google_ad_width = 336;
                            google_ad_height = 280;
                        </script>
                        <!-- new ad for side bar -->
                        <script type="text/javascript"
                        src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
                        
           <!--      Adsense        -->
                </div>

            </div>
        </div>
    </div>

<nav class="navbar navbar-inverse" id="navbar">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
          <li><a href="/index.php">Home</a></li>
        <?php
          foreach($newsPapers as $paper => $url) { ?>
          <li><a href="papers.php?url=<?php echo $url; ?>&name=<?php echo $paper; ?>"><?php echo $paper; ?></a></li>
       <?php } ?>
      </ul>

    </div>
  </div>
</nav>
