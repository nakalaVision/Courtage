<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Annonce Edit</h3>
            </div>
			<?php echo form_open('annonce/edit/'.$annonce['idannonces']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="degree" value="1" <?php echo ($annonce['degree']==1 ? 'checked="checked"' : ''); ?> id='degree' />
							<label for="degree" class="control-label">Degree</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="visible" value="1" <?php echo ($annonce['visible']==1 ? 'checked="checked"' : ''); ?> id='visible' />
							<label for="visible" class="control-label">Visible</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="vendu" value="1" <?php echo ($annonce['vendu']==1 ? 'checked="checked"' : ''); ?> id='vendu' />
							<label for="vendu" class="control-label">Vendu</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idCategories" class="control-label"><span class="text-danger">*</span>Category</label>
						<div class="form-group">
							<select name="idCategories" class="form-control">
								<option value="">select category</option>
								<?php 
								foreach($all_categories as $category)
								{
									$selected = ($category['idCategories'] == $annonce['idCategories']) ? ' selected="selected"' : "";

									echo '<option value="'.$category['idCategories'].'" '.$selected.'>'.$category['libelleCategorie'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idCategories');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idTypeAnnonce" class="control-label"><span class="text-danger">*</span>Typeannonce</label>
						<div class="form-group">
							<select name="idTypeAnnonce" class="form-control">
								<option value="">select typeannonce</option>
								<?php 
								foreach($all_typeannonce as $typeannonce)
								{
									$selected = ($typeannonce['idTypeAnnonce'] == $annonce['idTypeAnnonce']) ? ' selected="selected"' : "";

									echo '<option value="'.$typeannonce['idTypeAnnonce'].'" '.$selected.'>'.$typeannonce['type'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idTypeAnnonce');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idUtilisateurs" class="control-label"><span class="text-danger">*</span>Utilisateur</label>
						<div class="form-group">
							<select name="idUtilisateurs" class="form-control">
								<option value="">select utilisateur</option>
								<?php 
								foreach($all_utilisateurs as $utilisateur)
								{
									$selected = ($utilisateur['idUtilisateurs'] == $annonce['idUtilisateurs']) ? ' selected="selected"' : "";

									echo '<option value="'.$utilisateur['idUtilisateurs'].'" '.$selected.'>'.$utilisateur['email'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idUtilisateurs');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="titre" class="control-label"><span class="text-danger">*</span>Titre</label>
						<div class="form-group">
							<input type="text" name="titre" value="<?php echo ($this->input->post('titre') ? $this->input->post('titre') : $annonce['titre']); ?>" class="form-control" id="titre" />
							<span class="text-danger"><?php echo form_error('titre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prix" class="control-label"><span class="text-danger">*</span>Prix</label>
						<div class="form-group">
							<input type="text" name="prix" value="<?php echo ($this->input->post('prix') ? $this->input->post('prix') : $annonce['prix']); ?>" class="form-control" id="prix" />
							<span class="text-danger"><?php echo form_error('prix');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label"><span class="text-danger">*</span>Description</label>
						<div class="form-group">
							<input type="text" name="description" value="<?php echo ($this->input->post('description') ? $this->input->post('description') : $annonce['description']); ?>" class="form-control" id="description" />
							<span class="text-danger"><?php echo form_error('description');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="datecreation" class="control-label"><span class="text-danger">*</span>Datecreation</label>
						<div class="form-group">
							<input type="text" name="datecreation" value="<?php echo ($this->input->post('datecreation') ? $this->input->post('datecreation') : $annonce['datecreation']); ?>" class="has-datepicker form-control" id="datecreation" />
							<span class="text-danger"><?php echo form_error('datecreation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateupdate" class="control-label">Dateupdate</label>
						<div class="form-group">
							<input type="text" name="dateupdate" value="<?php echo ($this->input->post('dateupdate') ? $this->input->post('dateupdate') : $annonce['dateupdate']); ?>" class="has-datepicker form-control" id="dateupdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateexpiration" class="control-label">Dateexpiration</label>
						<div class="form-group">
							<input type="text" name="dateexpiration" value="<?php echo ($this->input->post('dateexpiration') ? $this->input->post('dateexpiration') : $annonce['dateexpiration']); ?>" class="has-datepicker form-control" id="dateexpiration" />
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