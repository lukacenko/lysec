<?php
// source: C:\xampp\htdocs\Lysec\vendor\datagrid\src/templates/datagrid.latte

class Template3355360078f71c4db2085a5647dccc75 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('033472de64', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block _grid
//
if (!function_exists($_b->blocks['_grid'][] = '_lbb45a4a3935__grid')) { function _lbb45a4a3935__grid($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('grid', FALSE)
;call_user_func(reset($_b->blocks['_gridSnippets']), $_b, $template->getParameters()) ; 
}}

//
// block _gridSnippets
//
if (!function_exists($_b->blocks['_gridSnippets'][] = '_lb0788e40f48__gridSnippets')) { function _lb0788e40f48__gridSnippets($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('gridSnippets', FALSE)
;$_control->snippetMode = isset($_snippetMode) && $_snippetMode ?>
		<?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["filter"], array('class' => 'ajax')) ?>

<?php if ($control->hasOuterFilterRendering()) { call_user_func(reset($_b->blocks['outer-filters']), $_b, get_defined_vars()) ; } call_user_func(reset($_b->blocks['_table']), $_b, $template->getParameters())  ?>
		<?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ?>

	<?php $_control->snippetMode = FALSE; return FALSE; 
}}

//
// block outer-filters
//
if (!function_exists($_b->blocks['outer-filters'][] = '_lbe182f2126c_outer_filters')) { function _lbe182f2126c_outer_filters($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($control->hasCollapsibleOuterFilters()) { ?>					<div class="row text-right datagrid-collapse-filters-button-row">
						<div class="col-sm-12">
							<button class="btn btn-xs btn-primary active" type="button" data-toggle="collapse" data-target="#datagrid-<?php echo Latte\Runtime\Filters::escapeHtml($control->getName(), ENT_COMPAT) ?>-row-filters">
<?php call_user_func(reset($_b->blocks['icon-filter']), $_b, get_defined_vars())  ?>
 <?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.show_filter'), ENT_NOQUOTES) ?>

							</button>
						</div>
					</div>
<?php } ?>

<?php if ($control->hasCollapsibleOuterFilters() && !$filter_active) { $filter_row_class = 'row row-filters collapse' ;} elseif ($filter_active) { $filter_row_class = 'row row-filters collapse in' ;} else { $filter_row_class = 'row row-filters' ;} ?>
					<div class="<?php echo Latte\Runtime\Filters::escapeHtml($filter_row_class, ENT_COMPAT) ?>
" id="datagrid-<?php echo Latte\Runtime\Filters::escapeHtml($control->getName(), ENT_COMPAT) ?>-row-filters">
<?php $i = 0 ;$filter_columns_class = 'col-sm-' . (12 / $control->getOuterFilterColumnsCount()) ;$iterations = 0; foreach ($filters as $f) { ?>
						<div class="<?php echo Latte\Runtime\Filters::escapeHtml($filter_columns_class, ENT_COMPAT) ?>">
<?php $filter_block = 'filter-' . $f->getKey() ;$filter_type_block = 'filtertype-' . $f->getType() ?>

<?php if (isset($_b->blocks["$filter_block"])) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, $filter_block, array('filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => TRUE) + $template->getParameters()) ;} else { if (isset($_b->blocks["$filter_type_block"])) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, $filter_type_block, array('filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => TRUE) + $template->getParameters()) ;} else { $_b->templates['033472de64']->renderChildTemplate($f->getTemplate(), array('filter' => $f, 'input' => $form['filter'][$f->getKey()], 'outer' => TRUE) + $template->getParameters()) ;} } $i = $i+1 ?>
						</div>
<?php $iterations++; } ?>
						<div class="col-sm-12">
<?php if (!$control->hasAutoSubmit()) { ?>							<div class="text-right datagrid-manual-submit">
								<?php $_input = is_object($filter['filter']['submit']) ? $filter['filter']['submit'] : $_form[$filter['filter']['submit']]; echo $_input->getControl() ?>

							</div>
<?php } ?>
						</div>
					</div>
<?php
}}

//
// block icon-filter
//
if (!function_exists($_b->blocks['icon-filter'][] = '_lb27f422ac19_icon_filter')) { function _lb27f422ac19_icon_filter($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>								<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>
filter"></i><?php
}}

//
// block table-class
//
if (!function_exists($_b->blocks['table-class'][] = '_lb29238e16b2_table_class')) { function _lb29238e16b2_table_class($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>table table-hover table-striped table-bordered<?php
}}

//
// block _table
//
if (!function_exists($_b->blocks['_table'][] = '_lb1707c6d400__table')) { function _lb1707c6d400__table($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('table', FALSE)
;call_user_func(reset($_b->blocks['data']), $_b, get_defined_vars()) ; 
}}

//
// block data
//
if (!function_exists($_b->blocks['data'][] = '_lbf6386009fb_data')) { function _lbf6386009fb_data($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>			<table class="<?php call_user_func(reset($_b->blocks['table-class']), $_b, get_defined_vars())  ?>
"<?php echo ' id="' . $_control->getSnippetId('table') . '"' ?>>
<?php call_user_func(reset($_b->blocks['header']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['tbody']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['tfoot']), $_b, get_defined_vars())  ?>
			</table>
<?php
}}

