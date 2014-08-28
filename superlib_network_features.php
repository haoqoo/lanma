<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
  $title = "功能介绍 超级图库管理软件网络版 蓝码动力";
  $keywords = "功能介绍,图片管理,照片管理,解决方案,超级图库管理软件,SuperLib,网络版,蓝码动力";
  $description = "超级图库管理软件功能介绍:文件夹及文件,浏览,文件夹管理,文件管理,搜索,选择集,搜索树,重复文件识别,查找相似图片,用户管理,用户组管理,管理用户组和用户的关系,权限管理,日志管理,软件配置,工具,界面定制";
  include ('meta.php');?>
</head>

<body>
  <?php include 'header.php'; ?>

  <div class="subbanner"><img src="images/banner_pro.png" width="1200" height="225" /></div>

  <div class="main">  
    <div class="content">    
      <div class="here"><a href="index.php">首页</a> >> <a href="products.php">产品</a>   >> <a href="superlib_network.php">网络版</a> >> 功能介绍</div>
      <div class="con_m"> 
        <?php $active="features"; include 'superlib_network_left.php'; ?>
        <div class="con_r">
          <div class="text3">
            <p>超级图库是一个图库管理软件，是您图片管理，照片管理，相片管理，图纸管理的好帮手，广泛应用于各行各业，包括装饰设计、出版社、编辑部、报社、设计院、摄影、政府部门、医院 、电子、网站建设、研究机构、各单位党委宣传部等。</p>
            <p>SuperLib软件提供了多种强大功能，用户可以根据自身的需要灵活的应用。如果您将它用来存储照片和相片，它就是一个照片管理系统和相片管理系统；如果将它用来存储图片素材，它就是一个图片管理软件；如果您用它来存放CAD图纸，它就是一个CAD图纸管理系统；您也可以用它来存放非图形图像类的文件，如doc, xls等文件，将它作为文档管理系统来用。SuperLib软件提供各种定制方法，使得软件可以适应各种行业、各种单位的需求。</p>
            <p>SuperLib软件网络版将图片资源、相片资源、图纸资源、照片资源存放在服务器上，用户可以通过超级图库客户端软件或网页浏览器来访问图库资源，图库管理员可以通过超级图库控制台来对服务器进行远程管理。</p>
            <center><img src="images/superlibNetwork.jpg" alt=""></center>
          </div>

          <div class="title"><a name="folder_file">文件夹及文件</a></div>
          <div class="text3">
            <p>可建立多级虚拟文件夹，文件夹的级数和文件夹中可存放的文件数没有限制。</p>
            <p>可存放多种格式的图片，图片格式包括jpg、png、gif、tif、psd等主流图像格式。</p>
            <p>可对文件夹和文件进行重命名、删除、复制、移动、导入、导出等操作。</p>
            <p>图片文件入库后，会自动生成缩略图和预览图，同时保存原图。预览图是指尺寸比计算机屏幕尺寸略小的图片，它可以较为清晰地显示图片的内容，但比高清的原始图片尺寸小。通常预览图为640x480或800x600像素，而高清原图为2592x1944、3620x2414等大尺寸。使用预览图，可显著提高浏览速度，降低网络带宽占用量。当需要仔细观察或下载时，才使用原图。</p>
            <p>其他格式的文件（如word、excel、PPT、DWG等格式）也可入库，只是无法自动生成缩略图和预览图，其它功能均可正常使用。用户可以自己制作好缩略图和预览图并上传。</p>
          </div>

          <!--浏览-->
          <div class="title"><a name="browse">浏览</a></div>
          <div class="text3">
            <ul>
              <li>目录树视图和文件列表视图</li>
              <p>在客户端软件和控制台软件中均提供目录树视图和文件列表视图，如下图所示。</p>
              <center><img src="images/superlib_network_features_001.jpg" alt="客户端软件中显示的目录树和文件列表"></center>
              <p class="image_name">客户端软件中显示的目录树和文件列表</p>

              <center><img src="images/superlib_network_features_002.jpg" alt="网页浏览器中显示的目录树和文件列表"></center>
              <p class="image_name">网页浏览器中显示的目录树和文件列表</p>

              <p>客户端的文件列表除了提供缩略图形式的视图外，还提供大图标、小图标、列表、详细资料视图，其中详细资料视图还可选择显示各列的信息，如下图所示。</p>
              <center><img src="images/superlib_network_features_003.jpg" alt="在客户端软件中的文件列表的详细资料视图"></center>
              <p class="image_name">在客户端软件中的文件列表的详细资料视图</p>

              <p>客户端的文件列表不论处于哪种视图模式，都可选择排序方式，可按名称、大小、时间等各种属性排序，如下图所示。</p>
              <center><img src="images/superlib_network_features_004.jpg" alt="在客户端软件中的排序方式选择对话框"></center>
              <p class="image_name">在客户端软件中的排序方式选择对话框</p>

              <div class="go_top"><a href="#top">^ 返回顶部</a></div>
              <li>查看预览图和原图</li>
              <p>在客户端中，双击一张图片，可打开软件内置的看图窗口，如下图所示。</p>
              <center><img src="images/superlib_network_features_005.jpg" alt="客户端软件中的看图窗口"></center>
              <p class="image_name">客户端软件中的看图窗口</p>

              <p>在此看图窗口中，根据用户的权限不同，软件会自动选择显示预览图或原图。当用户对此图片只有浏览权限时，看图窗口会显示图片的预览图。当用户对此图片有下载权限时显示原始图片。</p>
              <p>看图窗口的功能，包括放大、缩小、全图充满显示、1:1显示（实际尺寸）、平移、上一张、下一张、幻灯片播放等。</p>
              <p>在网页浏览器中，点击一张图片的缩略图后，进入查看文件详情页面，如下图所示。</p>

              <center><img src="images/superlib_network_features_006.jpg" alt="网页浏览器中的查看文件详情界面"></center>
              <p class="image_name">网页浏览器中的查看文件详情界面</p>

              <p>在网页浏览器的查看文件详情页面中，显示了图片的预览图和各种属性。我们在后面会再解释这些属性。</p>
              <p>可以点击上一张、下一张或直接跳转到第n张。点击"查看原图"链接后，可查看高清原图，如下图所示。</p>

              <center><img src="images/superlib_network_features_007.jpg" alt="网页浏览器中的查看原图页面"></center>
              <p class="image_name">网页浏览器中的查看原图页面</p>

              <p>在查看原图页面中，可以进行放大、缩小，支持用鼠标滚轮进行放大缩小操作，还有"充满显示"和"全屏切换"按钮。</p>
            </ul>
          </div>

          <!--文件夹管理-->
          <div class="title"><a name="folder_management">文件夹管理</a></div>
          <div class="text3">
            <p>可以在客户端软件中对文件夹进行创建、删除、重命名、移动、复制、导入、导出等操作。</p>
            <ul>
              <li>创建文件夹</li>
              <p>在客户端软件的目录树中，用鼠标右键点击服务器图标，在快捷菜单中点击"新建文件夹"，即可在根目录上创建一级文件夹。要创建子文件夹，在目录树中的父文件夹上点击鼠标右键，然后点击"新建文件夹"即可。也可以在选中父文件夹之后，在顶菜单中选择"文件"/""，如下图所示。</p>
              <center>
                <img src="images/superlib_network_features_008.jpg" alt="在客户端中创建文件夹:方法1">
                <img src="images/superlib_network_features_009.jpg" alt="在客户端中创建文件夹:方法2">
              </center>
              <p class="image_name">在客户端中创建文件夹的两种方法</p>
              <p>在"新建目录"对话框中，输入目录名称和说明，然后按"确定"按钮。</p>
              <center><img src="images/superlib_network_features_010.jpg" alt="客户端的" 新建目录"对话框"=""></center>
              <p class="image_name">客户端的"新建目录"对话框</p>
              <p>关于说明，我们会在后面讨论到。</p>

              <li>删除文件夹</li>
              <p>在客户端软件中，在目录树中选中一个文件夹，然后按"Delete"键，确认删除后即可删除此文件夹。或者用鼠标右键点击文件夹，选择"删除"，如下图所示。</p>
              <center><img src="images/superlib_network_features_011.jpg" alt="在客户端软件中用鼠标右键菜单删除文件夹"></center>
              <p class="image_name">在客户端软件中用鼠标右键菜单删除文件夹</p>
              <p>也可以在下拉菜单中选择"文件"/"删除"，如下图所示。</p>
              <center><img src="images/superlib_network_features_012.jpg" alt="在客户端软件中用下拉菜单删除文件夹"></center>
              <p class="image_name">在客户端软件中用下拉菜单删除文件夹</p>
              <p>还可以使用工具栏中的"删除"按钮，如下图所示。</p>
              <center><img src="images/superlib_network_features_013.jpg" alt="在客户端软件中用工具栏按钮删除文件夹"></center>
              <p class="image_name">在客户端软件中用工具栏按钮删除文件夹</p>
              <p>在网页浏览器中也可以执行删除文件夹的操作。</p>
            </ul>
            <div class="go_top"><a href="#top">^ 返回顶部</a></div>
          </div>

          <!--文件管理-->
          <div class="title"><a name="file_management">文件管理</a></div>
          <div class="text3">
            <ul>
              <li>上传文件</li>
              <p>可通过客户端软件上传文件。</p>
              <li>下载文件</li>
              <p>通过客户端软件和网页浏览器都可以下载文件。</p>
              <p>可下载原始文件。图片文件在上传时，系统自动生成缩略图和预览图，并将原始文件、缩略图和预览图都存储在系统中。而视频文件在上传时，系统自动生成缩略图和预览视频，并将原始视频文件、缩略图和预览视频都存储在系统中。如果用户有足够的权限，则在界面上会出现下载链接，点击后可下载原始文件。</p>
              <p>可批量下载文件。通过客户端软件，可导出单个文件、多个文件或文件夹。通过网页浏览器，在下载单个文件时，直接选择目标文件路径即可下载；在下载多个文件时，系统会首先生成一个zip压缩包，用户下载的是这个压缩包，其中包含要下载的多个文件；在下载文件夹时，整个文件夹首先被生成一个压缩包，然后供用户下载。下载前，系统会检查用户的权限，无权限的用户无法进行下载操作。</p>
              <li>重命名文件</li>
              <p>通过客户端软件和网页浏览器都可以重命名文件。</p>
              <li>删除文件</li>
              <p>通过客户端软件和网页浏览器都可以删除文件。</p>
              <li>移动和复制文件</li>
              <p>通过客户端软件可以移动和复制文件。</p>
              <li>用外部程序打开和编辑文件</li>
              <p>在客户端软件中，可使用客户端电脑上的外部程序对图库的文件进行查看、修改，并提交修改结果。例如，客户端电脑上安装了PhotoShop软件，用户希望对图库中的图片进行编辑。用户可在客户端指令用PhotoShop打开图片文件。这时，图片文件被自动下载到客户端电脑的一个临时区域，并调用PhotoShop打开该临时文件。用户完成修改后存盘，系统会显示此文件已被修改，是否希望提交。如果选择了提交，被修改过的临时文件会上传到服务器中，替换掉原来的文件。系统带有编辑锁功能，可避免同一文件在同一时间被多人修改。</p>
              <li>回收站功能</li>
              <p>软件具有回收站功能。不论用客户端软件还是用网页浏览器删除文件夹或文件，被删除的文件夹或文件都会先进入回收站。用户可通过客户端软件对回收站进行管理，从回收站中找回被误删的文件，或者将文件从系统中彻底删除。</p>
              <li>说明和关键词</li>
              <ul>
                <li>说明</li>
                <p>可以给文件和文件夹添加说明。</p>
                <p>在客户端软件中，说明是在"说明"视图中显示和编辑的，如下图所示。</p>
                <center><img src="images/superlib_network_features_014.jpg" alt="在客户端软件中显示文件的说明"></center>
                <p class="image_name">在客户端软件中显示文件的说明</p>
                <p>在网页浏览器中，说明可以直接显示在文件列表中的缩略图的下方，如下图所示。</p>
                <center><img src="images/superlib_network_features_015.jpg" alt="在网页浏览器中的缩略图下方显示文件的说明"></center>
                <p class="image_name">在网页浏览器中的缩略图下方显示文件的说明</p>
                <p>还可以在查看文件详情页面中显示文件的说明，如下图所示。</p>
                <center><img src="images/superlib_network_features_016.jpg" alt="在网页浏览器的查看文件详情页面中显示文件的说明"></center>
                <p class="image_name">在网页浏览器的查看文件详情页面中显示文件的说明</p>
                <p>可以在客户端软件中，打开说明视图，选中文件或文件夹后，添加、修改、删除对选中的文件夹和文件的说明。</p>
              </ul>
              <li>关键词</li>
              <p>如果手工输入文件和文件夹的说明，工作量较大，并且不容易统一、规范，也不利于搜索。这时可以预先定义一批关键词，并将这些关键词分组管理。在对文件和文件夹进行说明时，直接点击关键词即可完成录入操作；在进行搜索时，直接点击关键词即可完成搜索操作。</p>
              <ul>
                <li>管理关键词</li>
                <p>通过客户端软件和网页浏览器均可管理关键词。</p>
                <p>在客户端软件中，点击下拉菜单"服务器"/"管理关键词"，即可进入管理关键词对话框界面，如下图所示。</p>
                <center><img src="images/superlib_network_features_017.jpg" alt="在客户端软件中的管理关键词对话框"></center>
                <p class="image_name">在客户端软件中的管理关键词对话框</p>
                <p>可以建立很多关键词，也可以建立关键词组，将这些关键词分组管理。</p>
                <p>在网页浏览器中的关键词管理页面如下图所示。</p>
                <center><img src="images/superlib_network_features_018.jpg" alt="在网页浏览器中的管理关键词页面"></center>
                <p class="image_name">在网页浏览器中的管理关键词页面</p>
                <li>给文件添加关键词</li>
                <p>在定义好关键词和关键词组后，可用勾选的方式，给文件添加关键词。</p>
                <p>在客户端软件中，打开关键词视图，选中文件，就可通过勾选添加关键词，如下图所示。</p>
                <center><img src="images/superlib_network_features_019.jpg" alt="在客户端软件中给文件添加关键词"></center>
                <p class="image_name">在客户端软件中给文件添加关键词</p>
                <p>在网页浏览器中也可给文件添加关键词，如下图所示。</p>
                <center><img src="images/superlib_network_features_020.jpg" alt="在网页浏览器中给文件添加关键词"></center>
                <p class="image_name">在网页浏览器中给文件添加关键词</p>
                <p>在做指定关键词操作时，点选列表中的关键词即可。取消关键词时，点击关键词旁边"X"号即可。</p>
                <p>在网页浏览器中，可点击关键词进行搜索操作，如下图所示。</p>
                <center><img src="images/superlib_network_features_021.jpg" alt="在网页浏览器中的关键词搜索列表"></center>
                <p class="image_name">在网页浏览器中的关键词搜索列表</p>
              </ul>
              <li>属性</li>
              <p>可以查看文件的常规属性、图片的特有属性和视频的特有属性。如下图所示。</p>
              <center><img src="images/superlib_network_features_022.jpg" alt="在网页浏览器中查看文件的属性"></center>
              <p class="image_name">在网页浏览器中查看文件的属性</p>
              <p>上图中显示的文件长度、格式、上传日期、上传人、最后修改日期、锁定人等属性，是每个文件都有的，称为文件的常规属性。图像尺寸、X分辨率、Y分辨率、比特位数等为图片文件的特有属性。当图片是由数码相机产生时，还会有光圈、相机厂商、相机型号、压缩级别、拍摄时间、曝光模式等多种EXIF信息。对于视频文件，则有标题、备注、分级、视频时长、宽度、高度、数据速率、总比特率、帧速率、宽高比、音频比特率、音频频道、音频采样率等特有属性。</p>
              <p>可以自定义属性。除了前面所说的说明（关键词）之外，用户还可以根据自身需要对文件和文件夹设置自定义的属性，如规格、型号、价格、生产时间等。自定义的属性可以是文本、整数、实数、布尔（Boolean）、时间等类型。下图所示的来源、类型、颜色、背景、版权等属性就是自定义属性，这些属性原来在系统中是没有的，是由使用单位自行定义的属性。</p>
              <center><img src="images/superlib_network_features_023.jpg" alt="在网页浏览器中显示的文件的自定义属性"></center>
              <p class="image_name">在网页浏览器中显示的文件的自定义属性</p>
            </ul>
            <div class="go_top"><a href="#top">^ 返回顶部</a></div>
          </div>

          <!--搜索-->
          <div class="title"><a name="search">搜索</a></div>
          <div class="text3">
            <p>可对图库进行搜索，包括模糊搜索和条件搜索。搜索条件包括搜索范围、名称、说明、常规属性、特有属性、自定义属性等。</p>
            <p>对图库进行搜索时，搜索结果受权限的控制，只能找到有访问权限的内容，不显示无访问权限的内容。</p>
            <div class="go_top"><a href="#top">^ 返回顶部</a></div>
          </div>

          <!--选择集-->
          <div class="title"><a name="selection_set">选择集</a></div>
          <div class="text3">
            <p>具有选择集功能，方便用户挑选和处理文件。用户将选中的文件加入到选择集中，然后将选择集中的所有文件做集中处理，例如打包下载或申请下载流程等。选择集功能与电子商务网站的购物车功能类似。</p>
            <div class="go_top"><a href="#top">^ 返回顶部</a></div>
          </div>

          <!--下载审批流程-->
          <div class="title"><a name="">下载审批流程</a></div>
          <div class="text3">
            <p>具备下载审批流程。如果不希望某些用户具备直接下载的权限，可以让他们先挑选要下载的内容，然后提交下载申请，通过审批流程后才能下载。审批流程是可以让用户自行定义的，有哪些审批步骤、每个步骤由谁来审批，均可设置。审批完成后，要下载的内容被复制到用户的个人文件夹中，用户对个人文件夹中的文件有直接下载的权限。</p>
            <div class="go_top"><a href="#top">^ 返回顶部</a></div>
          </div>

          <!--搜索树-->
          <div class="title"><a name="search_tree">搜索树</a></div>
          <div class="text3">
            <p>具有搜索树功能。搜索树是一种方便用户浏览和搜索图库内容的树状结构，搜索树的每一个节点是一个搜索条件，点击此节点后即搜索出所有符合条件的文件并显示出来。例如下图的搜索树：</p>
            <center><img src="images/superlib_network_features_024.jpg" alt="在网页浏览器中显示的搜索树"></center>
            <p class="image_name">在网页浏览器中显示的搜索树</p>
            <p>假设已有自定义属性"分类"，各节点对应的搜索条件如下表所示。</p>
            <table>
              <caption>表：搜索树节点及搜索条件示例</caption>
              <tbody><tr><th>节点</th>
                <th>搜索条件</th>
              </tr><tr>
              <td>交通工具</td>
              <td>分类 contains (交通工具)</td>
            </tr>
            <tr>
              <td>交通工具\汽车</td>
              <td>分类 contains (交通工具,汽车)</td>
            </tr>
            <tr>
              <td>交通工具\汽车\小轿车</td>
              <td>分类 contains (交通工具,汽车,小轿车)</td>
            </tr>
            <tr>
              <td>交通工具\汽车\卡车</td>
              <td>分类 contains (交通工具,汽车,卡车)</td>
            </tr>
            <tr>
              <td>交通工具\汽车\公共汽车</td>
              <td>分类 contains (交通工具,汽车,公共汽车)</td>
            </tr>
            <tr>
              <td>交通工具\飞机</td>
              <td>分类 contains (交通工具,飞机)</td>
            </tr>
            <tr>
              <td>交通工具\轮船</td>
              <td>分类 contains (交通工具, 轮船)</td>
            </tr>
          </tbody></table>
          <p>参照下图进行分类属性的设置。下图有9张图片，都属于交通工具和汽车，因此在分类属性中均输入交通工具和汽车。前三张为小轿车，因此在分类属性中加入"小轿车"；中间三张在分类属性中加入"卡车"，后面三张在分类属性中加入"公共汽车"。指定了属性之后，在搜索树中点击"汽车"，就会看到全部9张图片；点击"小轿车"节点，就只看到三张小轿车的图片，其余类推。</p>
          <center><img src="images/superlib_network_features_025.jpg" alt="分类属性的设置"></center>
          <p class="image_name">分类属性的设置</p>
          <div class="go_top"><a href="#top">^ 返回顶部</a></div>
        </div>

        <!--重复文件识别-->
        <div class="title"><a name="duplicated_file">重复文件识别</a></div>
        <div class="text3">
          <p>具有识别重复文件功能。所谓重复文件，就是文件内容完全相同的文件，即组成文件的每一个字节都相同。对于重复文件，不论文件的名称是否相同，都只占用一个文件的磁盘存储空间，增加一个重复文件，只是在图库数据库中增加了一条引用记录而已，几乎不多占用磁盘空间。这对大量搜集整理资料非常有好处。</p>
          <center><img src="images/superlib_network_features_026.jpg" alt="重复文件识别"></center>
          <p>具有多重分类的功能，即同一个文件可以存放在多个文件夹中。例如，一个图片是一个风景照片，里面有汽车和树。那么这个图片可以放在"风景"文件夹中，同时还可以放在"汽车"文件夹和"树木"文件夹中，这三个重复文件只占用一个文件的磁盘存储空间。</p>
          <center><img src="images/superlib_network_features_027.jpg" alt="多重分类功能"></center>
          <p class="image_name">多重分类功能</p>
          <div class="go_top"><a href="#top">^ 返回顶部</a></div>
        </div>

        <!--查找相似图片-->
        <div class="title"><a name="similar_image">查找相似图片</a></div>
        <div class="text3">
          <p>具备查找相似图片功能。所谓相似图片，是指图片的内容相似，但是图片格式、大小、色调、旋转角度等均可能不同，还可能经过不同的裁剪。查找相似图片功能可以对用户指定的文件或文件夹进行搜索，找出所有相似度满足要求的图片，并按相似度排序显示出来，用户可进行对比、清理。</p>
          <center><img src="images/superlib_network_features_028.jpg" alt="在客户端软件中查找相似图片"></center>
          <p class="image_name">在客户端软件中查找相似图片</p>
          <p>具备以图找图功能。可以用一张图片，到图库中去查找相似的图片。</p>
          <center><img src="images/superlib_network_features_029.jpg" alt="在客户端软件中以图找图"></center>
          <p class="image_name">在客户端软件中以图找图</p>
          <div class="go_top"><a href="#top">^ 返回顶部</a></div>
        </div>

        <!--用户管理-->
        <div class="title"><a name="user_management">用户管理</a></div>
        <div class="text3">
          <p>系统初始安装完毕后，系统中只有一个内置的超级管理员用户，其用户名为"Administrator"，密码为默认的"admin"。管理员用此身份登录后，可修改超级管理员密码，并建立其它用户。</p>
          <p>用户管理的操作，是通过控制台软件进行的。控制台软件也是一种客户端软件。本系统提供两种客户端软件，一种是给普通用户使用的，称为"超级图库客户端"软件；另一种是给管理员使用的，称为"超级图库控制台"软件。</p>
          <ul>
            <li>添加用户</li>
            <p>在控制台软件的"功能树"窗口中选择"用户管理"，然后在右侧的用户列表中点击鼠标右键，在弹出菜单中选择"添加用户"，如下图所示。</p>
            <center><img src="images/superlib_network_features_030.jpg" alt="在控制台软件中添加用户"></center>
            <p class="image_name">在控制台软件中添加用户</p>
            <p>然后在"新用户"对话框中输入名称（登录时使用的用户名）、姓名（备注用）、描述（备注用）、密码等信息，点击"创建"按钮即可创建用户。</p>
            <center><img src="images/superlib_network_features_031.jpg" alt="控制台软件中的" 新用户"对话框"=""></center>
            <p class="image_name">控制台软件中的"新用户"对话框</p>
            <li>删除用户</li>
            <p>可在控制台软件中删除用户。</p>
            <li>修改用户</li>
            <p>可在控制台软件中修改用户的用户名、密码、姓名、描述等信息。</p>
          </ul>
          <div class="go_top"><a href="#top">^ 返回顶部</a></div>
        </div>

        <!--用户组管理-->
        <div class="title"><a name="user_group_management">用户组管理</a></div>
        <div class="text3">
          <div class="go_top"><a href="#top">^ 返回顶部</a></div>
          <p>如果用户数量很多，建议将用户划分为多个用户组，以便更方便地设置权限。也可以把用户组看作"角色"。</p>
          <ul>
            <li>添加用户组</li>
            <p>在控制台软件的"功能树"窗口中选择"用户组管理"，然后在右侧的用户组列表中点击鼠标右键，在弹出菜单中选择"添加组"，如下图所示。</p>
            <center><img src="images/superlib_network_features_032.jpg" alt="在控制台软件中添加用户组"></center>
            <p class="image_name">在控制台软件中添加用户组</p>
            <p>然后在"新建用户组"对话框中输入名称、描述等信息，点击"创建"按钮即可创建用户。</p>
            <center><img src="images/superlib_network_features_033.jpg" alt="控制台软件中的" 新建用户组"对话框"=""></center>
            <p class="image_name">控制台软件中的"新建用户组"对话框</p>
            <li>删除用户组</li>
            <p>可在控制台软件中删除用户组。</p>
            <li>修改用户组</li>
            <p>可在控制台软件中修改用户组的名称、描述等信息。</p>
          </ul>
        </div>

        <!--管理用户组和用户的关系-->
        <div class="title"><a name="user_group_relation">管理用户组和用户的关系</a></div>
        <div class="text3">
          <ul>
            <li>基本概念</li>
            <p>用户组和用户之间是多对多的关系，即一个用户组可以包含多个用户，而一个用户可以隶属于多个用户组。例如，用户张经理、小李属于销售部，王总工、小赵属于技术部。张经理是销售部的部门经理，小李是销售部的普通员工。王总工是技术部的部门经理，小赵是技术部的普通员工。如下表所示。</p>
            <table>
              <caption>用户的部门与职务表</caption>
              <tbody><tr><th>用户</th>
                <th>部门</th>
                <th>职务</th>
              </tr><tr>
              <td>张经理</td>
              <td>销售部</td>
              <td>部门经理</td>
            </tr>
            <tr>
              <td>小李</td>
              <td>销售部</td>
              <td>普通员工</td>
            </tr>
            <tr>
              <td>王总工</td>
              <td>技术部</td>
              <td>部门经理</td>
            </tr>
            <tr>
              <td>小赵</td>
              <td>技术部</td>
              <td>普通员工</td>
            </tr>
          </tbody></table>
          <p>现在建立了4个用户组：销售部、技术部、部门经理、普通员工。根据以上情况，各用户组与用户的包含关系如下表所示。</p>
          <table>
            <caption>用户组与用户的包含关系表</caption>
            <tbody><tr><th>用户组</th>
              <th>包含的用户（成员）</th>
            </tr><tr>
            <td>销售部</td>
            <td>张经理、小李</td>
          </tr>
          <tr>
            <td>技术部</td>
            <td>王总工、小赵</td>
          </tr>
          <tr>
            <td>部门经理</td>
            <td>张经理、王总工</td>
          </tr>
          <tr>
            <td>普通员工</td>
            <td>小李、小赵</td>
          </tr>
        </tbody></table>
        <p>反过来表示，各用户与用户组之间的隶属关系如下表所示。</p>
        <table>
          <caption>用户与用户组的隶属关系表</caption>
          <tbody><tr><th>用户</th>
            <th>隶属的用户组</th>
          </tr><tr>
          <td>张经理</td>
          <td>销售部、部门经理</td>
        </tr>
        <tr>
          <td>小李</td>
          <td>销售部、普通员工</td>
        </tr>
        <tr>
          <td>王总工</td>
          <td>技术部、部门经理</td>
        </tr>
        <tr>
          <td>小赵</td>
          <td>技术部、普通员工</td>
        </tr>
      </tbody></table>
      <p>更进一步，用户组不仅可以包含用户，还可以包含其它用户组。换言之，用户组可以隶属于其它用户组。基本原理与前述相同。</p>

      <li>操作方法</li>
      <p>可以在控制台软件的功能树中的"用户管理"中进行指定用户组与用户关系的操作，也可以在"用户组管理"中进行操作。</p>
      <ul>
        <li>在"添加用户"时指定用户与用户组的隶属关系</li>
        <p>如果在添加用户之前，已经建立了若干用户组，则可在添加用户时同时指定该用户隶属于哪些用户组。</p>
        <p>对于前述的例子，在用户组已经建立好之后，可以在添加用户"张经理"时，指定他隶属于用户组"部门经理"和"销售部"，如下图所示。</p>
        <center><img src="images/superlib_network_features_034.jpg" alt="在控制台软件中指定用户隶属的用户组(1)"></center>
        <br>
        <center><img src="images/superlib_network_features_035.jpg" alt="在控制台软件中指定用户隶属的用户组(2)"></center>
        <p class="image_name">在控制台软件中指定用户隶属的用户组</p>

        <li>在"修改用户"时指定用户与用户组的隶属关系</li>
        <p>操作与在"添加用户"时类似。</p>

        <li>在“添加用户组”时指定用户组的成员</li>
        <p>如果在添加用户组之前，已经建立了若干用户或用户组，则可在添加用户组时同时指定该用户组包含哪些成员（用户或用户组）。</p>
        <p>对于前述的例子，在用户已经建立好之后，可以在添加用户组"销售部"时，指定该用户组的成员为"小李"和"张经理"，如下图所示。</p>
        <center><img src="images/superlib_network_features_036.jpg" alt="在控制台软件中指定用户组的成员(1)"></center>
        <br>
        <center><img src="images/superlib_network_features_037.jpg" alt="在控制台软件中指定用户组的成员(2)"></center>
        <p class="image_name">在控制台软件中指定用户组的成员</p>

        <li>在"修改用户组"时指定用户组的成员</li>
        <p>操作与在"添加用户组"时类似。</p>
      </ul>
    </ul>
    <div class="go_top"><a href="#top">^ 返回顶部</a></div>
  </div>

  <!--权限管理-->
  <div class="title"><a name="permission_management">权限管理</a></div>
  <div class="text3">
    <ul>
      <li>基本概念</li>
      <p>用户或用户组的权限可分为两大类型：访问权限和管理权限。所谓访问权限，是指对文件库中的各级虚拟文件夹进行访问操作的权限，如浏览、下载、写入等。而管理权限，是指进行用户管理、用户组管理等管理操作的权限。</p>
      <ul>
        <li>访问权限</li>
        <p>本系统的访问权限，遵守以下原则：</p>
        <p>1.用户或用户组的访问权限是指定到文件夹上的，如果要对整个文件库设置访问权限，则对根目录进行设置即可。不能对文件单独设置访问权限，文件的访问权限是由其所在的文件夹的访问权限决定的。访问权限的种类如下图所示。</p>
        <center><img src="images/superlib_network_features_038.jpg" alt="访问权限的种类"></center>
        <p class="image_name">访问权限的种类</p>
        <p>访问权限分为浏览、下载、写入三大类。</p>
        <p>其中浏览权限是指是否允许用户看到指定文件夹中的内容的权限，这些内容是指文件的缩略图、预览图、说明、常规属性、特有属性、自定义属性等，但不能查看或下载原始文件。如果将浏览权限赋予文件库的根目录，则用户对整个文件库都有浏览的权限；如果只将浏览权限赋予某个文件夹，则用户只能看到此文件夹及其子文件夹中的内容，而其它内容完全不可见。</p>
        <p>还可单独设置是否查看说明/关键词、是否只允许查看某些自定义属性、是否隐藏文件夹。例如在自定义属性中建立了进货价格和销售价格两种属性，可以指定采购组只能看到进货价格，销售组只能看到销售价格，而管理组可以看到两种价格。</p>
        <p>下载权限是指用户查看原图或在图库的文件夹中复制、移动文件的权限，如果要将原始文件导出系统，则进一步需要导出权限。</p>
        <p>写入权限是指用户修改和删除文件的权限，还可以指定用户只能上传而不能修改或删除，或限制用户对某些自定义属性的修改，如设计部只能修改产品尺寸属性，而销售部只能修改价格属性。</p>

        <p>2.同一个文件夹，对于不用的用户或用户组，可以设置不同的访问权限。</p>

        <p>3.各级文件夹的访问权限，具有继承的关系。父文件夹中的访问权限，会继承到其子文件夹中。可以对一个文件夹加入访问权限，也可减去访问权限。由于父文件夹和子文件夹的权限有继承关系，加入和减去访问权限的结果计算可用下面两条公式表示：</p>
        <p>子文件夹的访问权限项数 = 父文件夹的访问权限项数 + 加入的访问权限</p>
        <p>子文件夹的访问权限项数 = 父文件夹的访问权限项数 - 减去的访问权限</p>

        <p>4.用户登录到系统中后，他对某个文件夹的访问权限，是由该用户对该文件夹的访问权限（包括从父文件夹中继承的权限），与该用户所属的所有用户组对该文件夹的访问权限组合后得到的。组合的方法，是在所有的权限中取最大的权限。</p>
        <p>我们用一个例子来解释以上原则。延续我们在用户管理和用户组管理中举的例子，假设文件库中有以下目录结构：</p>
        <center><img src="images/superlib_network_features_039.jpg" alt="访问权限举例：目录结构"></center>
        <p class="image_name">访问权限举例：目录结构</p>

        <p>权限设置的要求为：</p>
        <p>所有人都可以访问"公司公告"文件夹，具有浏览和下载的权限；技术部的员工对"技术文档"文件夹有浏览、下载、写入的权限；销售部的员工对"销售文档"文件夹有浏览、下载、写入的权限；部门经理对"管理层月报"文件夹有浏览和下载的权限，其中张经理对"销售部月报"文件夹有写入的权限，王总工对"技术部月报"文件夹有写入的权限。以上要求列表如下：</p>

        <table>
          <caption>表: 权限设置要求示例</caption>
          <tbody><tr><th>文件夹</th>
            <th>用户组或用户</th>
            <th>访问权限</th>
          </tr><tr>
          <td>公司公告</td>
          <td>
            <div>销售部</div>
            <div>技术部</div>
          </td>
          <td>浏览、下载</td>
        </tr>
        <tr>
          <td>技术文档</td>
          <td>
            <div>技术部</div>
          </td>
          <td>浏览、下载、写入</td>
        </tr>
        <tr>
          <td>销售文档</td>
          <td>
            <div>销售部</div>
          </td>
          <td>浏览、下载、写入</td>
        </tr>
        <tr>
          <td>管理层月报</td>
          <td>
            <div>部门经理</div>
          </td>
          <td>浏览、下载</td>
        </tr>
        <tr>
          <td>管理层月报\技术部月报</td>
          <td>
            <div>王总工</div>
          </td>
          <td>加入权限：写入</td>
        </tr>
        <tr>
          <td>管理层月报\销售部月报</td>
          <td>
            <div>张经理</div>
          </td>
          <td>加入权限：写入</td>
        </tr>
      </tbody></table>
      <p>设置以上访问权限后，张经理登录后看到的目录结构如下图所示。</p>
      <center><img src="images/superlib_network_features_040.jpg" alt="访问权限举例：张经理登录后看到的目录结构"></center>
      <p class="image_name">访问权限举例：张经理登录后看到的目录结构</p>
      <p>因为销售部成员对"技术文档"文件夹没有任何权限，所以张经理看不到"技术文档"文件夹。张经理只对"销售部月报"文件夹和"销售文档"文件夹有写入权限，对其它文件夹只有浏览和下载的权限。</p>
      <p>小李登录后看到的目录结构如下图所示。</p>
      <center><img src="images/superlib_network_features_041.jpg" alt="访问权限举例：小李登录后看到的目录结构"></center>
      <p class="image_name">访问权限举例：小李登录后看到的目录结构</p>
      <p>因为销售部成员对"技术文档"文件夹没有任何权限，所以小李看不到"技术文档"文件夹。由于"管理层月报"只对部门经理有浏览权限，因此小李也看不到"管理层月报"文件夹。小李可以对"公司公告"文件夹进行浏览、下载，可以对"销售文档"文件夹进行浏览、下载、写入。</p>
      <p>王总工登录后看到的目录结构如下图所示。</p>
      <center><img src="images/superlib_network_features_042.jpg" alt="访问权限举例：王总工登录后看到的目录结构"></center>
      <p class="image_name">访问权限举例：王总工登录后看到的目录结构</p>
      <p>因为技术部成员对"销售文档"文件夹没有任何权限，所以王总工看不到"销售文档"文件夹。王总工只对"技术部月报"文件夹和"技术文档"文件夹有写入权限，对其它文件夹只有浏览和下载的权限。</p>
      <p>小赵登录后看到的目录结构如下图所示。</p>
      <center><img src="images/superlib_network_features_043.jpg" alt="访问权限举例：小赵登录后看到的目录结构"></center>
      <p class="image_name">访问权限举例：小赵登录后看到的目录结构</p>
      <p>因为技术部成员对"销售文档"文件夹没有任何权限，所以小李看不到"销售文档"文件夹。由于"管理层月报"只对部门经理有浏览权限，因此小李也看不到"管理层月报"文件夹。小李可以对"公司公告"文件夹进行浏览、下载，可以对"技术文档"文件夹进行浏览、下载、写入。</p>

      <li>管理权限</li>
      <p>管理权限包括以下内容：</p>
      <p>1. 使用控制台软件的权限</p>
      <p>2. 管理关键词/自定义属性的权限</p>
      <p>有了此项权限，用户就可以对预定义关键词和自定义属性进行管理。</p>
      <p>3. 设置可接受的文件类型的权限</p>
      <p>4. 设置缩略图、预览图尺寸、预览视频尺寸的权限</p>
    </ul>

    <li>操作方法</li>
    <p>通过控制台软件进行权限管理操作。</p>
  </ul>
  <div class="go_top"><a href="#top">^ 返回顶部</a></div>
