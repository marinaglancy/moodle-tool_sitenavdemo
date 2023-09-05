<?php
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

namespace tool_sitenavdemo\local;

/**
 * Hook callbacks for tool_sitenavdemo
 *
 * @package    tool_sitenavdemo
 * @copyright  2023 Marina Glancy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hook_callbacks {

    /**
     * Extends primary navigation
     *
     * @param \core\hook\navigation\extend_primary_navigation $hook
     */
    public static function extend_primary_navigation(\core\hook\navigation\primary_extend $hook): void {
        $primarynav = $hook->get_primaryview();

        $primarynav->add(
            'Custom item 1',
            new \moodle_url('/admin/tool/sitenavdemo/index.php', ['view' => 'Custom item 1']),
            \navigation_node::TYPE_ROOTNODE,
            null,
            'custom-1'
        );

        $node = $primarynav->add(
            'Custom menu',
            null,
            \navigation_node::NODETYPE_BRANCH,
            null,
            'custom-0'
        );

        $node->add(
            'Custom item 2',
            new \moodle_url('/admin/tool/sitenavdemo/index.php', ['view' => 'Custom item 2']),
            \navigation_node::TYPE_ROOTNODE,
            null,
            'custom-2'
        );

        $node->add(
            'Custom item 3',
            new \moodle_url('/admin/tool/sitenavdemo/index.php', ['view' => 'Custom item 3']),
            \navigation_node::TYPE_ROOTNODE,
            null,
            'custom-3'
        );

        $node4 = $node->add(
            'Custom item 4',
            new \moodle_url('/admin/tool/sitenavdemo/index.php', ['view' => 'Custom item 4']),
            \navigation_node::TYPE_ROOTNODE,
            null,
            'custom-4'
        );

        $node4->preceedwithhr = true;

    }
}
