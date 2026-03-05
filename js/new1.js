<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

th {
    border: 1px solid #dddddd;
    font-size: x-large;
    text-align: left;
    padding: 8px;
}

td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #ccffff;
}
</style>
</head>
<body>

<h1>Directory</h1>
<!-- <p>Search</p>   -->
<input id="myInput" type="text" placeholder="Search..">
<br><br>

<table>
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Number</th>
      <th>Street</th>
      <th>Phone</th>
      <th>Mobile</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody id="myTable">
  <tr>
    <td>James</td>
    <td>Smith</td>
    <td>163</td>
    <td>Canal Lane</td>
    <td>N/A</td>
    <td>916-806-9999</td>
    <td>jim@gmail.com</td>
</tr>
<tr>
    <td>Jacquelyn</td>
    <td>Abel</td>
    <td>4551</td>
    <td>Paso Lane</td>
    <td>999-999-9208</td>
    <td>999-999-3835</td>
    <td>he51@comcast.net</td>
</tr>
<tr>
    <td>Deborah Kay</td>
    <td>Affal</td>
    <td>335</td>
    <td>Suez Lane</td>
    <td>555-555-4897</td>
    <td>555-555-3773</td>
    <td>debb@hotmail.com</td>
</tr>
<tr>
    <td>Emily</td>
    <td>Aguate</td>
    <td>3943</td>
    <td>River Lane</td>
    <td>444-444-2951</td>
    <td>444-444-0514</td>
    <td>erag@hotmail.com</td>
</tr>
<tr>
    <td>Anthony (Tony)</td>
    <td>Alba</td>
    <td>4449</td>
    <td>Red Lane</td>
    <td>N/A</td>
    <td>777-777-7778</td>
    <td>tony35@yahoo.com</td>
</tr>
<tr>
    <td>Amador</td>
    <td>Alcan</td>
    <td>14</td>
    <td>Izmal Place</td>
    <td>222-222-2002</td>
    <td>333-333-3418</td>
    <td>abab@7lakes.com</td>
</tr>
<tr>
    <td>Ofelia</td>
    <td>Alcan</td>
    <td>14</td>
    <td>Izmal Place</td>
    <td>234-234-2002</td>
    <td>234-234-7151</td>
    <td>ofof@7lakes.com</td>
</tr>
<tr>
    <td>Sherry</td>
    <td>Allala</td>
    <td>3910</td>
    <td>Euboea Lane</td>
    <td>5657-567-9331</td>
    <td>567-567-9427</td>
    <td>sherr11@att.net</td>
</tr>
<tr>
    <td>Lori</td>
    <td>Anders</td>
    <td>3905</td>
    <td>ADel Paso Lane</td>
    <td>N/A</td>
    <td>789-789-4784</td>
    <td>mags3@yahoo.com</td>
</tr>
<tr>
    <td>Peggy</td>
    <td>Angert</td>
    <td>3924</td>
    <td>Pozzlo Lane</td>
    <td>N/A</td>
    <td>321-321-3494</td>
    <td>peggy00@yahoo.com</td>
</tr>
<tr>
    <td>Peter</td>
    <td>Angty</td>
    <td>3924</td>
    <td>Pozzaler Lane</td>
    <td>N/A</td>
    <td>678-678-3003</td>
    <td>peter5657@hotmail.com</td>
</tr>
<tr>
    <td>Caryne</td>
    <td>Angler</td>
    <td>4436</td>
    <td>Sea Lane</td>
    <td>N/A</td>
    <td>987-987-6605</td>
    <td>N/A</td>
</tr>
<tr>
    <td>Neata</td>
    <td>Anton</td>
    <td>3973</td>
    <td>Don Lane</td>
    <td>456-456-8711</td>
    <td>456-456-4744</td>
    <td>nea456t@sbcglobal.net</td>
</tr>

</tbody>
</table>