<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=$title;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
   
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="public/css/font-awesome/css/font-awesome.min.css">

    <!-- Google Webfonts -->
    <link href='public/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="public/css/style.css" id="theme-styles">

    <!--[if lt IE 9]>      
        <script src="js/respond.js"></script>
    <![endif]-->
    
</head>
<body>
    <header>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="index.php?m=index&c=index&a=index" id="logo">
                    <img src="public/images/logo2.png" height="150" width="350" alt="clean Blog">
                </a>
                <iframe id="fancybox-frame" style="position:absolute;top:100px;left:460px;" name="fancybox-frame1498006865094" frameborder="0" scrolling="no" hspace="0"  src="http://i.tianqi.com/index.php?c=code&a=getcode&id=42&h=54&w=214"></iframe>
                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="index.php?m=index&c=index&a=index" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
                        <ul class="nav nav-pills navbar-nav">
							<li>
								<a href="index.php?m=index&c=index&a=index">Home</a>
							</li>
							<?php if(!empty($_SESSION['username'])):?>
								<li>
									<a><?=$_SESSION['username'];?></a>
								</li>
								<?php if((!empty($_SESSION['usertype']) && $_SESSION['usertype'] == 1)):?>
									<li>
										<a href="index.php?m=admin&c=book&a=login">Management Center</a>
									</li>
								<?php endif;?>	
								<li> 
									<a href="index.php?m=index&c=user&a=out">Quit</a>
								</li>
							<?php else: ?>
								<li>
									<a href="index.php?m=index&c=user&a=login">Login</a>
								</li>
								<li>
									<a href="index.php?m=index&c=user&a=register">Register</a>
								</li>
							<?php endif;?>
						</ul>
                    </div>
                </nav>        

            </div>
        </div>

        <div class="widewrapper subheader">
            <div class="container">
               <div class="clean-breadcrumb">
                    <?php if((!empty($_SESSION['usertype']) && $_SESSION['usertype'] == 1)):?>
                    <a href="index.php?m=index&c=posts&a=posts">Posting</a>
                    <?php else: ?>
                    <a href="index.php?m=index&c=index&a=index">Home</a>
                    <?php endif;?>
                </div>
                <div class="clean-searchbox">
                   <form action="#" method="get" accept-charset="utf-8">
                        <input class="searchfield" id="searchbox" type="text" placeholder="<?=$web['Signature'];?>">
                         <!-- <button class="searchbutton" type="submit">
                            <i class="fa fa-search"></i>
                        </button> -->
                    </form>
                </div>
            </div>
        </div>
    </header>
	<div class="widewrapper main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
					<div class="row">
						<?php if(!empty($result)):?>
							<?php foreach($result as $value):?>
								<div class="col-md-6 col-sm-6">
									<article class=" blog-teaser">
										<header>
											<a href="index.php?m=index&c=single&a=single&pid=<?=$value['pid'];?>">
											<img src="<?=$value['photo'];?>" style="width:320px;height:230px;" alt=""></a>
											<h3><a href="index.php?m=index&c=single&a=single&pid=<?=$value['pid'];?>"><?=$value['title'];?></a></h3>
											<span class="meta">
												<?php  echo date('Y-m-d',$value['createtime']);?>,
												Snow
											</span>
											<hr>
										</header>
									</article>
								</div>
							<?php endforeach;?>	
						<?php endif;?>
					</div>
                </div>
				
                <aside class="col-md-4 blog-aside">
                    
                    <div class="aside-widget">
                        <header>
                            <h3>Omnibus</h3>
                        </header>
                        <div class="body">
                            <ul class="clean-list">
							<?php if(!empty($resu)):?>
								<?php foreach($resu as $val):?>
									<li><a href="index.php?m=index&c=single&a=single&pid=<?=$val['pid'];?>"><?=$val['title'];?></a></li>
								<?php endforeach;?>
							<?php endif;?>
                            </ul>
                        </div>
                    </div>

                    <div class="aside-widget">
                        <header>
                            <h3>Latest registered users</h3>
                        </header>
                        <div class="body clearfix">
                            <ul class="tags">
                               <?php foreach($visit as $values):?>
									<li><a href="#"><?=$values['username'];?></a></li>
								<?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </aside>

            </div>
			<div class="paging" style="margin-left:-300px; ">
                <a href="" class="older"><b>Another Page&nbsp;</b></a>
				<a href="<?=$result2['first'];?>" class="older"><b>Begining</b></a>
				<a href="<?=$result2['pre'];?>" class="older"><b>Prev</b></a>
				<a href="<?=$result2['next'];?>" class="older"><b>Next</b></a>
				<a href="<?=$result2['last'];?>" class="older"><b>Ending</b></a>
				<a class="older"><b></b></a>

			</div>
        </div>
    </div>   
	<!-- <footer>
        <div class="widewrapper footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-user"></i>About Me</h3>
						
						<table style="width:300px;height:170px;">
							<tr>
                                <td>name</td>
                                <td>bowen</td>
                            </tr>
                            <tr>
                                <td>Signature</td>
                                <td>aaaa</td>
                            </tr>
                            <tr>
                                <td>School</td>
                                <td>bbbb</td>
                            </tr>
                            <tr>
                                <td>Job</td>
                                <td>PHP</td>
                            </tr>
                            <tr>
                                <td>Hobby</td>
                                <td>cccc</td>
                            </tr>
						</table>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-pencil"></i> Recent</h3>
                        <ul class="clean-list" style="margin-left: -50px;">
                            <?php if(!empty($re)):?>
                                <?php foreach($re as $val):?>
                                    <li><a href="index.php?m=index&c=single&a=single&pid=<?=$val['pid'];?>"><?=$val['title'];?></a></li>
                                <?php endforeach;?>
                            <?php endif;?>

                        </ul>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-envelope"></i>Contact</h3>

						<table style="width:300px;height:170px;">
							<tr>
                                <td>Nickname</td>
                                <td>dddd</td>
                            </tr>
                            <tr>
                                <td>Tel</td>
                                <td>110</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>jbw95727@163.com</td>
                            </tr>
                            <tr>
                                <td>Postcode</td>
                                <td>eeee</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>BeiJing</td>
                            </tr>
						</table>
                    </div>

                </div>
            </div>
        </div>
        <div class="widewrapper copyright">
            Copyright 2017 . The Ning is very strong</div>
    </footer> -->
    <footer>
        <div class="widewrapper footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-user"></i>About me</h3>

                            <table style="width:300px;height:170px;">
                                <tr>
                                    <td>name</td>
                                    <td><?=$web['Owner'];?></td>
                                </tr>
                                <tr>
                                    <td>Signature</td>
                                    <td><?=$web['Signature'];?></td>
                                </tr>
                                <tr>
                                    <td>School</td>
                                    <td><?=$web['School'];?></td>
                                </tr>
                                <tr>
                                    <td>Job</td>
                                    <td><?=$web['Job'];?></td>
                                </tr>
                                <tr>
                                    <td>Hobby</td>
                                    <td><?=$web['Hobby'];?></td>
                                </tr>
                                 <tr>
                                    <td>Nickname</td>
                                    <td><?=$web['Nickname'];?></td>
                                </tr>
                                 <tr>
                                    <td>Tel</td>
                                    <td><?=$web['Tel'];?></td>
                                </tr>
                                 <tr>
                                    <td>Email</td>
                                    <td><?=$web['Email'];?></td>
                                </tr>
                                 <tr>
                                    <td>Postcode</td>
                                    <td><?=$web['Postcode'];?></td>
                                </tr>
                                 <tr>
                                    <td>Address</td>
                                    <td><?=$web['Address'];?></td>
                                </tr>
                            </table>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-pencil"></i>Recent Articles</h3>
                        <ul class="clean-list">
                            <?php if(!empty($re)):?>
                                <?php foreach($re as $val):?>
                                    <li><a href="index.php?m=index&c=single&a=single&pid=<?=$val['pid'];?>"><?=$val['title'];?></a></li>
                                <?php endforeach;?>
                            <?php endif;?>

                        </ul>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-envelope"></i>Contact Me</h3>

                            <table style="width:300px;height:170px;">
                                <tr>
                                    <td>Nickname</td>
                                    <td><?=$web['Nickname'];?></td>
                                </tr>
                                <tr>
                                    <td>Tel</td>
                                    <td><?=$web['Tel'];?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?=$web['Email'];?></td>
                                </tr>
                                <tr>
                                    <td>Postcode</td>
                                    <td><?=$web['Postcode'];?></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><?=$web['Address'];?></td>
                                </tr>
                            </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="widewrapper copyright">
            Copyright 2017 . Show you all the tastes , WYF</div>
    </footer>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/modernizr.js"></script>
</body>
</html>