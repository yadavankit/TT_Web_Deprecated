<html>
<head>
<meta charset="utf-8">
<title>TT Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
        <div class="container">
        <div class="row" style="margin-top:2vw;">
          <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <form method="POST" action="processForm.php">
              <div class="form-group">
                <label for="name">Name of Institution</label>
                <input type="text" class="form-control" class="institution_name" id="institution_name" name="college_name">
              </div>
              <div class="form-group">
                <label for="add">Address</label>
                <input type="text" class="form-control" class="address" id="address" name="college_address">
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-xs-2 col-lg-2 col-sm-2">
          </div>
          <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
            <h3 class="text-center bg-primary" style="padding:2px;">TEAM MEMBERS (Team Championship) </h3>
          </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2"></div>
            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
              <h4 class="text-center">MEN TEAM-A</h4>
              <ol id="men_team_A_add_list">

                <!-- Men Team A Fields -->
                <?php
                for ($i=0; $i < 5; $i++ )
                {
                  echo '<li><input type="text" name="men_team_a[]" class="form-control">';
                }
                ?>

              </ol>
            </div>
            <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2"></div>
            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
              <h4 class="text-center">WOMEN TEAM-A</h4>
              <ol class="list-group" id="women_team_A_add_list">

                <!-- Women Team A Fields -->
                <?php
                for ($i=0; $i < 5; $i++ )
                {
                  echo '<li><input type="text" name="women_team_a[]" class="form-control">';
                }
                ?>

              </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2"></div>
            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
              <h4 class="text-center">MEN TEAM-B</h4>
              <ol class="list-group" id="men_team_B_add_list">

                <!-- Men Team B Fields -->
                <?php
                for ($i=0; $i < 5; $i++ )
                {
                  echo '<li><input type="text" name="men_team_b[]" class="form-control">';
                }
                ?>

              </ol>
            </div>
            <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2"></div>
            <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
              <h4 class="text-center">WOMEN TEAM-B</h4>
              <ol class="list-group" id="women_team_B_add_list">

                <!-- Women Team B Fields -->
                <?php
                for ($i=0; $i < 5; $i++ )
                {
                  echo '<li><input type="text" name="women_team_b[]" class="form-control">';
                }
                ?>

              </ol>
            </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2">
            <h3 class="text-center bg-primary" style="padding:2px;">NAMES FOR INDIVIDUAL EVENTS</h3>
          </div>
          <div class="col-md-1 col-xs-1 col-sm-1 col-lg-1">
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2">
            <table class="table v-center table-bordered table-responsive text-center table-hover" id="names_individual_events">
              <thead>
                <tr style="font-size:2.5vmin;">
                  <th class="col-md-2 col-xs-2 col-sm-2 col-lg-2">Sl. No.</th>
                  <th class="col-md-2 col-xs-2 col-sm-2 col-lg-2">Category</th>
                  <th class="col-md-2 col-xs-2 col-sm-2 col-lg-2">Name</th>
                  <th class="col-md-2 col-xs-2 col-sm-2 col-lg-2">Date of Birth</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <!-- Individual Team Fields -->
                  <?php
                  for ($i=0; $i < 5; $i++ )
                  {
                    echo '<td><input name="individual_sl_no[]" type="text"></td>
                    <td><input name="individual_category[]" type="text"></td>
                    <td><input name="individual_name[]" type="text"></td>
                    <td><input name="individual_dob[]" type="text"></td></tr>';
                  }
                  ?>

              </tbody>
            </table>
          </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2"></div>
        <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
          <p class="text-info"> USE EXTRA SHEET IF REQUIRED</p>
        </div>
      </div>
      <center><input type="submit" value="Submit" class="btn-lg btn-danger"></center>
</form>
</div>
</body>

</html>
