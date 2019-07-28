
<?php include 'con.php';?>
<?php
  session_start();
$user_check=$_SESSION['room'];
$sql = "SELECT * FROM profile where email='$user_check'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc())
    { 
        $p1=$row["name"];
        $p2=$row["pic"];
      
    }

} 


if (isset($_SESSION['room']))
 {

  ?>

<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Desbox.com</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="pop/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
      <style type="text/css">
      .rahul img
    {
      width: 40px !important;
      height: 38px !important;
    }

    </style>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">
    <div class="color-switcher animated">
      <h5>Change Color</h5>
      <ul class="accent-colors">
        <li class="accent-primary active" data-color="primary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-secondary" data-color="secondary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-success" data-color="success">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-info" data-color="info">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-warning" data-color="warning">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-danger" data-color="danger">
          <i class="material-icons">check</i>
        </li>
      </ul>
      <div class="actions mb-4">
        <a class="mb-2 btn btn-sm btn-primary w-100 d-table mx-auto extra-action" href="https://designrevision.com/downloads/shards-dashboard-lite/">
          <i class="material-icons"></i> Join class</a>
        <a class="mb-2 btn btn-sm btn-white w-100 d-table mx-auto extra-action" href="https://designrevision.com/docs/shards-dashboard-lite">
          <i class="material-icons"></i> create class</a>
      </div>
   
      <div class="close">
        <i class="material-icons">close</i>
      </div>
    </div>
    <div class="color-switcher-toggle animated pulse infinite">
      <i class="material-icons">settings</i>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Desbox &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
            	  <li class="nav-item">
                <a class="nav-link " href="index.php">
                  <i class="fa fa-home" aria-hidden="true"></i>

                  <span>Classes</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="profile.php">
                  <i class="fa fa-user" aria-hidden="true"></i>

                  <span>user profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="blogpost.php">
                  <i class="material-icons">vertical_split</i>
                  <span>Posts</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="create.php">
                
<i class="fa fa-edit"></i>
                  <span>Create Class</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="join.php">
                 <i class="fa fa-handshake" aria-hidden="true"></i>
  <span>Join Class</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="tables.php">
                  <i class="fa fa-link"></i>
                  <span>Connections</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="tables.php">
                <i class="fa fa-envelope"></i>
                  <span>Sent mail</span>
                </a>
              </li>
              
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications">
                  <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                     <i class="fa fa-plus" aria-hidden="true"></i>
                        </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="join.php">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="fa fa-handshake"></i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Join Class</span>
                           </div>
                    </a>
                    <a class="dropdown-item" href="create.php">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="fa fa-edit"></i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Create Class</span>
                         </div>
                    </a>
                       </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3 rahul" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="profilepic/<?=$p2?>" alt="User Avatar">
                    <span class="d-none d-md-inline-block"><?=$p1?></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="user-profile-lite.php">
                      <i class="material-icons">&#xE7FD;</i> Profile</a>
                    <a class="dropdown-item" href="components-blog-posts.php">
                      <i class="material-icons">vertical_split</i> Blog Posts</a>
                    <a class="dropdown-item" href="add-new-post.php">
                      <i class="material-icons">note_add</i> Add New Post</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
             
            </div>

            <!-- End Page Header -->
            <?
             $key=$_GET['kddsfwefwcwefvwvefwe'];
            $sql="  SELECT classcreate.cname,classcreate.section,classcreate.subject,classcreate.marks,classcreate.submittime,classcreate.classpic,classcreate.classcode,classcreate.color,profile.pic from classcreate inner join profile on classcreate.cid='$key' and profile.email = classcreate.email";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $c1=$row["cname"];
        $c2=$row['section'];
         $c3=$row['subject'];
          $c4=$row['marks'];
           $c5=$row['submittime'];
            $c6=$row['classpic'];
             $c7=$row['classcode'];
              $c8=$row['color'];
               $c9=$row['pic'];
?>

            <div class="row ">
              <div class=" col-md-12 mb-2">
                <div class="card card-small card-post card-post--1">
                  <div class="card-post__image" style="background-image: url('classpic1/<?=$c6?>.jpeg');">
                    <a href="#" class="card-post__category badge badge-pill <?=$c8?>"><?=$c1?></a>
                      <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('profilepic/<?=$c9?>');">Written by John James</a>
                    </div>
                    
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">
                      <a class="text-fiord-blue" href="#" data-target="#mymodal1"  data-toggle="modal">Class-Code : <?=$c7?>                                <i class="material-icons">fullscreen</i>
</a>
                    </h6>
                        <h6 class="card-title">
                      <a class="text-fiord-blue" href="#">Subject :<?=$c3?></a>
                    </h6>
                    
                    <p class="card-text d-inline-block mb-3">Section :<?=$c2?> </p><br>
                      <div class="modal fade" id="mymodal1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal">&times;</button>
           </div>
        <h1>Class Code : <?=$c7?></h1>
        <div class="modal-footer">
          <button class="btn btn-success" data-dismiss="modal" type="button">Close</button>
        </div>
      </div>
    </div>
  </div>
                    <?
                       
if(!empty($c4)) 
{
                    ?>
                    <p class="card-text d-inline-block mb-3">Marks- <?=$c4?></p><br>
<?
}

if(!empty($c5)) 
{

?>

                    <span class="text-muted">Submit Assignment- <?=$c5?></span>
                    <?
}
?>
                  </div>
                </div>
              </div>

            </div>

<?
}
}

