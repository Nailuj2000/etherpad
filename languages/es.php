<?php
/**
 * Etherpads Spanish language file
 * 
 * package ElggPad
 */

$spanish = array(

	/**
	 * Menu items and titles
	 */
	 
	'etherpad' => "Pads",
	'etherpad:owner' => "Pads de %s",
	'etherpad:friends' => "Pads de los amigos",
	'etherpad:all' => "Todos los pads",
	'etherpad:add' => "Nuevo pad",
	'etherpad:timeslider' => 'Historial',
	'etherpad:fullscreen' => 'Pantalla completa',
	'etherpad:none' => 'No se ha creado ning�n pad por el momento',
	
	'etherpad:group' => 'Pads del grupo',
	'groups:enablepads' => 'Activar pads del grupo',
	
	/**
	 * River
	 */
	'river:create:object:etherpad' => '%s cre� un nuevo pad colaborativo %s',
	'river:create:object:subpad' => '%s cre� un nuevo pad colaborativo %s',
	'river:update:object:etherpad' => '%s actualiz� el pad colaborativo %s',
	'river:update:object:subpad' => '%s actualiz� el pad colaborativo %s',
	'river:comment:object:etherpad' => '%s coment� en el pad colaborativo %s',
	'river:comment:object:subpad' => '%s coment� en el pad colaborativo %s',
	
	'item:object:etherpad' => 'Pads',
	'item:object:subpad' => 'Subpads',

	/**
	 * Status messages
	 */

	'etherpad:saved' => "Tu pad ha sido creado satisfactoriamente.",
	'etherpad:delete:success' => "Tu pad ha sido eliminado satisfactoriamente.",
	'etherpad:delete:failure' => "Tu pad no pudo ser eliminado. Pru�balo de nuevo m�s tarde.",
	
	/**
	 * Edit page
	 */
	 
	 'etherpad:title' => "T�tulo",
	 'etherpad:tags' => "Etiquetas",
	 'etherpad:access_id' => "Acceso a lectura",
	 'etherpad:write_access_id' => "Acceso a escritura",

	/**
	 * Admin settings
	 */

	'etherpad:etherpadhost' => "Direcci�n del host de Etherpad lite:",
	'etherpad:etherpadkey' => "Api Key de Etherpad lite:",
	'etherpad:showchat' => "Mostrar chat?",
	'etherpad:linenumbers' => "Mostar n�meros de l�nea?",
	'etherpad:showcontrols' => "Mostrar controles?",
	'etherpad:monospace' => "Usar fuente monoespacio?",
	'etherpad:showcomments' => "Mostrar comentarios?",
	'etherpad:newpadtext' => "Texto de los nuevos pads:",
	'etherpad:pad:message' => 'Nuevo pad creado satisfactoriamente.',
	'etherpad:integrateinpages' => "Integrar pads y p�ginas? (Requirere que el plugin Pages est� activado)",
	
	/**
	 * Widget
	 */
	'etherpad:profile:numbertodisplay' => "N�mero de pads a mostar",
    'etherpad:profile:widgetdesc' => "Muestra tus �ltimos pads",
    
    /**
	 * Sidebar items
	 */
	'etherpad:newchild' => "Crea un sub-pad",
);

add_translation('es', $spanish);
