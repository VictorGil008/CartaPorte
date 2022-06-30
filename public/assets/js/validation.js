$(document).ready(function(){
	
	jQuery.validator.addMethod("alpha", function(value, element) {
		return this.optional(element) || /^[a-z]+$/i.test(value);
	  }, "Solo letras");

	// Validaciones Modulo Domicilio Crear (Sucursales)
	$('.gestionDomicilio-guardado').validate({
		  rules: {
			tipo_domicilio:{
				required: true,
			},
			id_enlace_domicilio:{
				required: true,
				minlength: 3,
				maxlength: 3,
			},
			nombre_domicilio:{
				required: true,
				maxlength: 50,
			},
			calle_domicilio:{
				required: true,
				maxlength: 340,
			},
			numero_ext_domicilio:{
				required: true,
			},
			referencia_domicilio:{
				maxlength: 150
			},
			cp_domicilio:{
				required: true,
				digits: true,
				minlength: 5,
				maxlength: 5

			},
			clave_colonia_domicilio:{
				required: true,
				digits: true,
				minlength: 4,
				maxlength: 4
			},
			clave_localidad_domicilio:{
				digits: true,
				maxlength: 2
			},
			clave_municipio_domicilio:{
				required: true,
				digits: true,
				minlength: 3,
				maxlength: 3
			},
			clave_estado_domicilio:{
				required: true,
				alpha:true,
				minlength: 3,
				maxlength: 3
			},
			clave_pais_domicilio:{
				required: true,
				alpha:true,
				minlength: 3,
				maxlength: 3
			},
		},
		messages:{ 
			tipo_domicilio:{
			  required: "<div style='color: red;'><b>*</b></div>"
			},
			id_enlace_domicilio:{
				required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El ID Es Obligatorio</b>",
				minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Mínimo 3 Números</b>",
				maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 3 Números</b>"
			},
			nombre_domicilio:{
				required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Nombre De La Sucursal Es Obligatorio</b>",
				maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 50 Carácteres</b>"
			},
			calle_domicilio:{
				required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Dirección Es Obligatoria</b>",
				maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 340 Carácteres</b>"
			},
			numero_ext_domicilio:{
				required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Número Exterior Es Obligatorio</b>"
			},
			referencia_domicilio:{
				maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 150 Carácteres</b>"	
			},
			cp_domicilio:{
				required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Código Postal Es Obligatorio</b>",
				digits: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Números</b>",
				minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 5 Números</b>",
				maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 5 Números</b>"
			},
			clave_colonia_domicilio:{
				required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Colonia Es Obligatoria</b>",
				digits: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Números</b>",
				minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 4 Números</b>",
				maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 4 Números</b>"
			},
			clave_localidad_domicilio:{
				digits: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Localidad Solo Deben Ser Números</b>",
				maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener Máximo 2 Números</b>"
			},
			clave_municipio_domicilio:{
				required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Municipio Es Obligatoria</b>",
				digits: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Números</b>",
				minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 3 Números</b>",
				maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 3 Números</b>"
			},
			clave_estado_domicilio:{
				required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Estado Es Obligatoria</b>",
				alpha:"<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Letras</b>",
				minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Estado Debe Contener 3 Letras</b>",
				maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Estado Solo Debe Contener 3 Letras</b>"
			},
			clave_pais_domicilio:{
				required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave País Es Obligatoria</b>",
				alpha:"<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Letras</b>",
				minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 3 Letras</b>",
				maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 3 Letras</b>"
			}
			
		  }
	});

	// Validaciones Modulo Domicilio Actualizar (Sucursales)
	$('.gestionDomicilio-actualizar').validate({
		rules: {
		  tipo_domicilio_actualizar:{
			  required: true,
		  },
		  id_enlace_domicilio_actualizar:{
			  required: true,
			  minlength: 3,
			  maxlength: 3,
		  },
		  nombre_domicilio_actualizar:{
			  required: true,
			  maxlength: 50,
		  },
		  calle_domicilio_actualizar:{
			  required: true,
			  maxlength: 340,
		  },
		  numero_ext_domicilio_actualizar:{
			  required: true,
		  },
		  referencia_domicilio_actualizar:{
			  maxlength: 150
		  },
		  cp_domicilio_actualizar:{
			  required: true,
			  digits: true,
			  minlength: 5,
			  maxlength: 5

		  },
		  clave_colonia_domicilio_actualizar:{
			  required: true,
			  digits: true,
			  minlength: 4,
			  maxlength: 4
		  },
		  clave_localidad_domicilio_actualizar:{
			  digits: true,
			  maxlength: 2
		  },
		  clave_municipio_domicilio_actualizar:{
			  required: true,
			  digits: true,
			  minlength: 3,
			  maxlength: 3
		  },
		  clave_estado_domicilio_actualizar:{
			  required: true,
			  alpha:true,
			  minlength: 3,
			  maxlength: 3
		  },
		  clave_pais_domicilio_actualizar:{
			  required: true,
			  alpha:true,
			  minlength: 3,
			  maxlength: 3
		  },
	  },
	  messages:{ 
		  tipo_domicilio_actualizar:{
			required: "<div style='color: red;'><b>*</b></div>"
		  },
		  id_enlace_domicilio_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El ID Es Obligatorio</b>",
			  minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Mínimo 3 Números</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 3 Números</b>"
		  },
		  nombre_domicilio_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Nombre De La Sucursal Es Obligatorio</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 50 Carácteres</b>"
		  },
		  calle_domicilio_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Dirección Es Obligatoria</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 340 Carácteres</b>"
		  },
		  numero_ext_domicilio_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Número Exterior Es Obligatorio</b>"
		  },
		  referencia_domicilio_actualizar:{
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 150 Carácteres</b>"	
		  },
		  cp_domicilio_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Código Postal Es Obligatorio</b>",
			  digits: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Números</b>",
			  minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 5 Números</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 5 Números</b>"
		  },
		  clave_colonia_domicilio_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Colonia Es Obligatoria</b>",
			  digits: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Números</b>",
			  minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 4 Números</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 4 Números</b>"
		  },
		  clave_localidad_domicilio_actualizar:{
			  digits: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Localidad Solo Deben Ser Números</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener Máximo 2 Números</b>"
		  },
		  clave_municipio_domicilio_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Municipio Es Obligatoria</b>",
			  digits: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Números</b>",
			  minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 3 Números</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 3 Números</b>"
		  },
		  clave_estado_domicilio_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Estado Es Obligatoria</b>",
			  alpha:"<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Letras</b>",
			  minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 3 Letras</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 3 Letras</b>"
		  },
		  clave_pais_domicilio_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave País Es Obligatoria</b>",
			  alpha:"<b class='badge badge-pill badge-danger' style='font-size: 10px;'>* Solo Deben Ser Letras</b>",
			  minlength: "<bclass='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 3 Letras</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 3 Letras</b>"
		  }
		  
		}
  });

  // Validaciones Modulo Autotransporte
	$('.gestionAutotransporte-guardado').validate({
		rules: {
			clave_vehiculo:{
			  required: true,
		  },
		  permiso_sct:{
			  required: true,
			  maxlength: 120,
		  },
		  numero_permiso_sct:{
			  required: true,
		  },
		  clave_configuracion_vehicular:{
			  required: true,
			  maxlength: 250,
		  },
		  ano_modelo:{
			required: true,
			digits: true,
			minlength: 4,
			maxlength: 4
		  },
		  placa:{
			required: true
		  },
		  nombre_aseguradora_civil:{
			  required: true,
		  },
		  numero_poliza_civil:{
			  required: true,
		  },
		  nombre_aseguradora_carga:{
			  required: true, 
		  },
		  numero_poliza_carga:{
			  required: true,
		  }
	  },
	  messages:{ 
		clave_vehiculo:{
			required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Vehiculo Es Obligatoria</b>"
		  },
		  permiso_sct:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Tipo De Permiso SCT Es Obligatorio</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 120 Carácteres</b>"
		  },
		  numero_permiso_sct:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Número De Permiso SCT Es Obligatorio</b>",
		  },
		  clave_configuracion_vehicular:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave De Configuración Es Obligatoria</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 250 Carácteres</b>"
		  },
		  ano_modelo:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Año/Modelo Es Obligatorio</b>",
			  digits: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Números</b>",
			  minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 4 Números</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 4 Números</b>"
		  },
		  placa:{
			required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Placa Es Obligatoria</b>"
		  },
		  nombre_aseguradora_civil:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Nombre Es Obligatorio</b>"
		  },
		  numero_poliza_civil:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Número De Póliza Es Obligatorio</b>"
		  },
		  nombre_aseguradora_carga:{
			required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Nombre Es Obligatorio</b>"
		  },
		  numero_poliza_carga:{
			required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Número De Póliza Es Obligatorio</b>"
		  }
		  
		}
  });

   // Validaciones Modulo Autotransporte Actualizar
	$('.gestionAutotransporte-actualizar').validate({
		rules: {
			clave_vehiculo_actualizar:{
			  required: true,
		  },
		  permiso_sct_actualizar:{
			  required: true,
			  maxlength: 120,
		  },
		  numero_permiso_sct_actualizar:{
			  required: true,
		  },
		  clave_configuracion_vehicular_actualizar:{
			  required: true,
			  maxlength: 250,
		  },
		  ano_modelo_actualizar:{
			required: true,
			digits: true,
			minlength: 4,
			maxlength: 4
		  },
		  placa:{
			required: true
		  },
		  nombre_aseguradora_civil_actualizar:{
			  required: true,
		  },
		  numero_poliza_civil_actualizar:{
			  required: true,
		  },
		  nombre_aseguradora_carga_actualizar:{
			  required: true, 
		  },
		  numero_poliza_carga_actualizar:{
			  required: true,
		  }
	  },
	  messages:{ 
		clave_vehiculo_actualizar:{
			required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Vehiculo Es Obligatoria</b>"
		  },
		  permiso_sct_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Tipo De Permiso SCT Es Obligatorio</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 120 Carácteres</b>"
		  },
		  numero_permiso_sct_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Número De Permiso SCT Es Obligatorio</b>",
		  },
		  clave_configuracion_vehicular_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave De Configuración Es Obligatoria</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Máximo 250 Carácteres</b>"
		  },
		  ano_modelo_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Año/Modelo Es Obligatorio</b>",
			  digits: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Deben Ser Números</b>",
			  minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 4 Números</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 4 Números</b>"
		  },
		  placa_actualizar:{
			required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Placa Es Obligatoria</b>"
		  },
		  nombre_aseguradora_civil_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Nombre Es Obligatorio</b>"
		  },
		  numero_poliza_civil_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Número De Póliza Es Obligatorio</b>"
		  },
		  nombre_aseguradora_carga_actualizar:{
			required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Nombre Es Obligatorio</b>"
		  },
		  numero_poliza_carga_actualizar:{
			required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Número De Póliza Es Obligatorio</b>"
		  }
		  
		}
  });

  // Validaciones Modulo Operador
	$('.gestionOperador-guardado').validate({
		rules: {
			numero_operador:{
			  required: true,
		  },
		  nombre_completo_operador:{
			  required: true,
		  },
		  rfc_operador:{
			  required: true,
			  minlength: 13,
			  maxlength: 13
		  },
		  numero_licencia:{
			  required: true,
		  },
		  vigencia_licencia:{
			required: true,
		  }
	  },
	  messages:{ 
		numero_operador:{
			required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Del Empleado Es Obligatoria</b>"
		  },
		  nombre_completo_operador:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Nombre Completo Es Obligatorio</b>"
		  },
		  rfc_operador:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El RFC Es Obligatorio</b>",
			  minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 13 Carácteres</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 13 Carácteres</b>"
		  },
		  numero_licencia:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Número De Licencia Es Obligatoria</b>"
		  },
		  vigencia_licencia:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Vigencia De La Licencia Es Obligatoria</b>",
		  }
		  
		}
  });

   // Validaciones Modulo Operador Actualizar
	$('.gestionOperador-actualizar').validate({
		rules: {
			numero_operador_actualizar:{
			  required: true,
		  },
		  nombre_completo_operador_actualizar:{
			  required: true,
		  },
		  rfc_operador_actualizar:{
			  required: true,
			  minlength: 13,
			  maxlength: 13
		  },
		  numero_licencia_actualizar:{
			  required: true,
		  },
		  vigencia_licencia_actualizar:{
			required: true,
		  }
	  },
	  messages:{ 
		numero_operador_actualizar:{
			required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Clave Del Empleado Es Obligatoria</b>"
		  },
		  nombre_completo_operador_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Nombre Completo Es Obligatorio</b>"
		  },
		  rfc_operador_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El RFC Es Obligatorio</b>",
			  minlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Debe Contener 13 Carácteres</b>",
			  maxlength: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*Solo Debe Contener 13 Carácteres</b>"
		  },
		  numero_licencia_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*El Número De Licencia Es Obligatoria</b>"
		  },
		  vigencia_licencia_actualizar:{
			  required: "<b class='badge badge-pill badge-danger' style='font-size: 10px;'>*La Vigencia De La Licencia Es Obligatoria</b>",
		  }
		  
		}
  });

});
// Funcion JavaScript para la conversion a mayusculas
function mayusculas(e) {
    e.value = e.value.toUpperCase();
}