//TIM
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

//Mapel Kelas X
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

//Mapel Kelas XI
$('body').on('click','.basdatxi',function(){
    $('#basdatxi').collapse('toggle');
    $('#pboxi').collapse('hide');
    $('#pdkkxi').collapse('hide');
    $('#pwpbxi').collapse('hide');
    $('#pplxi').collapse('hide');
});

$('body').on('click','.pboxi',function(){
    $('#pboxi').collapse('toggle');
    $('#basdatxi').collapse('hide');
    $('#pdkkxi').collapse('hide');
    $('#pwpbxi').collapse('hide');
    $('#pplxi').collapse('hide');
});

$('body').on('click','.pdkkxi',function(){
    $('#pdkkxi').collapse('toggle');
    $('#pboxi').collapse('hide');
    $('#basdatxi').collapse('hide');
    $('#pwpbxi').collapse('hide');
    $('#pplxi').collapse('hide');
});

$('body').on('click','.pwpbxi',function(){
    $('#pwpbxi').collapse('toggle');
    $('#pboxi').collapse('hide');
    $('basdatxi').collapse('hide');
    $('#pdkkxi').collapse('hide');
    $('#pplxi').collapse('hide');
});

$('body').on('click','.pplxi',function(){
    $('#pplxi').collapse('toggle');
    $('#pboxi').collapse('hide');
    $('basdatxi').collapse('hide');
    $('#pdkkxi').collapse('hide');
    $('#pwpbxi').collapse('hide');
});

//Kelas XII
$('body').on('click','.pwpbxii',function(){
    $('#pwpbxii').collapse('toggle');
    $('#pboxii').collapse('hide');
    $('#basdatxii').collapse('hide');
    $('#pdkkxii').collapse('hide');
});

$('body').on('click','.pboxii',function(){
    $('#pboxii').collapse('toggle');
    $('#pwpbxii').collapse('hide');
    $('#basdatxii').collapse('hide');
    $('#pdkkxii').collapse('hide');
});

$('body').on('click','.basdatxii',function(){
    $('#basdatxii').collapse('toggle');
    $('#pboxii').collapse('hide');
    $('#pwpbxii').collapse('hide');
    $('#pdkkxii').collapse('hide');
});

$('body').on('click','.pdkkxii',function(){
    $('#pdkkxii').collapse('toggle');
    $('#pboxii').collapse('hide');
    $('#pwpbxii').collapse('hide');
    $('#basdatxii').collapse('hide');
});

//DataTables
$(document).ready(function(){
    $('.pd').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "pageLength" : 5,
        "lengthMenu" : [5,10,15,20]
      });
});
