$(function()
{
	var listticker = function()
	{
		setTimeout(function(){
			$('#listticker li:first').animate( {marginTop: '-80px'}, 1200, function()
			{
				$(this).detach().appendTo('div#listticker' ).removeAttr('style');	
			});
			listticker();
		}, 6000);
	};
	listticker();
});