<!-- <div class="nav_left">
       <ul class="nav_list">
        <li><a href="superlib_network.php" <?php if("index"==$active) echo 'class="active"'; ?>>概述</a></li>
        <li><a href="superlib_network_features.php" <?php if("features"==$active) echo 'class="active"'; ?>>功能介绍</a>
         <ul class="sub_nav_list sub_nav_list_features">
         <script type="text/javascript">
            $(document).ready(function(){
              var active ='<?php echo $active ?>'
              if(active=='features'){
                //$(".sub_nav_list_features").show();
              }
            });
         </script>
          <li><a href="#">文件夹及文件</a></li>
          <li><a href="#">浏览</a></li>    
          <li><a href="#">文件夹管理</a></li> 
          <li><a href="#">文件管理</a></li> 
          <li><a href="#">搜索</a></li> 
          <li><a href="#">选择集</a></li> 
          <li><a href="#">搜索树</a></li> 
          <li><a href="#">重复文件识别</a></li> 
          <li><a href="#">查找相似图片</a></li> 
          <li><a href="#">用户管理</a></li> 
          <li><a href="#">用户组管理</a></li> 
          <li><a href="#">管理用户组和</a></li> 
          <li><a href="#">用户的关系</a></li> 
          <li><a href="#">权限管理</a></li> 
          <li><a href="#">日志管理</a></li> 
          <li><a href="#">软件配置</a></li> 
          <li><a href="#">工具</a></li> 
          <li><a href="#">界面定制</a></li> 
         </ul>   
        </li>
        <li><a href="superlib_network_system_requirement.php" <?php if("system_requirement"==$active) echo 'class="active"'; ?>>运行环境</a></li>
        <li><a href="#">演示录像</a></li>
        <li><a href="superlib_network_faq.php"  <?php if("faq"==$active) echo 'class="active"'; ?>>常见问题解答</a></li>
        <li><a href="success_stories.php" target="_blank">成功案例</a></li>
        <li><a href="solutions.php" target="_blank">解决方案</a></li>
        <li><a href="documents.php" target="_blank">专题文章</a></li>
        <li><a href="downloads.php" target="_blank">软件下载</a></li>
        <li><a href="purchase.php" target="_blank">软件购买</a></li>
       </ul>
       
      </div> -->

<div class="nav_left">
        <ul class="expmenu">
        <li>
      <div class="header">
        <span class="label"><a href="superlib_network.php" >概述</a></span>
      </div>
        </li>
    <li>
      <div class="header">
        <span class="label"><a href="superlib_network_features.php">功能介绍</a></span>
      </div>
      <span class="no">
      
        <ul class="sub_expmenu" style="display:none;">
          <li ><a href="#folder_file">文件夹及文件</a></li>
          <li><a href="#browse">浏览</a></li>
          <li ><a href="#folder_management">文件夹管理</a></li>
          <li ><a href="#file_management">文件管理</a></li>
          <li><a href="#search">搜索</a></li>
          <li ><a href="#selection_set">选择集</a></li>
          <li ><a href="#search_tree">搜索树</a></li>
          <li ><a href="#duplicated_file">重复文件识别</a></li>
          <li ><a href="#similar_image">查找相似图片</a></li>
          <li ><a href="#user_management">用户管理</a></li>
          <li ><a href="#user_group_management">用户组管理</a></li>
          <li ><a href="#user_group_relation">管理用户组和用户的关系</a></li>
          <li ><a href="#permission_management">权限管理</a></li>
          <li ><a href="#log_management">日志管理</a></li>
          <li><a href="#config">软件配置</a></li>
          <li ><a href="#tools">工具</a></li>
          <li ><a href="#custom">界面定制</a></li>
        </ul>
        <script type="text/javascript">
            $(document).ready(function(){
              var active ='<?php echo $active ?>'
              if(active=='features'){
                $(".sub_expmenu").show();
              }
            });
         </script>
        </span>
    </li>
    <li>
      <div class="header">
        <span class="label"><a href="superlib_network_system_requirement.php">运行环境</a></span>
      </div>
    </li>
        <li>
      <div class="header">
        <span class="label"><a href="demo_video_introduction.php">演示录像</a></span>
      </div>
        </li>
        <li>
      <div class="header">
        <span class="label"><a href="superlib_network_faq.php" >常见问题解答</a> </span>
      </div>
        </li>
        <li>
      <div class="header">
        <span class="label"><a href="success_stories.php" target="_blank">成功案例</a> </span>
      </div>
        </li>
        <li>
      <div class="header">
        <span class="label"><a href="solutions.php" target="_blank">解决方案</a> </span>
      </div>
        </li>
        <li>
      <div class="header">
        <span class="label"><a href="documents.php" target="_blank">专题文章</a> </span>
      </div>
        </li>
        <li>
      <div class="header">
        <span class="label"><a href="downloads.php" target="_blank">软件下载</a> </span>
      </div>
        </li>
        <li>
      <div class="header">
        <span class="label"><a href="purchase.php" target="_blank">软件购买</a> </span>
      </div>
        </li>
  </ul>

       <div class="nav_b"></div>
      </div>



