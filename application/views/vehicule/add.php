<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Vehicule Add</h3>
            </div>
            <?php echo form_open('vehicule/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idCategories" class="control-label"><span class="text-danger">*</span>Category</label>
						<div class="form-group">
							<select name="idCategories" class="form-control">
								<option value="">select category</option>
								<?php 
								foreach($all_categories as $category)
								{
									$selected = ($category['idCategories'] == $this->input->post('idCategories')) ? ' selected="selected"' : "";

									echo '<option value="'.$category['idCategories'].'" '.$selected.'>'.$category['libelleCategorie'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idCategories');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="libelleVehicule" class="control-label"><span class="text-danger">*</span>LibelleVehicule</label>
						<div class="form-group">
							<input type="text" name="libelleVehicule" value="<?php echo $this->input->post('libelleVehicule'); ?>" class="form-control" id="libelleVehicule" />
							<span class="text-danger"><?php echo form_error('libelleVehicule');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="marque" class="control-label"><span class="text-danger">*</span>Marque</label>
						<div class="form-group">
							<input type="text" name="marque" value="<?php echo $this->input->post('marque'); ?>" class="form-control" id="marque" />
							<span class="text-danger"><?php echo form_error('marque');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="modele" class="control-label"><span class="text-danger">*</span>Modele</label>
						<div class="form-group">
							<input type="text" name="modele" value="<?php echo $this->input->post('modele'); ?>" class="form-control" id="modele" />
							<span class="text-danger"><?php echo form_error('modele');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="datecirculation" class="control-label"><span class="text-danger">*</span>Datecirculation</label>
						<div class="form-group">
							<input type="text" name="datecirculation" value="<?php echo $this->input->post('datecirculation'); ?>" class="has-datepicker form-control" id="datecirculation" />
							<span class="text-danger"><?php echo form_error('datecirculation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="kilometrage" class="control-label"><span class="text-danger">*</span>Kilometrage</label>
						<div class="form-group">
							<input type="text" name="kilometrage" value="<?php echo $this->input->post('kilometrage'); ?>" class="form-control" id="kilometrage" />
							<span class="text-danger"><?php echo form_error('kilometrage');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="energie" class="control-label"><span class="text-danger">*</span>Energie</label>
						<div class="form-group">
							<input type="text" name="energie" value="<?php echo $this->input->post('energie'); ?>" class="form-control" id="energie" />
							<span class="text-danger"><?php echo form_error('energie');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="boiteVitesse" class="control-label"><span class="text-danger">*</span>BoiteVitesse</label>
						<div class="form-group">
							<input type="text" name="boiteVitesse" value="<?php echo $this->input->post('boiteVitesse'); ?>" class="form-control" id="boiteVitesse" />
							<span class="text-danger"><?php echo form_error('boiteVitesse');?></span>
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