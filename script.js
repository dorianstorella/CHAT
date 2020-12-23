LoadChat();

function LoadChat(){
  $.post('handlers/messages.php?action=getMessages', function(response){
    $('#chat').html(response);
  })
}


$('.textarea').keyup(function(e){
  if(e.which == 13){
    $('form').submit();
  }
});

$('form').submit(function(){

  let message = $('.textarea').val();

  $.post('handlers/messages.php?action=sendMessage&message='+message, function(response){

    if(response==1){
      LoadChat();
      document.getElementById('messageFrm').reset();
    }

  });
  return false;
})