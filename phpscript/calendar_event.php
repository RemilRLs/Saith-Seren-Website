
<script src="js/calendar.js"></script>
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

      $query = "SELECT event_date, event_title, event_description, event_hour FROM calendar_events";
      $result = mysqli_query($db, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        $date = $row['event_date'];
        $title = $row['event_title'];
        $description = $row['event_description'];
        $hour = $row['event_hour'];
      
        echo "addEventCalendar('$date', '$title', '$description', '$hour');";
      }
  ?>
}

</script>

 