$(document).ready(function(){  
  function fetch_data()      
  {  
    $.ajax({  
      url:"select.php",  
      method:"POST",  
      success:function(data){  
      $('#live_data').html(data);  
      }  
    });  
  }  
  fetch_data();  
    $(document).on('click', '.btn_delete', function(){  
      var id=$(this).data("id3");   
        {  
          $.ajax({  
            url:"mod.php",  
            method:"POST",  
            data:{id:id},  
            dataType:"text",  
            success:function(data){    
                fetch_data();  
            }  
          });  
        }  
    });  
});  

/*var si = new Audio();
si.src = '../sound/ac_si.mp3';

var no = new Audio();
no.src = '../sound/ac_no.mp3';*/