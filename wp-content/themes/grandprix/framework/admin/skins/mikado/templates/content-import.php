<div class="mkdf-tabs-content">
	<div class="tab-content">
		<div class="tab-pane fade in active" id="import">
			<div class="mkdf-tab-content">
				<h2 class="mkdf-page-title"><?php esc_html_e('Import', 'grandprix'); ?></h2>
				<form method="post" class="mkdf_ajax_form mkdf-import-page-holder" data-confirm-message="<?php esc_attr_e('Are you sure, you want to import Demo Data now?', 'grandprix'); ?>">
					<div class="mkdf-page-form">
						<div class="mkdf-page-form-section-holder">
							<h3 class="mkdf-page-section-title"><?php esc_html_e('Import Demo Content', 'grandprix'); ?></h3>
							<div class="mkdf-page-form-section">
								<div class="mkdf-field-desc">
									<h4><?php esc_html_e('Import', 'grandprix'); ?></h4>
									<p><?php esc_html_e('Choose demo content you want to import', 'grandprix'); ?></p>
								</div>
								<div class="mkdf-section-content">
									<div class="container-fluid">
										<div class="row">
											<div class="col-lg-3">
												<select name="import_example" id="import_example" class="form-control mkdf-form-element dependence">
													<option value="grandprix"><?php esc_html_e('GrandPrix Demo', 'grandprix'); ?></option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mkdf-page-form-section">
								<div class="mkdf-field-desc">
									<h4><?php esc_html_e('Import Type', 'grandprix'); ?></h4>
									<p><?php esc_html_e('Import Type', 'grandprix'); ?></p>
								</div>
								<div class="mkdf-section-content">
									<div class="container-fluid">
										<div class="row">
											<div class="col-lg-3">
												<select name="import_option" id="import_option" class="form-control mkdf-form-element">
													<option value=""><?php esc_html_e('Please Select', 'grandprix'); ?></option>
													<option value="complete_content"><?php esc_html_e('All', 'grandprix'); ?></option>
													<option value="content"><?php esc_html_e('Content', 'grandprix'); ?></option>
													<option value="widgets"><?php esc_html_e('Widgets', 'grandprix'); ?></option>
													<option value="options"><?php esc_html_e('Options', 'grandprix'); ?></option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mkdf-page-form-section">
								<div class="mkdf-field-desc">
									<h4><?php esc_html_e('Import attachments', 'grandprix'); ?></h4>
									<p><?php esc_html_e('Do you want to import media files?', 'grandprix'); ?></p>
								</div>
								<div class="mkdf-section-content">
									<div class="container-fluid">
										<div class="row">
											<div class="col-lg-12">
												<p class="field switch">
													<label class="cb-enable dependence"><span><?php esc_html_e('Yes', 'grandprix'); ?></span></label>
													<label class="cb-disable selected dependence"><span><?php esc_html_e('No', 'grandprix'); ?></span></label>
													<input type="checkbox" id="import_attachments" class="checkbox" name="import_attachments" value="1">
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mkdf-page-form-section">
								<div class="mkdf-field-desc">
									<input type="submit" class="btn btn-primary btn-sm " value="<?php esc_attr_e('Import', 'grandprix'); ?>" name="import" id="mkdf-import-demo-data" />
								</div>
								<div class="mkdf-section-content">
									<div class="container-fluid">
										<div class="row">
											<div class="col-lg-12">
												<div class="mkdf-import-load"><span><?php esc_html_e('The import process may take some time. Please be patient.', 'grandprix') ?> </span><br />
													<div class="mkdf-progress-bar-wrapper html5-progress-bar">
														<div class="progress-bar-wrapper">
															<progress id="progressbar" value="0" max="100"></progress>
														</div>
														<div class="progress-value">0%</div>
														<div class="progress-bar-message">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mkdf-page-form-section mkdf-import-button-wrapper">
								<div class="alert alert-warning">
									<strong><?php esc_html_e('Important notes:', 'grandprix') ?></strong>
									<ul>
										<li><?php esc_html_e('Please note that import process will take time needed to download all attachments from demo web site.', 'grandprix'); ?></li>
										<li> <?php esc_html_e('If you plan to use shop, please install WooCommerce before you run import.', 'grandprix')?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>