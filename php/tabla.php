<!DOCTYPE html>
<html lang="es">

<head>
  <title>Unión de Cooperativas Agropecuarias LTDA - Datos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description"
    content="Somos un consorcio expertas cooperativas agropecuarias. Ofrecemos productos frescos como batatas, mandiocas, morrones y frutillas" />
  <meta name="keywords"
    content="Unión de Cooperativas Agropecuarias, Agricultura, Cooperativas, Productos frescos, Batatas, Mandiocas, Morrones, Frutillas" />
  <link rel="icon" href="./media/images/icon/favicon.png" type="image/x-icon" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="normalize.css" />
  <link href="./css/style.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <header>
    <!-- Tu código de encabezado aquí -->
  </header>

  <main>
    <!-- Tu código principal aquí -->
    <div class="container-fluid p-5">
      <div class="row justify-content-center text-center align-items-center g-2">
        <?php
        // Conexión a la base de datos (puedes cambiar estos datos según tu configuración)
        $servername = "localhost";
        $username = "c2072300_uni";
        $password = "LIgomo14ki";
        $database = "c2072300_uni";

        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
          die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta a la base de datos
        $sql = "SELECT * FROM contactos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          echo '<div class="col-lg-12">';
          echo '<table class="table table-striped">';
          echo '<thead>';
          echo '<tr>';
          echo '<th>Nombre</th>';
          echo '<th>Apellido</th>';
          echo '<th>Email</th>';
          echo '<th>Mensaje</th>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
          // Mostrar los datos en una tabla
          while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["nombre"] . '</td>';
            echo '<td>' . $row["apellido"] . '</td>';
            echo '<td>' . $row["email"] . '</td>';
            echo '<td>' . $row["mensaje"] . '</td>';
            echo '</tr>';
          }
          echo '</tbody>';
          echo '</table>';
          echo '</div>';
        } else {
          echo "0 resultados";
        }
        $conn->close();
        ?>
      </div>
    </div>
  </main>

  <footer>
    <!-- Tu código de pie de página aquí -->
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>
