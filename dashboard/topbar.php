 <div class="topbar">
     <nav class="navbar navbar-expand-lg navbar-light">
         <div class="full">


             <div class="right_topbar">
                 <div class="icon_info">

                     <ul class="user_profile_dd">
                         <li>
                             <a class="dropdown-toggle" data-toggle="dropdown">
                                 <?php if (!empty($image)) : ?>

                                 <img src="<?php echo $image; ?>" alt="User Image"
                                     class="img-responsive rounded-circle">

                                 <?php endif; ?>
                                 <span class="name_user"><?php echo $name ?></span></a>
                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href="profile.php">Update Profile</a>

                                 <a class="dropdown-item" href="../index.php?logout=true"><span>Log Out</span> <i
                                         class="fa fa-sign-out"></i></a>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </nav>
 </div>