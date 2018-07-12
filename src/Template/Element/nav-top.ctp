<?php
//$file = $theme['folder'] . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'nav-top.ctp';
//debug($file);
if (!file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

     <div class="navbar-custom-menu">
            <ul class="nav navbar-nav" >


                 
                <?php

               // if someone is logged-in then show logout in top-nav bar else Sign-in option 
                        $user = $this->request->session()->read('Auth.User');
                        if ($user != null) {
                ?>
                <li>
                    <a href="<?php echo $this->Url->build('/form-details/index'); ?>"><b>Forms</b></a>
                </li>
                <li>
                    <a href="<?php echo $this->Url->build('/users/logout'); ?>"><b>Logout</b></a>
                </li>

                <?php  } 
                else {
                ?>
                <li>
                    <a href="<?php echo $this->Url->build('/users/login'); ?>"><b>Sign In</b></a>
                </li>
                <?php } ?>

            </ul>
        </div>

</nav>

<?php } ?>