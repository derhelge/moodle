<?php
//UDE-HACK added
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_self', language 'de', branch 'MOODLE_22_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


$string['unikennung']          = 'Nur Benutzer mit Unikennung';
$string['unikennung_help']     = 'Nur Benutzer mit Unikennung dürfen sich in den Kurs einschreiben.';
$string['unikennung_desc']     = 'Zugang auf Benutzer mit Unikennung beschränken.';
$string['emailinvalid']        = 'Der Zugang ist auf Benutzer mit Unikennung beschränkt.';
$string['emailinvalid_passwd']         = 'Passwort korrekt, allerdings ist der Zugang auf Benutzer mit Unikennung beschränkt.';

$string['cohortnonmemberinfo'] = 'Nur Mitglieder der Kohorte \'{$a}\' können sich selbst einschreiben.';
$string['cohortonly'] = 'Nur Kohortenmitglieder';
$string['cohortonly_help'] = 'Selbsteinschreibung kann auf Mitglieder einer bestimmten Kohorte beschränkt werden. Diese Einstellung hat keinen Einfluss auf bestehende Einschreibemethoden';

$string['customwelcomemessage'] = 'Begrüßungstext';
$string['customwelcomemessage_help'] = 'Ein angepasster Begrüßungstext kann eingefügt werden.

Die folgenden Platzhalter können in den Text eingefügt werden:

* Kursname {$a->coursename}
* Link zur Profilseite eines Nutzers {$a->profileurl}';

