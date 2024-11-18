<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2024 Combodo SAS
 * @license    http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */

Dict::Add('EN GB', 'British English', 'British English', array(
	'Menu:IncidentManagement' => 'Incident Management',
	'Menu:IncidentManagement+' => '',
	'Menu:Incident:Overview' => 'Overview',
	'Menu:Incident:Overview+' => '',
	'Menu:NewIncident' => 'New incident',
	'Menu:NewIncident+' => 'Create a new incident ticket',
	'Menu:SearchIncidents' => 'Search for incidents',
	'Menu:SearchIncidents+' => 'Search for incident tickets',
	'Menu:Incident:Shortcuts' => 'Shortcuts',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => 'Incidents assigned to me',
	'Menu:Incident:MyIncidents+' => 'Incidents assigned to me (as Agent)',
	'Menu:Incident:EscalatedIncidents' => 'Escalated incidents',
	'Menu:Incident:EscalatedIncidents+' => '',
	'Menu:Incident:OpenIncidents' => 'All open incidents',
	'Menu:Incident:OpenIncidents+' => '',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => 'Last 14 days incident per priority',
	'UI-IncidentManagementOverview-Last-14-days' => 'Last 14 days number of incidents',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => 'Open incidents by status',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'Open incidents by agent',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => 'Open incidents by customer',
));


// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: Incident
//

Dict::Add('EN GB', 'British English', 'British English', array(
	'Class:Incident' => 'Incident',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => 'Status',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => 'New',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => 'Assigned',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => 'Pending',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => 'Resolved',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => 'Closed',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => 'Impact',
	'Class:Incident/Attribute:impact+' => 'Impact is the severity of the incident, how many end users are affected',
	'Class:Incident/Attribute:impact/Value:1' => 'A department',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => 'A service',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => 'A person',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:priority' => 'Priority',
	'Class:Incident/Attribute:priority+' => 'Order in which tickets need to be handled',
	'Class:Incident/Attribute:priority/Value:1' => 'Critical',
	'Class:Incident/Attribute:priority/Value:1+' => '',
	'Class:Incident/Attribute:priority/Value:2' => 'High',
	'Class:Incident/Attribute:priority/Value:2+' => '',
	'Class:Incident/Attribute:priority/Value:3' => 'Medium',
	'Class:Incident/Attribute:priority/Value:3+' => '',
	'Class:Incident/Attribute:priority/Value:4' => 'Low',
	'Class:Incident/Attribute:priority/Value:4+' => '',
	'Class:Incident/Attribute:urgency' => 'Urgency',
	'Class:Incident/Attribute:urgency+' => 'How quickly the fault needs to be resolved',
	'Class:Incident/Attribute:urgency/Value:1' => 'Critical',
	'Class:Incident/Attribute:urgency/Value:1+' => '',
	'Class:Incident/Attribute:urgency/Value:2' => 'High',
	'Class:Incident/Attribute:urgency/Value:2+' => '',
	'Class:Incident/Attribute:urgency/Value:3' => 'Medium',
	'Class:Incident/Attribute:urgency/Value:3+' => '',
	'Class:Incident/Attribute:urgency/Value:4' => 'Low',
	'Class:Incident/Attribute:urgency/Value:4+' => '',
	'Class:Incident/Attribute:origin' => 'Origin',
	'Class:Incident/Attribute:origin+' => 'What\'s the trigger of this incident ticket creation',
	'Class:Incident/Attribute:origin/Value:in_person' => 'In-person',
	'Class:Incident/Attribute:origin/Value:in_person+' => 'Incident created following a face-to-face discussion',
	'Class:Incident/Attribute:origin/Value:chat' => 'Chat',
	'Class:Incident/Attribute:origin/Value:chat+' => 'Incident created following a ',
	'Class:Incident/Attribute:origin/Value:mail' => 'Email',
	'Class:Incident/Attribute:origin/Value:mail+' => 'Incident created on an email reception',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'Monitoring',
	'Class:Incident/Attribute:origin/Value:monitoring+' => 'Incident created on a monitoring alert',
	'Class:Incident/Attribute:origin/Value:phone' => 'Phone',
	'Class:Incident/Attribute:origin/Value:phone+' => 'Incident created following a telephone call',
	'Class:Incident/Attribute:origin/Value:portal' => 'Portal',
	'Class:Incident/Attribute:origin/Value:portal+' => 'Incident created on the user portal',
	'Class:Incident/Attribute:service_id' => 'Service',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => 'Service name',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => 'Service subcategory name',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => 'Hot Flag',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'No',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'Yes',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => '',
	'Class:Incident/Attribute:escalation_reason' => 'Hot reason',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => 'Assignment date',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => 'Resolution date',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => 'Last pending date',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => 'Cumulated pending',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => 'TTO',
	'Class:Incident/Attribute:tto+' => 'Time To Own',
	'Class:Incident/Attribute:ttr' => 'TTR',
	'Class:Incident/Attribute:ttr+' => 'Time To Resolve',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => 'SLA tto passed',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => 'SLA ttr passed',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => 'Resolution delay',
	'Class:Incident/Attribute:time_spent+' => '',
	'Class:Incident/Attribute:resolution_code' => 'Resolution code',
	'Class:Incident/Attribute:resolution_code+' => 'What was done to resolve the incident?',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => 'Assistance',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => '',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'Bug fixed',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => '',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'Hardware repair',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => '',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'Other',
	'Class:Incident/Attribute:resolution_code/Value:other+' => '',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'Software patch',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => '',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'System update',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => '',
	'Class:Incident/Attribute:resolution_code/Value:training' => 'Training',
	'Class:Incident/Attribute:resolution_code/Value:training+' => '',
	'Class:Incident/Attribute:solution' => 'Solution',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => 'Pending reason',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => 'Parent incident',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => 'Parent incident ref',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => 'Parent change',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => 'Parent change ref',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:parent_problem_id' => 'Parent problem id',
	'Class:Incident/Attribute:parent_problem_id+' => '',
	'Class:Incident/Attribute:parent_problem_ref' => 'Parent problem ref',
	'Class:Incident/Attribute:parent_problem_ref+' => '',
	'Class:Incident/Attribute:related_request_list' => 'Child requests',
	'Class:Incident/Attribute:related_request_list+' => '',
	'Class:Incident/Attribute:child_incidents_list' => 'Child incidents',
	'Class:Incident/Attribute:child_incidents_list+' => 'All the child incidents related to this incident',
	'Class:Incident/Attribute:public_log' => 'Public log',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:user_satisfaction' => 'User satisfaction',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => 'Very satisfied',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => 'Fairly satisfied',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => 'Rather Dissatisfied',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => '',
	'Class:Incident/Attribute:user_comment' => 'User comment',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'parent_incident_id_friendlyname',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => 'Assign',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => 'Re-assign',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => 'Pending',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => 'Timeout',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => 'Automatic resolve',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => 'Automatic close',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => 'Mark as resolved',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => 'Close this request',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => 'Re-open',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'Cannot assign the Parent incident to the incident itself',

	'Class:Incident/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:Incident/Method:ResolveChildTickets+' => 'Cascade the resolution to child ticket (ev_autoresolve), and align the following characteristics: service, team, agent, resolution info.',
	'Tickets:Related:OpenIncidents' => 'Open incidents',
));
