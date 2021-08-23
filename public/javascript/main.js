$('body').on('click','.btn-pa-rey',function(){
	$('#pa-rey').collapse('toggle');
	$('#pa-dede').collapse('hide');
	$('#pa-hannif').collapse('hide');
	$('#pa-munir').collapse('hide');
	$('#bu-syifa').collapse('hide');
});

$('body').on('click','.btn-pa-dede',function(){
	$('#pa-dede').collapse('toggle');
	$('#pa-rey').collapse('hide');
	$('#pa-hannif').collapse('hide');
	$('#pa-munir').collapse('hide');
	$('#bu-syifa').collapse('hide');
});

$('body').on('click','.btn-pa-hannif',function(){
	$('#pa-hannif').collapse('toggle');
	$('#pa-rey').collapse('hide');
	$('#pa-dede').collapse('hide');
	$('#pa-munir').collapse('hide');
	$('bu-syifa').collapse('hide');
});

$('body').on('click','.btn-pa-munir',function(){
	$('#pa-munir').collapse('toggle');
	$('#pa-rey').collapse('hide');
	$('#pa-dede').collapse('hide');
	$('#pa-hannif').collapse('hide');
	$('#bu-syifa').collapse('hide');
});

$('body').on('click','.btn-bu-syifa',function(){
	$('#bu-syifa').collapse('toggle');
	$('#pa-rey').collapse('hide');
	$('#pa-dede').collapse('hide');
	$('#pa-hannif').collapse('hide');
	$('#pa-munir').collapse('hide');
});

$('body').on('click','.siskomx',function(){
    $('#siskomx').collapse('toggle');
    $('#simdigx').collapse('hide');
    $('#komjarx').collapse('hide');
    $('#pdx').collapse('hide');
});

$('body').on('click','.simdigx',function(){
    $('#simdigx').collapse('toggle');
    $('#siskomx').collapse('hide');
    $('#komjarx').collapse('hide');
    $('#pdx').collapse('hide');
});

$('body').on('click','.komjarx',function(){
    $('#komjarx').collapse('toggle');
    $('#simdigx').collapse('hide');
    $('#siskomx').collapse('hide');
    $('#pdx').collapse('hide');
});

$('body').on('click','.pdx',function(){
    $('#pdx').collapse('toggle');
    $('#simdigx').collapse('hide');
    $('#siskomx').collapse('hide');
    $('#komjarx').collapse('hide');
});
