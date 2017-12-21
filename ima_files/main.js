/**
 * Created by Administrator on 2017/3/13.
 */
$(function(){

    $('.nav ul').children().each(function(k,v){
        $(v).on('click',function(){
            $(v).addClass('active').siblings().removeClass('active')
        })
    })


    $('#auto_login').on('click', function () {
        $(this).toggleClass('active')
    })


    $('#forget_btn').on('click',function(){
        $('#login').hide();
        $('#forget').show();
    })

})



//Ajax 请求 json post
function AjaxJson(url,data,successFunc){
    var data = data || "{}";
    successFunc = successFunc || null;
    if(!url || url==='#')
        return false;

    $.ajax({
        type: 'POST',
        url: url,
        data:data,
        dataType: 'json',
        success: function(data) {
            try{ successFunc(data); }catch(e){}
        },
        error: function(xhr, type) {
            console.log("页面动态加载不成功，请与管理员联系");
        },
    })
    //阻止冒泡
    return false;
}

// 页面提示信息
function bh_msg_tips(msg){
    var oMask = document.createElement("div");
    oMask.id = "bh_msg_lay";
    oMask.className = "layer";
    oMask.innerHTML =  "<div class='login-lay'> <i onclick='hide_msg_tips()'>×</i><p class='msg'>" + msg + "</p></div>";
    document.body.appendChild(oMask);
    setTimeout(function(){$("#bh_msg_lay").remove();},5000);
}

function hide_msg_tips(){
    $("#bh_msg_lay").remove();
}

// 隐藏浮层
function hide_lay(){
    $(".layer").hide();
}
