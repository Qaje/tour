.<html>
<html>
<head>
	<title></title>
</head>
<body>
	<table style="width: 715px; height: 412px;">
		<thead>
			<tr>
				<colgroup span="8" width="68"></colgroup>
	<colgroup width="72"></colgroup>
	<colgroup span="3" width="68"></colgroup>
	<colgroup width="83"></colgroup>
	<tbody><tr>
		<td align="left" valign="middle" bgcolor="#FFFFFF" colspan="9" rowspan="2"><b><u><font size="3" color="#000000">Información General de la Ficha de Registro de Patrimonio </font></u></b></td>
	</tr>
	<tr>
		<td height="8" align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle" bgcolor="#FFFFFF"><font color="#000000"><br></font></td>
		<td align="left" valign="middle"><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" colspan="9" rowspan="2" height="200" align="center" valign="middle" bgcolor="#FFFFFF"><b><font color="#000000"><h2>MINISTERIO DE CULTURAS Y TURISMO</h2><h4>DIRECCIÓN GENERAL DE PATRIMONIO CULTURAL<br>FICHA DE INSCRIPCIÓN DE INFORMACIÓN GENERAL</h4><br><img src="/uploads/avatar_admin/logos.png" alt="" width="230" height="53" hspace="22" vspace="4">
		</font></b></td>
	</tr>
			</tr>
		<tr>
			<td style="width: 238px;">&nbsp;</td>
			<td style="width: 238px;">&nbsp;</td>
			<td style="width: 238px;">&nbsp;</td>
		</tr>
		</thead>>
		<tbody>
		<tr>
			<td style="width: 238px;">DENOMINACION :</td>
			<td style="width: 238px;">{{$patrimonialsite->name_title}}</td>
			<td style="width: 238px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 238px;">CODIGO PATRIMONIO :</td>
			<td style="width: 238px;">{{$patrimonialsite->codemat}}</td>
			<td style="width: 238px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 238px;">DIRECCIÓN :</td>
			<td style="width: 238px;">{{$patrimonialsite->direction}}</td>
			<td style="width: 238px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 238px;">IMAGEN :</td>
			<td style="width: 238px;"><img src="/uploads/patrimonialsite_photos/{{ $patrimonialsite->patrimonial_photo }}" alt="" border="0" height="200" width="600" style="max-width: 130px;"></td>
			<td style="width: 238px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 238px;">DESCRIPCIÓN IMAGEN :</td>
			<td style="width: 238px;">{{$patrimonialsite->description_photo}}</td>
			<td style="width: 238px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 238px;">DESCRIPCIÓN PATRIMONIO :</td>
			<td style="width: 238px;">{{$patrimonialsite->description_patrimonial}}</td>
			<td style="width: 238px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 238px;">MAPA :</td>
			<td style="width: 238px;">IMAGE</td>
			<td style="width: 238px;">&nbsp;</td>
		</tr>
		</tbody>
	</table>
<!-- DivTable.com -->

</body>
</html>