$string['defaultrole'] = 'Standardmäßige Rollenzuweisung';
$string['defaultrole_desc'] = 'Wählen Sie eine Rolle aus, die an Nutzer/innen bei der Selbsteinschreibung zugewiesen werden soll';
$string['editenrolment'] = 'Einschreibung bearbeiten';
$string['enrolenddate'] = 'Ende';
$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen sich bis zum angegebenen Zeitpunkt selber einschreiben.';
$string['enrolenddaterror'] = 'Das Einschreibungsende muss später als der -beginn sein';
$string['enrolme'] = 'Einschreiben';
$string['enrolperiod'] = 'Teilnahmedauer';
$string['enrolperiod_desc'] = 'Die standardmäßige Teilnahmedauer ist die Zeitdauer, während der die Einschreibung gültig bleibt. Wenn diese Option deaktiviert ist, ist die Teilnahmedauer standardmäßig unbegrenzt.';
$string['enrolperiod_help'] = 'Die Teilnahmedauer ist die Zeitdauer, während der die Einschreibung gültig bleibt, beginnend mit dem Moment der Nutzereinschreibung. Wenn diese Option deaktiviert ist, ist die Teilnahmedauer standardmäßig unbegrenzt.';
$string['enrolstartdate'] = 'Beginn';
$string['enrolstartdate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen sich ab diesem Zeitpunkt selber in den Kurs einschreiben.';

$string['expiredaction'] = 'Aktion beim Ablauf der Einschreibungsfrist.';
$string['expiredaction_help'] = 'Legen Sie eine Aktion fest die beim Ablauf der Fristen ausgeführt werden soll.Hinweis: Einige Nutzerspezifische Daten im Kurs werden beim Ausschreiben eines Nutzers aus dem Kurs gelöscht.';
$string['expirymessageenrollersubject'] = 'Self enrolment expiry notification';
$string['expirymessageenrollerbody'] = 'Self enrolment in the course \'{$a->course}\' will expire within the next {$a->threshold} for the following users:

{$a->users}

To extend their enrolment, go to {$a->extendurl}';
$string['expirymessageenrolledsubject'] = 'Self enrolment expiry notification';
$string['expirymessageenrolledbody'] = 'Dear {$a->user},

This is a notification that your enrolment in the course \'{$a->course}\' is due to expire on {$a->timeend}.

If you need help, please contact {$a->enroller}.';


$string['groupkey'] = 'Einschreibeschlüssel für Gruppen';
$string['groupkey_desc'] = 'Standardmäßig einen Einschreibeschlüssel für Gruppen benutzen';
$string['groupkey_help'] = 'Ergänzend zur Zugriffssteuerung über einen Einschreibeschlüssel für den Kurs können zusätzliche Einschreibeschlüssel für Gruppen festgelegt werden, die bei der Kurseinschreibung automatisch alle Nutzer/innen einer bestimmten Gruppe zuweisen.

Um Einschreibeschlüssel für Gruppen verwenden zu können, muss ein Einschreibeschlüssel für den Kurs vergeben sein, den aber eigentlich niemand kennen muss. Der Einschreibeschlüssel für die jeweilige Gruppe wird in den Gruppeneinstellungen festgelegt.';
$string['longtimenosee'] = 'Inaktive abmelden
';
$string['longtimenosee_help'] = 'Wenn Personen lange Zeit nicht mehr auf einen Kurs zugegriffen haben, werden sie automatisch abgemeldet. Dieser Parameter legt die maximale Inaktivitätsdauer fest.';
$string['maxenrolled'] = 'Max. Einschreibungen';
$string['maxenrolled_help'] = 'Diese Option legt die Maximalzahl möglicher Nutzer/innen mit Selbsteinschreibung fest. (0 = ohne Beschränkung)';
$string['maxenrolledreached'] = 'Die maximale Anzahl der erlaubten Nutzer/innen mit Selbsteinschreibung ist bereits erreicht.
';
$string['nopassword'] = 'Kein Einschreibeschlüssel notwendig';
$string['password'] = 'Einschreibeschlüssel';
$string['password_help'] = 'Ein Einschreibeschlüssel erlaubt den Kurszugriff ausschließlich für diejenigen, die den Einschreibeschlüssel kennen.

Wenn das Feld leer bleibt, können sich alle Nutzer/innen im Kurs einschreiben.

Wenn ein Einschreibeschlüssel angegeben ist, müssen alle Nutzer/innen notwendigerweise bei der Kurseinschreibung den Einschreibeschlüssel eingeben. Beachten Sie, dass Nutzer/innen den Einschreibeschlüssel nur einmal bei der Kurseinschreibung eingeben müssen und danach dauerhaft eingeschriebene Kursteilnehmer/innen sind. ';
$string['passwordinvalid'] = 'Falscher Einschreibeschlüssel';
$string['passwordinvalidhint'] = 'Falscher Einschreibeschlüssel (Hinweis: Das erste Zeichen ist \'{$a}\')';
$string['pluginname'] = 'Selbsteinschreibung';
$string['pluginname_desc'] = 'Das Plugin \'Selbsteinschreibung\' erlaubt Nutzer/innen, in welchen Kursen sie teilnehmen möchten. Die Kurse können mit einem Einschreibeschlüssel gesichert sein. Intern wird die Selbsteinschreibung über das Plugin \'Manuelle Einschreibung\' abgewickelt, welches im Kurs notwendigerweise ebenfalls aktiviert sein muss.';
$string['requirepassword'] = 'Einschreibeschlüssel notwendig';
$string['requirepassword_desc'] = 'Die Verwendung eines Einschreibeschlüssel ist notwendig. Mit dieser Einstellung wird in neuen Kursen ein Einschreibeschlüssel gesetzt und in bestehenden Kursen das Löschen des Einschreibeschlüssels verhindert.';
$string['role'] = 'Rolle zuweisen';
$string['self:config'] = 'Selbsteinschreibung konfigurieren';
$string['self:manage'] = 'Eingeschriebene Nutzer/innen verwalten';
$string['self:unenrol'] = 'Nutzer/innen aus dem Kurs abmelden';
$string['self:unenrolself'] = 'Sich selber aus dem Kurs abmelden';
$string['sendcoursewelcomemessage'] = 'Begrüßungstext versenden';
$string['sendcoursewelcomemessage_help'] = 'Wenn diese Option aktiviert ist, erhalten alle Nutzer/innen einen Begrüßungstext per E-Mail, sobald sie sich selber in einen Kurs eingeschreiben.';
$string['showhint'] = 'Hinweis zeigen';
$string['showhint_desc'] = 'Erstes Zeichen des Zugangsschlüssels zeigen';
$string['status'] = 'Selbsteinschreibung';
$string['status_desc'] = 'Nutzer/innen erlauben, sich standardmäßig selber in Kurse einzuschreiben';
$string['status_help'] = 'Diese Einstellung legt fest, ob Nutzer/innen sich selber in einem Kurs einschreiben (und mit der entsprechenden Berechtigung auch wieder abmelden) dürfen.';
$string['unenrol'] = 'Nutzer/in abmelden';
$string['unenrolselfconfirm'] = 'Möchten Sie sich wirklich selber aus dem Kurs \'{$a}\' abmelden?';
$string['unenroluser'] = 'Möchten Sie wirklich \'{$a->user}\' aus dem Kurs \'{$a->course}\' abmelden?';
$string['usepasswordpolicy'] = 'Kennwortregeln benutzen';
$string['usepasswordpolicy_desc'] = 'Die standardmäßigen Kennwortregeln gelten auch für die Einschreibeschlüssel.';
$string['welcometocourse'] = 'Willkommen zu {$a}';
$string['welcometocoursetext'] = 'Willkommen im Kurs \'{$a->coursename}\'!

Falls Sie es nicht bereits erledigt haben, sollten Sie Ihr persönliches Nutzerprofil bearbeiten. Auf diese Weise können wir alle mehr über Sie erfahren und besser zusammenarbeiten:

{$a->profileurl}';

//UDE-HACK end
