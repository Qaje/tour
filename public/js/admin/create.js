
// BEGIN CYTIES PROVINCES MUNICIPALITIES

$(function(){
	$('#selectcity').on('change', onSelectCityChangeCity);
});
function onSelectCityChangeCity(){
	var city_id = $(this).val();
	//alert('hello'+city_id);
    //AJAX
	$.get('/city/'+city_id+'/provinces',function(data){
		var html_select = '<option value="">Selecione Provincia</option>';
		for(var i=0;i<data.length;i++)
			html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
			//console.log(html_select);
			$('#selectprovince').html(html_select);
	});
		$.get('/cityname/'+city_id,function(data){
			var cad = data[0].name;
			document.getElementById("cityh").value = cad;
		});
}
//var data = null;

$(function(){
	$('#selectprovince').on('change', onSelectCityChangeProvince);
});
function onSelectCityChangeProvince(){
	var province_id = $(this).val();
    //AJAX
	$.get('/province/'+province_id+'/municipalities',function(data){
		var html_select = '<option value="">Selecione Municipio</option>';
		for(var i=0;i<data.length;i++)
			html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
			//console.log(html_select);
			$('#selectmunicipality').html(html_select);
	});
		$.get('/provincename/'+province_id,function(data){
			var cad = data[0].name;
			document.getElementById("provinceh").value = cad;
		});
}
//END CYTIES PROVINCES MUNICIPALITIES
// BEGIN CATEGORY AMBIT SUBAMBIT
$(function(){
	$('#catpat').on('change', onSelectCategory);
});
function onSelectCategory(){
	var category_id = $(this).val();
	//alert(category_id);
	//AJAX
	$.get('/catergory/'+category_id+'/ambits',function(data){
		var html_select = '<option value="">Selecione Ambito</option>';
		for(var i=0;i<data.length;i++)
			html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
			//console.log(html_select);
			$('#amb').html(html_select);		
	});
	$.get('/categoryname/'+category_id,function(data){
		console.log(data[0].description);
	});
}

$(function(){
	$('#amb').on('change', onSelectAmbit);
});
function onSelectAmbit(){
	var ambit_id = $(this).val();
    //AJAX
	$.get('/ambit/'+ambit_id+'/subambits',function(data){
		var html_select = '<option value="">Selecione Sub-Ambito</option>';
		for(var i=0;i<data.length;i++)
			html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
			//console.log(html_select);
			$('#subamb').html(html_select);
	});
	$.get('/ambitname/'+ambit_id,function(data){
		var cad = data[0].name;
		document.getElementById("ambh").value = cad;
	});
}

$(function(){
	$('#typ').on('change', onSelectType);
});
function onSelectType(){
	var type_id = $(this).val();
    //AJAX
	$.get('/type/'+type_id+'/subtypes',function(data){
		var html_select = '<option value="">Selecione SubAmbito </option>';
		for(var i=0;i<data.length;i++)
			html_select += '<option value="'+data[i].id+'">'+data[i].description+'</option>';
			//console.log(html_select);
			$('#subtyp').html(html_select);
	});
}
////CODE GENERATE
$(function(){
	$('#catpat').on('change', onSelectCat);
});
var cadcode = "";
var precad = "";
var cat =""
function onSelectCat(){
	var cad = $(this).val();
	if( cad == null)
	{
		document.getElementById("text1").value = "";
	}
	else
	{
		//document.getElementById("text1").value = document.getElementById("catpat").value;
		if(cad == 1){
			cadcode =  'PM';
			document.getElementById("text1").value =  cadcode;
		}
		if(cad == 2){
			cadcode = 'PI';
			document.getElementById("text1").value =  cadcode;
		}
		if(cad == 3){
			cadcode = 'SI'
			document.getElementById("text1").value =  cadcode;
		}

	}
	

}

$(function(){
	$('#selectcity').on('change', onSelectCity);
});
function onSelectCity(){
	var city_idc = $(this).val();
	//console.log(city_idc);
	cadcode = cadcode+'-0'+city_idc;
	document.getElementById("text1").value =  cadcode;
    //AJAX
}
$(function(){
	$('#selectprovince').on('change', onSelectProv);
});
function onSelectProv(){
	var province_idc = $(this).val();
	$.get('/provincecode/'+province_idc,function(data){
		//alert("Data: " + data);
		var codep =  data;
		//console.log(codep);
		cadcode = cadcode+'-0'+codep;
		document.getElementById("text1").value =  cadcode;
	});
}
$(function(){
	$('#selectmunicipality').on('change', onSelectMun);
});