?> 
            <div class="row">
              <div class="col-lg-12 mb-3">
                <!-- Quick Post -->
                <div class="card card-small h-100">
                  
                  <div class="card-body d-flex flex-column">
                    <form class="quick-post-form" action="index.php" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Share something of your class" data-target="#mymodal"  data-toggle="modal"> </div>
                     
                      <div class="form-group mb-0">
                        <button type="submit" class="btn btn-accent">Share</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Quick Post -->
              </div>
          </div>
          
          <div class="modal fade" id="mymodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal">&times;</button>
           </div>
        <div class="modal-body">
          

          
          <form class="form-horizontal" action="upload.php" method="post" enctype="multipart/form-data">
         
            <div class="form-group">
              <label class="col-md-2 control-label" for="email">Files</label>
              <div class="col-md-10">
                <input class="form-control" id="email" placeholder="Upload files" type="file" name="fileToUpload">
              </div>
            </div>
           

            <div class="form-group">
              <label class="col-md-2 control-label" for="message">Message</label>
              <div class="col-md-10">
               <input class="form-control" id="email" type="hidden" name="code" value="<?=$c7?>">
               <input class="form-control" id="email" type="hidden" name="pic" value="<?=$p2?>">
                <input class="form-control" id="email" type="hidden" name="uname" value="<?=$p1?>">

                <textarea class="form-control" id="message" placeholder="Your Message" rows="4" name="msg" required=""></textarea>
                <br>
                <button class="btn btn-primary pull-left">Post</button>
              </div>              
            </div>            
          </form>


        </div>
        <div class="modal-footer">
          <button class="btn btn-success" data-dismiss="modal" type="button">Close</button>
        </div>
      </div>
    </div>
  </div>

    <div class="row">
              <div class="col-lg-12 mb-3">
                <div class="card card-small card-post card-post--1">
          
              <?