//
// block header
//
if (!function_exists($_b->blocks['header'][] = '_lbf1005cc1d2_header')) { function _lbf1005cc1d2_header($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>				<thead>
<?php call_user_func(reset($_b->blocks['group-actions']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['header-column-row']), $_b, get_defined_vars()) ; call_user_func(reset($_b->blocks['header-filters']), $_b, get_defined_vars())  ?>
				</thead>
<?php
}}

//
// block group-actions
//
if (!function_exists($_b->blocks['group-actions'][] = '_lb156641ac60_group_actions')) { function _lb156641ac60_group_actions($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($hasGroupActions || $exports || $toolbar_buttons || $control->canHideColumns() || $inlineAdd) { ?>					<tr class="row-group-actions">
						<th colspan="<?php echo Latte\Runtime\Filters::escapeHtml($control->getColumnsCount(), ENT_COMPAT) ?>" class="form-inline">
<?php if ($hasGroupActions) { call_user_func(reset($_b->blocks['group_actions']), $_b, get_defined_vars()) ; } ?>

<?php if ($control->canHideColumns() || $inlineAdd || $exports || $toolbar_buttons) { ?>							<div class="datagrid-toolbar">
<?php if ($toolbar_buttons) { ?>								<span>
									<?php $iterations = 0; foreach ($toolbar_buttons as $toolbar_button) { echo Latte\Runtime\Filters::escapeHtml($toolbar_button->renderButton(), ENT_NOQUOTES) ;$iterations++; } ?>

								</span>
<?php } ?>

<?php call_user_func(reset($_b->blocks['_exports']), $_b, $template->getParameters())  ?>

<?php call_user_func(reset($_b->blocks['settings']), $_b, get_defined_vars())  ?>
							</div>
<?php } ?>
						</th>
					</tr>
<?php } 
}}

//
// block group_actions
//
if (!function_exists($_b->blocks['group_actions'][] = '_lb0cb4a6019e_group_actions')) { function _lb0cb4a6019e_group_actions($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>									<?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.group_actions'), ENT_NOQUOTES) ?>:
<?php $iterations = 0; foreach ($filter['group_action']->getControls() as $form_control) { if ($form_control instanceof \Nette\Forms\Controls\SubmitButton) { ?>
											<?php $_input = is_object($form_control) ? $form_control : $_form[$form_control]; echo $_input->getControl()->addAttributes(array('class' => 'btn btn-primary btn-sm', 'style' => 'display:none')) ?>

<?php } elseif ($form_control->getName() == 'group_action') { ?>
											<?php $_input = is_object($form_control) ? $form_control : $_form[$form_control]; echo $_input->getControl()->addAttributes(array('class' => 'form-control input-sm', 'disabled' => TRUE)) ?>

<?php } else { ?>
											<?php $_input = is_object($form_control) ? $form_control : $_form[$form_control]; echo $_input->getControl()->addAttributes(array('style' => 'display:none')) ?>

<?php } $iterations++; } if ($control->shouldShowSelectedRowsCount()) { ?>
										<span class="datagrid-selected-rows-count"></span>
<?php } 
}}

//
// block _exports
//
if (!function_exists($_b->blocks['_exports'][] = '_lb71e0f5be99__exports')) { function _lb71e0f5be99__exports($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('exports', FALSE)
;call_user_func(reset($_b->blocks['exports']), $_b, get_defined_vars()) ; 
}}

//
// block exports
//
if (!function_exists($_b->blocks['exports'][] = '_lb50bfece77a_exports')) { function _lb50bfece77a_exports($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($exports) { ?>								<span class="datagrid-exports"<?php echo ' id="' . $_control->getSnippetId('exports') . '"' ?>>
									<?php $iterations = 0; foreach ($exports as $export) { echo Latte\Runtime\Filters::escapeHtml($export->render(), ENT_NOQUOTES) ;$iterations++; } ?>

								</span>
<?php } 
}}

