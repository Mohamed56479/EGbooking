function Active_Inactive(val,user_id){
    $.ajax(
        {
            type:'post',
            url:'change.php',
            data:{val:val,user_id:user_id},
            sucess:function(result){
                if(result==1){
                    $('str'+user_id).html('Active');
                }
                else{
                    $('str'+user_id).html('Inactive'); 
                }
            }

        }
    )
}