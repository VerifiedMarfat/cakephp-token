<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Token |CakePHP</title>
    <meta name="description" content="Token for CakePHP application.">
    <meta name="author" content="VT">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <?php echo $this->Html->css('/release/css/base.min.css'); ?>

    <!-- JS
    ================================================== -->
    <?php echo $this->Html->script('/release/js/lib.min.js'); ?>
    <?php echo $this->Html->script('/release/js/base.min.js'); ?>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <?php echo $this->Html->meta('icon'); ?>
</head>


<body>

    <!-- Primary Page Layout
    ================================================== -->
    <div class="wrapper">
        <div class="grid">
            <div class="grid__item lap-and-up-one-third">
                <ul class="nav nav--stacked">
                    <?php 
                        if($this->Session->check('Auth.User')):
                            echo "<li>";
                            echo $this->Html->link("Dashboard", array('controller'=>'members','action'=>'view'), array('class' => 'btn btn--full')); 
                            echo "</li><li>";
                            echo $this->Html->link( "Add Members", '/', array('class' => 'btn btn--full'));
                            echo "</li><li>";
                            echo $this->Html->link( "Add Admin", array('controller'=>'users','action'=>'add'), array('class' => 'btn btn--full')); 
                            echo "</li><li>";                            
                            echo $this->Html->link( "View Admins", array('controller'=>'users','action'=>'view'), array('class' => 'btn btn--full')); 
                            echo "</li><li>";
                            echo $this->Html->link( "Logout", '/logout', array('class' => 'btn btn--full')); 
                            echo "</li>";
                        else:
                            echo "<li>";
                            echo $this->Html->link( "Add Members", '/', array('class' => 'btn btn--full'));
                            echo "</li><li>"; 
                            echo $this->Html->link( "Login", '/login', array('class' => 'btn btn--full'));
                            echo "</li>"; 
                        endif;
                    ?>
                </ul>
            </div><!--
            --><div class="grid__item lap-and-up-two-thirds">
                <div class="content">
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>
        
    </div>


    <!-- End Document
    ================================================== -->
</body>
</html>