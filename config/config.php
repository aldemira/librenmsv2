<?php
/**
 * config.php
 *
 * Fetch $config from v1 config.php merged with defaults.inc.php
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    LibreNMS
 * @link       http://librenms.org
 * @copyright  2016 Tony Murray
 * @author     Tony Murray <murraytony@gmail.com>
 */
$install_dir = env('V1_INSTALL_DIR', '/opt/librenms');
$config_source = $install_dir . '/config.php';
$defaults_source = $install_dir . '/includes/defaults.inc.php';

unset($config);

if (file_exists($defaults_source))
{
    include_once($defaults_source);
}
    
if (file_exists($config_source))
{
    include_once($config_source);
}

return isset($config) ? $config : [];
