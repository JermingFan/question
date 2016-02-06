<html>
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>xxx</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css" />
    <style type="text/css">
        body {
            background: #ffffff url() top center no-repeat !important;
            background-size:100% auto !important;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="text-center header">
        <h1 class="bold">xxx</h1>
        <p>欢迎参加答题</p>
        <div class="avatar1 text-center">
            <div class="img-circle">
                <span class="glyphicon glyphicon-pencil"></span>
            </div>
        </div>
    </div>

    <div id="bd" class="panel">
        <div id="panel1" class="panel-body">
            <dl>
                <dd style="font-size:18px;">✍ 本试卷均为选择题,共有5道小题<br/>满分5颗星★★★★★<!--<br/>☞ 添加/关注微信： </dd>-->
            </dl>
            <div class="buttons">
                <a href="#result" class="btn btn-lg btn-danger btn-block" onclick="return next(0);">开始答题</a>
            </div>
        </div>
        <!---------------------------------------第一题--------------------------------------------------------------------------------------------------------------------->
        <div id="panel2" class="panel-body js_answer" style="display: none;">
            <dl><dd>1、xxx</dd></dl>
            <ul class="list-group js_group">
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> A.xxx</li>
                <li class="list-group-item" data-score="20" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> B.xxx </li>
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> C.xxx</li>
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> D.xxx</li>
            </ul><div class="buttons"><a class="btn btn-lg btn-danger btn-block" onclick="return on_btn_click(1);">下一题</a></div>
        </div>
        <!----------------------------------------第二题-------------------------------------------------------------------------------------------------------------------->
        <div id="panel2" class="panel-body js_answer" style="display: none;">
            <dl><dd>2、xxx</dd></dl>
            <ul class="list-group js_group">
                <li class="list-group-item" data-score="20" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> A.xxx </li>
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> B.xxx </li>
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> C.xxx </li>
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> D.xxx </li>
            </ul><div class="buttons"><a class="btn btn-lg btn-danger btn-block" onclick="return on_btn_click(2);">下一题</a></div>
        </div>
        <!----------------------------------------第三题-------------------------------------------------------------------------------------------------------------------->
        <div id="panel2" class="panel-body js_answer" style="display: none;">
            <dl><dd>3、xxx </dd></dl>
            <ul class="list-group js_group">
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> A.xxx </li>
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> B.xxx </li>
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> C.xxx </li>
                <li class="list-group-item" data-score="20" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> D.xxx </li>
            </ul><div class="buttons"><a class="btn btn-lg btn-danger btn-block" onclick="return on_btn_click(3);">下一题</a></div>
        </div>
        <!----------------------------------------第四题-------------------------------------------------------------------------------------------------------------------->
        <div id="panel2" class="panel-body js_answer" style="display: none;">
            <dl><dd>4、xxx</dd></dl><img src="http://1.shnupartner.sinaapp.com/cdhks/images/xh.jpg" style="height: 90px; width: 90px;" />
            <ul class="list-group js_group">
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> A.xxx </li>
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> B.xxx </li>
                <li class="list-group-item" data-score="20" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> C.xxx </li>
                <li class="list-group-item" data-score="-1" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> D.xxx </li>
            </ul><div class="buttons"><a class="btn btn-lg btn-danger btn-block" onclick="return on_btn_click(4);">点击查看最后一题</a></div>
        </div>
        <!----------------------------------------第五题-------------------------------------------------------------------------------------------------------------------->
        <div id="panel2" class="panel-body js_answer" style="display: none;">
            <dl><dd>5、xxx</dd></dl>
            <ul class="list-group js_group">
                <li class="list-group-item" data-score="5" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> A.xxx </li>
                <li class="list-group-item" data-score="5" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> B.xxx </li>
                <li class="list-group-item" data-score="5" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> C.xxx </li>
                <li class="list-group-item" data-score="5" onclick="return toggle(this);"><i class="glyphicon glyphicon-unchecked"></i> D.xxx </li>
            </ul><div class="buttons"><a class="btn btn-lg btn-danger btn-block" onclick="return on_btn_click(5);">点击查看结果</a></div>
        </div>
        <!-----------------------------------------------------得分显示部分---------------------------------------------------------------------------------------------->
        <!---------------------------------非满分------------------------------------------------------------------------------------------------------------------------->
        <div id="panel3" class="panel-body js_result" data-id="0" style="display:none;">
            <h1 class="bold text-danger">很遗憾</h1>
            <hr>
            <dl>
                <dt>评语:</dt>
                <dd>
                    <p>xxx~</p>
                </dd>
            </dl>
            <?php
            $fromUsername=$_GET["openid"];

            echo'<div class="buttons">
                <a href="xxxx='.$fromUsername.'&n=0" class="btn btn-lg btn-danger btn-block" ">点击提交分数</a>
            </div>'
            ?>

        </div>
        <!---------------------------------满分100------------------------------------------------------------------------------------------------------------------------------------------------->
        <div id="panel3" class="panel-body js_result" data-id="1" style="display:none;">
            <h1 class="bold text-danger">xxx</h1>
            <hr>
            <dl>
                <dt>评语:</dt>
                <dd>
                    <p>xxx</p>
                </dd>
            </dl>
            <?php
            $fromUsername=$_GET["openid"];

            echo'<div class="buttons">
                <a href="xxx'.$fromUsername.'&n=100" class="btn btn-lg btn-danger btn-block" ">点击提交分数</a>
            </div>'

            ?>

        </div>
        <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <!----
                <div id="panel3" class="panel-body js_result" data-id="4" style="display:none;">
                    <h1 class="bold text-danger">没到80分</h1>
                    <hr>
                    <dl>
                        <dt>详细分析:</dt>
                        <dd>
                            <p>水平会稳步进入满分状态！转发朋友圈，今年必大发！&quot;&quot;&quot;&quot;</p>
                        </dd>
                    </dl>
                     <div class="buttons">
                        <a href="javascript:void(0)" class="btn btn-lg btn-success" style="width:100%" onclick="$('#mcover').show()">分享给朋友(圈)</a>
                    </div>
                </div>
                <div id="panel3" class="panel-body js_result" data-id="5" style="display:none;">
                    <h1 class="bold text-danger">没到90分</h1>
                    <hr>
                    <dl>
                        <dt>详细分析:</dt>
                        <dd>
                            <p>这个分数线上的朋友，你是&quot;&quot;&quot;</p>
                        </dd>
                    </dl>
                    <div class="buttons">
                        <a href="javascript:void(0)" class="btn btn-lg btn-success" style="width:100%" onclick="$('#mcover').show()">分享给朋友(圈)</a>
                    </div>
                </div>
                <div id="panel3" class="panel-body js_result" data-id="6" style="display:none;">
                    <h1 class="bold text-danger">哇噻，满分！</h1>
                    <hr>
                    <dl>
                        <dt>详细分析:</dt>
                        <dd>
                            <p>

                                动词哒词！Come On Baby！你是我滴小呀小苹果~，吧！！&quot;&quot;&quot;&quot;</p>
                        </dd>
                    </dl>
                    <div class="buttons">
                        <a href="javascript:void(0)" class="btn btn-lg btn-success" style="width:100%" onclick="$('#mcover').show()">分享给朋友(圈)</a>
                    </div>
                </div>-->
    </div>

</div>

<div id="mcover" onclick="$(this).hide()">
    <img src="images/guide.png">
</div>
<div class="loads" style="display:bolck"><i></i></div>
<script src="./js/zepto.min.js"></script>
<script src="./js/WeixinApi.min.js"></script>
<script type="text/javascript">
    var total = '5';//题目数
    var tScore = 0;//累加分数
    var scoreArr = new Array();
    scoreArr[0] = 0;
    scoreArr[1] = 100;
    //    document.getElementById("mytt").value = tt;//赋值
    //form.表单名.submit();
    /*******************************************************************************************************************************/
    function next(t){
        $(".panel-body").hide();
        $(".js_answer").eq(t).show();//选择显示下一个问题
    }
    /********************************************************************************************************************************/
    function on_btn_click(t) {

        // alert(tScore);
        if(t == total){
            //t表示当前题号
            result(tScore);
        }
        else{
            //  on_btn_click(t);
            //setTimeout(function(){next(t);},300);
            next(t);
        }
        //next(t);
        //setTimeout(function(){next(t);},300);
    }


    /*******************************************************************************************************************************/
    function result(t){
        console.log("得分"+tScore);
        $(".panel-body").hide();
        for (var i = scoreArr.length - 1; i >= 0; i--) {
            if ( parseInt(t) >= parseInt(scoreArr[i]) ) {//倒序依次比较，当scoreArr[i]里的分数<=tScore的值时，scoreArr[i]的分数就是最后的得分
                console.log("应该弹"+i);
                $(".js_result").eq(i).show();//根据不同的分数，显示不同的输出结果
                $.get("mobile.php?act=module&name=dialect&do=detail&weid=2", {id: "1"});
                return false;
            }
            else{
                continue;
            }
        };
    }
    /*********************************************************************************************************************************/
    function toggle(t){
        $(".list-group-item").removeClass('active')
        var score = $(t).attr("data-score");
        tScore  = parseInt(tScore) + parseInt(score);
        $(t).find('i').removeClass('glyphicon-unchecked').addClass('glyphicon-ok');
        var t = $(".js_answer").index($(t).parents(".js_answer")) + 1;
        /*     if(t == total){
         //t表示当前题号
         result(tScore);
         }
         else{
         //  on_btn_click(t);
         //setTimeout(function(){next(t);},300);
         }*/
    }
    /***********************************************************************************************************************************/
    /* Zepto(function($){
     $('.loads').hide();
     })
     WeixinApi.ready(function(Api) {
     Api.showOptionMenu();
     var wxData = {
     "appId": "",
     "imgUrl" : 'xxx',
     "link" : 'xxx',
     "desc" : '➼xxx',
     "title" : 'xxx'
     };
     // 分享的回调
     var wxCallbacks = {
     // 分享被用户自动取消
     cancel : function(resp) {
     alert("别这样的啦，好东西要和朋友分享的嘛！分享后我告诉你一个秘密。");
     },
     // 分享失败了
     fail : function(resp) {
     alert("分享失败，可能是网络问题，一会儿再试试？");
     },
     // 分享成功
     confirm : function(resp) {
     $.get("mobile.php?act=module&name=dialect&do=detail&weid=2", {id: "1",op:'share'});
     window.location.href='xxx';
     },
     };
     Api.shareToFriend(wxData,wxCallbacks);
     Api.shareToTimeline(wxData,wxCallbacks);
     Api.shareToWeibo(wxData,wxCallbacks);
     });*/
</script>
<div class="hide"></div>
</body>
</html>