//
// block settings
//
if (!function_exists($_b->blocks['settings'][] = '_lb146718a04a_settings')) { function _lb146718a04a_settings($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($control->canHideColumns() || $inlineAdd) { ?>								<div class="datagrid-settings">
<?php if ($inlineAdd) { ?>
										<?php echo Latte\Runtime\Filters::escapeHtml($inlineAdd->renderButtonAdd(), ENT_NOQUOTES) ?>

<?php } ?>

																		<div class="btn-group">
<?php if ($control->canHideColumns()) { ?>										<button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php call_user_func(reset($_b->blocks['icon-gear']), $_b, get_defined_vars())  ?>
										</button>
<?php } ?>
										<ul class="dropdown-menu dropdown-menu-right dropdown-menu--grid">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($columns_visibility) as $v_key => $visibility) { ?>											<li>
<?php if ($visibility['visible']) { ?>
													<a class="ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("hideColumn!", array('column' => $v_key)), ENT_COMPAT) ?>
">
<?php call_user_func(reset($_b->blocks['icon-checked']), $_b, get_defined_vars()) ; Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'column-header', array('column' => $visibility['column']) + $template->getParameters()) ?>
													</a>
<?php } else { ?>
													<a class="ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("showColumn!", array('column' => $v_key)), ENT_COMPAT) ?>
">
<?php call_user_func(reset($_b->blocks['icon-unchecked']), $_b, get_defined_vars()) ; Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'column-header', array('column' => $visibility['column']) + $template->getParameters()) ?>
													</a>
<?php } ?>
											</li>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
											<li role="separator" class="divider"></li>
											<li>
												<a class="ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("showAllColumns!"), ENT_COMPAT) ?>
"><?php call_user_func(reset($_b->blocks['icon-eye']), $_b, get_defined_vars())  ?>
 <?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.show_all_columns'), ENT_NOQUOTES) ?></a>
											</li>
<?php if ($control->hasSomeColumnDefaultHide()) { ?>											<li>
												<a class="ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("showDefaultColumns!"), ENT_COMPAT) ?>
"><?php call_user_func(reset($_b->blocks['icon-repeat']), $_b, get_defined_vars())  ?>
 <?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.show_default_columns'), ENT_NOQUOTES) ?></a>
											</li>
<?php } ?>
										</ul>
									</div>
								</div>
<?php } 
}}

//
// block icon-gear
//
if (!function_exists($_b->blocks['icon-gear'][] = '_lb83f1e93b7a_icon_gear')) { function _lb83f1e93b7a_icon_gear($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>											<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>gear"></i>
<?php
}}

//
// block icon-checked
//
if (!function_exists($_b->blocks['icon-checked'][] = '_lb2c7b383e83_icon_checked')) { function _lb2c7b383e83_icon_checked($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>														<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>check-square-o"></i>
<?php
}}

//
// block icon-unchecked
//
if (!function_exists($_b->blocks['icon-unchecked'][] = '_lb3d5f8ce9ab_icon_unchecked')) { function _lb3d5f8ce9ab_icon_unchecked($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>														<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>square-o"></i>
<?php
}}

//
// block icon-eye
//
if (!function_exists($_b->blocks['icon-eye'][] = '_lb11bbb1d8cb_icon_eye')) { function _lb11bbb1d8cb_icon_eye($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>
eye"></i><?php
}}

//
// block icon-repeat
//
if (!function_exists($_b->blocks['icon-repeat'][] = '_lbdfdde733d7_icon_repeat')) { function _lbdfdde733d7_icon_repeat($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>
repeat"></i><?php
}}

//
// block header-column-row
//
if (!function_exists($_b->blocks['header-column-row'][] = '_lb097dc64dc0_header_column_row')) { function _lb097dc64dc0_header_column_row($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>					<tr>
<?php if ($hasGroupActions) { ?>						<th class="col-checkbox"<?php echo Latte\Runtime\Filters::htmlAttributes(array('rowspan=2' => !empty($filters) && !$control->hasOuterFilterRendering())) ;echo ' id="' . $_control->getSnippetId('thead-group-action') . '"' ?>>
<?php call_user_func(reset($_b->blocks['_thead-group-action']), $_b, $template->getParameters()) ;} $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($columns) as $key => $column) { $th = $column->getElementForRender('th', $key) ?>
							<?php echo $th->startTag() ?>

<?php $col_header = 'col-' . $key . '-header' ?>

<?php if (isset($_b->blocks["$col_header"])) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, $col_header, array('column' => $column) + $template->getParameters()) ;} else { if ($column->isSortable()) { ?>
										<a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("sort!", array('sort' => $control->getSortNext($column))), ENT_COMPAT) ?>
" id="datagrid-sort-<?php echo Latte\Runtime\Filters::escapeHtml($key, ENT_COMPAT) ?>
"<?php if ($_l->tmp = array_filter(array($column->isSortedBy() ? 'sort' : '', 'ajax'))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>>
<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'column-header', array('column' => $column) + $template->getParameters()) ?>

<?php if ($column->isSortedBy()) { if ($column->isSortAsc()) { call_user_func(reset($_b->blocks['icon-sort-up']), $_b, get_defined_vars()) ; } else { call_user_func(reset($_b->blocks['icon-sort-down']), $_b, get_defined_vars()) ; } } else { call_user_func(reset($_b->blocks['icon-sort']), $_b, get_defined_vars()) ; } ?>
										</a>
<?php } else { Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'column-header', array('column' => $column) + $template->getParameters()) ;} } ?>

								<div class="datagrid-column-header-additions">
<?php if ($control->canHideColumns()) { ?>									<div class="btn-group column-settings-menu">
										<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php call_user_func(reset($_b->blocks['icon-caret-down']), $_b, get_defined_vars())  ?>
										</a>
										<ul class="dropdown-menu dropdown-menu--grid">
											<li>
												<a class="ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("hideColumn!", array('column' => $key)), ENT_COMPAT) ?>
">
<?php call_user_func(reset($_b->blocks['icon-eye-slash']), $_b, get_defined_vars())  ?>
 <?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.hide_column'), ENT_NOQUOTES) ?></a>
											</li>
										</ul>
									</div>
<?php } ?>

