<script type="text/javascript">
    $(document).ready(function (e) {
        new nicEditors.allTextAreas;
    });
</script>

<div class="col-md-8">

    <div class="row form-row">

        <div class="col-md-8 input-layout">
            <input type="text" name="email_subject<?php echo $res->id; ?>" id="email_subject<?php echo $res->id; ?>" value="<?php echo $res->email_subject; ?>" >
            <label>Mail Subject</label>
        </div>

        <div class="col-md-4 input-layout">
            <select name="email_status<?php echo $res->id; ?>" id="email_status<?php echo $res->id; ?>">
                <option value="1" <?php if ($res->email_status == 1) { ?> selected="" <?php } ?>>Active</option>
                <option value="0" <?php if ($res->email_status == 0) { ?> selected="" <?php } ?>>Inactive</option>
            </select>
            <label>Status</label>
        </div>

    </div>
</div>

<div class="col-md-12">

    <div class="row">

        <div class="col-md-8 textarea-layout">
            <textarea class="editor" id="email_content<?php echo $res->id; ?>" name="email_content<?php echo $res->id; ?>"><?php echo $res->email_content; ?></textarea>
        </div>

        <div class="col-md-4">
            <button class="sm-box" title="" type="button" onclick="insertAtCursor('[email_subject]')">Email Subject</button>
            <button class="sm-box" title="" type="button" onclick="insertAtCursor('[user_name]')">Username</button>
            <button class="sm-box" title="" type="button" onclick="insertAtCursor('[user_password]')">User Password</button>
            <button class="sm-box" title="" type="button" onclick="insertAtCursor('[emp_name]')">Emp Name</button>
            <button class="sm-box" title="" type="button" onclick="insertAtCursor('[emp_no]')">Emp No</button>
            <button class="sm-box" title="" type="button" onclick="insertAtCursor('[epf_no]')">EPF No</button>
        </div>

    </div>

    <div class="row">
        
        <div class="col-md-8">
            <!--Massage show here-->
            <div class="message nationality"></div>

            <div class="message <?php echo $res->id; ?>"></div>
            <button class="bx-but bx-save" title="Save" type="button" onclick="editMailTemplate('<?php echo $res->id; ?>')">Save</button>
        </div>
        
    </div>

</div>



<!-- ===========================================================================
        Plugin Script 
============================================================================ -->
<!--Editor-->
<script>
    function insertAtCursor(value) {

        var editor = nicEditors.findEditor('email_content<?php echo $res->id; ?>');
        var range = editor.getRng();
        var editorField = editor.selElm();
        editorField.nodeValue = editorField.nodeValue.substring(0, range.startOffset) +
                value +
                editorField.nodeValue.substring(range.endOffset, editorField.nodeValue.length);

    }

    //Reset form
    form.reset();

</script>
