<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Emploi Edit</h3>
            </div>
			<?php echo form_open('emploi/edit/'.$emploi['idEmplois']); ?>
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
									$selected = ($category['idCategories'] == $emploi['idCategories']) ? ' selected="selected"' : "";

									echo '<option value="'.$category['idCategories'].'" '.$selected.'>'.$category['libelleCategorie'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idCategories');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="libelleEmploi" class="control-label"><span class="text-danger">*</span>LibelleEmploi</label>
						<div class="form-group">
							<input type="text" name="libelleEmploi" value="<?php echo ($this->input->post('libelleEmploi') ? $this->input->post('libelleEmploi') : $emploi['libelleEmploi']); ?>" class="form-control" id="libelleEmploi" />
							<span class="text-danger"><?php echo form_error('libelleEmploi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="typeEmploi" class="control-label"><span class="text-danger">*</span>TypeEmploi</label>
						<div class="form-group">
							<input type="text" name="typeEmploi" value="<?php echo ($this->input->post('typeEmploi') ? $this->input->post('typeEmploi') : $emploi['typeEmploi']); ?>" class="form-control" id="typeEmploi" />
							<span class="text-danger"><?php echo form_error('typeEmploi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contrat" class="control-label"><span class="text-danger">*</span>Contrat</label>
						<div class="form-group">
							<input type="text" name="contrat" value="<?php echo ($this->input->post('contrat') ? $this->input->post('contrat') : $emploi['contrat']); ?>" class="form-control" id="contrat" />
							<span class="text-danger"><?php echo form_error('contrat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="salaire" class="control-label">Salaire</label>
						<div class="form-group">
							<input type="text" name="salaire" value="<?php echo ($this->input->post('salaire') ? $this->input->post('salaire') : $emploi['salaire']); ?>" class="form-control" id="salaire" />
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