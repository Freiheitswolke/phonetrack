<?php
/**
 * @copyright Copyright (c) 2019 Julien Veyssier <eneiluj@posteo.net>
 *
 * @author Julien Veyssier <eneiluj@posteo.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Phonetrack\Activity;


class ProximitySetting extends Setting {

	/**
	 * @return string Lowercase a-z and underscore only identifier
	 * @since 11.0.0
	 */
	public function getIdentifier() {
		return 'phonetrack_proximity_event';
	}

	/**
	 * @return string A translated string
	 * @since 11.0.0
	 */
	public function getName() {
		return $this->l->t('<strong>PhoneTrack device proximity</strong> events');
	}

}
