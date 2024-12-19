<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 *
 */
Dict::Add('IT IT', 'Italian', 'Italiano', [
	'Class:Incident' => 'Incidente',
	'Class:Incident+' => '~~',
	'Class:Incident/Attribute:assignment_date' => 'Data di assegnazione',
	'Class:Incident/Attribute:assignment_date+' => '~~',
	'Class:Incident/Attribute:child_incidents_list' => 'Incidente figlio',
	'Class:Incident/Attribute:child_incidents_list+' => 'Tutte gli incidenti figlio legate a questo incidente',
	'Class:Incident/Attribute:cumulatedpending' => 'Attesa totale',
	'Class:Incident/Attribute:cumulatedpending+' => '~~',
	'Class:Incident/Attribute:escalation_flag' => 'Spunta importante',
	'Class:Incident/Attribute:escalation_flag+' => '~~',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'No',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'Si',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => 'Si',
	'Class:Incident/Attribute:escalation_reason' => 'Motivo importante',
	'Class:Incident/Attribute:escalation_reason+' => '~~',
	'Class:Incident/Attribute:impact' => 'Impatto',
	'Class:Incident/Attribute:impact+' => 'Impact is the severity of the incident, how many end users are affected~~',
	'Class:Incident/Attribute:impact/Value:1' => 'Un dipartimento',
	'Class:Incident/Attribute:impact/Value:1+' => '~~',
	'Class:Incident/Attribute:impact/Value:2' => 'Un servizio',
	'Class:Incident/Attribute:impact/Value:2+' => '~~',
	'Class:Incident/Attribute:impact/Value:3' => 'Una persona',
	'Class:Incident/Attribute:impact/Value:3+' => '~~',
	'Class:Incident/Attribute:last_pending_date' => 'Ultima data di messa in attesa',
	'Class:Incident/Attribute:last_pending_date+' => '~~',
	'Class:Incident/Attribute:origin' => 'Origine',
	'Class:Incident/Attribute:origin+' => 'What\'s the trigger of this incident ticket creation~~',
	'Class:Incident/Attribute:origin/Value:chat' => 'Chat~~',
	'Class:Incident/Attribute:origin/Value:chat+' => 'Incident created following a ~~',
	'Class:Incident/Attribute:origin/Value:in_person' => 'In-person~~',
	'Class:Incident/Attribute:origin/Value:in_person+' => 'Incident created following a face-to-face discussion~~',
	'Class:Incident/Attribute:origin/Value:mail' => 'Mail',
	'Class:Incident/Attribute:origin/Value:mail+' => 'Mail',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'Monitoring',
	'Class:Incident/Attribute:origin/Value:monitoring+' => 'Monitoring',
	'Class:Incident/Attribute:origin/Value:phone' => 'Telefono',
	'Class:Incident/Attribute:origin/Value:phone+' => 'Telefono',
	'Class:Incident/Attribute:origin/Value:portal' => 'Portale',
	'Class:Incident/Attribute:origin/Value:portal+' => 'Portale',
	'Class:Incident/Attribute:parent_change_id' => 'Richiesta evoluzione padre',
	'Class:Incident/Attribute:parent_change_id+' => 'Richiesta figlia',
	'Class:Incident/Attribute:parent_change_ref' => 'ref evoluzione',
	'Class:Incident/Attribute:parent_change_ref+' => 'Log Pubblico',
	'Class:Incident/Attribute:parent_incident_id' => 'Incidente Padre',
	'Class:Incident/Attribute:parent_incident_id+' => 'Ref.',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'parent_incident_id_friendlyname~~',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => 'Segna come risolto',
	'Class:Incident/Attribute:parent_incident_ref' => 'Ref Indicente padre',
	'Class:Incident/Attribute:parent_incident_ref+' => 'Ref.',
	'Class:Incident/Attribute:parent_problem_id' => 'Parent problem id~~',
	'Class:Incident/Attribute:parent_problem_id+' => '~~',
	'Class:Incident/Attribute:parent_problem_ref' => 'Parent problem ref~~',
	'Class:Incident/Attribute:parent_problem_ref+' => '~~',
	'Class:Incident/Attribute:pending_reason' => 'Ragione della messa in attesa',
	'Class:Incident/Attribute:pending_reason+' => 'Richiesta Padre',
	'Class:Incident/Attribute:priority' => 'Priorità',
	'Class:Incident/Attribute:priority+' => 'Order in which tickets need to be handled~~',
	'Class:Incident/Attribute:priority/Value:1' => 'Critica',
	'Class:Incident/Attribute:priority/Value:1+' => 'Critica',
	'Class:Incident/Attribute:priority/Value:2' => 'Alta',
	'Class:Incident/Attribute:priority/Value:2+' => 'Alta',
	'Class:Incident/Attribute:priority/Value:3' => 'Media',
	'Class:Incident/Attribute:priority/Value:3+' => 'Media',
	'Class:Incident/Attribute:priority/Value:4' => 'Bassa',
	'Class:Incident/Attribute:priority/Value:4+' => 'Bassa',
	'Class:Incident/Attribute:public_log' => 'Log Pubblico',
	'Class:Incident/Attribute:public_log+' => 'Piuttosto insoddisfatto',
	'Class:Incident/Attribute:related_request_list' => 'Richiesta figlio',
	'Class:Incident/Attribute:related_request_list+' => 'Veramente soddisfatto',
	'Class:Incident/Attribute:resolution_code' => 'Codice di risoluzione',
	'Class:Incident/Attribute:resolution_code+' => 'What was done to resolve the incident?~~',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => 'Assistenza',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => 'Assistenza',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'Bug risolto',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => 'Bug risolto',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'Riparato Hardware',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => 'Riparato Hardware',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'Altro',
	'Class:Incident/Attribute:resolution_code/Value:other+' => 'Altro',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'Software patch',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => 'Software patch',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'Sistema aggiornato',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => 'Sistema aggiornato',
	'Class:Incident/Attribute:resolution_code/Value:training' => 'Formazione',
	'Class:Incident/Attribute:resolution_code/Value:training+' => 'Formazione',
	'Class:Incident/Attribute:resolution_date' => 'Data di risoluzione',
	'Class:Incident/Attribute:resolution_date+' => '~~',
	'Class:Incident/Attribute:service_id' => 'Servizio',
	'Class:Incident/Attribute:service_id+' => '~~',
	'Class:Incident/Attribute:service_name' => 'Nome del Serivizio',
	'Class:Incident/Attribute:service_name+' => '~~',
	'Class:Incident/Attribute:servicesubcategory_id' => 'Servizio sottocategoria',
	'Class:Incident/Attribute:servicesubcategory_id+' => 'Nome del Servizio sottocategoria',
	'Class:Incident/Attribute:servicesubcategory_name' => 'Nome del Servizio sottocategoria',
	'Class:Incident/Attribute:servicesubcategory_name+' => '~~',
	'Class:Incident/Attribute:sla_tto_over' => 'SAL tto over',
	'Class:Incident/Attribute:sla_tto_over+' => '~~',
	'Class:Incident/Attribute:sla_tto_passed' => 'SLA tto superato',
	'Class:Incident/Attribute:sla_tto_passed+' => '~~',
	'Class:Incident/Attribute:sla_ttr_over' => 'SLA tto over',
	'Class:Incident/Attribute:sla_ttr_over+' => '~~',
	'Class:Incident/Attribute:sla_ttr_passed' => 'SLA ttr superato',
	'Class:Incident/Attribute:sla_ttr_passed+' => '~~',
	'Class:Incident/Attribute:solution' => 'Soluzione',
	'Class:Incident/Attribute:solution+' => 'Ragione della messa in attesa',
	'Class:Incident/Attribute:status' => 'Stato',
	'Class:Incident/Attribute:status+' => '~~',
	'Class:Incident/Attribute:status/Value:assigned' => 'Assgnato',
	'Class:Incident/Attribute:status/Value:assigned+' => '~~',
	'Class:Incident/Attribute:status/Value:closed' => 'Chiuso',
	'Class:Incident/Attribute:status/Value:closed+' => '~~',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '~~',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '~~',
	'Class:Incident/Attribute:status/Value:new' => 'Nuovo',
	'Class:Incident/Attribute:status/Value:new+' => '~~',
	'Class:Incident/Attribute:status/Value:pending' => 'In attesa',
	'Class:Incident/Attribute:status/Value:pending+' => '~~',
	'Class:Incident/Attribute:status/Value:resolved' => 'Risolto',
	'Class:Incident/Attribute:status/Value:resolved+' => '~~',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => 'In attesa di approvazione',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '~~',
	'Class:Incident/Attribute:time_spent' => 'Tempo di risoluzione',
	'Class:Incident/Attribute:time_spent+' => '~~',
	'Class:Incident/Attribute:tto' => 'tto',
	'Class:Incident/Attribute:tto+' => 'Time To Own~~',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'tto deadline',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '~~',
	'Class:Incident/Attribute:ttr' => 'ttr',
	'Class:Incident/Attribute:ttr+' => 'Time To Resolve~~',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'ttr deadline',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '~~',
	'Class:Incident/Attribute:urgency' => 'Urgenza',
	'Class:Incident/Attribute:urgency+' => 'How quickly the fault needs to be resolved~~',
	'Class:Incident/Attribute:urgency/Value:1' => 'Critica',
	'Class:Incident/Attribute:urgency/Value:1+' => 'Critica',
	'Class:Incident/Attribute:urgency/Value:2' => 'Alta',
	'Class:Incident/Attribute:urgency/Value:2+' => 'Altra',
	'Class:Incident/Attribute:urgency/Value:3' => 'Media',
	'Class:Incident/Attribute:urgency/Value:3+' => 'Media',
	'Class:Incident/Attribute:urgency/Value:4' => 'Bassa',
	'Class:Incident/Attribute:urgency/Value:4+' => 'Bassa',
	'Class:Incident/Attribute:user_comment' => 'Commento utente',
	'Class:Incident/Attribute:user_comment+' => 'Veramente insoddisfatto',
	'Class:Incident/Attribute:user_satisfaction' => 'Soddisfazione untente',
	'Class:Incident/Attribute:user_satisfaction+' => 'Veramente insoddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => 'Veramente soddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => 'Veramente soddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => 'Abbastanza soddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => 'Abbastanza soddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => 'Piuttosto insoddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => 'Piuttosto insoddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => 'Veramente insoddisfatto',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => 'Veramente insoddisfatto',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'Non si può assegnare una richiesta padre a se stesso',
	'Class:Incident/Method:ResolveChildTickets' => 'ResolveChildTickets~~',
	'Class:Incident/Method:ResolveChildTickets+' => 'Risoluzione a cascata delle richieste figlie (ev_autoresolve), e allineare le seguenti caratteristiche: servizio, team, agente e risoluzione',
	'Class:Incident/Stimulus:ev_assign' => 'Assegna',
	'Class:Incident/Stimulus:ev_assign+' => 'Ri-Apri',
	'Class:Incident/Stimulus:ev_autoclose' => 'Chiusura Automatica',
	'Class:Incident/Stimulus:ev_autoclose+' => '~~',
	'Class:Incident/Stimulus:ev_autoresolve' => 'Risoluzione automatica',
	'Class:Incident/Stimulus:ev_autoresolve+' => '~~',
	'Class:Incident/Stimulus:ev_close' => 'Chiudi la richiesta',
	'Class:Incident/Stimulus:ev_close+' => '~~',
	'Class:Incident/Stimulus:ev_pending' => 'In Attesa',
	'Class:Incident/Stimulus:ev_pending+' => 'Risoluzione a cascata delle richieste figlie (ev_autoresolve), e allineare le seguenti caratteristiche: servizio, team, agente e risoluzione',
	'Class:Incident/Stimulus:ev_reassign' => 'Ri-Assegna',
	'Class:Incident/Stimulus:ev_reassign+' => 'Non si può assegnare una richiesta padre a se stesso',
	'Class:Incident/Stimulus:ev_reopen' => 'Ri-Apri',
	'Class:Incident/Stimulus:ev_reopen+' => '~~',
	'Class:Incident/Stimulus:ev_resolve' => 'Segna come risolto',
	'Class:Incident/Stimulus:ev_resolve+' => '~~',
	'Class:Incident/Stimulus:ev_timeout' => 'Timeout',
	'Class:Incident/Stimulus:ev_timeout+' => 'Le mie richieste per questa organizzazione',
	'Menu:Incident:EscalatedIncidents' => 'Evoluzione Incidente',
	'Menu:Incident:EscalatedIncidents+' => 'Evoluzione Incidente',
	'Menu:Incident:MyIncidents' => 'Incidenti assegnati a me',
	'Menu:Incident:MyIncidents+' => 'Incidenti assegnati a me (come agente)',
	'Menu:Incident:OpenIncidents' => 'Tutti gli incidenti aperti',
	'Menu:Incident:OpenIncidents+' => 'Tutti gli incidenti aperti',
	'Menu:Incident:Overview' => 'Overview',
	'Menu:Incident:Overview+' => 'Overview',
	'Menu:Incident:Shortcuts' => 'Scorciatoie',
	'Menu:Incident:Shortcuts+' => '~~',
	'Menu:IncidentManagement' => 'Gestione incidente',
	'Menu:IncidentManagement+' => 'Gestione incidente',
	'Menu:NewIncident' => 'Nuovo incidente',
	'Menu:NewIncident+' => 'Creare un nuovo ticket ',
	'Menu:SearchIncidents' => 'Ricerca per incidenti',
	'Menu:SearchIncidents+' => 'Ricerca per incidenti',
	'Tickets:Related:OpenIncidents' => 'Incidenti aperti',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => 'Incidenti degli ultimi 14 giorni per priorità',
	'UI-IncidentManagementOverview-Last-14-days' => 'Incidenti degli ultimi 14 giorni numero ',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'Incidenti aperti per agente',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => 'Incidenti aperti per cliente',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => 'Incidenti aperti per stato',
]);
