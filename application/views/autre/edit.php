<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Autre Edit</h3>
            </div>
			<?php echo form_open('autre/edit/'.$autre['idAutres']); ?>
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
									$selected = ($category['idCategories'] == $autre['idCategories']) ? ' selected="selected"' : "";

									echo '<option value="'.$category['idCategories'].'" '.$selected.'>'.$category['libelleCategorie'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idCategories');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="libelleAutre" class="control-label"><span class="text-danger">*</span>LibelleAutre</label>
						<div class="form-group">
							<input type="text" name="libelleAutre" value="<?php echo ($this->input->post('libelleAutre') ? $this->input->post('libelleAutre') : $autre['libelleAutre']); ?>" class="form-control" id="libelleAutre" />
							<span class="text-danger"><?php echo form_error('libelleAutre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="typeAutre" class="control-label"><span class="text-danger">*</span>TypeAutre</label>
						<div class="form-group">
							<input type="text" name="typeAutre" value="<?php echo ($this->input->post('typeAutre') ? $this->input->post('typeAutre') : $autre['typeAutre']); ?>" class="form-control" id="typeAutre" />
							<span class="text-danger"><?php echo form_error('typeAutre');?></span>
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