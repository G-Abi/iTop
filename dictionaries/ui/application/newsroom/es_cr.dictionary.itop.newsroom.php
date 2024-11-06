<?php
/**
 * Spanish Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * @author Miguel Turrubiates <miguel_tf@yahoo.com>
 * @notas       Utilizar codificaci�n UTF-8 para mostrar acentos y otros caracteres especiales 
 */
Dict::Add('ES CR', 'Spanish', 'Espa�ol, Castellano', [
	'UI:Newsroom:iTopNotification:Label' => ITOP_APPLICATION_SHORT,
	'UI:Newsroom:iTopNotification:ViewAllPage:Title' => 'Sus noticias de ' . ITOP_APPLICATION_SHORT.'',
	'UI:Newsroom:iTopNotification:ViewAllPage:SubTitle' => 'Gestione sus noticias, m�rquelas como le�das o no le�das, elim�nadas, etc.',
	'UI:Newsroom:iTopNotification:ViewAllPage:Read:Label' => 'Le�do',
	'UI:Newsroom:iTopNotification:ViewAllPage:Unread:Label' => 'No le�do',
	'UI:Newsroom:iTopNotification:SelectMode:Label' => 'Seleccionar modo',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkAllAsRead:Label' => 'Marcar todo como leido',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkAllAsUnread:Label' => 'Marcar todo como no le�do',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:DeleteAll:Label' => 'Eliminar todos',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:DeleteAll:Success:Message' => 'Se han eliminado todas las noticias de %1$s',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:DeleteAll:Confirmation:Title' => 'Eliminar todas las noticias',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:DeleteAll:Confirmation:Message' => '�Est� seguro de que eliminar todas las noticias?',
	
	'UI:Newsroom:iTopNotification:ViewAllPage:Empty:Title' => '�Sin novedades, est� al d�a!',

	// Actions
	// - Unitary buttons
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:Delete:Label' => 'Eliminar esta noticia',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:ViewObject:Label' => 'Ir a la URL de noticias',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkAsRead:Label' => 'Marcar como le�da',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkAsUnread:Label' => 'Marcar como no le�da',
	// - Bulk buttons
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkSelectedAsRead:Label' => 'Marcar seleccionada como le�da',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkSelectedAsUnread:Label' => 'Marcar seleccionada como no le�da',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:DeleteSelected:Label' => 'Eliminar seleccionada',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:DeleteSelected:Confirmation:Title' => 'Eliminar noticias seleccionadas',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:DeleteSelected:Confirmation:Message' => '�Est�s seguro de que deseas eliminar las noticias seleccionadas?',

	// Feedback messages
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:InvalidAction:Message' => 'Acci�n no v�lida: "%1$s"',
	// - Mark as read
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkAsRead:NoEvent:Message' => 'No hay noticias para marcar como le�das',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkAsRead:Success:Message' => 'La noticia ha sido marcada como le�da.',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkAsReadMultiple:Success:Message' => '%1$s noticias han sido marcadas como le�das',
	// - Mark as unread
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkAsUnread:NoEvent:Message' => 'No hay noticias para marcar como le�das',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkAsUnread:Success:Message' => 'La noticia ha sido marcada como no le�da.',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:MarkAsUnreadMultiple:Success:Message' => '%1$s noticias han sido marcadas como no le�das',
	// Delete
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:Delete:NoEvent:Message' => 'No hay noticias para eliminar',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:Delete:Success:Message' => 'La noticia ha sido eliminada.',
	'UI:Newsroom:iTopNotification:ViewAllPage:Action:DeleteMultiple:Success:Message' => '%1$s noticias han sido eliminadas',
]);
