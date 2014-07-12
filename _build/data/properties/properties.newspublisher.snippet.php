<?php
/**
 * Properties file for NewsPublisher snippet
 *
 * Copyright 2013 by Bob Ray <http://bobsguides.com>
 * Created on 07-11-2014
 *
 * @package newspublisher
 * @subpackage build
 */




$properties = array (
  'aliastitle' => 
  array (
    'name' => 'aliastitle',
    'desc' => 'np_aliastitle_desc',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => true,
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
  'aliasprefix' => 
  array (
    'name' => 'aliasprefix',
    'desc' => 'np_aliasprefix_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
  'badwords' => 
  array (
    'name' => 'badwords',
    'desc' => 'np_badwords_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'booltpl' => 
  array (
    'name' => 'booltpl',
    'desc' => 'np_booltpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'cacheable' => 
  array (
    'name' => 'cacheable',
    'desc' => 'np_cacheable_desc',
    'type' => 'list',
    'options' => 
    array (
      0 => 
      array (
        'value' => 'System Default',
        'text' => 'System Default',
        'name' => 'System Default',
      ),
      1 => 
      array (
        'value' => 'Yes',
        'text' => 'Yes',
        'name' => 'Yes',
      ),
      2 => 
      array (
        'value' => 'No',
        'text' => 'No',
        'name' => 'No',
      ),
      3 => 
      array (
        'value' => 'Parent',
        'text' => 'Parent',
        'name' => 'Parent',
      ),
    ),
    'value' => 'System Default',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
  'cancelid' => 
  array (
    'name' => 'cancelid',
    'desc' => 'np_cancelid_desc',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => false,
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'captions' => 
  array (
    'name' => 'captions',
    'desc' => 'np_captions_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'clearcache' => 
  array (
    'name' => 'clearcache',
    'desc' => 'np_clearcache_desc',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => true,
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'tinywidth' => 
  array (
    'name' => 'tinywidth',
    'desc' => 'np_tinywidth_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'tinyheight' => 
  array (
    'name' => 'tinyheight',
    'desc' => 'np_tinyheight_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'cssfile' => 
  array (
    'name' => 'cssfile',
    'desc' => 'np_cssfile_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'datetpl' => 
  array (
    'name' => 'datetpl',
    'desc' => 'np_datetpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'errortpl' => 
  array (
    'name' => 'errortpl',
    'desc' => 'np_errortpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'fielderrortpl' => 
  array (
    'name' => 'fielderrortpl',
    'desc' => 'np_fielderrortpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'footertpl' => 
  array (
    'name' => 'footertpl',
    'desc' => 'np_footertpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'groups' => 
  array (
    'name' => 'groups',
    'desc' => 'np_groups_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'headertpl' => 
  array (
    'name' => 'headertpl',
    'desc' => 'np_headertpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'hidemenu' => 
  array (
    'name' => 'hidemenu',
    'desc' => 'np_hidemenu_desc',
    'type' => 'list',
    'options' => 
    array (
      0 => 
      array (
        'value' => 'System Default',
        'text' => 'System Default',
        'name' => 'System Default',
      ),
      1 => 
      array (
        'value' => 'Yes',
        'text' => 'Yes',
        'name' => 'Yes',
      ),
      2 => 
      array (
        'value' => 'No',
        'text' => 'No',
        'name' => 'No',
      ),
      3 => 
      array (
        'value' => 'Parent',
        'text' => 'Parent',
        'name' => 'Parent',
      ),
    ),
    'value' => 'System Default',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
  'initdatepicker' => 
  array (
    'name' => 'initdatepicker',
    'desc' => 'np_initdatepicker_desc',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => true,
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'initrte' => 
  array (
    'name' => 'initrte',
    'desc' => 'np_initrte_desc',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => false,
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'inttpl' => 
  array (
    'name' => 'inttpl',
    'desc' => 'np_inttpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'language' => 
  array (
    'name' => 'language',
    'desc' => 'np_language_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'listboxmax' => 
  array (
    'name' => 'listboxmax',
    'desc' => 'np_listboxmax_desc',
    'type' => 'numberfield',
    'options' => '',
    'value' => '8',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'listoptiontpl' => 
  array (
    'name' => 'listoptiontpl',
    'desc' => 'np_listoptiontpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'multiplelistboxmax' => 
  array (
    'name' => 'multiplelistboxmax',
    'desc' => 'np_multiplelistboxmax_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '20',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'optionoutertpl' => 
  array (
    'name' => 'optionoutertpl',
    'desc' => 'np_optionoutertpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'optiontpl' => 
  array (
    'name' => 'optiontpl',
    'desc' => 'np_optiontpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'outertpl' => 
  array (
    'name' => 'outertpl',
    'desc' => 'np_outertpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'parentid' => 
  array (
    'name' => 'parentid',
    'desc' => 'np_parentid_desc',
    'type' => 'numberfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
  'postid' => 
  array (
    'name' => 'postid',
    'desc' => 'np_postid_desc',
    'type' => 'numberfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'prefix' => 
  array (
    'name' => 'prefix',
    'desc' => 'np_prefix_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'published' => 
  array (
    'name' => 'published',
    'desc' => 'np_published_desc',
    'type' => 'list',
    'options' => 
    array (
      0 => 
      array (
        'value' => 'System Default',
        'text' => 'System Default',
        'name' => 'System Default',
      ),
      1 => 
      array (
        'value' => 'Yes',
        'text' => 'Yes',
        'name' => 'Yes',
      ),
      2 => 
      array (
        'value' => 'No',
        'text' => 'No',
        'name' => 'No',
      ),
      3 => 
      array (
        'value' => 'Parent',
        'text' => 'Parent',
        'name' => 'Parent',
      ),
    ),
    'value' => 'System Default',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
  'required' => 
  array (
    'name' => 'required',
    'desc' => 'np_required_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => 'pagetitle,content',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'richtext' => 
  array (
    'name' => 'richtext',
    'desc' => 'np_richtext_desc',
    'type' => 'list',
    'options' => 
    array (
      0 => 
      array (
        'value' => 'System Default',
        'text' => 'System Default',
        'name' => 'System Default',
      ),
      1 => 
      array (
        'value' => 'Yes',
        'text' => 'Yes',
        'name' => 'Yes',
      ),
      2 => 
      array (
        'value' => 'No',
        'text' => 'No',
        'name' => 'No',
      ),
      3 => 
      array (
        'value' => 'Parent',
        'text' => 'Parent',
        'name' => 'Parent',
      ),
    ),
    'value' => 'System Default',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
  'rtcontent' => 
  array (
    'name' => 'rtcontent',
    'desc' => 'np_rtcontent_desc',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => false,
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'rtsummary' => 
  array (
    'name' => 'rtsummary',
    'desc' => 'np_rtsummary_desc',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => false,
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'searchable' => 
  array (
    'name' => 'searchable',
    'desc' => 'np_searchable_desc',
    'type' => 'list',
    'options' => 
    array (
      0 => 
      array (
        'value' => 'System Default',
        'text' => 'System Default',
        'name' => 'System Default',
      ),
      1 => 
      array (
        'value' => 'Yes',
        'text' => 'Yes',
        'name' => 'Yes',
      ),
      2 => 
      array (
        'value' => 'No',
        'text' => 'No',
        'name' => 'No',
      ),
      3 => 
      array (
        'value' => 'Parent',
        'text' => 'Parent',
        'name' => 'Parent',
      ),
    ),
    'value' => 'System Default',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
  'show' => 
  array (
    'name' => 'show',
    'desc' => 'np_show_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => 'pagetitle,longtitle,hidemenu,published,description,menutitle,pub_date,unpub_date,introtext,content',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'readonly' => 
  array (
    'name' => 'readonly',
    'desc' => 'np_readonly_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'template' => 
  array (
    'name' => 'template',
    'desc' => 'np_template_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
  'texttpl' => 
  array (
    'name' => 'texttpl',
    'desc' => 'np_texttpl_desc',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Tpls',
  ),
  'textmaxlength' => 
  array (
    'name' => 'textmaxlength',
    'desc' => 'np_textmaxlength_desc',
    'type' => 'numberfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'intmaxlength' => 
  array (
    'name' => 'intmaxlength',
    'desc' => 'np_intmaxlength_desc',
    'type' => 'numberfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'hoverhelp' => 
  array (
    'name' => 'hoverhelp',
    'desc' => 'np_hoverhelp_desc',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => true,
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'usetabs' => 
  array (
    'name' => 'usetabs',
    'desc' => 'np_usetabs_desc~~(optional) Show tabbed display; default: No',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => false,
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'tabs' => 
  array (
    'name' => 'tabs',
    'desc' => 'np_tabs_desc~~(required only if usetabs is set) Specification for tabs (see tutorial)',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'activetab' => 
  array (
    'name' => 'activetab',
    'desc' => 'np_activetab_desc~~(optional) Tab to show when form is loaded',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'classkey' => 
  array (
    'name' => 'classkey',
    'desc' => 'np_classkey_desc~~(optional) Class key for new resources; use only if you have subclassed resource or are using this for Articles (set to Article); default: modDocument',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
  'contentrows' => 
  array (
    'name' => 'contentrows',
    'desc' => 'np_contentrows_desc~~(optional)Rows to show in Content field; default: 10',
    'type' => 'textfield',
    'options' => '',
    'value' => '10',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'contentcols' => 
  array (
    'name' => 'contentcols',
    'desc' => 'np_contentcols_desc~~(optional)Columns to show in Content field; default: 60',
    'type' => 'textfield',
    'options' => '',
    'value' => '60',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'summaryrows' => 
  array (
    'name' => 'summaryrows',
    'desc' => 'np_summaryrows_desc~~(optional)Rows to show in summary (introtext) Field; default;10',
    'type' => 'textfield',
    'options' => '',
    'value' => '10',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'summarycols' => 
  array (
    'name' => 'summarycols',
    'desc' => 'np_summarycols_desc~~(optional)Columns to show in summary (introtext) Field; default: 60',
    'type' => 'textfield',
    'options' => '',
    'value' => '60',
    'lexicon' => 'newspublisher:properties',
    'area' => 'NewsPublisher Control Settings',
  ),
  'aliasdateformat' => 
  array (
    'name' => 'aliasdateformat',
    'desc' => 'np_aliasdateformat_desc~~(optional)Format string for auto date alias (see tutorial)',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
    'lexicon' => 'newspublisher:properties',
    'area' => 'Resource Field Settings',
  ),
);

return $properties;

