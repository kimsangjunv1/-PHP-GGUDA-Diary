<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";

    // echo "<pre style='position:absolute; top:200px; left: 50px;'>";
    // var_dump($_SESSION);
    // echo "</pre>";
?> 

<!DOCTYPE html>
<html lang="ko">
<?php include "../include/head.php" ?>
<body>
    <?php include "../include/header.php" ?>
    <main>
        <?php include "../include/particle_container.php" ?>
        <?php include "../landing/landing_section_intro.php" ?>
        <?php include "../landing/landing_section_deco.php" ?>
    </main>
    
    <?php include "../include/footer.php" ?>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script src="../../assets/javascript/main.js"></script>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/common.js"></script>
</html>