</div>

<!--日志管理-->
<div class="title"><a name="log_management">日志管理</a></div>
<div class="text3">
  <p>可记录访问日志。管理员可以指定哪些操作需要记录，指定完成后，今后发生的这些操作就都被记录下来，包括操作时间、操作人、所做的操作和操作参数。管理员可查看、搜索这些操作记录。</p>
  <div class="go_top"><a href="#top">^ 返回顶部</a></div>
</div>

<!--软件配置-->
<div class="title"><a name="config">软件配置</a></div>
<div class="text3">
<ul>
      <li>存储区管理</li>
      <p>具有多存储区管理功能。由于用户图库非常大，常常使硬盘空间不足，存储区管理功能可无限增加新的硬盘做为存储区，也可以删除现有存储区，删除存储区中的图片自动迁移到其它存储区中。</p>
    </ul>
  <div class="go_top"><a href="#top">^ 返回顶部</a></div>
</div>

<!--工具-->
<div class="title"><a name="tools">工具</a></div>
<div class="text3">
  <div class="go_top"><a href="#top">^ 返回顶部</a></div>
</div>

<!--界面定制-->
<div class="title"><a name="custom">界面定制</a></div>
<div class="text3">
<p>网页版可对界面进行定制，可设定缩略图下方文字和图片详情的显示方式，下图是为外资卡车公司定制的界面。</p>
<center><img src="images/superlib_network_features_044.jpg" alt="为外资卡车公司定制的缩略图显示页面"></center>
<p class="image_name">为外资卡车公司定制的缩略图显示页面</p>
<center><img src="images/superlib_network_features_045.jpg" alt="为外资卡车公司定制的图片详情显示页面"></center>
<p class="image_name">为外资卡车公司定制的图片详情显示页面</p>
  <div class="go_top"><a href="#top">^  返回顶部</a></div>
</div>

</div>
<div class="clear"></div>


</div>
</div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
