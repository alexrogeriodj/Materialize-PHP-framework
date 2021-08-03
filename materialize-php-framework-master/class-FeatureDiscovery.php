<?php
#############################################################################
# php-material-framework Copyright (C) 2017  Alessio Beccati                #
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#
# This program is free software: you can redistribute it and/or modify      #
# it under the terms of the GNU Affero General Public License as            #
# published by the Free Software Foundation, either version 3 of the        #
# License, or (at your option) any later version.                           #
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#
# This program is distributed in the hope that it will be useful,           #
# but WITHOUT ANY WARRANTY; without even the implied warranty of            #
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             #
# GNU Affero General Public License for more details.                       #
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~#
# You should have received a copy of the GNU Affero General Public License  #
# along with this program.  If not, see <http://www.gnu.org/licenses/>.     #
#############################################################################

class FeatureDiscovery{

	function build(){
		return new self();
	}

	function create_feature($args = []){

  if(!isset($args['id']))
    $args['id'] = bg_color;

  if(!isset($args['class']))
    $args['class'] = bg_color;

  if(!isset($args['bg']))
    $args['bg'] = bg_color;

  if(!isset($args['more']))
    $args['more'] = '';

  if(!isset($args['title']))
    $args['title'] = 'Default title';

  if(!isset($args['content']))
    $args['content'] = '';

	?>
  	<!-- Tap Target Structure -->
		<div id="<?php echo $args['id'] ?>" class="tap-target <?php echo $args['bg'] ?> <?php echo $args['class'] ?>" <?php echo $args['more'] ?>>
			<div class="tap-target-content">
      	<h3><?php echo $args['title'] ?></h3>
				<div class="row">
					<?php echo $args['content'] ?>
				</div>
			</div>
		</div>
	<?php
	}
}
