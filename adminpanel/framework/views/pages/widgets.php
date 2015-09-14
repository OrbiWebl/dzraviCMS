<div class="admin_main_comp">
    <div class="admin_main_comp_in">
        <div class="ad_wid_header">
            <div class="add_new">
                <?php
                echo wlText::_('New');
                ?>
            </div>
        </div>
        <div class="admin_comp_widgets">
            <div class="ad_wid_fitler">
                <form action="" method="post" >
                    <div class="ad_filter_in">
                        <label for="name">
                            <?php echo wlText::_('Name'); ?>: 
                        </label>
                        <input type="text" id="name" name="name" value="<?php echo $data['data']['filter']->name; ?>">
                    </div>

                    <div class="ad_filter_in">
                        <label for="position">
                            <?php echo wlText::_('position'); ?>: 
                        </label>
                        <input type="text" id="position" name="position" value="<?php echo $data['data']['filter']->position; ?>">
                    </div>

                    <div class="ad_filter_in">
                        <label for="w_name">
                            <?php echo wlText::_('Widget Name'); ?>: 
                        </label>
                        <input type="text" id="c_name" name="w_name" value="<?php echo $data['data']['filter']->w_name; ?>">
                    </div>

                    <div class="ad_filter_in">
                        <label for="published">
                            <?php echo wlText::_('published'); ?>: 
                        </label>
                        <?php
                        $array = array(
                            '0' => wlText::_('YES'),
                            '1' => wlText::_('NO')
                        );
                        ?>
                        <select name="published">
                            <option value="0"><?php echo wlText::_('Select State'); ?></option>
                            <?php
                            foreach ($array AS $k => $r) {
                                if ($k == $data['data']['filter']->published) {
                                    ?>
                                    <option value="<?php echo $k; ?>" selected="selected"><?php echo $r; ?></option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="<?php echo $k; ?>"><?php echo $r; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="ad_filter_in">
                        <label for="order_by">
                            <?php echo wlText::_('ORDER BY'); ?>: 
                        </label>
                        <?php
                        $array = array(
                            'name' => wlText::_('name'),
                            'position' => wlText::_('position'),
                            'c_name' => wlText::_('name'),
                            'published' => wlText::_('position'),
                            'id' => wlText::_('id')
                        );
                        ?>
                        <select name="desc">
                            <option value="0"><?php echo wlText::_('Select Order By'); ?></option>
                            <?php
                            foreach ($array AS $k => $r) {
                                if ($k == $data['data']['filter']->order_by) {
                                    ?>
                                    <option value="<?php echo $k; ?>" selected="selected"><?php echo $r; ?></option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="<?php echo $k; ?>"><?php echo $r; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="ad_filter_in">
                        <label for="DESC">
                            <?php echo wlText::_('ASC/DESC'); ?>: 
                        </label>
                        <?php
                        $array = array(
                            'ASC' => wlText::_('ASC'),
                            'DESC' => wlText::_('DESC')
                        );
                        ?>
                        <select name="desc">
                            <option value="0"><?php echo wlText::_('Select ASC/DESC'); ?></option>
                            <?php
                            foreach ($array AS $k => $r) {
                                if ($k == $data['data']['filter']->desc) {
                                    ?>
                                    <option value="<?php echo $k; ?>" selected="selected"><?php echo $r; ?></option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="<?php echo $k; ?>"><?php echo $r; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>


                </form>
            </div>

            <div class="admin_main_list">
                <table border="1px" width="90%" collpadding="1px" cellspacing="0px">
                    <tr>
                        <td>#</td>
                        <td><?php echo wlText::_('Name'); ?></td>
                        <td><?php echo wlText::_('Position'); ?></td>
                        <td><?php echo wlText::_('Widget Name'); ?></td>
                        <td><?php echo wlText::_('Published'); ?></td>
                        <td><?php echo wlText::_('ID'); ?></td>
                        <td><?php echo wlText::_('DELETE'); ?></td>
                    </tr>
                    <?php
                    if (!empty($data['data']['data'])) {
                        $i = 1;
                       
                        foreach ($data['data']['data'] AS $row) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['position']; ?>
                                </td>
                                <td>
                                    <?php echo $row['w_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['published']; ?>
                                </td>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo wlText::_('DELETE'); ?>
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                    }
                    ?>
                </table>
            </div>

        </div>
    </div>
</div>