$(document).ready(function(){
	
    $('#getUser').on('click',function(){
	
        var user_id = $('#user_id').val();
        $.ajax({
            type:'POST',
            url:'getData.php',
            dataType: "JSON",
            data:{user_id:user_id},
            success:function(data){
                if(data.status == 'ok'){
                    $('#userName').text(data.result.id);
                    $('#userEmail').text(data.result.name);
                  //  $('#userPhone').text(data.result.phone);
                  //  $('#userCreated').text(data.result.created);
                  //  $('.user-content').slideDown();
					//alert("encontro");
                }else{
                 //   $('.user-content').slideUp();
                    alert("User not found...");
                } 
            }
        });
    });
});