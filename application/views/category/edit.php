<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Category Edit</h3>
            </div>
			<?php echo form_open('category/edit/'.$category['idCategories']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="libelleCategorie" class="control-label"><span class="text-danger">*</span>LibelleCategorie</label>
						<div class="form-group">
							<input type="text" name="libelleCategorie" value="<?php echo ($this->input->post('libelleCategorie') ? $this->input->post('libelleCategorie') : $category['libelleCategorie']); ?>" class="form-control" id="libelleCategorie" />
							<span class="text-danger"><?php echo form_error('libelleCategorie');?></span>
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