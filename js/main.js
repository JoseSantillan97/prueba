$(document).ready(function(){
	var altura = $('.menu').offset().top;
	alert(altura);
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed');
		} else {
			$('.menu').removeClass('menu-fixed');
		}
	});
 
 });



<script type="text/javascript">
$(document).ready(function() {
  pageButton('#contact-button');
  $("#envelope form").validate({ errorElement: 'span', errorPlacement: function(error, element){ element.before(error); }, submitHandler: function(){ sendemail(); } });
  $('#envelope form a').click(function(){ $("#envelope form").submit(); return false; });
});
var sendemail = function(){
  $('#envelope form a').remove();
  $('<p />').addClass('emailsent').html('Sending...').appendTo($('#envelope-send'));
  $.ajax({ url: "/send_contact_email", type: 'POST', data: $('#envelope form').serializeArray(), success: function(){ $('.emailsent').remove(); $('<p />').addClass('emailsent').html('Email Successfully Sent! - '+(new Date()).toGMTString()).appendTo($('#envelope-send')) } });
}
</script>