$sql2="select mid,classcode,message,pic,pic1,dat,name,filetype from message where classcode='$c7'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) 
{
    // output data of each row
    while($row = $result2->fetch_assoc())
    {   $mid=$row['mid'];
        $r1=$row["classcode"];
        $r2=$row["message"];
        $r3=$row["pic"];
        $r4=$row["pic1"];
        $r5=$row["dat"];
        $r6=$row["name"];
        $r7=$row["filetype"];

if($r7=='jpg'|| $r7=='jpeg' || $r7=='png')
{
?>
<!-- jpg png jpeg !-->
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3 rahul">
                        <img src="profilepic/<?=$r3?>" class="user-avatar rounded-circle mr-2" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#"><?=$r6?></a> on
                           <a class="text-secondary" href="#"><?=$r5?></a> 
 
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted"><?=$r2?></p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                          	<a href="classpic2/<?=$r4?>" download="<?=$r4?>">
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">insert_photo</i>
                              </span>   Download Image </button></a>
                        <a href="deletepost.php?kddsfwefwcwefvwvefwe=<?=$mid?>">
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">delete</i>
                              </span> Trash </button></a>
                           
                          </div>
                        </div>
                      </div>
                    </div>

<?

}
else if($r7=='zip')
{
?>
<!-- zip !-->

                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3 rahul">
                        <img src="profilepic/<?=$r3?>" alt="User avatar" class="user-avatar rounded-circle mr-2"/> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#">J<?=$r6?></a> on
                         <a class="text-secondary" href="#">J<?=$r5?></a>

                        </div>
                        <p class="m-0 my-1 mb-2 text-muted"><?=$r2?></p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                          	<a href="classpic2/<?=$r4?>" download="<?=$r4?>">
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                               <i class="fa fa-file-archive"> &nbsp</i>
                              </span> Download File </button>
                          </a>
                               <a href="deletepost.php?kddsfwefwcwefvwvefwe=<?=$mid?>">
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">delete</i>
                              </span> Trash </button></a>
                           
                          </div>
                        </div>
                      </div>
                    </div>
<!-- pdf !-->
<?

}
else if($r7=='pdf')
{
?>


                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3 rahul">
                        <img src="profilepic/<?=$r3?>" class="user-avatar rounded-circle mr-2" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#"><?=$r6?></a> on
                          <a class="text-secondary" href="#"><?=$r5?></a>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted"><?=$r2?></p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                          	<a href="classpic2/<?=$r4?>" download="<?=$r4?>">
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                           <i class="fas fa-file-pdf"> &nbsp</i>
                              </span> Download pdf </button>
                          </a>
                             <a href="deletepost.php?kddsfwefwcwefvwvefwe=<?=$mid?>">
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">delete</i>
                              </span> Trash </button></a>
                            
                          </div>
                        </div>
                      </div>
                    </div>

<?

}
else if($r7=='null')
{
?>
<!-- nulll !-->

                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3 rahul">
                        <img src="profilepic/<?=$r3?>" class="user-avatar rounded-circle mr-2" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#"><?=$r6?></a> on
                          <a class="text-secondary" href="#"><?=$r5?></a>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted"><?=$r2?></p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                         <i class="material-icons">create</i>
                               </span> Edit Post</button>
                               <a href="deletepost.php?kddsfwefwcwefvwvefwe=<?=$mid?>">
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">delete</i>
                              </span> Trash </button></a>
                            
                          </div>
                        </div>
                      </div>
                    </div>

                <?
}

}
?>

<!-- outsiide of whiile loop !-->
                <div class="card card-small h-100">
                  
                  <div class="card-body d-flex flex-column">
                    <form class="quick-post-form" action="comment.php" method="post">
                      <div class="form-group">
                      	<input class="form-control" id="email" type="hidden" name="code" value="<?=$c7?>">
                        <input class="form-control" id="email" type="hidden" name="pic" value="<?=$p2?>">
                         <input class="form-control" id="email" type="hidden" name="uname" value="<?=$p1?>">

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write something" name="msg"> </div>
                     
                      <div class="form-group mb-0">
                        <button type="submit" class="btn btn-accent">Comment</button>
                      </div>
                    </form>
                   </div>
                  </div>
<!-- outsiide of whiile loop !-->
<?
}
?>






                 </div>
                </div>
               

              



            </div>


          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">About</a>
              </li>
             
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Desbox
            </span>
          </footer>
        </main>
      </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
  </body>
</html>

<?
   
   }     /// your code here
else

{
header("Location:login.php");

exit();
    }

  ?>