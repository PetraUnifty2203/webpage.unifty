<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Template.hathor
 *
 * @copyright   (C) 2012 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<fieldset class="adminform">
	<legend><?php echo JText::_('COM_ADMIN_DIRECTORY_PERMISSIONS'); ?></legend>
	<table class="adminlist">
		<thead>
			<tr>
				<th width="650">
					<?php echo JText::_('COM_ADMIN_DIRECTORY'); ?>
				</th>
				<th>
					<?php echo JText::_('COM_ADMIN_STATUS'); ?>
				</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="2">&#160;</td>
			</tr>
		</tfoot>
		<tbody>
			<?php foreach ($this->directory as $dir => $info) : ?>
			<tr>
				<td>
					<?php echo JHtml::_('directory.message', $dir, $info['message']);?>
				</td>
				<td>
					<?php echo JHtml::_('directory.writable', $info['writable']);?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</fieldset>
