<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Image Add</h3>
            </div>
            <?php echo form_open('image/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idAnnonces" class="control-label"><span class="text-danger">*</span>Annonce</label>
						<div class="form-group">
							<select name="idAnnonces" class="form-control">
								<option value="">select annonce</option>
								<?php 
								foreach($all_annonces as $annonce)
								{
									$selected = ($annonce['idannonces'] == $this->input->post('idAnnonces')) ? ' selected="selected"' : "";

									echo '<option value="'.$annonce['idannonces'].'" '.$selected.'>'.$annonce['titre'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idAnnonces');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="url" class="control-label"><span class="text-danger">*</span>Url</label>
						<div class="form-group">
							<input type="text" name="url" value="<?php echo $this->input->post('url'); ?>" class="form-control" id="url" />
							<span class="text-danger"><?php echo form_error('url');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alt" class="control-label">Alt</label>
						<div class="form-group">
							<input type="text" name="alt" value="<?php echo $this->input->post('alt'); ?>" class="form-control" id="alt" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="datecreation" class="control-label"><span class="text-danger">*</span>Datecreation</label>
						<div class="form-group">
							<input type="text" name="datecreation" value="<?php echo $this->input->post('datecreation'); ?>" class="has-datepicker form-control" id="datecreation" />
							<span class="text-danger"><?php echo form_error('datecreation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="groupeRepertoire" class="control-label"><span class="text-danger">*</span>GroupeRepertoire</label>
						<div class="form-group">
							<input type="text" name="groupeRepertoire" value="<?php echo $this->input->post('groupeRepertoire'); ?>" class="form-control" id="groupeRepertoire" />
							<span class="text-danger"><?php echo form_error('groupeRepertoire');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>