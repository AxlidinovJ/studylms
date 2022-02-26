<?php

use backend\assets\AdminAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
// use yii\widgets\Menu;

AdminAsset::register($this);
$admin  =  yii::$app->user->identity;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$this->title?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <?=$this->head()?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">

            <a href="<?=Url::home()?>" class="logo">
                <span class="logo-mini"><b>A</b>LT</span>
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">


                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?=url::to('@web/images/users/'.$admin->photo)?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?=$admin->name?></span>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="user-header">
                                    <img src="<?=url::to('@web/images/users/'.$admin->photo)?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?=$admin->username?>
                                        <small><?=date('d-M Y',$admin->created_at)?></small>
                                    </p>
                                </li>

                                <!-- <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>

                                </li> -->

                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?=url::to(['dashboard/logout'])?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">

            <section class="sidebar">

                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?=url::to('@web/images/users/'.$admin->photo??"no-img.png")?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?=$admin->name?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Qidirish...">
                        <span class="input-group-btn">
                            <button type="submit" name="btn" id="search-btn" class="btn btn-flat">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>


                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Asosiy menyu</li>

                    <li class="<?=$this->params['title']=='dashboard'?'active':''?>">
                        <a href="<?=url::home()?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>


                    <li class="<?=$this->params['title']=='slider'?'active':''?>">
                        <a href="<?=url::to(['/slider/index'])?>">
                            <i class="fa fa-dashboard"></i> <span>Sliders</span>
                        </a>
                    </li>

                    <li class="<?=$this->params['title']=='coursescategory'?'active':''?>">
                        <a href="<?=url::to(['/coursescategory/index'])?>">
                            <i class="fa fa-dashboard"></i> <span>Kurs kategoriyasi</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>
                    <li class="<?=$this->params['title']=='courses'?'active':''?>">
                        <a href="<?=url::to(['/courses/index'])?>">
                            <i class="fa fa-dashboard"></i> <span>Kurslar</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>
                    <li class="<?=$this->params['title']=='reja'?'active':''?>">
                        <a href="<?=url::to(['/rejalar/index'])?>">
                            <i class="fa fa-dashboard"></i> <span>Rejalar</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>
                    <li class="<?=$this->params['title']=='user'?'active':''?>">
                        <a href="<?=url::to(['/user/index'])?>">
                            <i class="fa fa-dashboard"></i> <span>Users</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>

                    <li class="<?=$this->params['title']=='blogcategory'?'active':''?>">
                        <a href="<?=url::to(['/blog-category/index'])?>">
                            <i class="fa fa-dashboard"></i> <span>Blog Category</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>

                    <li class="<?=$this->params['title']=='blog'?'active':''?>">
                        <a href="<?=url::to(['/blogs/index'])?>">
                            <i class="fa fa-dashboard"></i> <span>Blogs</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>

                    <li class="<?=$this->params['title']=='xabarlar'?'active':''?>">
                        <a href="<?=url::to(['/xabarlar/index'])?>">
                            <i class="fa fa-dashboard"></i> <span>Xabarlar</span>
                            <span class="pull-right-container">
                            </span>
                        </a>
                    </li>

                </ul>
                

                 <?php
                //  echo  Menu::widget([
                //     'options'=>[
                //         'class'=>'sidebar-menu',
                //         'data-widget'=>"tree",
                //     ],
                //     'encodeLabels' => false,
                //     'items'=>[
                //         [
                //             'label' => 'Asosiy menyu',
                //             'options' =>[
                //                     'class' => 'header',
                //             ]
                //         ],
                //         [
                //             'label'=>'<i class="fa fa-home"></i><span>Bosh sahifa</span>',
                //             'url'=>url::to(['/site/index']),
                //         ],
                //         [
                //             'label'=>'<i class="fa fa-files-o"></i><span>Bo\'limlar</span>',
                //             'url'=>url::to(['/site/about']),
                //             'active'=>in_array(Yii::$app->controller->getRoute(),[
                //                 'site/create',
                //                 'site/about',
                //                 'site/view',
                //                 'site/about',
                //             ]),
                //         ],

                //     ],
                //  ]);
                 
                 ?>
            </section>

        </aside>

        <div class="content-wrapper">

            <section class="content-header">
                <h1>
                    <?=$this->title?>
                </h1>
            <?= Alert::widget(['options' => ['class'=>'callout', 'style'=>'margin-top: 10px; margin-bottom: 0px;']]) ?>

                <?= Breadcrumbs::widget([
                'links' => $this->params['breadcrumbs'] ?? [],
                'homeLink' => [
                    'label'=>"<i class='fa fa-home'></i> Bosh sahifa", 
                    'url'=>Url::home(), 
                    'encode' => false,
                    ],
                ]) ?>
            </section>

            <section class="content container-fluid">

                <?=$content?>

            </section>

        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.13
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io/">AdminLTE</a>.</strong> All rights
            reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                    <p><span class="__cf_email__"
                                            data-cfemail="7816170a19381d00191508141d561b1715">[email&#160;protected]</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-warning pull-right">50%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>


                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                            <p>
                                Some information about this general settings option
                            </p>
                        </div>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                            <p>
                                Other sets of options are available
                            </p>
                        </div>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>

                        <h3 class="control-sidebar-heading">Chat Settings</h3>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right">
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript:void(0)" class="text-red pull-right"><i
                                        class="fa fa-trash-o"></i></a>
                            </label>
                        </div>

                    </form>
                </div>

            </div>
        </aside>


        <div class="control-sidebar-bg"></div>
    </div>


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();