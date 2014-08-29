<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
  $title = "运行环境 超级图库管理软件网络版 蓝码动力";
  $keywords = "运行环境,超级图库管理软件,SuperLib,网络版,蓝码动力";
  $description = "Superlib软件网络版是以TCP/IP协议为通信方式的，因此在局域网和广域网环境下均可使用。在通常的情况下，您需要一台电脑作为服务器，这台电脑可以是一台普通的PC机，也可以是一台运行Windows操作系统的专用服务器，其配置依同时访问人数的多少以及图库容量的大小而定。同时访问人数越多，图库容量越大，所需电脑的配置越高。如果需要用网页访问(即B/S架构)，则最好安装Windows 2003 Server或Windows 2008 Server；如果并发访问数较少，也可以用Windows 7或Windows XP，但至少要是专业版以上，能够运行IIS的版本。";
  include ('meta.php');?>
</head>

<body>
  <?php
  require ('header.php');
  ?>

  <div class="subbanner"><img src="images/banner_pro.png" width="1200" height="225" /></div>

  <div class="main">  
    <div class="content">    
      <div class="here"><a href="index.php">首页</a> >> <a href="products.php">产品</a>   >> <a href="superlib_network.php">网络版</a> >> 运行环境</div>
      <div class="con_m"> 
        <?php $active="system_requirement"; include 'superlib_network_left.php'; ?>
        <div class="con_r">
          <div class="text2">
            <p>Superlib软件网络版是以TCP/IP协议为通信方式的，因此在局域网和广域网环境下均可使用。</p>
            <p>在通常的情况下，您需要一台电脑作为服务器，这台电脑可以是一台普通的PC机，也可以是一台运行Windows操作系统的专用服务器，其配置依同时访问人数的多少以及图库容量的大小而定。同时访问人数越多，图库容量越大，所需电脑的配置越高。如果需要用网页访问(即B/S架构)，则最好安装Windows 2003 Server或Windows 2008 Server；如果并发访问数较少，也可以用Windows 7或Windows XP，但至少要是专业版以上，能够运行IIS的版本。</p>
            <p>控制台软件一般是图库管理员使用的，通常安装在图库管理员的电脑上即可。客户端软件是普通用户使用的，可以在所有需要使用图库系统的电脑上安装。</p>
            <p>超级图库服务器运行条件：</p>
            <div style="padding-left:20px;">
              <li>操作系统：Windows XP/Vista/2003/2008</li>
              <li>CPU：奔腾4以上，主频1.8GHz以上。</li>
              <li>内存：1G以上。</li>
              <li>硬盘：40G以上。</li>
            </div>
            <p>对于大容量、大并发数的图库应用，服务器配置越高越好。SuperLib服务器软件拥有出色的多线程处理能力，能够充分利用多路、多核处理器的运算能力，因此当并发访问数很大时，可以配置多处理器，每个处理器可以是多核的。内存建议配置2G或4G。当图库容量很大，普通磁盘容量无法满足要求时，可配置磁盘阵列柜，并综合应用SuperLib软件的多存储区功能，实现大容量存储。</p>
            <p>控制台、客户端软件运行在普通电脑上即可，操作系统要求为Windows XP/Vista/2003/2008。</p>
            
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
        </body>
        </html>