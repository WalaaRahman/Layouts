<?php

require '../layouts/header.php';



?>

<div class="wrapper d-flex align-items-stretch">
        
<?php

require '../layouts/sidebar.php';

?>

        <div id="content" class="p-4 p-md-5">

<?php

require '../layouts/navbar.php';

?>           
            <!-- Page Content  -->
            <h2 class="mb-4">Admin</h2>
            <div class="card">
                <div class="row ">
                    <div class="col-md-4 m-2">
                        <img src="office-bg.jpg" class="w-100">
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">
                            <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
                            <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <br>
                            <a href="#" class="btn mb-3" style="background-color:#FFC312;">Start Task</a>

                        </div>

                    </div>

                </div>
            </div>
        </div>

<?php

require '../layouts/scripts.php';

?>    



</div>
</body>

</html>