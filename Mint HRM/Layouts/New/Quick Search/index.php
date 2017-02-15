<div class="row">
    <div class="col-md-12">
        <ul class="sc-emp-list quick-search">
            <?php foreach ($res as $row) { ?>
                <li>
                    <div class="row" onclick="<?php echo $function . "(" . $row->emp_id . ")"; ?>" >
                        <div class="col-md-6">
                            <div class="emp-block search-emp">
                                <div class="img-border">
                                    <div class="img-wrp--35 ">
                                        <?php echo Common::showEmployeeThumbnailx35($row->emp_id); ?>
                                    </div>
                                </div>
                                <h5 class="u-name"><?php echo $row->emp_title . " " . $row->emp_name; ?></h5>
                            </div>
                        </div>
                        <h5 class="col-md-6 mt-10 details"><?php echo $row->emp_no; ?></h5>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
