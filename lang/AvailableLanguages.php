<?php
/**
Copyright 2012 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'lang/AvailableLanguage.php');

class AvailableLanguages
{
    /**
     * @return array|AvailableLanguage[]
     */
    public static function GetAvailableLanguages()
    {
        return array(
        			'ca' => new AvailableLanguage('ca', 'ca.php', 'Catalan'),
        			'cz' => new AvailableLanguage('cz', 'cz.php', 'Czech'),
        			'de_de' => new AvailableLanguage('de_de', 'de_de.php', 'Deutsch'),
        			'du_nl' => new AvailableLanguage('du_nl', 'du_nl.php', 'Dutch'),
        			'en_us' => new AvailableLanguage('en_us', 'en_us.php', 'English US'),
        			'en_gb' => new AvailableLanguage('en_gb', 'en_gb.php', 'English GB'),
        			'es' => new AvailableLanguage('es', 'es.php', 'Espa&ntilde;ol'),
        			'fi_fi' => new AvailableLanguage('fi_fi', 'fi_fi.php', 'Suomi'),
        			'fr_fr' => new AvailableLanguage('fr_fr', 'fr_fr.php', 'Fran&ccedil;ais'),
        			'it_it' => new AvailableLanguage('it_it', 'it_it.php', 'Italiano'),
        			'ja_jp' => new AvailableLanguage('ja_jp', 'ja_jp.php', 'Japanese'),
					'pl' => new AvailableLanguage('pl', 'pl.php', 'Polski'),
					'pt_br' => new AvailableLanguage('pt_br', 'pt_br.php', 'Portugu&ecirc;s Brasileiro'),
					'sv_sv' => new AvailableLanguage('sv_sv', 'sv_sv.php', 'Swedish'),
					'zh_cn' => new AvailableLanguage('zh_cn', 'zh_cn.php', '简体中文'),
					'zh_tw' => new AvailableLanguage('zh_tw', 'zh_tw.php', '繁體中文'),
        		);
    }
}

?>