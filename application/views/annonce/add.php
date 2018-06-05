<div class="row">
    <div class="col-md-3">
	</div>
    <div class="col-md-6">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ajouter</h3>
            </div>
            <?php echo form_open('annonce/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-12">
						<label for="idCategories" class="control-label"><span class="text-danger">*</span>Cat&eacute;gorie</label>
						<div class="form-group">
							<select name="idCategories" class="form-control">
								<option value="">Choisir une cat&eacute;gorie</option>
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
					<div class="col-md-12">
						<label for="idTypeAnnonce" class="control-label"><span class="text-danger">*</span>Type Annonce</label>
						<div class="form-group">
							<select name="idTypeAnnonce" class="form-control">
								<option value="">Choisir un type annonce</option>
								<?php 
								foreach($all_typeannonce as $typeannonce)
								{
									$selected = ($typeannonce['idTypeAnnonce'] == $this->input->post('idTypeAnnonce')) ? ' selected="selected"' : "";

									echo '<option value="'.$typeannonce['idTypeAnnonce'].'" '.$selected.'>'.$typeannonce['type'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idTypeAnnonce');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="idUtilisateurs" class="control-label"><span class="text-danger">*</span>Utilisateur</label>
						<div class="form-group">
							<select name="idUtilisateurs" class="form-control">
								<option value="">Choisir un utilisateur</option>
								<?php 
								foreach($all_utilisateurs as $utilisateur)
								{
									$selected = ($utilisateur['idUtilisateurs'] == $this->input->post('idUtilisateurs')) ? ' selected="selected"' : "";

									echo '<option value="'.$utilisateur['idUtilisateurs'].'" '.$selected.'>'.$utilisateur['email'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idUtilisateurs');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="titre" class="control-label"><span class="text-danger">*</span>Titre</label>
						<div class="form-group">
							<input type="text" name="titre" value="<?php echo $this->input->post('titre'); ?>" class="form-control" id="titre" />
							<span class="text-danger"><?php echo form_error('titre');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="prix" class="control-label"><span class="text-danger">*</span>Prix</label>
						<div class="form-group">
							<input type="text" name="prix" value="<?php echo $this->input->post('prix'); ?>" class="form-control" id="prix" />
							<span class="text-danger"><?php echo form_error('prix');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="description" class="control-label"><span class="text-danger">*</span>Description</label>
						<div class="form-group">
							<input type="text" name="description" value="<?php echo $this->input->post('description'); ?>" class="form-control" id="description" />
							<span class="text-danger"><?php echo form_error('description');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="datecreation" class="control-label"><span class="text-danger">*</span>Date Cr&eacute;ation</label>
						<div class="form-group">
							<input type="text" name="datecreation" value="<?php echo $this->input->post('datecreation'); ?>" class="has-datepicker form-control" id="datecreation" />
							<span class="text-danger"><?php echo form_error('datecreation');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="dateupdate" class="control-label">Date Mise &agrave; Jour</label>
						<div class="form-group">
							<input type="text" name="dateupdate" value="<?php echo $this->input->post('dateupdate'); ?>" class="has-datepicker form-control" id="dateupdate" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="dateexpiration" class="control-label">Date Expiration</label>
						<div class="form-group">
							<input type="text" name="dateexpiration" value="<?php echo $this->input->post('dateexpiration'); ?>" class="has-datepicker form-control" id="dateexpiration" />
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="checkbox" name="degree" value="1"  id="degree" />
							<label for="degree" class="control-label">Degr&eacute;e</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="checkbox" name="visible" value="1"  id="visible" />
							<label for="visible" class="control-label">Visible</label>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="checkbox" name="vendu" value="1"  id="vendu" />
							<label for="vendu" class="control-label">Vendu</label>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
	<div class="col-md-3">
	</div>
</div>