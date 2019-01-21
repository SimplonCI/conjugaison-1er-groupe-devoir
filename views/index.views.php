<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <title>Verbe du 1er groupe</title>
  </head>
  <body>
    <center> <h1>Conjugaison des verbes du 1er groupe</h1></center>
    <div class="s003">
      <form method="post" action="index.php">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="input-select">
              <select data-trigger="" name="temps">
                <option placeholder="">Temps</option>
                <option value="present">Présent</option>
                <option value="futur">Futur Simple</option>
                <option value="passe">Passé Simple</option>
               
              </select>
            </div>
          </div>
          <div class="input-field second-wrap">
            <input id="search" name="verbe" type="text" placeholder="Entrer le verbre du 1er groupe à conjuger " />
          </div>
          <div class="input-field third-wrap">
            <input type="submit" class="btn-search" type="button" value="conjuger" name="conjuger" style="padding-left:20px;">
             
          </div>
        </div>
      </form>
    </div>
      
    
    <script src="assets/js/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
