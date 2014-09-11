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

<div class="subbanner"><div class="banner_pro"></div></div>

<div class="main">  
  <div class="content">    
    <div class="here"><a href="index.php">首页</a> >> <a href="products.php">产品</a>   >> <a href="superlib_network.php">网络版</a> >> <a href="demo_video_introduction.php">演示录像</a> >> 软件安装和配置</div>
    <div class="con_m"> 
     <?php include 'superlib_network_left.php'; ?>
      <div class="con_r">
        <div class="video_nav">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="vtd02"><a href="demo_video_introduction.php">软件介绍</a></td>
            <td class="vtd01">软件安装和配置</td>
            <td class="vtd02"><a href="demo_video_use.php">软件使用</a></td>
            <td class="vtd02"><a href="demo_video_search.php">软件搜索</a></td>
         
          </tr>
        </table>
        </div>
        <div class="video_m">
          <div class="video_list">
            <table width="100%" border="0">
              <tr>
                <td class="vtd03"></td>
                <td class="vtd04">
                <div class="div_vid">
                  <div class="subdiv_vid">
                    <table width="100%" border="0">
                      <tr>
                        <td><a href="#installationAndRegistration/002.html" class="install-a"><img src="images/video_03.png" width="104" height="67" border="0" class="install-img"/></a></td>
                      </tr>
                      <tr>
                        <td align="center" height="30"><a href="#">软件安装及注册</a></td>
                      </tr>
                    </table>
                  </div>
                  <div class="subdiv_vid">
                    <table width="100%" border="0">
                      <tr>
                        <td><a href="#consoleConfigurationAndClientAuthorization/003.html" class="install-a"><img src="images/video_05.png" width="104" height="67" border="0" class="install-img"/></a></td>
                      </tr>
                      <tr>
                        <td align="center" height="30"><a href="#"> 控制台配置及客户端授权</a></td>
                      </tr>
                    </table>
                  </div>
                </div>
                </td>
                <td class="vtd05"></td>
              </tr>
            </table>
          </div>
          <div class="video_con">
          <iframe id="ifrObj" frameborder="0" src="demo_video/video/installationAndRegistration/002.html"></iframe></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>

<script type="text/javascript">
  $(document).ready(function(){
    $(".install-a").on("click",function(){
       var url ="demo_video/video/"+$(this).attr("href").substr(1);
       $("#ifrObj").attr("src",url);
       $(".install-img").each(function(){
        $(this).attr("src","images/video_05.png");
       });
       $(this).children("img").attr("src","images/video_03.png");
    });
  });

</script>
</div>
</body>
</html>
