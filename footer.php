<?PHP
$copy = 'MEPS';
if ($_COOKIE['invite'] != ''){
 $copy = 'MEPS - '.strtoupper($_COOKIE['invite']); 
}  
?>

<div class='row'>
 <div class='col-sm-12' style='text-align:center;'> &COPY; 2020 <?PHP echo $copy;?></div>
</div>


  <meta property="og:url"           content="http://md-petition.com/index.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Maryland Electronic Petition Software" />
  <meta property="og:description"   content="Socially Distant Petitions" />
  <meta property="og:image"         content="http://md-petition.com/files/Flag_of_Maryland.svg" />


<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


<div class='row'>
 <div class='col-sm-3' style='text-align:center;'> Share MGP
  <div class="fb-share-button" 
     data-href="http://md-petition.com/index.php?invite=MGP" 
     data-layout="button_count">
   </div>
 </div>
 <div class='col-sm-3' style='text-align:center;'> Share MLP 
  <div class="fb-share-button" 
     data-href="http://md-petition.com/index.php?invite=MLP" 
     data-layout="button_count">
   </div>
 </div>
 <div class='col-sm-3' style='text-align:center;'> Share BTEC
  <div class="fb-share-button" 
     data-href="http://md-petition.com/index.php?invite=BTEC" 
     data-layout="button_count">
   </div>
 </div>
 <div class='col-sm-3' style='text-align:center;'> Share PJ
  <div class="fb-share-button" 
     data-href="http://md-petition.com/index.php?invite=PJ" 
     data-layout="button_count">
   </div>
 </div>
</div>


  <div class='col-sm-12' style='text-align:center;'>
   <?PHP if($_COOKIE['debug'] == 'on'){ ?> 
    <pre><?PHP print_r($_GET); ?></pre>
    <pre><?PHP print_r($_POST); ?></pre> 
    <pre><?PHP print_r($_COOKIE); ?></pre>
   <?PHP } ?>
</div>
 </div>

<style>
 * {
  margin: 0;
}
html, body {
  height: 100%;
}
.page-wrap {
  min-height: 100%;
  /* equal to footer height */
  margin-bottom: -142px; 
}
.page-wrap:after {
  content: "";
  display: block;
}
.site-footer, .page-wrap:after {
  height: 142px; 
}
.site-footer {
  background: lightblue;
}
</style>

<footer class="site-footer">
  I'm the Sticky Footer.
</footer>




<script type="text/javascript">
    window.doorbellOptions = {
        "id": "10512",
        "appKey": "4wEnfKuAdj4WlHgKaxLMrAbYn8aKdFhtYVnpbRPkG4AbA7SH7KcgiRvdZyWmwxnw"
    };
    (function(w, d, t) {
        var hasLoaded = false;
        function l() { if (hasLoaded) { return; } hasLoaded = true; window.doorbellOptions.windowLoaded = true; var g = d.createElement(t);g.id = 'doorbellScript';g.type = 'text/javascript';g.async = true;g.src = 'https://embed.doorbell.io/button/'+window.doorbellOptions['id']+'?t='+(new Date().getTime());(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(g); }
        if (w.attachEvent) { w.attachEvent('onload', l); } else if (w.addEventListener) { w.addEventListener('load', l, false); } else { l(); }
        if (d.readyState == 'complete') { l(); }
    }(window, document, 'script'));
</script>
</body>
