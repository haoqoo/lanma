<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
$title = "超级图库管理软件演示录像 蓝码动力";
$keywords = "演示录像,超级图库管理软件,SuperLib,网络版,蓝码动力";
$description = "超级图库管理软件网络版演示录像，包括软件介绍、软件安装及注册、控制台配置及客户端授权、客户端的使用(图档文件的入库)、图片的查看、关键词与自定义属性的运用、文件的搜索、图片的编辑、日志的查询等。";
include 'meta.php'; ?>
</head>

<body>
<?php include 'header.php'; ?>

<div class="subbanner"><img src="images/banner_pro.png" width="1200" height="225" /></div>

<div class="main">  
  <div class="content">    
    <div class="here"><a href="index.php">首页</a> >> <a href="products.php">产品</a>   >> <a href="superlib_network.php">网络版</a> >> <a href="demo_video_introduction.php">演示录像</a> >> 软件介绍</div>
    <div class="con_m"> 
      <?php include 'superlib_network_left.php'; ?>
      <div class="con_r">
        <div class="video_nav">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
           <td class="vtd01">软件介绍</td>
            <td class="vtd02"><a href="demo_video_installation.php">软件安装和配置</a></td>
            <td class="vtd02"><a href="demo_video_use.php">软件使用</a></td>
            <td class="vtd02"><a href="demo_video_search.php">软件搜索</a></td>

          </tr>
        </table>
        </div>
        <div class="video_m"><iframe id="ifrObj" frameborder="0" src="demo_video/video/introduction/001.html"></iframe></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
