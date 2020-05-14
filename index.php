<?PHP 
if (isset($_GET['invite'])){
  setcookie("invite", $_GET['invite']);
  header('Location: index.php');
}
$title = 'MEPS - Are you Registered?';
if ($_COOKIE['invite'] != ''){
 $title = 'MEPS ('.$_COOKIE['invite'].') - Are you Registered?'; 
}
include_once('header.php');
?>
  <script>document.title = "<?PHP echo $title;?>";</script>
  <div class='col-sm-12' style='height:100px; text-align:center;'><h2>Are you a Registered Maryland Voter?</h2></div>
  
  <div class='col-sm-6' style='height:100px; text-align:center;'><button type="button" class="btn btn-success" onclick="window.location.href='enter_information.php'">YES</button></div>
  
  <div class='col-sm-6' style='height:100px; text-align:center;'><button type="button" class="btn btn-danger" onclick="window.location.href='not_a_registered_voter.php'">NO</button> </div>
  
<?PHP include_once('footer.php');
