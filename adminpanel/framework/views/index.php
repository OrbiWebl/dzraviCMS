<div class="admin">
    <div class="admin_index">
        <div class="admin_header">
            <div class="logout">
                <a href="<?php echo base_url_admin . '?mp=main&tp=logout' ?>"><?php echo wlText::_('Log Out'); ?></a>
            </div>
            <div class="main_admin">
                <div class="main_admin_l">
                    <div class="admin_menu_list">
                        <a href="<?php echo base_url_admin ?>"><?php echo wlText::_('Main'); ?></a>
                    </div>
                    <div class="admin_menu_list">
                        <a href="<?php echo base_url_admin ?>"><?php echo wlText::_('Menu'); ?></a>
                    </div>
                    <div class="admin_menu_list">
                        <a href="<?php echo base_url_admin ?>"><?php echo wlText::_('Category'); ?></a>
                    </div>
                    <div class="admin_menu_list">
                        <a href="<?php echo base_url_admin ?>"><?php echo wlText::_('Article'); ?></a>
                    </div>
                    <div class="admin_menu_list">
                        <a href="<?php echo base_url_admin ?>?mp=widgets"><?php echo wlText::_('Widgets'); ?></a>
                    </div>
                    <div class="admin_menu_list" onmouseover="$('.admin_menu_list_in').show();" onmouseout="$('.admin_menu_list_in').hide();">
                        <a><?php echo wlText::_('Components'); ?></a>
                        <div class="admin_menu_list_in" style="display:none">
                            <?php
                            if (isset($data['components']) && !empty($data['components'])) {
                                foreach ($data['components'] as $row) {
                                    ?>
                                    <a href="<?php echo base_url_admin ?>?mp=<?php echo $row['c_name'] ?>"><?php echo wlText::_($row['name']); ?></a>
                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="main_admin_r">
                    <?php
                    if (isset($data['view']) && !empty($data['view'])) {
                        include (PATH_FRAMEWORK.'/views/pages/'.$data['view'].'.php');
                    }
                    else{
                        echo wlText::_('WELCOME TO WEBSITE ADMINISTRATION!!!');
                    }
                    
                    ?>
                </div>
                <div class="cls"></div>
            </div>
            <div class="footer_admin">

            </div>
        </div>
    </div>
</div>
