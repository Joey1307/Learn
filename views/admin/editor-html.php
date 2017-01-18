<?php
/**
 * Created in PhpStorm.
 * By User: Joey
 * Date: 19-Dec-16
 * Time: 10:52 AM
 */

//complete source code for views/admin/editor-html.php
return "
<form method ='post' action='admin.php?page=editor' id='editor'>
    <fieldset>
        <legend>New Entry Submission</legend>
        <label>Title</label>
        <input type='text' name='title' maxlength='150'>
        <label>Entry</label>
        <textarea name='entry'></textarea>

        <fieldset id='editor-buttons'>
            <input type='submit' name='action' value='save' />
            <input type='submit' name='action' value='delete' />
        </fieldset>
    </fieldset>
</form>
";