<?php require_once "db/database.php"; ?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>The Sensor DB</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
   <h1 align="center">The Sensor DB (GBK)</h1>
   <div class="container">
   <form method="GET">
      <label for="sname">sensor name</label>
      <input class="form-control" type="text" id="sname" name="sname">

      <label for="stemp">sensor temp</label>
      <input class="form-control" type="text" id="stemp" name="stemp"><br>

      <button class="btn btn-primary" type="submit" value="submit">Search</button>
   </form>
   </div>

   <div class="container">
   <table class="table">
      <thead>
         <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">temp</th>
         </tr>
      </thead>
      <tbody>
      <? 
         $sname  = $_GET['sname'] ?? '';
         $stemp = $_GET['stemp'] ?? '';
         $query = "SELECT * FROM sensors WHERE id > 1 ";
         $param = array();

         if (!empty($sname)) {
            //$query .= "AND name LIKE '%{$_GET['sname']}%' ";
            $query .= "AND name LIKE ? ";
            array_push($param, $sname);
         }
         if (!empty($stemp)) {
            //$query .= "AND temp LIKE '%{$_GET['stemp']}%'";
            $query .= "AND temp LIKE ?";
            array_push($param, $stemp);
         }
         try {
            $pdo->query("SET NAMES gbk");
            $stmt = $pdo->prepare($query);
            $stmt->execute($param);
            $result = $stmt->fetchAll();

            //$result = $pdo->query($query);
         } catch (Exception $e) {
            print $e . "\n";
         }
         //while($row = $result->fetch()) {
         foreach($result as $row) { ?>
            <tr>
               <th scope="row"><? print $row[0]; ?></td>
               <td><? print $row[1]; ?></td>
               <td><? print $row[2]; ?></td>
            </tr>
      <? } ?>
      </tbody>
   </table>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
