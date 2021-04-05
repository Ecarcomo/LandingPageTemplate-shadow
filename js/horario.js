		

		var btn_e = document.getElementById("btnE");
		var btn_d = document.getElementById("btnD");



		var _hoy = new Date();

		let dias = ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];
		var _nombre_dia = dias[_hoy.getDay()];
		var _hora = _hoy.getHours();
		var _min = _hoy.getMinutes();

		/*-------------Horarios---------- SE PUEDEN CAMBIAR MANUALMENTE*/
		const H_Ap_semanal =9 , M_Ap_semanal =30;
		const H_C_semanal =18 , M_C_semanal =30;

		const H_Ap_sabado =9 , M_Ap_sabado =30;
		const H_C_sabado =12 , M_C_sabado =30;
		//-----------Dias de Semana-------
		switch(_nombre_dia)
		{
			case "Lunes":
				estadoSemanal();
			break;
			case "Martes":
				estadoSemanal();
			break;
			case "Miercoles":
				estadoSemanal();
			break;
			case "Jueves":
				estadoSemanal();
			break;
			case "Viernes":
				estadoSemanal();
			break;
			case "Sabado":
				estadoSabado();
			break;
			case "Domingo":
				cerrado();
			break;
		}
		function estadoSemanal()
		{
			if ((H_Ap_semanal==_hora && M_Ap_semanal <= _min) || (H_Ap_semanal <_hora && H_C_semanal >_hora) || (H_C_semanal==_hora && M_C_semanal >= _min))
			{
				//alert("abierto");
				btn_e.style.visibility = "visible";
				btn_d.style.visibility = "hidden";
			}
			else
			{
				//alert("cerrado");
				btn_e.style.visibility = "hidden";
				btn_d.style.visibility = "visible";
			}
		}

		function estadoSabado()
		{
			if ((H_Ap_sabado==_hora && M_Ap_sabado <= _min) || (H_Ap_sabado <_hora && H_C_sabado >_hora) || (H_C_sabado==_hora && M_C_sabado >= _min))
			{
				//alert("abierto");
				btn_e.style.visibility = "visible";
				btn_d.style.visibility = "hidden";
			}
			else
			{
				//alert("cerrado");
				btn_e.style.visibility = "hidden";
				btn_d.style.visibility = "visible";
			}
		}

		function cerrado()
		{
			//alert("cerrado");
			btn_e.style.visibility = "hidden";
			btn_d.style.visibility = "visible";
		}