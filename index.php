<?php
session_start();
//include 'instagram_autopost.php';
//print_r($response);

 ?>
 <!doctype html>
 <html lang="tr">
   <head>
<meta name="robots" content="all" />
<meta name="robots" content="index,follow" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="Content-Type" content="text/html; charset=x-mac-turkish" />
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
    <META HTTP-EQUIV="Content-language" CONTENT="tr">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <meta name="copyright" content="Abdulrahman Mardinli">
     <link rel="icon" href="favicon.ico">

     <title> Tesettür Pazari | Instgram Panel</title>

     <!-- Bootstrap core CSS -->
     <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom styles for this template -->
     <link href="https://getbootstrap.com/docs/4.1/examples/checkout/form-validation.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"/>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

     <style >
     .delico:hover {
  color: green;
}
     </style>
   </head>

   <body class="bg-light" onload="updateData()" onmousemove="changeTitle()" onmouseout="changeTitle1()">

     <div class="container" >
       <div class="py-5 text-center">
         <img class="d-block mx-auto mb-4" src="teseturpazari.png" alt="" width="50%">
         <h2>Instgram Panel</h2>
         <p class="lead">&#9758;Here You can schdule you Post on Instagram .</p>
        Last Update : <?=$_SESSION['time'] ?> Date<?=$_SESSION['date'] ?>.
       </div>

       <div class="row">

   



         <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Add From Here <span><i class="fas fa-plus-circle"></i></span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="insert_post.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Select Image To upload </label>
            <input type="file" class="form-control" id="image" name="image" placeholder="">
            <p class="help-block">Select Image To upload</p>
          </div>
          <div class="form-group">
            <label for="">select upload  Date</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="">

          </div>
          <div class="form-group">
            <label for="">Select Upload Time</label>
            <select class="form-control" name="time">
             
              <option value="13:00">13:00</option>
              <option value="13:30">13:30</option>
              <option value="14:00">14:00</option>
              <option value="14:30">14:30</option>
              <option value="15:00">15:00</option>
              <option value="15:30">15:30</option>
              <option value="16:00">16:00</option>
              <option value="16:30">16:30</option>
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
              <option value="18:30">18:30</option>
              <option value="19:00">19:00</option>
              <option value="19:30">19:30</option>
              <option value="20:00">20:00</option>
              <option value="20:30">20:30</option>
              <option value="21:00">21:00</option>
              <option value="21:30">21:30</option>
              <option value="22:00">22:00</option>
              <option value="22:30">22:30</option>
              <option value="23:00">23:00</option>
              <option value="23:30">23:30</option>
              <option value="00:00">00:00</option>
              <option value="00:30">00:30</option>
              <option value="01:00">01:00</option>
              <option value="01:30">01:30</option>
              <option value="02:00">02:00</option>
              <option value="02:30">02:30</option>
              <option value="03:00">03:00</option>
              <option value="03:30">03:30</option>
              <option value="04:00">04:00</option>
              <option value="04:30">04:30</option>
              <option value="05:00">05:00</option>
              <option value="05:30">05:30</option>
              <option value="06:00">06:00</option>
              <option value="06:30">06:30</option>
              <option value="07:00">07:00</option>
              <option value="07:30">07:30</option>
              <option value="08:00">08:00</option>
              <option value="08:30">08:30</option>
              <option value="09:00">09:00</option>
              <option value="09:30">09:30</option>
              <option value="10:00">10:00</option>
              <option value="10:30">10:30</option>
              <option value="11:00">11:00</option>
              <option value="11:30">11:30</option>
              <option value="12:00">12:00</option>
              <option value="12:30">12:30</option>
            </select>


          </div>
          <div class="form-group">

            <textarea name="text" id="text" rows="8" cols="30">
              Tesettür Kombin Papatya Desenli Tunik Pantolon
              Ürün Kodu : UMS5048-4 BEDEN 1-2-3-4
 iNANILMAZ FiYAT Detayli Bilgi için Link >>> Bio'da ! 