<?php if ($control->hasColumnReset()) { ?>
										<a data-datagrid-reset-filter-by-column="<?php echo Latte\Runtime\Filters::escapeHtml($key, ENT_COMPAT) ?>
" title="<?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.reset_filter'), ENT_COMPAT) ?>
" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("resetColumnFilter!", array('key' => $key)), ENT_COMPAT) ?>
"<?php if ($_l->tmp = array_filter(array(isset($filters[$key]) && $filters[$key]->isValueSet() ? '' : 'hidden', 'ajax'))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>>
<?php call_user_func(reset($_b->blocks['icon-remove']), $_b, get_defined_vars())  ?>
										</a>
<?php } ?>
								</div>
							<?php echo $th->endTag() ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ;if ($actions || $control->isSortable() || $items_detail || $inlineEdit || $inlineAdd) { ?>						<th class="col-action text-center">
							<?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.action'), ENT_NOQUOTES) ?>

						</th>
<?php } ?>
					</tr>
<?php
}}

//
// block _thead-group-action
//
if (!function_exists($_b->blocks['_thead-group-action'][] = '_lb696dc43330__thead_group_action')) { function _lb696dc43330__thead_group_action($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('thead-group-action', FALSE)
;if ($hasGroupActionOnRows) { ?>							<input name="<?php echo Latte\Runtime\Filters::escapeHtml($template->lower($control->getName()), ENT_COMPAT) ?>
-toggle-all" type="checkbox" data-check="<?php echo Latte\Runtime\Filters::escapeHtml($control->getName(), ENT_COMPAT) ?>
" data-check-all="<?php echo Latte\Runtime\Filters::escapeHtml($control->getName(), ENT_COMPAT) ?>
"<?php if ($_l->tmp = array_filter(array($control->useHappyComponents() ? 'happy gray-border'  : NULL, 'primary'))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>>
<?php } ?>
						</th>
<?php
}}

//
// block icon-sort-up
//
if (!function_exists($_b->blocks['icon-sort-up'][] = '_lbdde91f01c0_icon_sort_up')) { function _lbdde91f01c0_icon_sort_up($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>													<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>caret-up"></i>
<?php
}}

//
// block icon-sort-down
//
if (!function_exists($_b->blocks['icon-sort-down'][] = '_lb8cfcbd7727_icon_sort_down')) { function _lb8cfcbd7727_icon_sort_down($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>													<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>caret-down"></i>
<?php
}}

//
// block icon-sort
//
if (!function_exists($_b->blocks['icon-sort'][] = '_lb189c6f1685_icon_sort')) { function _lb189c6f1685_icon_sort($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>												<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>sort"></i>
<?php
}}

//
// block icon-caret-down
//
if (!function_exists($_b->blocks['icon-caret-down'][] = '_lb956f14df3b_icon_caret_down')) { function _lb956f14df3b_icon_caret_down($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>											<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>caret-down"></i>
<?php
}}

//
// block icon-eye-slash
//
if (!function_exists($_b->blocks['icon-eye-slash'][] = '_lb4feb2b1fee_icon_eye_slash')) { function _lb4feb2b1fee_icon_eye_slash($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>													<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>
eye-slash"></i><?php
}}

//
// block icon-remove
//
if (!function_exists($_b->blocks['icon-remove'][] = '_lb68ec8a1091_icon_remove')) { function _lb68ec8a1091_icon_remove($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>											<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>remove"></i>
<?php
}}

//
// block header-filters
//
if (!function_exists($_b->blocks['header-filters'][] = '_lb0e8a6eead6_header_filters')) { function _lb0e8a6eead6_header_filters($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if (!empty($filters) && !$control->hasOuterFilterRendering()) { ?>					<tr>
<?php $iterations = 0; foreach ($columns as $key => $column) { $th = $column->getElementForRender('th', $key) ?>
							<?php echo $th->startTag() ?>

<?php $col_header = 'col-filter-' . $key . '-header' ;if (!$control->hasOuterFilterRendering() && isset($filters[$key])) { $i = $filter['filter'][$key] ?>

<?php $filter_block = 'filter-' . $filters[$key]->getKey() ;$filter_type_block = 'filtertype-' . $filters[$key]->getType() ?>

<?php if (isset($_b->blocks["$filter_block"])) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, $filter_block, array('filter' => $filters[$key], 'input' => $i, 'outer' => FALSE) + $template->getParameters()) ;} else { if (isset($_b->blocks["$filter_type_block"])) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, $filter_type_block, array('filter' => $filters[$key], 'input' => $i, 'outer' => FALSE) + $template->getParameters()) ;} else { $_b->templates['033472de64']->renderChildTemplate($filters[$key]->getTemplate(), array('filter' => $filters[$key], 'input' => $i, 'outer' => FALSE) + $template->getParameters()) ;} } ?>

<?php } ?>
							<?php echo $th->endTag() ?>

