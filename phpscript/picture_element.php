
<script src="js/picture.js"></script>
<script>


// We make sure that the addEventCalendar that is contain into the calendar.js is loaded.

window.onload = function(){
  <?php 
      // Database information.

      $host = 'localhost';
      $dbName = 'saith';
      $username = 'root';
      $password = '';


      $db = mysqli_connect($host, $username, "", $dbName);

      $query = "SELECT title, description, image FROM images";
      $result = mysqli_query($db, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $description = $row['description'];
        $image = $row['image'];

      
        echo "addImage('$image', '$description', '$title');";
      }
  ?>
}

</script>

 