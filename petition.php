<?PHP
include_once('header.php'); 
if (isset($_POST['petition'])){
  $id = $_POST['petition'];
  setcookie("pID", $id);
  $q = "select * from petitions where petition_id = '$id'";
  $r = $petition->query($q);
  $d = mysqli_fetch_array($r);
}
?>
<style>
@font-face {
    font-family: "myFirstFont";
    src: url("files/Claston Script.ttf");
}
.sig {
    font-family: "myFirstFont";
    font-size: 40px;
}
</style>

<script>
   $(document).ready(function(){
         $('#exampleModalCenter').modal('show');
    });
  function addText()
  {
      document.getElementById('text2').innerHTML = document.getElementById('myText').value;
  }
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Type Your Signature</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action='sign.php' method='POST'>
        <div class="modal-body">
          <input type="text" id="myText" onkeyup="addText()">
          <div id="text2" class="sig"></div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Sign and Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class='col-sm-12'><img class="img-responsive" src='hard_copy.php'></div>


<?PHP include_once('footer.php');