<?php $iterations++; } if ($actions || $control->isSortable() || $items_detail || $inlineEdit || $inlineAdd) { ?>						<th class="col-action text-center">
<?php if (!$control->hasAutoSubmit() && !$control->hasOuterFilterRendering()) { ?>
								<?php $_input = is_object($filter['filter']['submit']) ? $filter['filter']['submit'] : $_form[$filter['filter']['submit']]; echo $_input->getControl() ?>

<?php } ?>
						</th>
<?php } ?>
					</tr>
<?php } 
}}

//
// block tbody
//
if (!function_exists($_b->blocks['tbody'][] = '_lb74698c7074_tbody')) { function _lb74698c7074_tbody($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>				<tbody <?php if ($control->isSortable()) { ?>data-sortable data-sortable-url="<?php echo Latte\Runtime\Filters::escapeHtml($_presenter->link($control->getSortableHandler()), ENT_COMPAT) ?>
" data-sortable-parent-path="<?php echo Latte\Runtime\Filters::escapeHtml($control->getSortableParentPath(), ENT_COMPAT) ?>
"<?php } echo ' id="' . $_control->getSnippetId('tbody') . '"' ?>>
<?php call_user_func(reset($_b->blocks['_tbody']), $_b, $template->getParameters()) ?>
				</tbody>
<?php
}}

//
// block _tbody
//
if (!function_exists($_b->blocks['_tbody'][] = '_lbfeb7e6e58c__tbody')) { function _lbfeb7e6e58c__tbody($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('tbody', FALSE)
;call_user_func(reset($_b->blocks['_items']), $_b, $template->getParameters()) ; 
}}

//
// block _items
//
if (!function_exists($_b->blocks['_items'][] = '_lb6f7dcc34c4__items')) { function _lb6f7dcc34c4__items($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('items', FALSE)
;if ($inlineAdd && $inlineAdd->isPositionTop()) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'inlineAddRow', array('columns' => $columns) + $template->getParameters()) ;} ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($rows) as $row) { $item = $row->getItem() ?>

<?php if (!isset($toggle_detail)) { if ($inlineEdit && $inlineEdit->getItemId() == $row->getId()) { $inlineEdit->onSetDefaults($filter['inline_edit'], $item) ?>

									<tr data-id="<?php echo Latte\Runtime\Filters::escapeHtml($row->getId(), ENT_COMPAT) ?>
"<?php if ($_l->tmp = array_filter(array($row->getControlClass()))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ;echo ' id="' . ($_l->dynSnippetId = $_control->getSnippetId("item-{$row->getId()}")) . '"' ?>>
<?php ob_start() ;if ($hasGroupActions) { ?>										<td class="col-checkbox"></td>
<?php } ?>

<?php $iterations = 0; foreach ($columns as $key => $column) { $col = 'col-' . $key ?>

<?php $td = $column->getElementForRender('td', $key, $row) ;$td->class[] = 'datagrid-inline-edit' ?>
											<?php echo $td->startTag() ?>

<?php if (isset($filter['inline_edit'][$key])) { ?>
													<?php $_input = is_object($filter['inline_edit'][$key]) ? $filter['inline_edit'][$key] : $_form[$filter['inline_edit'][$key]]; echo $_input->getControl() ?>

<?php } elseif ($inlineEdit->showNonEditingColumns()) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'column-value', array('column' => $column, 'row' => $row, 'key' => $key) + $template->getParameters()) ;} ?>
											<?php echo $td->endTag() ?>

<?php $iterations++; } ?>

										<td class="col-action col-action-inline-edit">
											<?php $_input = is_object($filter['inline_edit']['cancel']) ? $filter['inline_edit']['cancel'] : $_form[$filter['inline_edit']['cancel']]; echo $_input->getControl()->addAttributes(array('class' => 'btn btn-xs btn-danger')) ?>

											<?php $_input = is_object($filter['inline_edit']['submit']) ? $filter['inline_edit']['submit'] : $_form[$filter['inline_edit']['submit']]; echo $_input->getControl()->addAttributes(array('class' => 'btn btn-xs btn-primary')) ?>

											<?php $_input = is_object($filter['inline_edit']['_id']) ? $filter['inline_edit']['_id'] : $_form[$filter['inline_edit']['_id']]; echo $_input->getControl() ?>

											<?php $_input = is_object($filter['inline_edit']['_primary_where_column']) ? $filter['inline_edit']['_primary_where_column'] : $_form[$filter['inline_edit']['_primary_where_column']]; echo $_input->getControl() ?>

										</td>
<?php $_l->dynSnippets[$_l->dynSnippetId] = ob_get_flush() ?>									</tr>
<?php } else { ?>
									<tr data-id="<?php echo Latte\Runtime\Filters::escapeHtml($row->getId(), ENT_COMPAT) ?>
"<?php if ($_l->tmp = array_filter(array($row->getControlClass()))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ;echo ' id="' . ($_l->dynSnippetId = $_control->getSnippetId("item-{$row->getId()}")) . '"' ?>>
<?php ob_start() ;if ($hasGroupActions) { ?>										<td class="col-checkbox">
<?php if ($row->hasGroupAction()) { ?>
												<input type="checkbox" data-check="<?php echo Latte\Runtime\Filters::escapeHtml($control->getName(), ENT_COMPAT) ?>
" data-check-all-<?php echo $control->getName() ?> name="<?php echo Latte\Runtime\Filters::escapeHtml($template->lower($control->getName()), ENT_COMPAT) ?>
_group_action_item[<?php echo Latte\Runtime\Filters::escapeHtml($row->getId(), ENT_COMPAT) ?>
]"<?php if ($_l->tmp = array_filter(array($control->useHappyComponents() ? 'happy gray-border'  : NULL, 'primary'))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>>
<?php } ?>
										</td>
<?php } $iterations = 0; foreach ($columns as $key => $column) { $column = $row->applyColumnCallback($key, clone $column) ?>

<?php $td = $column->getElementForRender('td', $key, $row) ?>
											<?php echo $td->startTag() ?>

<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'column-value', array('column' => $column, 'row' => $row, 'key' => $key) + $template->getParameters()) ?>
											<?php echo $td->endTag() ?>

<?php $iterations++; } if ($actions || $control->isSortable() || $items_detail || $inlineEdit || $inlineAdd) { ?>										<td class="col-action">
<?php $iterations = 0; foreach ($actions as $key => $action) { if ($row->hasAction($key)) { if ($action->hasTemplate()) { $_b->templates['033472de64']->renderChildTemplate($action->getTemplate(), array_merge(array('item' => $item, ), $action->getTemplateVariables(), array( 'row' => $row)) + $template->getParameters()) ;} else { ?>
														<?php echo $action->render($row) ?>

<?php } } $iterations++; } if ($control->isSortable()) { ?>											<span class="handle-sort btn btn-xs btn-default">
<?php call_user_func(reset($_b->blocks['icon-arrows-v']), $_b, get_defined_vars())  ?>
											</span>
<?php } if ($inlineEdit && $row->hasInlineEdit()) { ?>
												<?php echo $inlineEdit->renderButton($row) ?>

<?php } if ($items_detail && $items_detail->shouldBeRendered($row)) { ?>
												<?php echo $items_detail->renderButton($row) ?>

<?php } ?>
										</td>
<?php } $_l->dynSnippets[$_l->dynSnippetId] = ob_get_flush() ?>									</tr>
<?php } } ?>

