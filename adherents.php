<html>
   <?php
      include 'inc/configure.inc.php';
      include 'head.php';
   ?>
   <body>
      <?php
         include 'header.php';
      ?>
      Adhérents
      <div class="input_container">
         <input type="text" id="nom_adh"  name="nom_adh" onkeyup="autocompletadh()" autocomplete="off" required>
         <input type="hidden" id="id_adh" name="id_adh">
         <ul id="list_nom_adh"></ul>
      </div>
      <div class="divd">
         
      </div>
   </body>
</html>
