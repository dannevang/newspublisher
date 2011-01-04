<?php
/**
 * NewsPublisher
 *
 *
 * NewsPublisher is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * NewsPublisher is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * NewsPublisher; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package newspublisher
 * @name newspublisher.class.php
 * @author Raymond Irving
 * @author Bob Ray
 
 *
 * The NewsPublisher snippet presents a form in the front end for
 * creating resources. Rich text editing is available for text fields and TVs.
 *
 * Can be used to edit existing documents in conjunction with the
 * NpEditThisButton snippet.
 * /
/* To Do:
placeholder prefixes
phpdoc stuff
image TVs
date tvs
Check permissions?
Fix/add &allowAnyPost
*/

/*
  Version: 3.0.3
  Modified: November 06, 2010

  Changelog:
     Mar 05, 06 -- modx_ prefix removed [Mark]
     Dec 13, 05 -- Now inherits web/manager docgroups thanks to Jared Carlow
     Nov 06, 10 -- Revolution Conversion and complete OOP refactoring by Bob Ray
     Nov 15, 10 -- Added TVs to form

     NOTE: You may need the latest version of TinyMCE for rich text editing.

  Parameters:
    &parent      - (optional) Folder id where new documents are stored; defaults to NewsPublisher folder.
    &show        - (optional) Comma separated list of fields/tvs to show (shown in order).
                     defaults to 'pagetitle,longtitle,description,menutitle,pub_date,unpub_date,introtext,content'.
    &required    - (optional) Comma-separated list of fields/tvs to require; defaults to 'pagetitle,content'.
    &published   - (optional) Set new resource as published or not
                      (will be overridden by publish and unpublish dates).
                       Set to `parent` to match parent's pub status;
                       defaults to publish_default system setting.
    &postid      - (optional) Document id to load on success; defaults to the page created or edited.
    &cancelid    - (optional) Document id to load on cancel; defaults to http_referer.
    $cancelbutton- (optional) If set, form has a cancel button; defaults to `0`
    &badwords    - (optional) Comma delimited list of words not allowed in new document.
    &template    - (optional) Name of template to use for new document; set to 'parent' to use parent's template;
                       for 'parent', &parent must be set; defaults to system default template.
    &headertpl   - (optional) Header Tpl chunk (chunk name) to be inserted at the beginning of a new document.
    &footertpl   - (optional) Footer Tpl chunk (chunk name) to be inserted at the end of a new document.
    &tinyheight  - (optional) Height of richtext areas; default `400px`.
    &tinywidth   - (optional) Width of richtext areas; default `95%`.
    &outertpl    - (optional) Tpl used as a shell for the whole page
    &texttpl     - (optional) Tpl used for text resource fields
    &inttpl      - (optional) Tpl used for integer resource fields.
    &datetpl     - (optional) Tpl used for date resource fields and date TVs
    &booltpl     - (optional) Tpl used for Yes/No resource fields (e.g., published, searchable, etc.).
    &optionoutertpl - (optional) Tpl used for as a shell for checkbox, list, and radio option TVs.
    &optiontpl   - (optional) Tpl used for each option of checkbox and radio option TVs.
    &listoptiontpl - (optional) Tpl used for each option of listbox TVs.
    &richtext    - (optional) Sets the flag to as to whether or Rich Text Editor is used when editing the page
                       content in the Manager; defaults to richtext_default System Setting for new resources;
                       set to `Parent` to use parent's setting.
    &rtcontent   - (optional) Use rich text for the content form field.
    &rtsummary   - (optional) Use rich text for the summary (introtext) form field.
    &hidemenu    - (optional) Sets the flag (0/1) for whether or not the new page shows in the menu; defaults to 1.
    &searchable  - (optional) Search add-on components can use this to determine whether to include the resource in searches;
                       default is search_default System Setting; set to `Parent` to use parent's setting.
    &cacheable   - (optional) Sets the flag (0/1) for whether or not the new page is marked as cacheable;
                       default is cache_default System Setting; set to `Parent` to use parent's setting.

    &aliastitle  - (optional) Set to 1 to use lowercase, hyphenated, page title as alias. Defaults to 1.
                       If 0,'article-(date created)' is used. Ignored if alias is filled in form.
    &clearcache  - (optional) When set to 1, cache will be cleared after saving the resource; default: 1.
    &listboxmax  - (optional) Maximum length for listboxes. Default is 8 items.
    &cssfile     - (optional) Name of CSS file to use, or `` for no CSS file; defaults to newspublisher.css.
                       File should be in assets/newspublisher/css/ directory
    &errortpl    - (optional) Name of Tpl chunk for formatting errors. Must contain [[+np.error]] placeholder.
    &fielderrortpl (optional) Name of Tpl chunk for formatting field errors. Must contain [[+np.error]] placeholder.
    &groups      - (optional) Resource groups to put new document in (no effect with existing docs);
                       set to 'parent' to use parent's groups.
    &language    - (optional) Language to use in forms and error messages.
    &prefix      - (optional) Prefix to use for placeholders; defaults to 'np'
    &fielderrortpl - (optional)
    &initrte     - '(optional) Initialize rich text editor; set this if there are any rich text fields; defaults to 0'
    &initdatepicker - (optional) Initialized the datepicker; set this if there are any date fields; defaults to '0'
    &readonly    - (optional) Comma-separated list of fields that should be read only; does not work on option or richtext fields

*/