<?php if ($items_detail && $items_detail->shouldBeRendered($row)) { ?>
								<tr class="row-item-detail item-detail-<?php echo Latte\Runtime\Filters::escapeHtml($row->getId(), ENT_COMPAT) ?>
"<?php echo ' id="' . ($_l->dynSnippetId = $_control->getSnippetId("item-{$row->getId()}-detail")) . '"' ?>>
<?php ob_start() ;if (isset($toggle_detail) && $toggle_detail == $row->getId()) { $item_detail_params = array('item' => $item, '_form' => $filter) + $items_detail->getTemplateVariables() ?>

<?php if (isset($filter['items_detail_form'])) { $item_detail_params['items_detail_form'] = $filter['items_detail_form'] ;} ?>

<?php if (isset($_b->blocks["detail"])) { ?>
											<td colspan="<?php echo Latte\Runtime\Filters::escapeHtml($control->getColumnsCount(), ENT_COMPAT) ?>">
												<div class="item-detail-content">
<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'detail', array_merge(array(), $item_detail_params, array()) + $template->getParameters()) ?>
												</div>
											</td>
<?php } elseif ($items_detail) { ?>
											<td colspan="<?php echo Latte\Runtime\Filters::escapeHtml($control->getColumnsCount(), ENT_COMPAT) ?>">
												<div class="item-detail-content">
<?php if ($items_detail->getType() == 'template') { $_b->templates['033472de64']->renderChildTemplate($items_detail->getTemplate(), array_merge(array(), $item_detail_params, array()) + $template->getParameters()) ;} else { ?>
														<?php echo $items_detail->render($item) ?>

<?php } ?>
												</div>
											</td>
<?php } } $_l->dynSnippets[$_l->dynSnippetId] = ob_get_flush() ?>								</tr>
								<tr class="row-item-detail-helper"></tr>
<?php } $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

<?php if ($inlineAdd && $inlineAdd->isPositionBottom()) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'inlineAddRow', array('columns' => $columns) + $template->getParameters()) ;} ?>

<?php if (!empty($rows) && ($columnsSummary || $control->hasSomeAggregationFunction())) { ?>
						<tr class="datagrid-row-columns-summary"<?php echo ' id="' . $_control->getSnippetId('summary') . '"' ?>>
<?php call_user_func(reset($_b->blocks['_summary']), $_b, $template->getParameters()) ;} ?>

<?php call_user_func(reset($_b->blocks['noItems']), $_b, get_defined_vars())  ?>
					<?php if (isset($_l->dynSnippets)) return $_l->dynSnippets; return FALSE; 
}}

