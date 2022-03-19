<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
<nav id="navbar">
        <div class="container">
          <a1>
            <li><a href="/GroceryStoreManagement/view/home.php">Home</a></li>
            
            <li><a href="/GroceryStoreManagement/view/support.php">Support</a></li>
          </a1>
        </div>
      </nav>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Address</th>
  </tr>
  <tr>
    <td>
        <?= $_COOKIE['Name']; ?>
    </td>
    <td>
        <?= $_COOKIE['Email']; ?>
    </td>
    <td>
        <?= $_COOKIE['phone']; ?>
    </td>
    <td>
        <?= $_COOKIE['Address']; ?>
    </td>
  </tr>
 
</table>
</body>
</html>