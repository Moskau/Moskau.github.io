$(document).ready(function () {
	$('.icon').hover(
	function () {
		$(this).addClass('active');
	},
	function () {
		$(this).removeClass('active');
	}
	);
	$('.icon').click(function () {
		$('.icon').removeClass('selected');
		$(this).addClass('selected');
	});
});

$('.icon').on("click", function(e) {
	var $this = $(this),
		  $id = $this.attr('id'),
		  $class = '.' + $('.lang-' + $id).attr('class').replace('hide', '');

	$('.lang-default').addClass('hide');
	$('.lang-' + $id).removeClass('hide');
	$('div[class*=lang]').not($class).addClass('hide');	
	
	if($id=="php"){
		$('.jumbotron').css('background-image','url("http://www.pptbackgrounds.net/uploads/php-coders-powerpoint-backgrounds.jpg")');
		$('h1').html("php");
	}
	else if($id=="java"){
		$('.jumbotron').css('background-image','url("#")');
		$('h1').html("java");
	}
	else if($id=="C"){
		$('.jumbotron').css('background-image','url("#")');
		$('h1').html("C");
	}
	else if($id=="lua"){
		$('.jumbotron').css('background-image','url("#")');
		$('h1').html("lua");
	}
	else if($id=="UDK"){
		$('.jumbotron').css('background-image','url("#")');
		$('h1').html("UDK");
	}
	else if($id=="javascript"){
		$('.jumbotron').css('background-image','url("#")');
		$('h1').html("javascript");
	}
	else if($id=="gaming"){
		$('.jumbotron').css('background-image','url("#")');
		$('h1').html("gaming");
	}
});

