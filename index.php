<?php
require_once './sql.php';
define("TOKEN", "weixin");
$wechatObj = new wechatCallbackapiTest();
$wechatObj->responseMsg();

class wechatCallbackapiTest
{
    public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }

    public function responseMsg()
    {
        //get post data, May be due to the different environments
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        //extract post data
        if (!empty($postStr))
        {

            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $time = time();
            $event = $postObj->Event;

            $textTpl = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[text]]></MsgType>
                            <Content><![CDATA[%s]]></Content>
                            </xml>";

            $newsTpl1 = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[news]]></MsgType>
                            <ArticleCount>1</ArticleCount>
                            <Articles>
                            <item>
                            <Title><![CDATA[xxx]]></Title>
                            <Description><![CDATA[xxx]]></Description>
                            <PicUrl><![CDATA[http://xxx/images/fm.jpg]]></PicUrl>
                            <Url><![CDATA[http://xxx/index.php?openid=".$postObj->FromUserName."]]></Url>
                            </item>
                            </Articles>
                            </xml> ";

            if (!empty($event))
            {
                $sql = "insert into score (`id`,`fenshu`,`paiming`) VALUES ('$fromUsername',1,0)";
                _insert_data($sql);
                $resultStr = sprintf($newsTpl1, $fromUsername, $toUsername, $time);
                echo $resultStr;
            }

            if (empty($user_flag))
            {

                if($keyword == "xx")
                {
                    $sql = "SELECT fenshu FROM score WHERE id = '$fromUsername'";
                    $result=_select_data($sql);
                    $n=mysql_fetch_array($result);
                    $q = $n['fenshu'];
                    if($q==100)
                    {
                        $sql = "SELECT paiming  FROM score WHERE id='$fromUsername'";
                        $result=_select_data($sql);
                        $n=mysql_fetch_array($result);
                        $p = $n['paiming'];
                        //$contentStr=$p;
                        if($p==0)
                        {
                            $sql = "SELECT count(id) as shu FROM score WHERE fenshu = '100'";
                            $result=_select_data($sql);
                            $n=mysql_fetch_array($result);
                            $q = $n['shu'];
                            //     $n=mysql_fetch_array($result);
                            //$q = $n['fenshu'];
                            //$contentStr=$q;
                            $contentStr='xxx';
                            $sql = "UPDATE `score` SET `paiming`= '$q' where id = '$fromUsername'";
                            _update_data($sql);
                        }
                        else
                        {
                            $contentStr='xxx';
                        }
                    }
                    else if($q==0)
                    {
                        $contentStr='xxx';
                    }
                    else
                    {
                        $contentStr='xxx';
                    }
                    $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $contentStr);
                    echo  $resultStr;
                }

                if (!empty($sql))
                {
                    _insert_data($sql);
                }
            }
            else
            {

            }

        }else {
            echo "";
            exit;
        }
    }

    private function checkSignature()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

}

?>