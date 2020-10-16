<div class="profile-sidebar">
    <div class="profile-userpic">
        <?php 
         //   echo '<img src="../'.$_SESSION['avatar'].'" class="img-responsive shad" alt="">';
        ?>
    </div>
    <div class="profile-usertitle">
        <div class="profile-usertitle-name">
            <?php
                echo $_SESSION['user'];		   
            ?>
        </div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>En ligne</div>
    </div>
    <div class="clear"></div>
</div>