<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<div class="container">
<table class="custom-table table table-bordered table-striped">
  <thead>
    <tr class="text-center">
      <th>ID</th>
      <th>Date</th>
      <th>Weight</th>
      <th>Height</th>
      <th>Temperature</th>
      <th>Pressure</th>
      <th>Pulse</th>
      <th>Observations</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($registros as $registro)
      <tr>
        <td>{{ $registro->id }}</td>
        <td>{{ $registro->date }}</td>
        <td>{{ $registro->weight }}</td>
        <td>{{ $registro->height }}</td>
        <td>{{ $registro->temperature }}</td>
        <td>{{ $registro->pressure }}</td>
        <td>{{ $registro->pulse }}</td>
        <td>{{ $registro->message }}</td>
        
      </tr>
    @endforeach
  </tbody>
</table>

</div>
</html>