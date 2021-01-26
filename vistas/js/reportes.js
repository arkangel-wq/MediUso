
if(localStorage.getItem("capturar")!=null){
	$("#reportes span").html(localStorage.getItem("capturar  "));
}else{
	$("#reportes span").html(' <i class="far fa-calendar-alt"></i> Rango de Fecha');
}
//Date range as a button
$('#reportes').daterangepicker(
	
	{
        
		ranges: {
			'Hoy': [moment(), moment()],
			'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'Ultimos 7 Dias': [moment().subtract(6, 'days'), moment()],
			'Ultimos 30 Dias': [moment().subtract(29, 'days'), moment()],
			'Este Mes': [moment().startOf('month'), moment().endOf('month')],
			'El Mes Pasado': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			
        },
        "locale": {
            "format": "YYYY-MM-DD",
            "separator": " - ",
            "applyLabel": "Guardar",
            "cancelLabel": "Cancelar",
            "fromLabel": "Desde",
            "toLabel": "Hasta",
            "customRangeLabel": "Personalizar",
            "daysOfWeek": [
                "Do",
                "Lu",
                "Ma",
                "Mi",
                "Ju",
                "Vi",
                "Sa"
            ],
            "monthNames": [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Setiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            "firstDay": 1
        },
		startDate: moment(),
		endDate: moment()
	},
	function (start, end) {
		$('#reportes span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		var fechaInicial = start.format('YYYY-MM-DD');
		var fechaFinal = end.format('YYYY-MM-DD');
		var capturarRango = $("#reportes span").html();
		localStorage.setItem("capturar  ", capturarRango);
		window.location = "index.php?ruta=reportes&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;
	}
)
$(".daterangepicker.opensright .drp-buttons .cancelBtn").on("click", function(){
    console.log("ccc");
       localStorage.removeItem("capturar");
       localStorage.clear();
       window.location = "reportes";
   })
   
   $(".daterangepicker.opensright .ranges li").on("click", function(){

	var textoHoy = $(this).attr("data-range-key");

	if(textoHoy == "Hoy"){

		var d = new Date();
		
		var dia = d.getDate();
		var mes = d.getMonth()+1;
		var año = d.getFullYear();

		if(mes < 10){

			var fechaInicial = año+"-0"+mes+"-"+dia;
			var fechaFinal = año+"-0"+mes+"-"+dia;

		}else if(dia < 10){

			var fechaInicial = año+"-"+mes+"-0"+dia;
			var fechaFinal = año+"-"+mes+"-0"+dia;

		}else if(mes < 10 && dia < 10){

			var fechaInicial = año+"-0"+mes+"-0"+dia;
			var fechaFinal = año+"-0"+mes+"-0"+dia;

		}else{

			var fechaInicial = año+"-"+mes+"-"+dia;
	    	var fechaFinal = año+"-"+mes+"-"+dia;

		}	

    	localStorage.setItem("capturar", "Hoy");

    	window.location = "index.php?ruta=reportes&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;

	}

})