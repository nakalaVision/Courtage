<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bienetre Add</h3>
            </div>
            <?php echo form_open('bienetre/add'); ?>
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
						<label for="libelleBienEtre" class="control-label"><span class="text-danger">*</span>LibelleBienEtre</label>
						<div class="form-group">
							<input type="text" name="libelleBienEtre" value="<?php echo $this->input->post('libelleBienEtre'); ?>" class="form-control" id="libelleBienEtre" />
							<span class="text-danger"><?php echo form_error('libelleBienEtre');?></span>
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