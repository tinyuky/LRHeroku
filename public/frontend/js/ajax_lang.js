$(document).ready(function(){
  $('.multiln').click(function(){
    var _token = $('input[name="_token"]').val();
    $.ajax({
      url: URL::route('shop.mullang'),
      type: "post",
      data: { _token : _token,'locale':$(this).find('p').text()},
      datatype:'JSON',
      success: function( data ) {
      }
    }).done(function(e){
      window.location.reload(true);
    }).fail(function(e){
      alert('fail');
    });
  });
});
