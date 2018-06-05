<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Immobiliere Add</h3>
            </div>
            <?php echo form_open('immobiliere/add'); ?>
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
						<label for="libelleImmo" class="control-label"><span class="text-danger">*</span>LibelleImmo</label>
						<div class="form-group">
							<input type="text" name="libelleImmo" value="<?php echo $this->input->post('libelleImmo'); ?>" class="form-control" id="libelleImmo" />
							<span class="text-danger"><?php echo form_error('libelleImmo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="typeImmo" class="control-label"><span class="text-danger">*</span>TypeImmo</label>
						<div class="form-group">
							<input type="text" name="typeImmo" value="<?php echo $this->input->post('typeImmo'); ?>" class="form-control" id="typeImmo" />
							<span class="text-danger"><?php echo form_error('typeImmo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="surface" class="control-label">Surface</label>
						<div class="form-group">
							<input type="text" name="surface" value="<?php echo $this->input->post('surface'); ?>" class="form-control" id="surface" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nbrePiece" class="control-label">NbrePiece</label>
						<div class="form-group">
							<input type="text" name="nbrePiece" value="<?php echo $this->input->post('nbrePiece'); ?>" class="form-control" id="nbrePiece" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ville" class="control-label">Ville</label>
						<div class="form-group">
							<input type="text" name="ville" value="<?php echo $this->input->post('ville'); ?>" class="form-control" id="ville" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="region" class="control-label">Region</label>
						<div class="form-group">
							<input type="text" name="region" value="<?php echo $this->input->post('region'); ?>" class="form-control" id="region" />
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