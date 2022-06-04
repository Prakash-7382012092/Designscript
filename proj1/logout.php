<?php
session_start();
session_destroy();
echo "<script>
alert('Thankyou')
window.location.href='index.php'
</script>";
?>
