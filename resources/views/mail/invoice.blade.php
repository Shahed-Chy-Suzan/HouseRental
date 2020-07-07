<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<!--------Eita Must be HTML Template hothe hobe,(Table Format)//Bootstap kaj korbe na------->

<body>

    <table>
        <caption><h2>Your Property Details</h2></caption>

        <tr>
            <th>Name : </th>
            <th>{{ $data['name'] }}</th>
        </tr>
        <tr>
            <th>Email : </th>
            <th>{{ $data['email'] }}</th>
        </tr>
        <tr>
            <th>Phone : </th>
            <th>{{ $data['phone'] }}</th>
        </tr>
        <tr>
            <th>Address : </th>
            <th>{{ $data['address'] }}</th>
        </tr>

         <tr>
            <th>Subcity/Thana : </th>
            <th>{{ $data['subcity'] }}</th>
        </tr>
      <tr>
          <th>Property Code :</th>
          <th>{{ $data['property_code'] }}</th>
      </tr>
        <tr>
            <th>Bedroom : </th>
            <th>{{ $data['bedroom'] }}</th>
        </tr>
        <tr>
            <th>Bathroom : </th>
            <th>{{ $data['bathroom'] }}</th>
        </tr>
        <tr>
            <th>Kitchen : </th>
            <th>{{ $data['kitchen'] }}</th>
        </tr>
        <tr>
            <th>Parking : </th>
            <th>{{ $data['parking'] }}</th>
        </tr>
        <tr>
            <th>Type :</th>
            <th>{{ $data['type'] }}</th>
        </tr>
        <tr>
          <th>Area :</th>
          <th>{{ $data['area'] }}</th>
      </tr>
      <tr>
          <th>Categoty :</th>
          <th>{{ $data['category'] }}</th>
      </tr>
      <tr>
          <th>Purpose :</th>
          <th>{{ $data['purpose'] }}</th>
      </tr>
      <tr>
          <th>Floor Level :</th>
          <th>{{ $data['floor'] }}</th>
      </tr>
      <tr>
          <th>Price :</th>
          <th>{{ $data['price'] }}</th>
      </tr>
      <tr>
        <th>Video :</th>
        <th>{{ $data['video'] }}</th>
    </tr>
    <tr>
        <th>Month :</th>
        <th>{{ $data['month'] }}</th>
    </tr>
    <tr>
        <th>Date :</th>
        <th>{{ $data['date'] }}</th>
    </tr>
    <tr>
        <th>Year :</th>
        <th>{{ $data['year'] }}</th>
    </tr>

    </table>

</body>

</html>
