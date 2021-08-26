<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tugas 5</title>
</head>

<body>
  <h1>Operator String</h1>
  <?php
  $string11 = "Ayo";
  $string12 = "Belajar";
  $string21 = "Bersama";
  $string22 = "Niomic";
  ?>
  <table border="1">
    <tr>
      <td>Input 1</td>
      <td>Input 2</td>
      <td>Hasil</td>
    </tr>
    <tr>
      <td><?php echo $string11; ?></td>
      <td><?php echo $string12; ?></td>
      <td><?php echo $string11 . " " . $string12; ?></td>
    </tr>
    <tr>
      <td><?php echo $string21; ?></td>
      <td><?php echo $string22; ?></td>
      <td><?php echo $string21 . " " . $string22; ?></td>
    </tr>
  </table>
</body>

</html>