/** @define "$modx->getOption('np.core_path',null,$modx->getOption('core_path').'components/newspublisher/')" "VALUE" */
require_once $modx->getOption('np.core_path',null,$modx->getOption('core_path').'components/newspublisher/').'classes/newspublisher.class.php';


$scriptProperties['prefix'] = empty($scriptProperties['prefix'])? 'np' : $scriptProperties['prefix'];
$np_prefix = $scriptProperties['prefix'];

$np = new Newspublisher($modx, $scriptProperties);

$np->init($modx->context->get('key'));

/* get error Tpl chunk */
$errorTpl = ! empty($errortpl)? $modx->getChunk($errortpl): '<span class = "errormessage">[[+' . $np_prefix . '.error]]</span>';

if(empty($errorTpl)) { /* user sent it but it's not there */
   return $modx->lexicon('np_no_error_tpl') . $scriptProperties['errortpl'];
}
$errors = $np->getErrors();
if (! empty($errors) ) { /* doesn't have permission */
    foreach ($errors as $error) {
        $errorMessage .= str_replace('[[+' . $np_prefix . '.error]]', $error, $errorTpl);
    }
    return($errorMessage);
 }

if (! empty ($cancelId)) {
    $cancelUrl = $modx->makeUrl($cancelId,'','','full');
} else {
    $cancelUrl = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $modx->resource->get('id');
}
$modx->toPlaceholder('cancel_url',$cancelUrl,$np_prefix);

$errorHeaderPresubmit = $modx->lexicon('np_error_presubmit');
$errorHeaderSubmit = $modx->lexicon('np_error_submit');

$fieldErrorTpl = !empty($fielderrortpl)? $modx->getChunk($fielderrortpl): '<span class = "fielderrormessage">[[+'. $np_prefix . '.error]]</span>';

if(empty($fieldErrorTpl)) {
   return $modx->lexicon('np_no_error_tpl') . $scriptProperties['errortpl'] ;
}


$np->getTpls();
$formTpl .= $np->displayForm($scriptProperties['show']);

//die ('<pre>' . print_r($formTpl,true));
/* handle pre-submission errors */
$errors = $np->getErrors();

if (! empty($errors) ) {
   
    $modx->toPlaceholder('error_header',$errorHeaderPresubmit, $np_prefix);
    foreach($errors as $error) {
        $errorMessage .= str_replace("[[+{$np_prefix} . '.error]]",$error,$errorTpl);
    }
    $modx->toPlaceholder('errors_presubmit',$errorMessage, $np_prefix);
    return($formTpl);
 }
 // get postback status
 $isPostBack = $np->getPostBack();

 if ($isPostBack) {

    $errors = $np->getErrors();
    if (! empty($errors)) {
        $modx->toPlaceholder('error_header',$errorHeaderSubmit, $np_prefix);
        foreach($errors as $error) {
            $errorMessage .= str_replace("[[+{$np_prefix} . '.error]]",$error,$errorTpl);
        }
        $modx->toPlaceholder('errors_submit',$errorMessage, $np_prefix);
        return($formTpl);

    }
   
    /* handle pre-save errors (field errors set in validate() ) */
    $np->validate($fieldErrorTpl);
    $errors = $np->getErrors();
    if (! empty($errors) ) {
        foreach($errors as $error) {
            $errorMessage .= str_replace("[[+{$np_prefix}.error]]",$error,$errorTpl);
        }
        $modx->toPlaceholder('errors_submit',$errorMessage, $np_prefix);
        $modx->toPlaceholder('error_header',$errorHeaderSubmit, $np_prefix);
        return $formTpl;
    }

    $docId = $np->saveResource(); /* returns ID of edited doc */
    $postId = $modx->getOption('postId',$scriptProperties,$docId);

    /* handle save errors */
    $errors = $np->getErrors();

    if (! empty($errors) ) {
        $modx->toPlaceholder('error_header',$errorHeaderSubmit, $np_prefix);
        foreach($errors as $error) {
            $errorMessage .= str_replace("[[+{$np_prefix}.error]]",$error,$errorTpl);
        }

        $modx->toPlaceholder('errors_submit' , $errorMessage, $np_prefix);
        
        return($formTpl);
    } else {
        $np->forward($postId);
    }


} else {
   return $formTpl;
}
?>