Daha Fazla Renk ve Model için; >>> tesetturpazari.com <<< 
Hemen incele: https://www.tesetturpazari.com/arama?q=UMS5048 
#tesettürpazari #tesettur #tesetturgiyim #yenisezontesettur  
#tesetturmoda #tesetturbutik #tesetturferace #hijab #jilbab 
#abaya #hijabi #hijabfashion #hijabstyle #yenisezon #fashion 
#ferace #yenisezonferace #tesettürferace #repost #tesetturelbisefiyatlar
 #muslimwear #fashion #style #stylish #styles #clothing #outfitofday #ootd 
#design #outfit
            </textarea>

          </div>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-danger" name="submit" value="submit">
    </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
         <table class="table table-hover">
            <thead>
              <tr>
                <th>Options</th>
                <th>Date</th>
                <th>Time</th>
                <th>Image</th>
                <th>Text</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'get_all_posts.php';
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {


               ?>
              <tr >
                <td>
                   <span data-toggle="tooltip"
                    class="delico"
                     onmouseover="changecolor()"
                      onmouseout="changecolor2()"
                       onclick="deleteFunction()"
                        title="Delete">
                         <a href="http://instagram.tesetturpazari.info/delete.php?id=<?=$row['id']?>">
                           <i  class="fas fa-minus-circle"></i>
                         </a>
                        </span>
                       </td>
                <td><?=$row['date']?></td>
                <td><?=$row['time']?></td>
                <td> <img src="uploads/<?=$row['img_name']?>" alt="" width="25%"> </td>
                <td><?=$row['text1']?></td>
                <td>
                    <?php if ($row['status']=='1'): ?>
                      <span style="color:green;"><i class="fas fa-check-circle"></i></span>
                    <?php endif; ?>
                    <?php if ($row['status']=='0'): ?>
                      <span style="color:orange;"><i class="fas fa-circle"></i></span>
                    <?php endif; ?>




                   </td>
              </tr>

            <?php

              //echo $row['text'];
              //echo "<br>";

           } }
              $conn->close();

              //SELECT * FROM posts WHERE `date`='2018/07/03' && `time`='06:44:pm'


               ?>
            </tbody>
          </table>
          <div class="row">
            <p>
            <?php
              if (isset($_POST)) {
                echo $_POST['text'];
              }

              ?>
                </p>
          </div>
       </div>

       <footer class="my-5 pt-5 text-muted text-center text-small">
         <p class="mb-1">&copy; 2017-2018 <a href="http://griffindesign.mypressonline.com/"> GriffinDesign.com</a></p>
         <ul class="list-inline">
           <li class="list-inline-item"><a href="https://www.tesetturpazari.com/gizlilik-ve-guvenlik">Privacy</a></li>
           <li class="list-inline-item"><a href="https://www.tesetturpazari.com/hakkimizda">Terms</a></li>
           <li class="list-inline-item"><a href="http://griffindesign.mypressonline.com/">Support</a></li>
         </ul>
       </footer>
     </div>

     <!-- Bootstrap core JavaScript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
     <script>
    function updateData() {


    setTimeout(function(){
window.location.replace('http://instagram.tesetturpazari.info');
       }, 900000);
   /*  setTimeout(function(){ alert("6 sec"); }, 6000);
    setTimeout(function(){ alert("10 sec"); }, 10000);
    setTimeout(function(){ location.reload(); }, 11000);/*/
 }
 function deleteFunction() {
   alert("will Delete this ")
 }
 function changecolor() {
   document.getElementById('delico').style="color:green;"
 }
</script>
<script>
  function changeTitle() {
    document.title="Tesettür Pazari | instgram Panel";
  }
</script>
<script>
  function changeTitle1() {
    document.title="Back ";

  }
</script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
     <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
     <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
     <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
     <script>
       // Example starter JavaScript for disabling form submissions if there are invalid fields
       (function() {
         'use strict';

         window.addEventListener('load', function() {
           // Fetch all the forms we want to apply custom Bootstrap validation styles to
           var forms = document.getElementsByClassName('needs-validation');

           // Loop over them and prevent submission
           var validation = Array.prototype.filter.call(forms, function(form) {
             form.addEventListener('submit', function(event) {
               if (form.checkValidity() === false) {
                 event.preventDefault();
                 event.stopPropagation();
               }
               form.classList.add('was-validated');
             }, false);
           });
         }, false);
       })();
     </script>

   </body>
 </html>
