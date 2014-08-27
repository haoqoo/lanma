<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
  $title = "超级图库网络版安装指南";
  $keywords = "蓝码动力,公司简介,软件企业,图库管理软件,照片管理,图纸管理,文档管理,视频管理,超级图库网络版安装指南";
  $description = "北京蓝码动力软件科技有限公司成立于2006年7月。入驻于西城区金丰和商务苑科技园区，属于北京市科委认定的软件企业。公司自创立以来一直致力于海量的图形/图像管理及文档管理领域的信息化建设，并依托核心软件的强大功能和通用性，根据不同客户的实际需求，提供个性化的定制服务，为用户提供更体贴的产品和解决方案，帮助客户轻松提高工作效率。";
  include ("meta.php");
  ?>
</head>

<body>
  <?php
  require ('header.php');
  ?>

  <div class="subbanner"><img src="images/banner_dow.png" width="1200" height="225" /></div>


  <div class="main">  
    <div class="content"> 
      <div class="here">首页 >> 超级图库网络版安装指南</div>   
      <div class="text2" style="padding-top:0; padding-left:50px;">
        <div class="newsHeadline"><div class="container"><span class="title">超级图库网络版安装指南</span></div></div>
        <div id="guide" class="maintext_new">
          <ul class="line">
            <li><a href="#install_server">安装服务器</a></li>
            <li><a href="#install_console">安装控制台</a></li>
            <li><a href="#install_client">安装客户端</a></li>
          </ul>
          <h3><a name="install_server"></a>安装服务器</h3>
          <p>首先选好要作为服务器的计算机。</p>
          <p>在超级图库安装包里有三个文件夹，其中的server文件夹里放的是超级图库服务器软件的安装程序，如下图：</p>
          <div class="image"><img src="images/install_server.gif" alt=""></div>
          <p>进入server文件夹，运行里面的setup.exe文件。这时出现软件安装界面，如下图：</p>
          <div class="image"><img src="images/install_guide_1.gif" alt=""></div>
          <p>选择“简体中文”，然后按“确定”按钮。</p>
          <div class="image"><img src="images/install_guide_2.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_guide_3.gif" alt=""></div>
          <p>最好不要安装在操作系统所在的分区，以免以后重装系统时要备份图库。选好安装目录后按“下一步”。</p>
          <div class="image"><img src="images/install_guide_4.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_guide_5.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_guide_6.gif" alt=""></div>
          <p>按“安装”。安装程序开始安装，过一会提示安装完毕，如下图：</p>
          <div class="image"><img src="images/install_guide_7.gif" alt=""></div>
          <p>确认“运行超级图库服务器”处于选中状态，然后按“完成”按钮。超级图库服务器软件被运行，过一会后出现“选择数据库类型”界面。</p>
          <div class="image"><img src="images/install_guide_8.gif" alt=""></div>
          <p>选择“Microsoft Access数据库”，然后按“确定”按钮。过一会后超级图库服务器软件启动完毕，出现服务器的主界面，如下图：</p>
          <div class="image"><img src="images/install_guide_9.gif" alt=""></div>
          <p>图库服务器的界面很简单，它只对外部提供服务，本身只提供很少的操作功能。</p>
          <p>记下服务器的IP地址，或者这台电脑的计算机名称。在安装超级图库控制台和客户端时需要用到这个IP地址或计算机名。至此服务器安装完毕。</p>
          <div class="top"><a href="#top">^ 返回顶部</a></div>
          <h3><a name="install_console"></a>安装控制台</h3>
          <p>超级图库控制台是图库管理员使用的，当然应该安装在图库管理员的电脑上，普通用户就不要安装控制台软件了。</p>
          <p>在超级图库安装包里有三个文件夹，其中的console文件夹里放的是超级图库服务器软件的安装程序，如下图：</p>
          <div class="image"><img src="images/install_guide_10.gif" alt=""></div>
          <p>进入console文件夹，运行里面的setup.exe文件。这时出现软件安装界面，如下图：</p>
          <div class="image"><img src="images/install_console_1.gif" alt=""></div>
          <p>按“确定”按钮。</p>
          <div class="image"><img src="images/install_console_2.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_console_3.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_console_4.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_console_5.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_console_6.gif" alt=""></div>
          <p>按“安装”。</p>
          <div class="image"><img src="images/install_console_7.gif" alt=""></div>
          <p>确认勾选了“运行超级图库控制台”，按“完成”按钮。</p>
          <p>超级图库控制台被启动。</p>
          <div class="image"><img src="images/install_console_8.gif" alt=""></div>
          <p>选择“服务器”菜单中的“连接服务器”。</p>
          <div class="image"><img src="images/install_console_9.gif" alt=""></div>
          <p>按上图填好必要信息，按“连接”按钮。</p>
          <div class="image"><img src="images/install_console_10.gif" alt=""></div>
          <p>这样就连接上了服务器。如果连接失败，请做以下检查：</p>
          <ol>
            <li>超级图库服务器是否已经启动。</li>
            <li>是否安装了网络防火墙，如果安装了，应该允许服务器和控制台软件访问网络。</li>
            <li>用户名和密码是否填写正确，注意大小写。</li>
            <li>IP地址是否填写正确。</li>
            <li>如果还不成功，重新启动一下计算机也许能解决问题。</li>
          </ol>
          <div class="top"><a href="#top">^ 返回顶部</a></div>
          <h3><a name="install_client"></a>安装客户端</h3>
          <p>在超级图库安装包里有三个文件夹，其中的client文件夹里放的是超级图库服务器软件的安装程序，如下图：</p>
          <div class="image"><img src="images/install_client_1.gif" alt=""></div>
          <p>进入client文件夹，运行里面的setup.exe文件。这时出现软件安装界面，如下图：</p>
          <div class="image"><img src="images/install_client_2.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_client_3.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_client_4.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_client_5.gif" alt=""></div>
          <p>按“下一步”。</p>
          <div class="image"><img src="images/install_client_6.gif" alt=""></div>
          <p>安装过程开始。过一会后，出现提示完成的对话框，如下图：</p>
          <div class="image"><img src="images/install_client_7.gif" alt=""></div>
          <p>确认勾选了“运行超级图库客户端”，然后按“完成”按钮。</p>
          <p>超级图库服务器被运行，过一会后出现如下对话框：</p>
          <div class="image"><img src="images/install_client_8.gif" alt=""></div>
          <p>按OK按钮试用。</p>
          <div class="image"><img src="images/install_client_9.gif" alt=""></div>
          <p>在超级图库客户端的菜单中选“服务器”-&gt;“添加图库服务器”。</p>
          <div class="image"><img src="images/install_client_10.gif" alt=""></div>
          <p>按上图说明填写服务器属性对话框，然后按“确定”按钮。</p>
          <div class="image"><img src="images/install_client_11.gif" alt=""></div>
          <p>用鼠标点击新添加的服务器。</p>
          <div class="image"><img src="images/install_client_12.gif" alt=""></div>
          <p>注意新建的服务器里都是空的，没有任何文件夹和文件。用户需要自己建立文件夹，添加文件。具体操作参见软件的帮助文档。</p>
          <p>如果服务器连接失败，请做以下检查：</p>
          <ol>
            <li>超级图库服务器是否已经启动。</li>
            <li>是否安装了网络防火墙，如果安装了，应该允许服务器和客户端软件访问网络。</li>
            <li>用户名和密码是否填写正确，注意大小写。</li>
            <li>IP地址是否填写正确。</li>
            <li>如果还不成功，重新启动一下计算机也许能解决问题。</li>
          </ol>
          <div class="top"><a href="#top">^ 返回顶部</a></div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include ('footer.php');
  ?>
</body>
</html>
