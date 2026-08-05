<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>IMD</title>
</head>
<body>
    <p>There's a mail from <b><?php echo e($details['name']); ?></b>. Here's the message</p>
    <table>
      <tr>
        <td>Name</td>
        <td>:</td>
        <td><?php echo e($details['name']); ?></td>
      </tr>
      <tr>
        <td>Mobile Number</td>
        <td>:</td>
        <td><?php echo e($details['mobile_number']); ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><?php echo e($details['email_address']); ?></td>
      </tr>
      <tr>
        <td>Message</td>
        <td>:</td>
        <td><?php echo e($details['message']); ?></td>
      </tr>
</body>
</html><?php /**PATH C:\inovasimasadepan\imd\resources\views\emails\details.blade.php ENDPATH**/ ?>