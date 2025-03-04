<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<style>
    body {
        background-color: #f8f9fa;
    }
    .container {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        color: #007bff;
        font-weight: bold;
        margin-bottom: 20px;
    }
    table {
        background: white;
    }
    thead {
        background-color: #007bff;
        color: white;
    }
    th, td {
        text-align: center;
        vertical-align: middle;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
</style>

<body>

<div class="container mt-5">
    <h2 class="text-center"></h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><i class="fas fa-phone"></i> Username</th>
                <th><i class="fas fa-users"></i> Email</th>
                <th><i class="fas fa-phone"></i> Phone</th>
                <th><i class="fas fa-person"></i> Person</th>
                <th><i class="fas fa-date"></i> Date</th>
                <th><i class="fas fa-time"></i> Time</th>
                <th><i class="fas fa-message"></i>Description</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($bookings as $booking){ ?>
            <tr>
                <td><i class="fas fa-Username"></i> <?= $booking['username']; ?></td>
                <td><i class="fas fa-email"></i> <?= $booking['email']; ?></td>
                <td><i class="fas fa-phone"></i> <?= $booking['phone']; ?></td>
                <td><i class="fas fa-person"></i> <?= $booking['person']; ?></td>
                <td><i class="fas fa-date"></i> <?= $booking['created_at']; ?></td>
                <td><i class="fas fa-time"></i> <?= $booking['time']; ?></td>
                <td><i class="fas fa-description"></i> <?= $booking['message']; ?></td>
                <td><a href="<?php echo base_url().'Booking/delete/'.$booking['id'];?>" class="btn btn-sm btn-danger fw-bold ps-2"><i class="fas fa-trash-alt"></i> </a></td>
            </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>

</body>
</html>
