<?php
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];
}
if ( $user="admin" && $password="admin1") {
    header("location: dashboard.html");
} else {?>
    <script type="text/javascript">
        alert("Username/password salah!");
        window.location.href = '../../index.php';
    </script>
<?php
}
?>
