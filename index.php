<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=">
    <title>云服务推荐</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <style>
    hr {
        border: solid gray 0.5px;
    }

    .aliyun img,
    .tencent img,
    .ucloud img {
        width: 100px;
        margin-right: 20px;
    }

    .selectbar {
        background-color: rgb(238, 238, 238);
        margin-top: 10px;
        padding-top: 25px;
        padding-bottom: 10px;
    }

    .beforeselectbar {
        background-color: rgb(238, 238, 238);
        padding-top: 10px;
        padding-bottom: 10px;
    }

    #loading {
        height: 100px;
        font-size: 20px;
        line-height: 100px;
    }

    .searchbar a {
        font-size: 17px;
        color: black;
        line-height: 34px;
    }

    .searchbar a:hover {
        cursor: pointer;
        text-decoration: none;
    }

    .hidea {
        cursor: pointer;
        text-decoration: none;
        color: black;
        font-size: 15px;
    }

    .rankthree {
        border: 1px solid lightgray;
        padding: 5px;
        color: gray;

    }

    .rankthree span {
        margin-left: 10px;
    }

    .rankthree ul,
    li {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .rankthree ul {
        margin-left: 10px;
    }

    .dot {
        width: 20px;
    }

    .rank47 {
        margin-top: 20px;
        margin-right: 20px;
        font-size: 17px;
    }

    .rank47 img {
        height: 70px;
    }
    </style>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/defaults-zh_CN.min.js"></script>
</head>

<body>
    <!-- 导航 -->
    <div class="navbar navbar-fixed-top">
        <div class="container">
            <!-- Collapsed navigation -->
            <div class="navbar-header">
                <!-- Expander button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Main title -->
                <a class="navbar-brand" href="meter.html">云服务评分</a>
            </div>
            <!-- Expanded navigation -->
            <div class="navbar-collapse collapse">
                <!-- Main navigation -->
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="scorerule.html">评分规则</a>
                    </li>
                    <li>
                        <a href="bench.html">云服务评测</a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#addModal">机器学习推荐</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Contact</a>
                            </li>
                            <li>
                                <a href="#">Contributing</a>
                            </li>
                            <li>
                                <a href="#">Team</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Search, Navigation and Repo links -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#">
                            <i class="fa fa-search"></i> Search
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-github"></i>
                            GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="container">
                <h1>云服务推荐</h1>
                <p>针对您的需求推荐最适合的云服务器。</p>
                <p><a class="btn btn-primary btn-lg" role="button">
                        学习更多</a>
                </p>
            </div>
        </div>
    </div>
    <div class="container searchbar">
        <div class="row">
            <div class="col-sm-8">
                <div class="input-group">
                    <input type="text" class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-primary pull-right">搜索</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <button class="btn btn-primary pull-right" onclick="$('.selectbar').toggle();">筛选过滤 <i
                        class="fa fa-filter"></i></button>
            </div>
        </div>
    </div>
    <div class="container selectbar">
        <form class="form-horizontal" role="form" action="index.php" method="post">
            <div class="form-group">
                <label class="col-sm-2 control-label">场景</label>
                <div class="col-sm-7">
                    <select class="selectpicker" name="scenario[]" data-actions-box="true" multiple style="width: 100%;">
                        <option value="1" selected>高网络包收发场景，例如视频弹幕、电信业务转发等</option>
                        <option value="2">各种类型和规模的企业级应用</option>
                        <option value="3">网站和应用服务器</option>
                        <option value="4">游戏服务器</option>
                        <option value="5">中小型数据库系统、缓存、搜索集群</option>
                        <option value="6">计算集群、依赖内存的数据处理</option>
                        <option value="7">Web前端服务器</option>
                        <option value="8">大型多人在线游戏（MMO）前端</option>
                        <option value="9">数据分析、批量计算、视频编码</option>
                        <option value="10">高性能科学和工程应用</option>
                        <option value="11">高性能数据库、内存数据库、数据分析与挖掘、分布式内存缓存、Hadoop、Spark集群以及其他企业大内存需求应用</option>
                        <option value="12">Hadoop MapReduce、HDFS、Hive、HBase等、Spark内存计算、MLlib等、ElasticSearch、日志等</option>
                        <option value="13">OLTP、高性能关系型数据库、NoSQL数据库（例如Cassandra、MongoDB、HBase等）、Elasticsearch等搜索场景</option>
                        <option value="14">开发环境、构建服务器、代码存储库、微服务、测试和暂存环境等、轻量级数据库、缓存、轻量级企业应用、综合应用服务</option>
                        <option value="15">轻负载应用、微服务、开发测试压测服务应用</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">云服务厂商</label>
                <div class="col-sm-7">
                    <select class="selectpicker" name="provider[]" data-actions-box="true" multiple style="width: 100%;">
                        <option value="1" selected>阿里云</option>
                        <option value="2">腾讯云</option>
                        <option value="3">uCloud</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">云服务类型</label>
                <div class="col-sm-7">
                    <select class="selectpicker" name="kind[]" data-actions-box="true" multiple style="width: 100%;">
                        <option value="1" selected>通用型/标准型</option>
                        <option value="2">计算型</option>
                        <option value="3">内存型</option>
                        <option value="4">高主频型</option>
                        <option value="5">大数据型</option>
                        <option value="6">高IO型/本地SSD型</option>
                        <option value="7">共享型</option>
                        <option value="8">突发型</option>
                    </select>
                </div>
            </div>
            <script>
            $('.selectpicker').selectpicker({
                width: "100%"
            });
            </script>
            <div class="form-group custom-control-inline">
                <label class="col-sm-2 control-label">vCPU数量</label>
                <div class="col-sm-3">
                    <input class="form-control" name="cpumin" type="number" value="0" min="0">
                </div>
                <div class="col-sm-1 text-center" style="line-height: 34px;">至</div>
                <div class="col-sm-3">
                    <input class="form-control" name="cpumax" type="number" value="" min="0">
                </div>
            </div>
            <div class="form-group custom-control-inline">
                <label class="col-sm-2 control-label">内存大小(GB)</label>
                <div class="col-sm-3">
                    <input class="form-control" name="memmin" type="number" value="0" min="0">
                </div>
                <div class="col-sm-1 text-center" style="line-height: 34px;">至</div>
                <div class="col-sm-3">
                    <input class="form-control" name="memmax" type="number" value="" min="0">
                </div>
            </div>
            <input class="btn btn-primary pull-right" type="submit"></input>
        </form>
    </div>
    <script>
    $('.selectbar').hide();
    </script>
    <script>
    function fillTable(id) {
        let filename = '';
        let typename = '';
        if (id[0] == 'a') {
            filename = 'aliyun';
            switch (id[1]) {
                case 'g':
                    typename = "通用型";
                    break;
                case 'c':
                    typename = "计算型";
                    break;
                case 'r':
                    typename = "内存型";
                    break;
                case 'd':
                    typename = "大数据型";
                    break;
                case 'i':
                    typename = "本地SSD型";
                    break;
                case 'h':
                    typename = "高主频型";
                    break;
                default:
                    break;
            }
        } else if (id[0] == 't') {
            filename = 'tencent';
            switch (id[1]) {
                case 'm':
                    typename = "标准型";
                    break;
                case 'r':
                    typename = "计算型";
                    break;
                case 'c':
                    typename = "内存型";
                    break;
                case 'd':
                    typename = "大数据型";
                    break;
                case 'i':
                    typename = "高IO型";
                    break;
                default:
                    break;
            }
        } else {
            filename = 'ucloud';
            switch (id[1]) {
                case 'g':
                    typename = "通用型";
                    break;
                case 'h':
                    typename = "高主频型";
                    break;
                default:
                    break;
            }
        }
        if (filename != 'ucloud') {
            $.getJSON('json/' + filename + '_info.json', function(data) {
                //加载表格
                let datas = data[typename];
                let table = $("#" + id + "1 table")[0];
                let thead = document.createElement("thead");
                let tbody = document.createElement("tbody");
                let tr = document.createElement("tr");
                for (let key in datas[0]) {
                    let td = document.createElement("td");
                    td.innerHTML = key;
                    tr.appendChild(td);
                }
                thead.appendChild(tr);
                datas.forEach(element => {
                    let tr = document.createElement("tr");
                    for (let key in element) {
                        let td = document.createElement("td");
                        td.innerHTML = element[key];
                        tr.appendChild(td);
                    }
                    tbody.appendChild(tr);
                });
                table.appendChild(thead);
                table.appendChild(tbody);
            });
        }
        $.getJSON('json/' + filename + '_price.json', function(data) {
            //加载表格
            let datas = data[typename];
            let table = $("#" + id + "2 table")[0];
            let thead = document.createElement("thead");
            let tbody = document.createElement("tbody");
            let tr = document.createElement("tr");
            for (let key in datas[0]) {
                let td = document.createElement("td");
                td.innerHTML = key;
                tr.appendChild(td);
            }
            thead.appendChild(tr);
            datas.forEach(element => {
                let tr = document.createElement("tr");
                for (let key in element) {
                    let td = document.createElement("td");
                    td.innerHTML = element[key];
                    tr.appendChild(td);
                }
                tbody.appendChild(tr);
            });
            table.appendChild(thead);
            table.appendChild(tbody);
        });
    };
    </script>

    <div class="container main">
        <div id="requiredVMs">
            <h3 style="margin-bottom: 30px;">筛选实例</h3>
            <?php
            $provider = $_POST["provider"];
            $kind = $_POST["kind"];
            $scenario = $_POST["scenario"];
            $cpumin = $_POST["cpumin"];
            $cpumax = $_POST["cpumax"];
            $memmin = $_POST["memmin"];
            $memmax = $_POST["memmax"];
            $dbhost = 'localhost'; 
            $dbuser = 'root';        
            $dbpass = 'cloud-meter-2020';  
            $dbname = 'CloudMeter';      
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
            $q = "select families from Scenario where ";
            for ($x = 0; $x < count($scenario); $x++) {
                $q = $q."id = ".$scenario[$x]." or ";
            }
            $q = $q."id = -1";
            $result = mysqli_query($conn, $q) or die (mysqli_error($conn)); 
            $families = array();
            if (mysqli_num_rows($result) > 0) {
                // 输出数据
                while($row = mysqli_fetch_assoc($result)) {
                    $instances = explode(".", $row["families"]);
                    $families = array_merge($families, $instances);
                }
            $families = array_unique($families);
            } else {
                echo "0 结果";
            }
            $finalfamilies = array();
            for ($x = 0; $x < count($kind); $x++) {
                $tmpkind = "";
                switch($kind[$x]) {
                    case '1': $tmpkind = '通用型 g'; break;
                    case '2': $tmpkind = '计算型'; break;
                    case '3': $tmpkind = '内存型'; break;
                    case '4': $tmpkind = '型 h'; break;
                    case '5': $tmpkind = '大数据'; break;
                    case '6': $tmpkind = '本地'; break;
                    case '7': $tmpkind = '共享'; break;
                    case '8': $tmpkind = '突发'; break;
                }
                for ($y = 0; $y < count($families); $y++) {
                    if (strpos($families[$y], $tmpkind) !== false) {
                        array_push($finalfamilies, $families[$y]);
                    }
                }
            }
            /*for ($y = 0; $y < count($finalfamilies); $y++) {
                echo $finalfamilies[$y];
            }*/
            ?>
            <table class="table table-hover text-center table-striped table-bordered">
            <thead>
                    <tr>
                        <td>规格族</td>
                        <td>实例规格</td>
                        <td>vCPU</td>
                        <td>内存</td>
                        <td>处理器主频/睿频</td>
                        <td>内网带宽</td>
                        <td>内网收发包</td>
                        <td>IPv6</td>
                        <td>参考价格</td>
                        <td>处理器规格</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>计算型 c6</td><td>ecs.c6.large</td><td>2 vCPU</td><td>4 GiB</td><td>2.5 GHz/3.2 GHz</td><td>1 Gbps</td><td>30 万 PPS</td><td>是</td><td>0.39</td><td>Intel Xeon(Cascade Lake) Platinum 8269CY</td>
                    </tr>
                    <tr>
                        <td>计算型 c5</td><td>ecs.c5.large</td><td>2 vCPU</td><td>4 GiB</td><td>2.5 GHz/2.7 GHz</td><td>1 Gbps</td><td>30 万 PPS</td><td>是</td><td>0.62</td><td>Intel Xeon(Skylake) Platinum 8163 / Intel Xeon(Cascade Lake) Platinum 8269CY</td>
                    </tr>
                    <tr>
                        <td>密集计算型 ic5</td><td>ecs.ic5.large</td><td>2 vCPU</td><td>2 GiB</td><td>2.5 GHz/2.7 GHz</td><td>1 Gbps</td><td>30 万 PPS</td><td>否</td><td>0.59</td><td>Intel Xeon(Skylake) Platinum 8163</td>
                    </tr>
                    <tr>
                        <td>高主频计算型 hfc6</td><td>ecs.hfc6.large</td><td>2 vCPU</td><td>4 GiB</td><td>3.1 GHz/3.5 GHz</td><td>1 Gbps</td><td>30 万 PPS</td><td>是</td><td>0.448</td><td>Intel Xeon (Cascade Lake) Platinum 8269</td>
                    </tr>
                    <tr>
                        <td>高主频计算型 hfc5</td><td>ecs.hfc5.large</td><td>2 vCPU</td><td>4 GiB</td><td>3.1 GHz/3.4 GHz</td><td>1 Gbps</td><td>30 万 PPS</td><td>否</td><td>0.87</td><td>Intel Xeon Gold 6149</td>
                    </tr>
                    <tr>
                        <td>高主频通用型 hfg5</td><td>ecs.hfg5.large</td><td>2 vCPU</td><td>8 GiB</td><td>3.1 GHz/3.4 GHz</td><td>1 Gbps</td><td>30 万 PPS</td><td>否</td><td>1.15</td><td>Intel Xeon Gold 6149</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-bottom: 50px;">
            <h3 style="margin-bottom: 30px;">最佳实例推荐</h3>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="rankthree">
                        <img style="float: right; width: 20%;" src="img/1.png">
                        <div style="font-size: 18px; padding: 12px; color: black; font-weight: bold;">阿里云内存型 r6.large
                        </div>
                        <span>最新一代内存型产品，性能全面提升</span><br />
                        <span>适用场景：</span><br />
                        <ul>
                            <li><img class="dot" src="img/dot.png">高性能数据库、内存数据库</li>
                            <li><img class="dot" src="img/dot.png">数据分析与挖掘、分布式内存缓存</li>
                            <li><img class="dot" src="img/dot.png">Hadoop、Spark集群以及其他企业大内存需求应用</li>
                            <li><img class="dot" src="img/dot.png">高网络包收发场景，例如视频弹幕、电信业务转发等</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="rankthree">
                        <img style="float: right; width: 20%;" src="img/2.png">
                        <div style="font-size: 18px; padding: 12px; color: black; font-weight: bold;">阿里云通用型 g6.large
                        </div>
                        <span>最新一代内存型产品，性能全面提升</span><br />
                        <span>适用场景：</span><br />
                        <ul>
                            <li><img class="dot" src="img/dot.png">高网络包收发场景，如视频弹幕、电信业务转发等</li>
                            <li><img class="dot" src="img/dot.png">各种类型和规模的企业级应用</li>
                            <li><img class="dot" src="img/dot.png">网站和应用服务器、游戏服务器等</li>
                            <li><img class="dot" src="img/dot.png">计算集群、依赖内存的数据处理</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="rankthree">
                        <img style="float: right; width: 20%;" src="img/3.png">
                        <div style="font-size: 18px; padding: 12px; color: black; font-weight: bold;">阿里云内存型 c6.xlarge
                        </div>
                        <span>最新一代内存型产品，性能全面提升</span><br />
                        <span>适用场景：</span><br />
                        <ul>
                            <li><img class="dot" src="img/dot.png">高网络包收发场景，如视频弹幕、电信业务转发等</li>
                            <li><img class="dot" src="img/dot.png">Web前端服务器</li>
                            <li><img class="dot" src="img/dot.png">大型多人在线游戏（MMO）前端</li>
                            <li><img class="dot" src="img/dot.png">数据分析、批量计算、视频编码</li>
                            <li><img class="dot" src="img/dot.png">高性能科学和工程应用</li>
                        </ul>
                    </div>
                </div>
            </div>
            <table class="rank47 table table-hover text-center">
                <thead>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>性能评分</td>
                        <td>价格（元/小时）</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="img/4.png"></td>
                        <td><img src="img/rank4.png"></td>
                        <td>376</td>
                        <td>0.96</td>
                    </tr>
                    <tr>
                        <td><img src="img/5.png"></td>
                        <td><img src="img/rank5.png"></td>
                        <td>329.3</td>
                        <td>0.86</td>
                    </tr>
                    <tr>
                        <td><img src="img/6.png"></td>
                        <td><img src="img/rank6.png"></td>
                        <td>320.7</td>
                        <td>0.62</td>
                    </tr>
                    <tr>
                        <td><img src="img/7.png"></td>
                        <td><img src="img/rank7.png"></td>
                        <td>303.6</td>
                        <td>0.84</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div><a href="scorerule.html">评分规则查看</a></div>
        <div style="margin-bottom: 50px;">
            <h3>爆款实例</h3>
            <a href="https://www.aliyun.com/daily-act/ecs/activity_selection?spm=5176.8789780.1092586.6.2d4255camxz273&aly_as=fgJ2CZszv"><img style="width: 100%;" src="img/hotali.png"></a>
        </div>
        <div style="margin-bottom: 50px;">
            <h3>免费使用实例</h3>
            <a href="https://www.aliyun.com/daily-act/ecs/activity_selection?spm=5176.8789780.1092586.6.2d4255camxz273&aly_as=fgJ2CZszv"><img style="width: 100%;" src="img/freeali.png"></a>
        </div>
        <div class="aliyun">
            <div id="ag">
                <h3><img src="img/ali.png">通用型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#agmenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#agmenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="agmenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="agmenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('agmenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#characterg').toggle()">>> 特 点：</a><br />
                <div id="characterg">
                    <ul>
                        <li>依托神龙架构，将大量虚拟化功能卸载到专用硬件，降低虚拟化开销，提供稳定可预期的超高性能</li>
                        <li>I/O优化实例</li>
                        <li>支持IPv6</li>
                        <li>支持ESSD云盘、SSD云盘和高效云盘</li>
                        <li>实例存储I/O性能与计算规格对应（规格越高存储I/O性能越强）</li>
                        <li>处理器与内存配比为1:4</li>
                        <li>超高网络PPS收发包能力</li>
                        <li>处理器：2.5 GHz主频的Intel ® Xeon ® Platinum 8269CY（Cascade Lake），睿频3.2 GHz，计算性能稳定</li>
                        <li>实例网络性能与计算规格对应（规格越高网络性能越强）</li>
                        <li>支持变配为c6或r6</li>
                    </ul>
                </div>
                <script>
                $('#characterg').hide()
                </script>
                <a class="hidea" onclick="$('#locationg').toggle()">>> 适用场景：</a>
                <div id="locationg">
                    <ul>
                        <li>高网络包收发场景，例如视频弹幕、电信业务转发等</li>
                        <li>各种类型和规模的企业级应用</li>
                        <li>网站和应用服务器</li>
                        <li>中小型数据库系统、缓存、搜索集群</li>
                        <li>数据分析和计算</li>
                        <li>计算集群、依赖内存的数据处理 </li>
                    </ul>
                </div>
                <script>
                $('#locationg').hide()
                </script>
            </div>

            <div id="ac">
                <h3><img src="img/ali.png">计算型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#acmenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#acmenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="acmenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="acmenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('acmenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#characterc').toggle()">>> 特 点：</a><br />
                <div id="characterc">
                    <ul>
                        <li>依托神龙架构，将大量虚拟化功能卸载到专用硬件，降低虚拟化开销，提供稳定可预期的超高性能</li>
                        <li>I/O优化实例</li>
                        <li>支持IPv6</li>
                        <li>支持ESSD云盘、SSD云盘和高效云盘</li>
                        <li>实例存储I/O性能与计算规格对应（规格越高存储I/O性能越强）</li>
                        <li>处理器与内存配比为1:2</li>
                        <li>超高网络PPS收发包能力</li>
                        <li>处理器：2.5 GHz主频的Intel ® Xeon ® Platinum 8269CY（Cascade Lake），睿频3.2 GHz，计算性能稳定</li>
                        <li>实例网络性能与计算规格对应（规格越高网络性能越强）</li>
                        <li>支持变配为g6或r6</li>
                    </ul>
                </div>
                <script>
                $('#characterc').hide()
                </script>
                <a class="hidea" onclick="$('#locationc').toggle()">>> 适用场景：</a>
                <div id="locationc">
                    <ul>
                        <li>高网络包收发场景，例如视频弹幕、电信业务转发等</li>
                        <li>Web前端服务器</li>
                        <li>大型多人在线游戏（MMO）前端</li>
                        <li>数据分析、批量计算、视频编码</li>
                        <li>高性能科学和工程应用</li>
                    </ul>
                </div>
                <script>
                $('#locationc').hide()
                </script>
            </div>

            <div id="ar">
                <h3><img src="img/ali.png">内存型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#armenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#armenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="armenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="armenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('armenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#characterr').toggle()">>> 特 点：</a><br />
                <div id="characterr">
                    <ul>
                        <li>依托神龙架构，将大量虚拟化功能卸载到专用硬件，降低虚拟化开销，提供稳定可预期的超高性能</li>
                        <li>I/O优化实例</li>
                        <li>支持IPv6</li>
                        <li>支持ESSD云盘、SSD云盘和高效云盘</li>
                        <li>实例存储I/O性能与计算规格对应（规格越高存储I/O性能越强）</li>
                        <li>超高网络PPS收发包能力</li>
                        <li>处理器：2.5 GHz主频的Intel ® Xeon ® Platinum 8269CY（Cascade Lake），睿频3.2 GHz，计算性能稳定</li>
                        <li>实例网络性能与计算规格对应（规格越高网络性能越强）</li>
                        <li>支持变配为g6或c6></li>
                    </ul>
                </div>
                <script>
                $('#characterr').hide()
                </script>
                <a class="hidea" onclick="$('#locationr').toggle()">>> 适用场景：</a>
                <div id="locationr">
                    <ul>
                        <li>高网络包收发场景，例如视频弹幕、电信业务转发等</li>
                        <li>高性能数据库、内存数据库</li>
                        <li>数据分析与挖掘、分布式内存缓存</li>
                        <li>Hadoop、Spark群集以及其他企业大内存需求应用 </li>
                    </ul>
                </div>
                <script>
                $('#locationr').hide()
                </script>
            </div>

            <div id="ad">
                <h3><img src="img/ali.png">大数据型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#admenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#admenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="admenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="admenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('admenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#characterd').toggle()">>> 特 点：</a><br />
                <div id="characterd">
                    <ul>
                        <li> I/O优化实例</li>
                        <li>仅支持SSD云盘和高效云盘</li>
                        <li>实例配备大容量、高吞吐SATA HDD本地盘，辅以最大17 Gbit/s实例间网络带宽</li>
                        <li>处理器与内存配比为1:4，为大数据场景设计</li>
                        <li>处理器：2.5 GHz主频的Intel ® Xeon ® E5-2682 v4（Broadwell）</li>
                        <li>实例网络性能与计算规格对应（规格越高网络性能越强）</li>
                    </ul>
                </div>
                <script>
                $('#characterd').hide()
                </script>
                <a class="hidea" onclick="$('#locationd').toggle()">>> 适用场景：</a>
                <div id="locationd">
                    <ul>
                        <li>Hadoop MapReduce、HDFS、Hive、HBase等</li>
                        <li>Spark内存计算、MLlib等</li>
                        <li>互联网行业、金融行业等有大数据计算与存储分析需求的行业客户，进行海量数据存储和计算的业务场景</li>
                        <li>Elasticsearch、日志等</li>
                    </ul>
                </div>
                <script>
                $('#locationd').hide()
                </script>
            </div>

            <div id="ai">
                <h3><img src="img/ali.png">本地SSD型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#aimenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#aimenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="aimenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="aimenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('aimenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#characteri').toggle()">>> 特 点：</a><br />
                <div id="characteri">
                    <ul>
                        <li>I/O优化实例</li>
                        <li>支持IPv6</li>
                        <li>仅支持SSD云盘和高效云盘</li>
                        <li>配备高性能（高IOPS、大吞吐、低访问延迟）NVMe SSD本地盘</li>
                        <li>处理器与内存配比为1:8，为高性能数据库等场景设计</li>
                        <li>处理器：2.5 GHz主频的Intel ® Xeon ® Platinum 8163（Skylake）</li>
                        <li>实例网络性能与计算规格对应（规格越高网络性能越强）</li>
                    </ul>
                </div>
                <script>
                $('#characteri').hide()
                </script>
                <a class="hidea" onclick="$('#locationi').toggle()">>> 适用场景：</a>
                <div id="locationi">
                    <ul>
                        <li>OLTP、高性能关系型数据库</li>
                        <li>NoSQL数据库（如Cassandra、MongoDB、HBase等）</li>
                        <li>Elasticsearch等搜索场景</li>
                    </ul>
                </div>
                <script>
                $('#locationi').hide()
                </script>
            </div>

            <div id="ah">
                <h3><img src="img/ali.png">高主频型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#ahmenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#ahmenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="ahmenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="ahmenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('ahmenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#characterh').toggle()">>> 特 点：</a><br />
                <div id="characterh">
                    <ul>
                        <li>依托神龙架构，将大量虚拟化功能卸载到专用硬件，降低虚拟化开销，提供稳定可预期的超高性能</li>
                        <li>I/O优化实例</li>
                        <li>支持ESSD云盘、SSD云盘和高效云盘</li>
                        <li>实例存储I/O性能与计算规格对应（规格越高存储I/O性能越强）</li>
                        <li>处理器与内存配比为1:4</li>
                        <li>超高网络PPS收发包能力</li>
                        <li>处理器：3.1 GHz主频的Intel ® Xeon ® Platinum 8269（Cascade Lake），睿频3.5 GHz，计算性能稳定</li>
                        <li>实例网络性能与计算规格对应（规格越高网络性能越强）</li>
                    </ul>
                </div>
                <script>
                $('#characterh').hide()
                </script>
                <a class="hidea" onclick="$('#locationh').toggle()">>> 适用场景：</a>
                <div id="locationh">
                    <ul>
                        <li>高网络包收发场景，例如视频弹幕、电信业务转发等</li>
                        <li>各种类型和规模的企业级应用</li>
                        <li>网站和应用服务器</li>
                        <li>游戏服务器</li>
                        <li>中小型数据库系统、缓存、搜索集群</li>
                        <li>数据分析和计算</li>
                        <li>计算集群、依赖内存的数据处理</li>
                    </ul>
                </div>
                <script>
                $('#locationh').hide()
                </script>
            </div>

        </div>
        <hr>
        <div class="tencent">
            <div id="tm">
                <h3><img src="img/ten.png">标准型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tmmenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#tmmenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tmmenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="tmmenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('tmmenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#charactertm').toggle()">>> 特 点：</a><br />
                <div id="charactertm">
                    <ul>
                        <li>2.5GHz Intel® Xeon® Cascade Lake 处理器，睿频3.1GHz，搭配最新一代六通道 DDR4，内存计算性能稳定</li>
                        <li>配有全新的 Intel Advanced Vector Extension (AVX-512) 指令集</li>
                        <li>处理器与内存配比为1:2，1:4</li>
                        <li>最高可支持28Gbps内网带宽，超高网络收发包能力，满足极高的内网传输需求</li>
                        <li>实例网络性能与规格对应，规格越高网络转发性能强，内网带宽上限越高</li>
                    </ul>
                </div>
                <script>
                $('#charactertm').hide()
                </script>
                <a class="hidea" onclick="$('#locationtm').toggle()">>> 适用场景：</a>
                <div id="locationtm">
                    <ul>
                        <li>各种类型和规模的企业级应用</li>
                        <li>中小型数据库系统、缓存、搜索集群</li>
                        <li>计算集群、依赖内存的数据处理</li>
                        <li>高网络包收发场景，如视频弹幕、直播、游戏等</li>
                    </ul>
                </div>
                <script>
                $('#locationtm').hide()
                </script>
            </div>

            <div id="tr">
                <h3><img src="img/ten.png">内存型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#trmenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#trmenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="trmenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="trmenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('trmenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#charactertr').toggle()">>> 特 点：</a><br />
                <div id="charactertr">
                    <ul>
                        <li>2.5GHz Intel® Xeon® Cascade Lake 处理器，搭配最新一代六通道 DDR4 内存，计算性能稳定</li>
                        <li>配有全新的 Intel Advanced Vector Extension (AVX-512) 指令集</li>
                        <li>处理器与内存配比为1:8</li>
                        <li>购买相同大小内存实例价格最低</li>
                        <li>实例网络性能与规格对应，规格越高网络转发性能强，内网带宽上限越高</li>
                    </ul>
                </div>
                <script>
                $('#charactertr').hide()
                </script>
                <a class="hidea" onclick="$('#locationtr').toggle()">>> 适用场景：</a>
                <div id="locationtr">
                    <ul>
                        <li>高性能数据库、分布式内存缓存等需要大量的内存操作、查找和计算的应用</li>
                        <li>基因计算等自行搭建 Hadoop 集群或 Redis 的用户</li>
                        <li>高网络包收发场景，如视频弹幕、直播、游戏等</li>
                    </ul>
                </div>
                <script>
                $('#locationtr').hide()
                </script>
            </div>

            <div id="tc">
                <h3><img src="img/ten.png">计算型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tcmenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#tcmenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tcmenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="tcmenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('tcmenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#charactertc').toggle()">>> 特 点：</a><br />
                <div id="charactertc">
                    <ul>
                        <li>3.2GHz Intel® Xeon® Skylake 6146 处理器</li>
                        <li>配有全新的 Intel Advanced Vector Extension (AVX-512) 指令集</li>
                        <li>最新一代六通道 DDR4 内存，内存带宽达 2666MT/s</li>
                        <li>处理器与内存配比为1:2，1:4</li>
                        <li>实例网络性能与规格对应，规格越高网络转发性能强，内网带宽上限越高</li>
                        <li>支持全种类云硬盘</li>
                    </ul>
                </div>
                <script>
                $('#charactertc').hide()
                </script>
                <a class="hidea" onclick="$('#locationtc').toggle()">>> 适用场景：</a>
                <div id="locationtc">
                    <ul>
                        <li>批处理工作负载、高性能计算（HPC）</li>
                        <li>高流量 Web 前端服务器</li>
                        <li>大型多人联机（MMO）游戏服务器等其他计算密集型业务</li>
                    </ul>
                </div>
                <script>
                $('#locationtc').hide()
                </script>
            </div>

            <div id="td">
                <h3><img src="img/ten.png">大数据型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tdmenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#tdmenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tdmenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="tdmenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('tdmenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#charactertd').toggle()">>> 特 点：</a><br />
                <div id="charactertd">
                    <ul>
                        <li>2.4GHz Intel® Xeon® Skylake 6148 处理器，DDR4 内存</li>
                        <li>实例最高搭载12块12TB本地硬盘，配备最高144TB的基于 HDD 的本地存储</li>
                        <li>单盘顺序读吞吐能力220+MB/s，顺序写吞吐能力220+MB/s（128KB块大小，32深度）</li>
                        <li>整机吞吐能力最高可达2.8GB/s（128KB块大小，32深度）</li>
                        <li>低至2ms - 5ms读写延时</li>
                        <li>更大的实例规格，D2.19XLARGE320，最高提供76vCPU 和320GB内存</li>
                        <li>本地存储单价低至 S2 的1/10，与 IDC 自建 Hadoop 集群拥有相近的总成本</li>
                        <li>处理器与内存配比为1:4，为大数据场景设计</li>
                    </ul>
                </div>
                <script>
                $('#charactertd').hide()
                </script>
                <a class="hidea" onclick="$('#locationtd').toggle()">>> 适用场景：</a>
                <div id="locationtd">
                    <ul>
                        <li>Hadoop MapReduce/HDFS/Hive/HBase 等分布式计算</li>
                        <li>Elasticsearch、日志处理和大型数据仓库等业务场景设计</li>
                        <li>互联网行业、金融行业等有大数据计算与存储分析需求的行业客户，进行海量数据存储和计算的业务场景</li>
                    </ul>
                </div>
                <script>
                $('#locationtd').hide()
                </script>
            </div>

            <div id="ti">
                <h3><img src="img/ten.png">高IO型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#timenu1">实例信息</a></li>
                    <li><a data-toggle="tab" href="#timenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="timenu1" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <div id="timenu2" class="tab-pane fade table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('timenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#characterti').toggle()">>> 特 点：</a><br />
                <div id="characterti">
                    <ul>
                        <li>2.5 GHz Intel® Xeon® Skylake 6133 处理器，计算性能稳定</li>
                        <li>最新一代六通道 DDR4 内存</li>
                        <li>最高可支持23Gbps内网带宽，满足极高的内网传输需求</li>
                        <li>采用 NVMe SSD 的实例存储，提供低延迟、极高的 IOPS</li>
                        <li>单盘随机读性能高达62万 IOPS（4KB块大小），顺序读吞吐能力高达2.9GB/s（128KB块大小）</li>
                        <li>整机随机读性能高达180万 IOPS（4KB块大小），顺序读吞吐能力均高达11GB/s（128KB块大小）</li>
                    </ul>
                </div>
                <script>
                $('#characterti').hide()
                </script>
                <a class="hidea" onclick="$('#locationti').toggle()">>> 适用场景：</a>
                <div id="locationti">
                    <ul>
                        <li>高性能数据库，NoSQL 数据库（例如 MongoDB）、群集化数据库</li>
                        <li>联机事务处理（OLTP）系统、Elastic Search 搜索等需要低时延的 I/O 密集型应用</li>
                    </ul>
                </div>
                <script>
                $('#locationti').hide()
                </script>
            </div>
        </div>
        <hr>
        <div class="ucloud">
            <div id="ug">
                <h3><img src="img/ucl.png">通用型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#ugmenu2">价格信息</a></li>
                </ul>
                <div class="tab-content">
                    <div id="ugmenu2" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('ugmenu');
                    </script>
                </div>
                <a class="hidea" onclick="$('#characterug').toggle()">>> 特 点：</a><br />
                <div id="characterug">
                    <ul>
                        <li>配置自由灵活，选择丰富</li>
                    </ul>
                </div>
                <script>
                $('#characterug').hide()
                </script>
                <a class="hidea" onclick="$('#locationug').toggle()">>> 适用场景：</a>
                <div id="locationug">
                    <ul>
                        <li>数据库，MMO游戏，人工智能等</li>
                    </ul>
                </div>
                <script>
                $('#locationug').hide()
                </script>
            </div>

            <div id="uh">
                <h3><img src="img/ucl.png">高主频型</h3>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#uhmenu2">价格信息</a></li>、
                </ul>
                <div class="tab-content">
                    <div id="uhmenu2" class="tab-pane fade in active table-responsive">
                        <table class="table table-hover text-center table-striped table-bordered"></table>
                    </div>
                    <script>
                    fillTable('uhmenu');
                    </script>
                </div>
            </div>
            <a class="hidea" onclick="$('#characteruh').toggle()">>> 特 点：</a><br />
            <div id="characteruh">
                <ul>
                    <li>采用3.2GHz主频的CPU，计算性能强</li>
                </ul>
            </div>
            <script>
            $('#characteruh').hide()
            </script>
            <a class="hidea" onclick="$('#locationuh').toggle()">>> 适用场景：</a>
            <div id="locationuh">
                <ul>
                    <li>高频交易，数据处理，图形渲染等</li>
                </ul>
            </div>
            <script>
            $('#locationuh').hide()
            </script>
        </div>
    </div>

    <!--modal-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">机器学习推荐</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="javascript:void(0)">
                        <span style="margin-left: 20px">任务程序：</span>
                        <input id="file" type="file" class="form-control"
                            style="width: 220px; display: inline-block; margin-top: 10px; margin-bottom: 10px">
                        <br />
                        <span style="margin-left: 20px; margin-right: 13px">执行命令：</span>
                        <input id="command" type="text" class="form-control"
                            style="width: 220px; display: inline-block; margin-top: 10px; margin-bottom: 10px">
                        <br />
                        <span style="margin-left: 20px; margin-right: 13px">实例规格：</span>
                        <select id="kind" class="selectpicker" data-size="6" multiple data-actions-box="true">
                            <option value="ecs.g5.large">ecs.g5.large</option>
                            <option value="ecs.g5.xlarge">ecs.g5.xlarge</option>
                            <option value="ecs.g5.2xlarge">ecs.g5.2xlarge</option>
                            <option value="ecs.g5.3xlarge">ecs.g5.3xlarge</option>
                            <option value="ecs.c5.large">ecs.c5.large</option>
                            <option value="ecs.c5.xlarge">ecs.c5.xlarge</option>
                            <option value="ecs.c5.2xlarge">ecs.c5.2xlarge</option>
                            <option value="ecs.c5.3xlarge">ecs.c5.3xlarge</option>
                            <option value="ecs.r5.large">ecs.r5.large</option>
                            <option value="ecs.r5.xlarge">ecs.r5.xlarge</option>
                            <option value="ecs.r5.2xlarge">ecs.r5.2xlarge</option>
                            <option value="ecs.r5.3xlarge">ecs.r5.3xlarge</option>
                            <option value="ecs.d1ne.2xlarge">ecs.d1ne.2xlarge</option>
                            <option value="ecs.i2g.2xlarge">ecs.i2g.2xlarge</option>
                            <option value="ecs.i2.xlarge">ecs.i2.xlarge</option>
                            <option value="ecs.i2.2xlarge">ecs.i2.2xlarge</option>
                            <option value="ecs.hfg5.large">ecs.hfg5.large</option>
                            <option value="ecs.hfg5.xlarge">ecs.hfg5.xlarge</option>
                            <option value="ecs.hfg5.2xlarge">ecs.hfg5.2xlarge</option>
                            <option value="ecs.hfg5.3xlarge">ecs.hfg5.3xlarge</option>
                            <option value="ecs.hfc5.large">ecs.hfc5.large</option>
                            <option value="ecs.hfc5.xlarge">ecs.hfc5.xlarge</option>
                            <option value="ecs.hfc5.2xlarge">ecs.hfc5.2xlarge</option>
                            <option value="ecs.hfc5.3xlarge">ecs.hfc5.3xlarge</option>
                        </select>
                        <br />
                        <span style="margin-left: 20px; margin-right: 13px">性能成本目标：</span>
                        <select id="supplier" class="selectpicker">
                            <option value="1">性能最好</option>
                            <option value="2">成本最低</option>
                            <option value="3">其他</option>
                        </select>
                        <br />
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="addRecord"
                        onclick="alert('请在我的评测中查看结果'); ">提交</button>
                </div>
            </div>
        </div>
    </div>

    <footer style="margin-bottom: 5px;">
        <hr>
        <center>&#169; Unias Team, SEI, PKU</center>
        <center>Documentation built with <a href="http://www.mkdocs.org/">MkDocs</a>.</center>
    </footer>
</body>

</html>