<?php



if(!isset($_SESSION["username"]) || !isset($_SESSION["kodeuser"])) {
    ?>
    <script type="text/javascript">
        alert("Dimohon untuk Login terlebih dahulu");
        location.href = "login.php";
    </script>
    <?php
}

?>