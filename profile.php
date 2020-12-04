<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/486ebc0d41.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
      require 'navbar.php'
  ?>
    
  <div style="display:inline;"></div><h1 style="padding:20px; margin-left:10px">Profile name</h1></div>
  <!--div style="display:inline;"><h2 style="text-align:right;">Department:</h2></div-->
  <button type="submit" style="margin-left:30px;"><i class="fa fa-cog"> </i>User Settings</button>
  <button type="submit" style="margin-left:30px;"><i class="fa fa-sliders-v-square"> </i>Edit Profile</button>
  <br>
  <div class="box">
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'London')">Posts</button>
      <button class="tablinks" onclick="openCity(event, 'Paris')">Comments</button>
      <button class="tablinks" onclick="openCity(event, 'Tokyo')">Upvoted</button>
      <button class="tablinks" onclick="openCity(event, 'Tokyo')">Downvoted</button>
    </div>
        
    <div id="London" class="tabcontent">
      <h3>Posts</h3>
      <p>London is the capital city of England.</p>
    </div>
        
    <div id="Paris" class="tabcontent">
      <h3>Comments</h3>
      <p>Paris is the capital of France.</p> 
    </div>
        
    <div id="Tokyo" class="tabcontent">
      <h3>Upvoted</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div>
    <div id="Tokyo" class="tabcontent">
      <h3>Downvoted</h3>
      <p>Tokyo is the capital of Japan.</p>
    </div>
  </div>


  <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
  </script>
</body>
</html>