<!DOCTYPE html>
<html>
  <head>
    <title>Inventory</title>
  </head>
<body>
  <table>
    <thead>
      <tr>
        <td>User</td>
        <td>Roles</td>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{ $user->first_name.' '.$user->last_name }}</td>
          <td>{{ $user->role->name }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>