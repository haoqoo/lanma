<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
  $title = "产品介绍-超级图库管理软件网络版";
  $keywords = "产品介绍,超级图库管理软件,SuperLib,网络版,蓝码动力";
  $description = "超级图库管理软件网络版产品介绍:功能介绍,运行环境,演示录像,常见问题解答,成功案例,解决方案,专题文章,软件下载,软件购买";
  include ('meta.php');?>
</head>

<body>
  <?php  include 'header.php';?>
  <div class="subbanner"><div class="banner_pro"></div></div>

  <div class="main">  
    <div class="content">    
      <div class="here"><a href="index.php">首页</a> >> <a href="products.php">产品</a>   >> <a href="superlib_network.php">网络版</a> >> 常见问题解答</div>
      <div class="con_m"> 
       <?php $active="faq"; include 'superlib_network_left.php'; ?>
       <div class="con_r">
         <ul>
          <li>售前咨询
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">超级图库管理软件网络版是BS架构的还是CS架构的?</a>
                <div class="divAnswer" style="display: none;">
                  超级图库管理软件网络版同时支持BS架构和CS架构，也就是说，既可以用网页浏览器（IE、Safari、Firefox、Chrome、Opera等）访问图库，也可以用客户端软件访问图库。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我可以先试用一下吗？</a>
                <div class="divAnswer" style="display: none;">
                  当然可以。您可以直接在官网上的“<a href="online_trial.php" target="_blank">在线试用</a>”栏目进入试用，也可以在“下载中心”中将软件下载下来，安装到您自己的电脑上进行试用。<br>
                  超级图库管理软件同时支持BS架构和CS架构，“在线试用”栏目中展示的是BS架构的部分，您通过网页直接访问我们公司预先安装好的图库服务器进行试用。<br>
                  从下载中心中下载的安装软件安装包，包括了服务器软件、控制台软件和客户端软件，尚未包括Web访问（网页访问）的部分。如果您需要，请<a href="contact.php" target="_blank">联系我们</a>索取Web部分的安装包和安装指南。
                </div>
              </li>
            </ul>
          </li>
          <li>注册、购买和升级
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">未注册版在功能上有什么限制?</a>
                <div class="divAnswer">
                  有以下限制：<br>
                  1. 在使用客户端软件时，做了一定次数的操作后，会有要求注册的对话框提示。如果使用网页访问图库，或使用控制台软件进行管理操作，都不会有要求注册的提示。<br>
                  2. 只能建立六个目录或子目录。<br>
                  3. 对于超级图库管理软件网络版，未注册版只有3个试用节点。使用网页、客户端和控制台软件都会占用节点。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">如何购买软件?</a>
                <div class="divAnswer">
                  您可以直接与我们联系。
                  Tel: 010-62363364 010-62041191            E-mail:<a href="mailto:ycf888@263.net">ycf888@263.net</a> 
                  QQ:<a href="tencent://message/?Uin=563965672">563965672</a>
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">购买后，如何得到网络版的注册码?</a>
                <div class="divAnswer">
                  首先安装好超级图库服务器软件，然后运行它，在服务器软件界面上按“注册”按钮，进入注册对话框。自己取一个用户名，将用户名和申请码发送给我们，我们会根据您购买的节点数、模块和申请码，计算出注册码发送给您。您再将注册码、用户名和节点数准确填入注册对话框，按“注册”按钮即可注册成功。<br>需要注意的是，注册成功后，必须重新启动服务器软件才能生效。如果使用客户端软件访问图库，需要在客户端进行“网络版、企业版授权”的操作，才能最终完成注册过程；如果使用网页访问图库，则不需要做额外的操作。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我现在用的是单机版，将来要升级成网络版，数据能保留吗？</a>
                <div class="divAnswer">
                  可以的。超级图库网络版和单机版的存储区结构和数据库的数据结构是相同的，因此在安装了网络版之后，用单机版的数据库和文件存储区覆盖网络版的数据库和文件存储区即可。购买网络版后，可联系我们进行在线协助。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我将来要换个大些的硬盘，数据能倒到大硬盘上吗？</a>
                <div class="divAnswer">
                  可以的。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">是不是不注册, 客户端的企业版授权操作就不成功啊？</a>
                <div class="divAnswer">
                  不注册就授权不成功，确实如此。注册后才能授权。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我们的电脑上登录的用户不固定，比如今天这台电脑一个人用，明天第二个人用。这时做企业版、网络版授权的用户名填什么？</a>
                <div class="divAnswer">
                  那就由管理员建立一个公用帐号好了，这个帐号只用来授权，其他权限都不给。比如用户名user, 密码user。每台都用这个公用的来授权。
                </div>
              </li>
            </ul>
          </li>
          <li>安装、设置和连接
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">我需要安装BS架构的，怎么安装？</a>
                <div class="divAnswer">
                  首先您准备一台电脑，安装Windows 2003 Server或Windows 2008 Server操作系统。实在不行，Win7专业版或旗舰版也可以。然后您<a href="contact.php" target="_blank">联系我们</a>索取Web部分的安装包和安装指南，我们会全程协助您安装。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我安装了超级图库网络版，请问客户端怎么连接服务器？</a>
                <div class="divAnswer">
                  首先您要保证服务器端已经打开了；然后在客户端的菜单中找到“服务器”——“添加图库服务器”，在出现的窗口中需要填写：<br>
                  1.服务器名称：(随便填写)；<br>
                  2.IP地址：填写服务器的IP地址(若服务器在本机可以写localhost)；<br>
                  3.端口号：填写服务器端相应的端口号(默认为8192，如果服务器端的端口号没有改动，这里不需要变动)；<br>
                  4.用户名：Administrator(这是软件默认管理员用户，也可使用控制台中新建的用户；注意大小写)；<br>
                  5.密码：admin(此为管理员默认密码；注意大小写)。<br>
                  然后“确定”，当目录窗口中新加的服务器变为绿色小箭头表示已经连接成功。<br>
                  以上所说的步骤，在软件安装包中的安装指南（一个chm文件）中都有描述，请仔细阅读。<br>
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我在安装超级图库管理软件网络版的服务器后如何设置数据库？</a>
                <div class="divAnswer">
                  在您安装超级图库网络版的服务器，第一次打开时系统会提示您选择数据库类型。一般我们使用第一种数据库类型——Access数据库即可正常的使用了。您只需完成安装，选择Access数据库即可完成服务器设置。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我安装了超级图库管理软件，请问要怎么配置服务器呢？</a>
                <div class="divAnswer">
                  一般来说，服务器端安装后是不需要配置就可以使用的，它默认的数据库是Access，默认的端口是8192。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">服务器端选Access数据库，这时如果服务器上没有装office软件，这个图库可以用吗？</a>
                <div class="divAnswer">
                  可以用。windows自带Access数据库的引擎，不需要安装Access软件。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">如果图片数量特别多了, 使用Access数据库合适还是使用Sql Server合适？</a>
                <div class="divAnswer">
                  图片数量在十几万张范围内，适用Access数据库。如果以后特别大，可以转换为SqlServer数据库，或者用MySQL数据库也可以。用Access数据库维护工作方便。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">从Access数据库转换到SqlServer数据库，是否可以直接转换啊，直接转换完后客户端不用做任何改动吧？</a>
                <div class="divAnswer">
                  在服务器界面上直接转换，客户端不用改动。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">现在我们准备安装超级图库软件，我使用的是网络版, client，console，server都要安装吗？三个文件有安装顺序吗？</a>
                <div class="divAnswer">
                  都要安装. 没有顺序要求，但我一般先装server，再装console和client.
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">为了避免以后重装麻烦，我把它们都装到G盘中，这样是不是重装后就无需做任何改动，重装后，直接在G盘找到运行文件，超级图库还会正常运行？</a>
                <div class="divAnswer">
                  是的，没错.
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我在客户端添加了服务器, 用户名和密码应该填什么? </a>
                <div class="divAnswer">
                  用户名必须是Administrator,密码必须是admin，区分大小写; 除非你在控制台创建了新的用户, 或修改了Administrator的密码. 建议尽快通过控制台修改Administrator用户的密码, 以确保安全. 
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我们的服务器有两个IP，一个是为服务器专线的IP，另一个是局域网为服务器分配的IP，是用哪个呢？</a>
                <div class="divAnswer">
                  都可以用，看你客户端放在哪里了．如果放在外网，就用服务器的外网IP; 如果放在内网，就用服务器的内网IP。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我用用户名登录客户端后，勾选了记住密码，当我用其他用户登陆时，如何显示登陆界面？</a>
                <div class="divAnswer">
                  要换用户时，在目录树中右键点击服务器，选属性，然后修改用户名和密码。
                </div>
              </li>
            </ul>
          </li>
          <li>超级图库管理软件的性能
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">请问超级图库管理软件最大支持多大的容量，可以建立上百G的图片库嘛？</a>
                <div class="divAnswer">
                  可以建立。即使建立几十个T的图库也没有问题。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">超级图库管理软件在对文件说明时字长有限制吗?</a>
                <div class="divAnswer">
                  超级图库管理软件对单个文件的说明,若输入汉字说明可以达到30000字左右,输入英文说明可以达到60000字左右.所以您在对文件进行说明是不必考虑文字过长的问题.
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">在超级图库管理软件中对文件夹的层级有没有限制呢?</a>
                <div class="divAnswer">
                  超级图库管理软件中文件夹的层级没有任何限制,用户定义的文件夹层级几乎可以无限延伸.
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">超级图库管理软件支持那些文件类型?</a>
                <div class="divAnswer">
                  超级图库管理软件支持WINDOW操作系统所有文件类型,并且可对常见的30种图形图象文件生成缩略图浏览.并且所有在Windows资源管理器中能显示缩略图的文件类型（包括avi, mov, max, cdr等类型），都可以在超级图库中自动生成缩略图。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">超级图库管理软件网络版能在互联网中使用吗？</a>
                <div class="divAnswer">
                  超级图库管理软件基于TCP/IP协议，能够在局域网和互联网中使用，在互联网中服务器只要有一个静态的互联网IP地址即可。互联网用户可以通过网页访问图库服务器，也可以安装客户端软件来访问图库服务器。<br>
                  如果服务器没有静态的互联网IP地址，可以借助花生壳、3322.org等动态域名解析工具来解决。如果服务器位于局域网内部，可通过配置路由器的端口映射（或称“虚拟服务器”）来提供外部访问。
                </div>
              </li>
            </ul>
          </li>
          <li>存储区
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">现在能买到的硬盘最大才2T一个，如果要存8T的图库，要用4个才行。我应该怎样操作，才能用上这4块硬盘？</a>
                <div class="divAnswer">
                  使用超级图库管理软件服务器端的“存储区管理”功能，可依次将四块硬盘添加成为“存储区”。请见帮助文档中的<a href="save_server.htm">存储区管理</a>。如果您的服务器电脑支持，还可以用RAID功能把这四张硬盘做成磁盘阵列，或者单独购买一个磁盘阵列柜也可以，这样设置一个存储区就可以了。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我们单位购买超级图库后，将服务器端安装到了D盘，现在由于图库太大，D盘空间不够用了，怎么办？</a>
                <div class="divAnswer">
                  超级图库从V3.2.00版之后，在服务器端增加了“存储区管理”功能，您可以新增多个存储区，这样就可以无限增加新的存储空间。不过，推荐的方法是换成更大的硬盘，或磁盘阵列柜。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">现在我们的素材都存储在F区，大约4500G，我们准备先把上传超级图库的文件存在G区里，可以设定存储路径先G以后存储满了后再存F区吗？</a>
                <div class="divAnswer">
                  在存储区管理界面里，调整一下存储区的顺序，然后将图库服务器软件重新启动一次就可以了. 请参见此部分的 <a href="save_server.htm">详细说明</a>。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">如果图片文件太大了，硬盘不能够装下了，它是会报错呢，还是自动去顶原来的文件？</a>
                <div class="divAnswer">
                  会报错。
                </div>
              </li>
            </ul>
          </li>
          <li>图库备份和转移
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">我想购买超级图库管理软件，但有个问题：我若每次重装系统又要重装超级图库，那我辛苦整理的岂不白费了，可以完整备份吗？</a>
                <div class="divAnswer">
                  当然可以了。如果您使用的是超级图库管理软件单机版，只要备份整个超级图库安装目录就可以了。例如，超级图库安装在c:\program files\superlibClient目录下，您将c:\program files\superlibClient目录下的所有内容都备份起来就可以。重装系统后，将备份的内容拷贝到原来的目录下(一定要与重装前的路径完成相同)，这样就可以使用了。如果是网络版请您将服务器端的安装目录和所有存储区都备份，重装系统之后将备份的服务器端安装目录与所有存储区再复制粘贴到重装系统前的路径下。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我把超级图库软件安装在C盘了，现在将把软件转移到D盘上，请问要怎么做？</a>
                <div class="divAnswer">
                  因为客户端、服务器端、控制台端的转移的情况都不一样，所以我们分情况进行了说明，<a href="move_d.php">请点击查看</a>。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">如果超级图库软件服务器端装在C盘下，而存储区在D盘中，当服务器重装系统时，应该怎样备份和恢复？</a>
                <div class="divAnswer">
                  您可以这样做：如果超级图库软件服务器端装在C盘下，而存储区在D盘中，当服务器重装系统时，可以这样做：重装前在C盘的超级图库安装目录下，把数据库文件拷贝出来；然后重装系统，再在C盘中安装超级图库服务器端，然后把您拷贝的数据文件再放到这个目录下，这时整个图库和重装系统前是一样的。
                </div>
              </li>
            </ul>
          </li>
          <li>DWG相关
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">超级图库管理软件对dwg文件有那些支持？</a>
                <div class="divAnswer">
                  对于dwg文件超级图库管理软件中可以以缩样图的形式进行预览，并且直接双击使用AutoCAD打开。在使用Auto CAD 打开时，超级图库管理软件会自动检测本地安装的AutoCAD所有版本，用户可以对AutoCAD的版本进行选择。 超级图库管理软件可以将dwg文件做插入和替换操作，并且对插入操作有详细的设置。您可以选择dwg文件在属性中对dwg文件的插入进行设置。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我是一个新手我从网上下载的标准件是否也能应用到超级图库管理软件里？</a>
                <div class="divAnswer">
                  能。将标准件的dwg文件导入到超级图库管理软件中就可以了。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">为何超级图库管理软件中没有图块？</a>
                <div class="divAnswer">
                  超级图库是图库管理软件，本身是不带图块或图片资源的，需要使用者自己添加。另外，在我们的网站上收集了很多资源下载网站地址，<a href="photoresource.php">请点击此处查看</a>。
                </div>
              </li>
            </ul>
          </li>
          <li>控制台
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">如何修改我的控制台管理员密码呢，密码的类型有什么要求吗？</a>
                <div class="divAnswer">
                  修改控制台的管理员密码和修改普通用户的密码一样。在控制台中选择管理员Administrator，右键选择修改，输入原始密码后输入新密码。密码的类型是有要求的，首先您的密码最好不要使用符号来代替，例如* ※ ％等等，密码长度不要超过16个字符（建议使用常规数字或字母），而且对于用户名和密码时区分大小写的。在客户端中，用户也可以修改自己的密码。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">为什么我在使用超级图库管理软件客户端对图库中的文件夹进行了修改，在控制台的内容却没有变动呢？</a>
                <div class="divAnswer">
                  您在客户端对图库中的文件夹进行修改后，需要在控制台中点击右键选择刷新，这样控制台的信息就会更新。建议在您使用控制台时进行内容刷新。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">请问在权限管理时，如果“A用户”在“B组”里，我给“A用户”设置“浏览”权限，给“B组”设置“下载”权限，请问A用户上线时他都有什么权限？</a>
                <div class="divAnswer">
                  这种情况下“A用户”有“浏览”和“下载”两个权限，“浏览”权限是他本身有的，“下载”权限是他继承“B组”的。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">我把给一个用户最大权限了，为什么他还不是管理员？</a>
                <div class="divAnswer">
                  我想您把用户与管理员权限混了，您说的应该是用户的五个权限，这只是用户访问图库时的权限；超级图库有个单独的界面专门用于管理员的添加，打开“控制台”——“权限管理”——“管理”。
                </div>
              </li>
            </ul>
          </li>
          <li>自定义属性
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">公司里的图库中大多存放摄影图片，我需要把这些图片的作者、图片创建日期、图片拍摄地点等其它信息进行标注，方便我以后查看或查找，应该怎么做呢？</a>
                <div class="divAnswer">
                  您可以使用超级图库管理软件的自定义属性功能来对这些信息进行标注。首先进行属性定义，如<span class="main_h2">图片的作者、图片创建日期、图片拍摄</span>等，这样超级图库就知道每个文件都具备这些属性了。然后对每个文件输入具体的属性值，即每个文件的作者、日期、拍摄地点等。在您需要查找时您可以点击搜索，指定不同的属性输入作者、日期、地点、内容等进行搜索。
                </div>
              </li>
            </ul>
          </li>
          <li>快速分类
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">公司每天需要添加大量的图片、图形文件，在添加时需要对每个文件进行详细的分类。超级图库管理软件对图片的分类的操作方便吗？</a>
                <div class="divAnswer">
                  首先超级图库管理软件支持文件的多重分类操作，也就是一个文件可以有多个文类。而且在超级图库管理软件中一个文件被进行多重的分类并不只是把文件进行复制而是在数据库中增加一条引言。这样不会增加重复文件的数量，大大节约了您的磁盘空间。其次，超级图库管理软件支持快速分类操作。以往当您要对大量的文件进行分类操作时可能需要对这些文件一个个进行复制粘贴操作，非常繁琐。而超级图库管理软件中您可以选择需要分类的一个文件，点击快速分类。在快速分类中您只需在文件夹前打勾就可以完成文件的分类。
                </div>
              </li>
            </ul>
          </li>
          <li>搜索
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">超级图库管理软件的搜索功能支持那些内容的搜索？支持模糊搜索吗？</a>
                <div class="divAnswer">
                  超级图库管理软件支持对文件说明内容、文件名、文件格式而且可以选择搜索的范围。超级图库管理软件支持模糊搜索。
                </div>
              </li>
            </ul>
          </li>
          <li>客户端界面
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">我的安装的超级图库客户端菜单栏不小心被我拖动，现在找不到了怎么办？</a>
                <div class="divAnswer">
                  超级图库从V3.2.12版开始增加了一个“恢复各视图原始位置”功能，可以在“菜单栏”的“查看”中找到“恢复各视图原始位置”，或使用快捷键 Ctrl+F5。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">客户端登录服务器后，显示很多树状结构的文件夹，然后文件夹里有些有图片有些没有，请问是不是空文件夹？还是图片无法显示？</a>
                <div class="divAnswer">
                  如果无法显示，会提示有错误的. 如果没有提示有错误，就是空文件夹.
                </div>
              </li>
            </ul>
          </li>
          <li>导入
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">我想购买超级图库管理软件，但由于单位放假，我想在放假期间先在笔记本上安装超级图库，然后完成导图过程，等假期结束再从我的笔记本上导到单位服务器上可不可以？</a>
                <div class="divAnswer">
                  是可以的，建议你在笔记本上安装时，不要修改存储区，这样图库存放在服务器端的安装目录下，等到您单位上班时，直接把整个服务器安装目录拷贝到单位服务器上就可以了，注意的是服务器端的粘贴路径应该与笔记本上的安装路径相同。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">为什么我将图库中导文件时，只能导入图片，而word这些文件却导不进去？</a>
                <div class="divAnswer">
                  请您点击“菜单栏”的“服务器”——“管理文件类型”，此处有三个选项，默认为第一项，你可以选择“接受所有类型的文件”，这样就能导入word文件了。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">关于超级图库我有个问题不太明白，比如我上传一个图片时，如果图库里已有内容相同的一个图片，它是否会提示我？</a>
                <div class="divAnswer">
                  不会提示，但当您上传一个文件时，软件会自动搜索图库中是否已经有内容完全相同的文件(即我们所说的重复文件)，如果没有，软件会将这个新加文件上传到图库中；如果图库中已有此文件的重复文件，就只增加一个目录索引，而不再将此文件上传。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">CDR文件怎么上传不进去？是不是有什么设置?</a>
                <div class="divAnswer">
                  在客户端的“服务器”菜单里, 有“管理文件类型”. 选择“接受所有文件类型”，或者单独增加接受CDR文件类型都可以。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">正常的上传速度大约是多少？我传4G的文件夹用了很长时间.</a>
                <div class="divAnswer">
                  耗时是直接拷贝的2倍, 因为要检测重复文件，还要制作缩略图，以及智能压缩。
                </div>
              </li>
              <li>
                <a href="javascript:;" class="linkQuestion">为什么我导入avi文件没有产生缩略图？</a>
                <div class="divAnswer">
                  首先要看您的电脑的资源管理器中是否可以看到avi文件的缩略图。如果能看到，则应在此电脑上用超级图库客户端上传avi文件。
                </div>
              </li>
            </ul>
          </li>
          <li>真实文件说明
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">请问超级图库中的说明与真实文件说明有什么区别？</a>
                <div class="divAnswer">
                  把一个文件进行多重分类之后，在某一分类目录下对此文件的说明添加新的注释，其它分类目录下，此文件的说明不变；而如果是在某一分类目录下对此文件的真实文件说明添加新的注释，其它分类目录下，此文件的真实文件说明也相应的改变。<a href="diff.php">请点击此处了解更详细的介绍</a>。
                </div>
              </li>
            </ul>
          </li>
          <li>重复文件
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">如果两个图片内容相同，但文件类型不同，比如一个gif一个jpg，图库是否认为他们是重复文件？</a>
                <div class="divAnswer">
                  只有每个字节都一样的两个文件，才是重复文件。一个gif一个jpg，可能有很多字节不同，系统不认为它们是重复文件。
                </div>
              </li>
            </ul>
          </li>
          <li>智能压缩
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">智能压缩是在哪一端完成的，速度如何？</a>
                <div class="divAnswer">
                  智能压缩功能中，这个压缩过程是在客户端完成的，压缩后再上传给服务器，这样就减轻了服务器的负担，它的压缩速度跟windows中的winzip的压缩速度是一样的。
                </div>
              </li>
            </ul>
          </li>
          <li>删除
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">我在客户端的显示界面上用右键功能删除文件，但是在后台的file夹里还存在，请问我如何把文件完全删除，使其不再占用硬盘空间呢？</a>
                <div class="divAnswer">
                  如果将所有文件都在客户端删除了，后台的file文件夹中的文件也会被全部删除的。如果只在客户端删除了一个或几个文件，就有不同的情况。如果是被删除的文件有与之相同的重复文件，则删除操作只删除数据库中的一条引用记录，真实的磁盘文件不会被删除；只有将所有的重复文件都删除之后，真实的磁盘文件才会被自动从files目录中删除。另外，删除文件时，系统首先会把文件移动到回收站中，只有在回收站中再次删除后，才能真正删除此文件。
                </div>
              </li>
            </ul>
          </li>
          <li>水印
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">水印有什么作用？如何操作？</a>
                <div class="divAnswer">
                  请参见我们的专题文章<a href="pdf/superlib_watermark.pdf" target="_blank">《如何使用超级图库管理软件中的水印设置功能》</a>。
                </div>
              </li>
            </ul>
          </li>
          <li>借阅
            <ul>
              <li>
                <a href="javascript:;" class="linkQuestion">客户端做借阅操作，控制台同意后客户端如何看到?</a>
                <div class="divAnswer">
                  控制台同意后，客户端看不到，是人工通知的。
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
        
          <script type="text/javascript">
              $(document).ready(function () {
              $(".linkQuestion").click(function() {
                $(this).next().toggle();
              });
              });
          </script>
     
      </body>
      </html>
