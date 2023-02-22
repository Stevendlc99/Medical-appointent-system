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
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Deparment</th>
      <th>Date</th>
      <th>Doctor</th>
      <th>Message</th>
      <th>State</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($registros as $registro)
      <tr>
        <td>{{ $registro->name }}</td>
        <td>{{ $registro->email }}</td>
        <td>{{ $registro->phone }}</td>
        <td>{{ $registro->department }}</td>
        <td>{{ $registro->date }}</td>
        <td>{{ $registro->doctor }}</td>
        <td>{{ $registro->message }}</td>
        <td>{{ $registro->estado }}</td>

      </tr>
    @endforeach
  </tbody>
</table>

</div>
</html>