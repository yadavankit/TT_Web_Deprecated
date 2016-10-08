<?php
$form_data = $_POST;
// print_r($_POST);

// Start the buffering //
ob_start();


?>
 <html>
 <head>
 	<title>Preview</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 </head>
 <body>
   <button class="btn btn-medium primary"onclick="myFunction()">Print Form</button>
 	<div style="padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 30px;">
 		<div style="text-align: center;">
 			<h2>18th Ajay kumar Garg Memorial Open Table Tennis Tournament</h2>
 			<h3>Entry Form</h3>
 		</div>
 		<!-- Top Left Line -->
 		<div style="width: 30%; float: left;">
 			<ul style="list-style-type: none;">
 				<li>Name of Institute </li>
 				<li>Address </li>
 			</ul>
 		</div>
 		<div style="width: 70%; float: left;">
 			<ul style="list-style: none;">
 				<li>: <?php echo $form_data['college_name']; ?></li>
 				<li>:  <?php echo $form_data['college_address']; ?></li>
 			</ul>
 		</div>
 		<div style="text-align: center;">
 			<h3>TEAM MEMBER Team Championship</h3>
 		<div style="width: 50%; float: left;">
 			<h4 style="text-align: center;">MEN (TEAM A)</h4>
 			<ul style="list-style: none;">

        <!-- Display all Men Team A -->
        <?php
        $counter = 1;
        foreach ($form_data['men_team_a'] as $team)
        {
          if ($team)
          {
            echo "<li>".$counter.". ". $team."</li>";
            $counter++;
          }
        }
        ?>


 			</ul>

 		</div>
 		<div style="width: 50%; float: left;">
 			<h4 style="text-align: center;">WOMEN (TEAM A)</h4>
 			<ul style="list-style: none;">

        <!-- Display all Women Team A -->
        <?php
        $counter = 1;
        foreach ($form_data['women_team_a'] as $team)
        {
          if ($team)
          {
            echo "<li>".$counter.". ". $team."</li>";
            $counter++;
          }
        }
        ?>

 			</ul>
 		</div>
  </div>
<hr>
<div style="text-align: center;">
 		<div style="width: 50%; float: left; padding-top: 10px;">
 			<h4 style="text-align: center;">MEN (TEAM B)</h4>
 			<ul style="list-style: none;">
        <!-- Display all Men Team B -->
        <?php
        $counter = 1;
        foreach ($form_data['men_team_b'] as $team)
        {
          if ($team)
          {
            echo "<li>".$counter.". ". $team."</li>";
            $counter++;
          }
        }
        ?>

 			</ul>
      <hr>
 		</div>
 		<div style="width: 50%; float: left; padding-top: 10px;">
 			<h4 style="text-align: center;">WOMEN (TEAM B)</h4>
 			<ul style="list-style: none;">
        <!-- Display all Women Team B -->
        <?php
        $counter = 1;
        foreach ($form_data['women_team_b'] as $team)
        {
          if ($team)
          {
            echo "<li>".$counter.". ". $team."</li>";
            $counter++;
          }
        }
        ?>

 			</ul>
 		</div>
  </div>
  <hr>

  <br>
 		<h3 style="text-transform: uppercase; text-align: center;">Names for Individual Events</h3>
 		<table style="width: 100%;" cellspacing="0" cellpadding="0">
 			<tr style="font-weight: bold; ">
 				<th style="width: 25%; border: 2px solid #000; ">S. No.</th>
 				<th style="width: 25%; border: 2px solid #000; "> Catagory</th>
 				<th style="width: 25%; border: 2px solid #000; ">Name</th>
 				<th style="width: 25%; border: 2px solid #000; ">Date of Birth</th>
 			</tr>
 			<tr id="row1" style="font-weight: 12px;">
        <!-- Display all Individual Teams -->
        <?php
        $counter = 1;
        for ($i=0; $i < count($form_data['individual_sl_no']); $i++)
        {
          if ($form_data['individual_sl_no'])
          {
            echo '<th style="width: 25%; border: 1px solid #000;"><div id="table-row1-col-1">'.$form_data['individual_sl_no'][$i].'</div></th>
     				<th style="width: 25%; border: 1px solid #000;"><div id="table-row1-col-2">'.$form_data['individual_category'][$i].'</div></th>
     				<th style="width: 25%; border: 1px solid #000;"><div id="table-row1-col-3">'.$form_data['individual_name'][$i].'</div></th>
     				<th style="width: 25%; border: 1px solid #000;"><div id="table-row1-col-4">'.$form_data['individual_dob'][$i].'</div></th></tr>';
            $counter++;
          }
        }
        ?>

 		</table>

    <div class="row" style="margin-bottom:5vw;">
      <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2"></div>
      <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
        <h4>Date: </h4>
      </div>
      <div class="col-md-1 col-xs-1 col-sm-1 col-lg-1"></div>
      <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
        <h4>Signature Head of Institution</h4>
      </div>
    </div>
 	</div>
  <script>
  function myFunction() {
      window.print();
  }
  </script>
 </body>
 </html>
 <?php
 echo '1';
 file_put_contents('form.html', ob_get_contents());
 ?>