//
// block icon-arrows-v
//
if (!function_exists($_b->blocks['icon-arrows-v'][] = '_lb27770d07fd_icon_arrows_v')) { function _lb27770d07fd_icon_arrows_v($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>												<i class="<?php echo Latte\Runtime\Filters::escapeHtml($icon_prefix, ENT_COMPAT) ?>arrows-v"></i>
<?php
}}

//
// block _summary
//
if (!function_exists($_b->blocks['_summary'][] = '_lb89563c17d2__summary')) { function _lb89563c17d2__summary($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('summary', FALSE)
;if ($hasGroupActions) { ?>							<td class="col-checkbox"></td>
<?php } ?>

<?php if ($columnsSummary && $columnsSummary->someColumnsExist($columns)) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'columnsSummary', array('columns' => $columns) + $template->getParameters()) ;} ?>

<?php if ($control->hasSomeAggregationFunction()) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'aggregationFunctions', array('columns' => $columns) + $template->getParameters()) ;} ?>

<?php if ($actions || $control->isSortable() || $items_detail || $inlineEdit || $inlineAdd) { ?>							<td class="col-action"></td>
<?php } ?>
						</tr>
<?php
}}

//
// block noItems
//
if (!function_exists($_b->blocks['noItems'][] = '_lb0f1b63dde2_noItems')) { function _lb0f1b63dde2_noItems($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if (!$rows) { ?>							<tr>
								<td colspan="<?php echo Latte\Runtime\Filters::escapeHtml($control->getColumnsCount(), ENT_COMPAT) ?>">
<?php if ($filter_active) { ?>
										<?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.no_item_found_reset'), ENT_NOQUOTES) ?>
 <a class="link ajax" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("resetFilter!"), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.here'), ENT_NOQUOTES) ?></a>.
<?php } else { ?>
										<?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.no_item_found'), ENT_NOQUOTES) ?>

<?php } ?>
								</td>
							</tr>
<?php } 
}}

//
// block tfoot
//
if (!function_exists($_b->blocks['tfoot'][] = '_lb692f994fb6_tfoot')) { function _lb692f994fb6_tfoot($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>					<tfoot<?php echo ' id="' . $_control->getSnippetId('pagination') . '"' ?>>
<?php call_user_func(reset($_b->blocks['_pagination']), $_b, $template->getParameters()) ?>
					</tfoot>
<?php
}}

//
// block _pagination
//
if (!function_exists($_b->blocks['_pagination'][] = '_lbbb996fa1de__pagination')) { function _lbbb996fa1de__pagination($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('pagination', FALSE)
;if ($control->isPaginated() || $filter_active) { call_user_func(reset($_b->blocks['pagination']), $_b, get_defined_vars()) ; } 
}}

