<?php
$name=$_POST['name'];
$email=$_POST['email'];
$telepon=$_POST['telepon'];
$pesan=$_POST['pesan'];

$to="jumantaraaji@gmail.com";

$pesan="Dear, <br /> <br />".$pesan;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From:'.$name.' <'.$email.'>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
// $headers .= 'Cc: admin@email.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$pesan,$headers);
if (@mail) { ?>
<script language="javascript" type="text/javascript">
alert('Thank you for the pesan. We will index you shortly.');
window.location = 'index.html';
</script>
<?php
}
else { ?>
<script language="javascript" type="text/javascript">
alert('pesan failed. Please, send an email to xxxx@email.co.id');
window.location = 'index.html';
</script>
<?php
}
?>