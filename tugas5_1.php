<!DOCTYPE html>

<head>
  <title>Tugas 5</title>
</head>

<body>
  <p>Tabel Logika 1111</p>
  <table border="1">
    <tr>
      <td>Input True</td>
      <td>Input 2</td>
      <td>AND</td>
      <td>OR</td>
    </tr>
    <tr>
      <td>false</td>
      <td>false</td>
      <td><?php var_dump(false && false); ?></td>
      <td><?php var_dump(false || false); ?></td>
    </tr>
    <tr>
      <td>false</td>
      <td>true</td>
      <td><?php var_dump(false && true); ?></td>
      <td><?php var_dump(false || true); ?></td>
    </tr>
    <tr>
      <td>true</td>
      <td>false</td>
      <td><?php var_dump(true && false); ?></td>
      <td><?php var_dump(true || false); ?></td>
    </tr>
    <tr>
      <td>true</td>
      <td>true</td>
      <td><?php var_dump(true && true); ?></td>
      <td><?php var_dump(true || true); ?></td>
    </tr>
  </table>
</body>

</html>