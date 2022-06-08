function admin_user(val,user_id){
    $.ajax(
        {
            type:'post',
            url:'changeadmin.php',
            data:{val:val,user_id:user_id},
            sucess:function(res){
                if(res==1){
                    $('strr'+user_id).html('Admin');
                }
                else{
                    $('strr'+user_id).html('User'); 
                }
            }

        }
    )
}