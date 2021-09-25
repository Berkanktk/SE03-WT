<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">    <!-- specifies encoding -->
    <title>Album library</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/add-remove.js"></script>
    <script src="https://kit.fontawesome.com/82afe9a6d8.js" crossorigin="anonymous"></script>

    <!-- Decide one script for validation 
    <script src="scripts/validate-prevent.js"></script> -->
    <script src="scripts/validate-inform.js"></script>
    
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
      <h1>New Album</h1>
      <form action="index.php" method="POST" >

          <div class='grid inputGroup'>
            <label> Name: </label>
            <input type="text" name="name" id="name" class="inputForm" placeholder="E.x 'Grand Album'"/>
            <div class="invalid-feedback">Please provide a valid name.</div>
          </div>

          <div class='grid inputGroup'>
            <label> Year: </label>
            <input type="number" name="year" id="year" class="inputForm" placeholder="E.x '2012'"/>
            <div class="invalid-feedback">Please provide a valid year.</div>
          </div>

          <div class='grid inputGroup'>
            <label> Artist: </label>
            <?php $artists = ["khalid" => "Khalid", "hopsin" => "Hopsin", "billie_eilish" => "Billie Eilish"]; ?>
            <select name="artist" id="artist" class="inputForm">
              <?php foreach($artists as $key => $name): ?>
              <option value="<?php echo $key;?>"><?php echo $name;?></option>
              <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">Please provide a valid name.</div>
          </div>

          <div class='inputGroup'>
            <label for="types">Choose a type:</label><br>

            <input type="radio" id="single" name="type" value="single">
            <label for="single">Single</label><br>
            <input type="radio" id="ep" name="type" value="ep">
            <label for="ep">EP</label><br>
            <input type="radio" id="album" name="type" value="album">
            <label for="album">Album</label>
            
            <div class="invalid-feedback">Please provide a valid type.</div>
          </div>

          <div class='grid'>
            <label> Description: </label>
            <textarea name="description" id="description" class="inputForm"></textarea>
          </div>

          <div class='grid tracks inputGroup'>
            <label> Tracks: </label>
            <div class='grid inputs'>
              <div class = 'track'>
                <input type="text" name="track[]" class="inputForm" placeholder="Track name here"/>
                <button class="remove fas fa-trash" type='button' disabled='disabled'></button>
              </div>
            </div>

            <button type='button' class="add">Add</button>
            <div class="invalid-feedback">Please provide at least one track or remove empty cells.</div>
          </div>
          <input type="submit" value="Submit">
      </form>
  </body>
</html>
