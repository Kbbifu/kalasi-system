<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?superviseur/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo ('Dashboard'); ?></span>
            </a>
        </li>

        <!-- CLASS -->
        <li class="<?php
        if ($page_name == 'class' ||
                $page_name == 'section')
            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span><?php echo ('Classes'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?superviseur/classes">
                        <span><i class="entypo-dot"></i> <?php echo ('Gestion Classes'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?superviseur/section">
                        <span><i class="entypo-dot"></i> <?php echo ('Gestion Sections'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

                
         <!-- PARENTS -->
         <li class="<?php if ($page_name == 'parent') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?superviseur/parent">
                <i class="entypo-user"></i>
                <span><?php echo ('Parents'); ?></span>
            </a>
        </li>

        <!-- STUDENT -->
        <li class="<?php
        if ($page_name == 'student_add' ||
		        $page_name == 'acd_session' ||
		        $page_name == 'online_admission' ||
                $page_name == 'student_bulk_add' ||
                $page_name == 'student_information' ||
                $page_name == 'student_marksheet')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo ('Elèves'); ?></span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                
                 <li class="<?php if ($page_name == 'acd_session') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?superviseur/acd_session">
                        <span><i class="entypo-dot"></i> <?php echo ('Année Scolaire'); ?></span>
                    </a>
                </li>
                
                   
                 
                               

                <!-- STUDENT INFORMATION -->
                <li class="<?php if ($page_name == 'student_information') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo ('Information Elève'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?superviseur/student_information/<?php echo $row['class_id']; ?>">
                                    <span><?php echo ('Classe'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- STUDENT MARKSHEET -->
              
            </ul>
        <!-- TEACHER -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?superviseur/teacher">
                <i class="entypo-users"></i>
                <span><?php echo ('Professeur'); ?></span>
            </a>
        </li>

        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="http://localhost/HRSystem-CI/" TARGET=_BLANK>
                <i class="entypo-users"></i>
                <span><?php echo ('Ressources Humaines'); ?></span>
            </a>
        </li>
        

        <!-- EXAMS -->
        

        <!-- PAYMENT -->
        <li class="<?php if ($page_name == 'invoice') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?superviseur/invoice">
                <i class="entypo-credit-card"></i>
                <span><?php echo ('Payment/Recus'); ?></span>
            </a>
        </li>
        <!-- PAYMENT salaire -->
        

        <!-- ACCOUNTING -->
        <li class="<?php
        if ($page_name == 'income' ||
                $page_name == 'expense' ||
                    $page_name == 'expense_category')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-suitcase"></i>
                <span><?php echo ('Comptabilités'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'income') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?superviseur/income">
                        <span><i class="entypo-dot"></i> <?php echo ('Entrée des fonds'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?superviseur/expense">
                        <span><i class="entypo-dot"></i> <?php echo ('Dépenses'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?superviseur/expense_category">
                        <span><i class="entypo-dot"></i> <?php echo ('Categorie depenses'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        

        <!-- MESSAGE -->
        <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?superviseur/message">
                <i class="entypo-mail"></i>
                <span><?php echo ('Message'); ?></span>
            </a>
        </li>

        <!-- SETTINGS -->
        

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?superviseur/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo ('Compte utilisateur'); ?></span>
            </a>
        </li>

    </ul>

</div>