//
// block pagination
//
if (!function_exists($_b->blocks['pagination'][] = '_lb4f38e868b3_pagination')) { function _lb4f38e868b3_pagination($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>							<tr>
<?php if (!$control->isTreeView()) { ?>								<td colspan="<?php echo Latte\Runtime\Filters::escapeHtml($control->getColumnsCount(), ENT_COMPAT) ?>" class="row-grid-bottom">
									<div class="col-items">
<?php if ($control->isPaginated()) { ?>										<small class="text-muted">
											(<?php $paginator = $control['paginator']->getPaginator() ?>


<?php if ($control->getPerPage() === 'all') { ?>
												<?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.items'), ENT_NOQUOTES) ?>
: <?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.all'), ENT_NOQUOTES) ?>

<?php } else { ?>
												<?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.items'), ENT_NOQUOTES) ?>
: <?php echo Latte\Runtime\Filters::escapeHtml($paginator->getOffset() > 0 ? $paginator->getOffset() + 1 : ($paginator->getItemCount() > 0 ? 1 : 0), ENT_NOQUOTES) ?>
 - <?php echo Latte\Runtime\Filters::escapeHtml(sizeof($rows) + $paginator->getOffset(), ENT_NOQUOTES) ?>

												<?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.from'), ENT_NOQUOTES) ?>
 <?php echo Latte\Runtime\Filters::escapeHtml($paginator->getItemCount(), ENT_NOQUOTES) ?>

											<?php } ?>)
										</small>
<?php } ?>
									</div>
									<div class="col-pagination text-center">
<?php $_l->tmp = $_control->getComponent("paginator"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
									</div>
									<div class="col-per-page text-right">
										<?php if ($filter_active) { ?>										<a class="ajax btn btn-danger btn-sm reset-filter" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("resetFilter!"), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($template->translate('ublaboo_datagrid.reset_filter'), ENT_NOQUOTES) ?></a>
<?php } if ($control->isPaginated()) { ?>
											<?php $_input = is_object($filter['per_page']) ? $filter['per_page'] : $_form[$filter['per_page']]; echo $_input->getControl()->addAttributes(array('data-autosubmit-per-page' => TRUE, 'class' => 'form-control input-sm')) ?>

											<?php $_input = is_object($filter['per_page_submit']) ? $filter['per_page_submit'] : $_form[$filter['per_page_submit']]; echo $_input->getControl()->addAttributes(array('class' => 'datagrid-per-page-submit')) ?>

<?php } ?>
									</div>
								</td>
<?php } ?>
							</tr>
<?php
}}

//
// block inlineAddRow
//
if (!function_exists($_b->blocks['inlineAddRow'][] = '_lbd2cef20d4b_inlineAddRow')) { function _lbd2cef20d4b_inlineAddRow($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$inlineAdd->onSetDefaults($filter['inline_add']) ?>

	<tr class="datagrid-row-inline-add datagrid-row-inline-add-hidden">
<?php if ($hasGroupActions) { ?>		<td class="col-checkbox"></td>
<?php } ?>

<?php $iterations = 0; foreach ($columns as $key => $column) { $col = 'col-' . $key ?>

<?php $td = clone $column->getElementForRender('td', $key) ;$td->class[] = 'datagrid-inline-edit' ?>
			<?php echo $td->startTag() ?>

<?php if (isset($filter['inline_add'][$key])) { ?>
					<?php $_input = is_object($filter['inline_add'][$key]) ? $filter['inline_add'][$key] : $_form[$filter['inline_add'][$key]]; echo $_input->getControl() ?>

<?php } ?>
			<?php echo $td->endTag() ?>

<?php $iterations++; } ?>

		<td class="col-action col-action-inline-edit">
			<?php $_input = is_object($filter['inline_add']['cancel']) ? $filter['inline_add']['cancel'] : $_form[$filter['inline_add']['cancel']]; echo $_input->getControl() ?>

			<?php $_input = is_object($filter['inline_add']['submit']) ? $filter['inline_add']['submit'] : $_form[$filter['inline_add']['submit']]; echo $_input->getControl() ?>

		</td>
	</tr>
<?php
}}

//
// block columnsSummary
//
if (!function_exists($_b->blocks['columnsSummary'][] = '_lb0d9ce20ad3_columnsSummary')) { function _lb0d9ce20ad3_columnsSummary($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$iterations = 0; foreach ($columns as $key => $column) { $td = $column->getElementForRender('td', $key) ?>

		<?php echo $td->startTag() ?>

			<?php echo Latte\Runtime\Filters::escapeHtml($columnsSummary->render($key), ENT_NOQUOTES) ?>

		<?php echo $td->endTag() ?>

<?php $iterations++; } ?>

<?php
}}

//
// block aggregationFunctions
//
if (!function_exists($_b->blocks['aggregationFunctions'][] = '_lb130fb046b6_aggregationFunctions')) { function _lb130fb046b6_aggregationFunctions($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$iterations = 0; foreach ($columns as $key => $column) { $td = $column->getElementForRender('td', $key) ?>

		<?php echo $td->startTag() ?>

<?php if ($aggregation_functions) { if (isset($aggregation_functions[$key])) { ?>
					<?php echo $aggregation_functions[$key]->renderResult() ?>

<?php } } else { ?>
				<?php echo $multiple_aggregation_function->renderResult($key) ?>

<?php } ?>
		<?php echo $td->endTag() ?>

<?php $iterations++; } ?>

<?php
}}

//
// block column-header
//
if (!function_exists($_b->blocks['column-header'][] = '_lba89b58fd3b_column_header')) { function _lba89b58fd3b_column_header($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($column->isHeaderEscaped()) { if ($column instanceof \Nette\Utils\Html || !$column->isTranslatableHeader()) { ?>
			<?php echo $column->getName() ?>

<?php } else { ?>
			<?php echo $template->translate($column->getName()) ?>

<?php } } else { if ($column instanceof \Nette\Utils\Html || !$column->isTranslatableHeader()) { ?>
			<?php echo Latte\Runtime\Filters::escapeHtml($column->getName(), ENT_NOQUOTES) ?>

<?php } else { ?>
			<?php echo Latte\Runtime\Filters::escapeHtml($template->translate($column->getName()), ENT_NOQUOTES) ?>

<?php } } 
}}

//
// block column-value
//
if (!function_exists($_b->blocks['column-value'][] = '_lb7ae551c147_column_value')) { function _lb7ae551c147_column_value($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$col = 'col-' . $key ;$item = $row->getItem() ?>

<?php if ($column->hasTemplate()) { $_b->templates['033472de64']->renderChildTemplate($column->getTemplate(), array_merge(array('row' => $row, 'item' => $item, ), $column->getTemplateVariables(), array()) + $template->getParameters()) ;} else { if (isset($_b->blocks["$col"])) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, $col, array('item' => $item) + $template->getParameters()) ;} else { if ($column->isTemplateEscaped()) { ?>
				<?php echo Latte\Runtime\Filters::escapeHtml($column->render($row), ENT_NOQUOTES) ?>

<?php } else { ?>
				<?php echo $column->render($row) ?>

<?php } } } 
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<div class="datagrid datagrid-<?php echo Latte\Runtime\Filters::escapeHtml($control->getName(), ENT_COMPAT) ?>
" data-refresh-state="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("refreshState!"), ENT_COMPAT) ?>">
		<div<?php echo ' id="' . $_control->getSnippetId('grid') . '"' ?>>
<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['_grid']), $_b, $template->getParameters()) ?>
	</div>
</div>












<?php
}}