function onSelectMun(){
	var municipality_idc = $(this).val();
	$.get('/municipalitycode/'+municipality_idc,function(data){
		//alert("Data: " + data);
		var cpdem =  data;
		//console.log(cpdem);
		cadcode = cadcode+'-0'+cpdem;
		//alert('cadcode all'+cadcode)
		//cadcode = cadcode+'-'+cpdem;
		//document.getElementById("text1").value =  cadcode;
	});
	$.get('/num/',function(data){
			cadcode = cadcode+precad;
			var num = data;
			num++;
			//console.log('obtinene numero '+num);
			//alert(num);
			cadcode = cadcode+'-00000'+ num;
			document.getElementById("text1").value =  cadcode;
			cadcode = cadcode+'-F01'
			document.getElementById("text2").value =  cadcode;
	});
		$.get('/municipalityname/'+municipality_idc,function(data){
			var cad = data[0].name;
			document.getElementById("municipalityh").value = cad;
		});
}

$(function(){
	$('#amb').on('change', onSelectAmbito);
});
function onSelectAmbito(){
	var type_idc = $(this).val();
	//alert(type_idc);
	$.get('/ambit/'+type_idc,function(data){
		//alert("Data: " + data);
		var typc =  data;
		//console.log(typc);
		precad = precad+'-'+typc;
		//console.log('precad con amb'+precad)
		//document.getElementById("text1").value =  cadcode;
	});
}
$(function(){
	$('#subamb').on('change', onSelectSubambit);
});
function onSelectSubambit(){
	var subtype_idc = $(this).val();
	$.get('/subambit/'+subtype_idc,function(data){
		//alert("Data: " + data);
		var subtypc =  data;
		//console.log(subtypc);
		if( subtypc<=9 )
			precad = precad+'-0'+subtypc;
		else
			precad = precad+'-'+subtypc;
	});
	$.get('/subambitname/'+subtype_idc,function(data){
		//console.log(data);
		var cad = data[0].name;
		document.getElementById("subambh").value = cad;
	});

}
//edit


// function sumar(){
// 	obj = document.formapi['edc'];
// 	totalChecks = obj.length;
// 	totalSumado = 0;
// 	for(i=0; i<totalChecks; i++){
// 		if(obj[i].checked == true){
// 			valor = obj[i].value.split('-');
// 			totalSumado = totalSumado + parseInt(valor1[0],10);
// 		}
// 	}
// 	document.getElementById('rapi').innerHTML = totalSumado;
// }
/*$(function(){
	$('#amb').on('change', onSelectAmb);
});
	function onSelectAmb(){
		var cad = $(this).val();
		alert(cad);
		//var cadcode;
		// if( cad == null)
		// {
		// 	document.getElementById("text1").value = "";
		// }
		// else
		// {
			//document.getElementById("text1").value = document.getElementById("catpat").value;
			if(cad == 1){
				cadcode = cadcode+'-0'+cad;
				document.getElementById("text1").value =  cadcode;
			}
			if(cad == 2){
				cadcode = cadcode+'-0'+cad;
				document.getElementById("text1").value =  cadcode;
			}
			if(cad == 3){
				cadcode = cadcode+'-0'+cad;
				document.getElementById("text1").value =  cadcode;
			}
	//	}
	}*/

// END CATEGORY AMBIT SUBAMBIT
/*		
                $('#province').on('change',function(e){
                    console.log('e');
                    var city_id = e.target.value;
                    $.get('/json-provinces?city_id=' + city_id,function(data){
                        console.log(data);
                        $('#provinces').empty();
                        $('#provinces').append('<option value="0" disabled="true" selected="true">Selecione Provincia</option>');
                    
                        $.each(data, function(index, provincesObj){
                            $('#provinces').append('<option value="'+ provincesObj.id +'">'+ provincesObj.name +'</option>');
                        });
                    });
                });
*/        

