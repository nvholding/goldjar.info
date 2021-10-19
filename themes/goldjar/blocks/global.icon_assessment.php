<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

if (!nv_function_exists('nv_icon_home')) {
    /**
     * nv_icon_home_config()
     *
     * @param string $module
     * @param array  $data_block
     * @param array  $lang_block
     * @return string
     */
    function nv_icon_assessment_config($module, $data_block, $lang_block)
    {
        global $lang_global, $selectthemes;

        // Find language file
        if (file_exists(NV_ROOTDIR . '/themes/' . $selectthemes . '/language/' . NV_LANG_INTERFACE . '.php')) {
            include NV_ROOTDIR . '/themes/' . $selectthemes . '/language/' . NV_LANG_INTERFACE . '.php';
        }

        $html = '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_block['trusted'] . ':</label>';
        $html .= '<div class="col-sm-18"><input type="text" class="form-control" name="config_trusted" value="' . $data_block['trusted'] . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_block['talented'] . ':</label>';
        $html .= '<div class="col-sm-18"><input type="text" class="form-control" name="config_talented" value="' . $data_block['talented'] . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_block['project'] . ':</label>';
        $html .= '<div class="col-sm-18"><input type="text" class="form-control" name="config_project" value="' . $data_block['project'] . '"></div>';
        $html .= '</div>';
        $html .= '<div class="form-group">';
        $html .= '<label class="control-label col-sm-6">' . $lang_block['experience'] . ':</label>';
        $html .= '<div class="col-sm-18"><input type="text" class="form-control" name="config_experience" value="' . $data_block['experience'] . '"></div>';
        $html .= '</div>';

        return $html;
    }

    /**
     * nv_icon_home_submit()
     *
     * @return array
     */
    function nv_icon_assessment_submit()
    {
        global $nv_Request;

        $return = [];
        $return['error'] = [];
        $return['config']['trusted'] = $nv_Request->get_title('config_trusted', 'post');
        $return['config']['talented'] = $nv_Request->get_title('config_talented', 'post');
        $return['config']['project'] = $nv_Request->get_title('config_project', 'post');
        $return['config']['experience'] = $nv_Request->get_title('config_experience', 'post');

        return $return;
    }

    /**
     * nv_icon_home()
     *
     * @param array $block_config
     * @return string
     */
    function nv_icon_home($block_config)
    {
        global $global_config, $lang_global;

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.icon_assessment.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.icon_assessment.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }
		// Find language file
        if (file_exists(NV_ROOTDIR . '/themes/' . $block_theme . '/language/' . NV_LANG_INTERFACE . '.php')) {
            include NV_ROOTDIR . '/themes/' . $block_theme . '/language/' . NV_LANG_INTERFACE . '.php';
        }
        $xtpl = new XTemplate('global.icon_assessment.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/blocks');
        $xtpl->assign('LANG', $lang_block);
        $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
        $xtpl->assign('TEMPLATE', $block_theme);
        $xtpl->assign('DATA', $block_config);

        if (!empty($block_config['trusted'])) {
			$xtpl->assign('trusted', $block_config['trusted']);
            $xtpl->parse('main.icon1');
        }
		if (!empty($block_config['talented'])) {
			$xtpl->assign('talented', $block_config['talented']);
            $xtpl->parse('main.icon2');
        }
		if (!empty($block_config['project'])) {
			$xtpl->assign('project', $block_config['project']);
            $xtpl->parse('main.icon3');
        }
		if (!empty($block_config['experience'])) {
			$xtpl->assign('experience', $block_config['experience']);
            $xtpl->parse('main.icon4');
        }
        $xtpl->parse('main');

        return $xtpl->text('main');
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_icon_home($block_config);
}
