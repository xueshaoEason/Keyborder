<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>提示页面</title>
	<meta http-equiv='refresh' content="<?=$sec;?>;url=<?=$url;?>">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
   
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="public/css/font-awesome/css/font-awesome.min.css">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

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
                <a href="index.html" id="logo">
                    <img src="public/images/logo2.png" height="150" width="350" alt="clean Blog">
                </a>
        
                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
                        <ul class="nav nav-pills navbar-nav">
							<li>
								<a href="index.php?m=index&c=index&a=index">Home</a>
							</li>
							
							<li>
								<a href="index.php?m=index&c=user&a=login">Login</a>
							</li>
							<li>
								<a href="index.php?m=index&c=user&a=register">Register</a>
							</li>
							<!-- <?php if(!empty($_SESSION['username'])):?> -->
								
								<!-- <?php if((!empty($_SESSION['usertype']) && $_SESSION['usertype'] == 1)):?> -->
									<!-- <li>
										<a>用户名</a>
									</li> -->
									<!-- <li>
										<a href="index.php?m=admin&c=index&a=index">Center</a>
									</li> -->
									<li> 
										<a href="index.html">Quit</a>
									</li>
								<!-- <?php endif;?> -->
								
							<!-- <?php else: ?> -->
								
							<!-- <?php endif;?> -->
						</ul>
                    </div>
                </nav>        

            </div>
        </div>

        <div class="widewrapper subheader">
            <div class="container">
               <div class="clean-breadcrumb">
                    <a href="index.html">博客</a>
                </div>
                <div class="clean-searchbox">
                    <form action="#" method="get" accept-charset="utf-8">
                        <input class="searchfield" id="searchbox" type="text" placeholder="The Input">
                         <button class="searchbutton" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="widewrapper main">
        <div class="transfer_station" style="text-align:center;padding:100px">
            <span style="font-size:16px;font-weight:700;color:red;"><?=$con;?></span> 请稍后...<br />
			<a href="index.php?m=index&c=index&a=index">如果你的浏览器没有跳转,请点击此链接</a>
        </div>
    </div>

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
            Copyright 2017 . The Ning is very strong</div>
    </footer>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/modernizr.js"></script>

</body>
</html>