<?php
namespace app\index\controller;

class Index
{
    public function index($id=3)
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>'.$id;
    }
    public function api()
    {
    	return ['api'=>"wo shi api"];
    }

    public function getContent()
    {
    	$uid = input('get.uid');
    	$content = db('content')->order('subtime','desc')->select();
    	foreach ($content as $k => $v) {
    		$re = db('zan')->where('content_id',$v['id'])->where('uid',$uid)->count();
    		if ($re) {
    			$content[$k]['zanimg'] ="../../images/zan_on.png";
    		}else{
    			$content[$k]['zanimg'] ="../../images/zan.png";
    		}
    		$re = db('shoucang')->where('content_id',$v['id'])->where('uid',$uid)->count();
    		if ($re) {
    			$content[$k]['shoucangimg'] ="../../images/shoucang_on.png";
    		}else{
    			$content[$k]['shoucangimg'] ="../../images/shoucang.png";
    		}
    		$content[$k]['count_comments'] = db('comments')->where('con_id',$v['id'])->count();
    		$content[$k]['count_zan'] = db('zan')->where('content_id',$v['id'])->count();
    		$content[$k]['count_shoucang'] = db('shoucang')->where('content_id',$v['id'])->count();
    		$content[$k]['userinfo']=db('user')->where('id',$v['uid'])->find() ;
            $content[$k]['topicinfo']=db('topic')->find($v['topicid']) ;
    		$content[$k]['subtime'] = dealtime($content[$k]['subtime']);

    	}
    	return $content;
    }
    public function getShoucangContent()
    {
    	$uid = input('get.uid');
    	$ids=[];
    	$idss = db('shoucang')->field('content_id')->where('uid',$uid)->select();
    	foreach ($idss as $k=>$v) {
    		$ids[]=$v['content_id'];
    	}
    	$content = db('content')->select($ids);
    	foreach ($content as $k => $v) {
    		$re = db('zan')->where('content_id',$v['id'])->where('uid',$uid)->count();
    		if ($re) {
    			$content[$k]['zanimg'] ="../../images/zan_on.png";
    		}else{
    			$content[$k]['zanimg'] ="../../images/zan.png";
    		}
    		$re = db('shoucang')->where('content_id',$v['id'])->where('uid',$uid)->count();
    		if ($re) {
    			$content[$k]['shoucangimg'] ="../../images/shoucang_on.png";
    		}else{
    			$content[$k]['shoucangimg'] ="../../images/shoucang.png";
    		}
    		$content[$k]['count_comments'] = db('comments')->where('con_id',$v['id'])->count();
    		$content[$k]['count_zan'] = db('zan')->where('content_id',$v['id'])->count();
    		$content[$k]['count_shoucang'] = db('shoucang')->where('content_id',$v['id'])->count();
    		$content[$k]['userinfo']=db('user')->where('id',$v['uid'])->find() ;
            $content[$k]['topicinfo']=db('topic')->find($v['topicid']) ;
    		$content[$k]['subtime'] = dealtime($content[$k]['subtime']);

    	}
    	return $content;
    }
    public function getZanContent()
    {
    	$uid = input('get.uid');
    	$ids=[];
    	$idss = db('zan')->field('content_id')->where('uid',$uid)->select();
    	foreach ($idss as $k=>$v) {
    		$ids[]=$v['content_id'];
    	}
    	$content = db('content')->select($ids);
    	foreach ($content as $k => $v) {
    		$re = db('zan')->where('content_id',$v['id'])->where('uid',$uid)->count();
    		if ($re) {
    			$content[$k]['zanimg'] ="../../images/zan_on.png";
    		}else{
    			$content[$k]['zanimg'] ="../../images/zan.png";
    		}
    		$re = db('shoucang')->where('content_id',$v['id'])->where('uid',$uid)->count();
    		if ($re) {
    			$content[$k]['shoucangimg'] ="../../images/shoucang_on.png";
    		}else{
    			$content[$k]['shoucangimg'] ="../../images/shoucang.png";
    		}
    		$content[$k]['count_comments'] = db('comments')->where('con_id',$v['id'])->count();
    		$content[$k]['count_zan'] = db('zan')->where('content_id',$v['id'])->count();
    		$content[$k]['count_shoucang'] = db('shoucang')->where('content_id',$v['id'])->count();
    		$content[$k]['userinfo']=db('user')->where('id',$v['uid'])->find() ;
            $content[$k]['topicinfo']=db('topic')->find($v['topicid']) ;
    		$content[$k]['subtime'] = dealtime($content[$k]['subtime']);

    	}
    	return $content;
    }
    public function getHotContent()
    {
        $arr = [];
        $uid = input('get.uid');
        $content = db('content')->order('subtime','desc')->select();
        foreach ($content as $k => $v) {
        	$re = db('zan')->where('content_id',$v['id'])->where('uid',$uid)->count();
    		if ($re) {
    			$content[$k]['zanimg'] ="../../images/zan_on.png";
    		}else{
    			$content[$k]['zanimg'] ="../../images/zan.png";
    		}
    		$re = db('shoucang')->where('content_id',$v['id'])->where('uid',$uid)->count();
    		if ($re) {
    			$content[$k]['shoucangimg'] ="../../images/shoucang_on.png";
    		}else{
    			$content[$k]['shoucangimg'] ="../../images/shoucang.png";
    		}
    		$content[$k]['count_shoucang'] = db('shoucang')->where('content_id',$v['id'])->count();
            $content[$k]['count_comments'] = db('comments')->where('con_id',$v['id'])->count();
            $content[$k]['count_zan'] = db('zan')->where('content_id',$v['id'])->count();
            $content[$k]['userinfo']=db('user')->where('id',$v['uid'])->find() ;
            $content[$k]['topicinfo']=db('topic')->find($v['topicid']) ;
            $content[$k]['subtime'] = dealtime($content[$k]['subtime']);
            $arr[$v['id']]=$content[$k]['count_comments'];
        }
        array_multisort(array_column($content,'count_comments'),SORT_DESC,$content);

        return $content;
    }
    public function getContentById()
    {
    	$id = input('get.id');
    	$data = db('content')->find($id);
        $data['topicinfo']=db('topic')->find($data['topicid']) ;
    	$data['userinfo']=db('user')->where('id',$data['uid'])->find() ;
    	$data['subtime'] = dealtime($data['subtime']);
    	return $data;
    }
    public function getContentByTopicId()
    {
        $id = input('get.id');
        $data = db('content')->where('topicid',$id)->select();
        foreach ($data as $k => $v) {
            $data[$k]['count_comments'] = db('comments')->where('con_id',$v['id'])->count();
            $data[$k]['userinfo']=db('user')->where('id',$data[$k]['uid'])->find() ;
            $data[$k]['topicinfo']=db('topic')->find($v['topicid']) ;
            $data[$k]['subtime'] = dealtime($data[$k]['subtime']);
        }
        return $data;
    }
    public function getContentByUserId()
    {
    	$uid = input('get.uid');
    	$content = db('content')->where('uid',$uid)->select();
    	foreach ($content as $k => $v) {
    		$re = db('zan')->where('content_id',$v['id'])->where('uid',$uid)->count();
    		if ($re) {
    			$content[$k]['zanimg'] ="../../images/zan_on.png";
    		}else{
    			$content[$k]['zanimg'] ="../../images/zan.png";
    		}
    		$re = db('shoucang')->where('content_id',$v['id'])->where('uid',$uid)->count();
    		if ($re) {
    			$content[$k]['shoucangimg'] ="../../images/shoucang_on.png";
    		}else{
    			$content[$k]['shoucangimg'] ="../../images/shoucang.png";
    		}
    		$content[$k]['count_comments'] = db('comments')->where('con_id',$v['id'])->count();
    		$content[$k]['count_zan'] = db('zan')->where('content_id',$v['id'])->count();
    		$content[$k]['count_shoucang'] = db('shoucang')->where('content_id',$v['id'])->count();
    		$content[$k]['userinfo']=db('user')->where('id',$v['uid'])->find() ;
            $content[$k]['topicinfo']=db('topic')->find($v['topicid']) ;
    		$content[$k]['subtime'] = dealtime($content[$k]['subtime']);

    	}
    	return $content;
    }
    public function insertContent()
    {
    	$data = input('post.');
        
        $data['subtime']= time();
        db('content')->insert($data);
        return db('content')->field('id')->where('subtime',$data['subtime'])->find();
    }
    public function delContent()
    {
    	# code...
    }
    public function getUser()
    {
    	return time();
    }
    public function addUser()
    {
    	$data = input('post.')['userInfo'];
    	$re = db('user')->where('nickname',$data['nickName'])->find();
    	if (!$re) {
    		return db('user')->insert($data);;
    	}else{
            return $re;
        }
    	
    }
    public function getCommentsByContentId()
    {
    	$con_id = input('get.id');
    	$comments = db('comments')->where('con_id',$con_id)->select();
    	foreach ($comments as $k => $v) {
    		$comments[$k]['userinfo']=db('user')->where('id',$v['uid'])->find() ;
    		$comments[$k]['subtime'] = dealtime($comments[$k]['subtime']);
    	}
    	return $comments;
    }
    public function insertComment()
    {
        $data = input('post.');
        
        $data['subtime']= time();
        db('comments')->insert($data);
        return db('comments')->field('id')->where('subtime',$data['subtime'])->find();
    }
    public function getTopic()
    {
        $data = db('topic')->select();
        $url = "http://localhost/znq/";
        foreach ($data as $k => $v) {
            $data[$k]['newimgurl']= $url.$v['imgurl'];
        }
        return $data;
    }
    public function getTopicName()
    {
        $res = [];
        $data = db('topic')->field('name')->select();
        foreach ($data as $k =>$v) {
            $res[]=$v['name'];
        }
        return $res ;
    }
    public function dianzan()
    {
    	$data['uid'] = input('get.uid');
    	$data['content_id'] = input('get.content_id');
    	$action = input('get.action');
    	if ($action) {
    		$re = db('zan')->where('uid',$data['uid'])->where('content_id',$data['content_id'])->find();
    		if (!$re) {
    			return db('zan')->insert($data);
    		}
    		 return false;
    	}else{
    		return db('zan')->where('uid',$data['uid'])->where('content_id',$data['content_id'])->delete();
    	}
    }
    public function shoucang()
    {
    	$data['uid'] = input('get.uid');
    	$data['content_id'] = input('get.content_id');
    	$action = input('get.action');
    	if ($action) {
    		$re = db('shoucang')->where('uid',$data['uid'])->where('content_id',$data['content_id'])->find();
    		if (!$re) {
    			return db('shoucang')->insert($data);
    		}
    		 return false;
    	}else{
    		return db('shoucang')->where('uid',$data['uid'])->where('content_id',$data['content_id'])->delete();
    	}
    }

    /**
     * tp5邮件
     * @param
     * @author staitc7 <static7@qq.com>
     * @return mixed
     */
    public function email() {
        $toemail='675324370@qq.com';
        $name='static7';
        $subject='QQ邮件发送测试';
        $content='恭喜你，邮件测试成功。';
        dump(send_mail($toemail,$name,$subject,$content));
    }
}
