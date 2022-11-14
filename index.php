<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filament Info</title>
  <link rel="stylesheet" href="style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <div class="container w-100 h-100">
    <div class="row align-items-center justify-content-md-center h-100">
      <?php
      $material = $_GET['material'];
      $brand = $_GET['brand'];
      $product_line = $_GET['product_line'];
      $color = $_GET['color'];
      $extruder_temp = $_GET['extruder_temp'];
      $bed_temp = $_GET['bed_temp'];
      $color_code = $_GET['color_code'];
      ?>

      <div class="col-md-6 card-container">
        <div class="card">
          <div class="card-body">
            <?php
            if (empty($product_line)) {
              echo "<h1>" . $brand . " " . $color . " " . $material . "</h1>";
            } else {
              echo "<h1>" . $product_line . " " . $color . " " . $material . "</h1>";
            }
            ?>

            <table class="table">
              <tr>
                <th>Material</th>
                <td><?php echo $material ?></td>
              </tr>
              <tr>
                <th>Brand</th>
                <td><?php echo $brand ?></td>
              </tr>
              <?php
              if (!empty($product_line)) {
                echo "<tr>";
                echo "<th>Product Line</th>";
                echo "<td>" . $product_line . "</td>";
                echo "</tr>";
              }
              ?>
              <tr>
                <th>Color</th>
                <td><?php echo $color ?></td>
              </tr>
              <?php
              if (!empty($color_code)) {
                echo "<tr>";
                echo "<th>Color Sample</th>";
                echo "<td><div class=\"colorsample\" style=\"background-color: #" . $color_code . "\">&nbsp;</div></td>";
                echo "</tr>";
              }
              ?>
              <?php
              if (!empty($extruder_temp)) {
                echo "<tr>";
                echo "<th>Extruder Temp</th>";
                echo "<td>" . $extruder_temp . " °C</td>";
                echo "</tr>";
              }
              ?>
              <?php
              if (!empty($bed_temp)) {
                echo "<tr>";
                echo "<th>Bed Temp</th>";
                echo "<td>" . $bed_temp . " °C</td>";
                echo "</tr>";
              }
              ?>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
