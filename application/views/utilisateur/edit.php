<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Utilisateur Edit</h3>
            </div>
			<?php echo form_open('utilisateur/edit/'.$utilisateur['idUtilisateurs']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idTypeUtilisateur" class="control-label"><span class="text-danger">*</span>Typeutilisateur</label>
						<div class="form-group">
							<select name="idTypeUtilisateur" class="form-control">
								<option value="">select typeutilisateur</option>
								<?php 
								foreach($all_typeutilisateur as $typeutilisateur)
								{
									$selected = ($typeutilisateur['idTypeUtilisateur'] == $utilisateur['idTypeUtilisateur']) ? ' selected="selected"' : "";

									echo '<option value="'.$typeutilisateur['idTypeUtilisateur'].'" '.$selected.'>'.$typeutilisateur['type'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idTypeUtilisateur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $utilisateur['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom" class="control-label"><span class="text-danger">*</span>Nom</label>
						<div class="form-group">
							<input type="text" name="nom" value="<?php echo ($this->input->post('nom') ? $this->input->post('nom') : $utilisateur['nom']); ?>" class="form-control" id="nom" />
							<span class="text-danger"><?php echo form_error('nom');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prenom" class="control-label"><span class="text-danger">*</span>Prenom</label>
						<div class="form-group">
							<input type="text" name="prenom" value="<?php echo ($this->input->post('prenom') ? $this->input->post('prenom') : $utilisateur['prenom']); ?>" class="form-control" id="prenom" />
							<span class="text-danger"><?php echo form_error('prenom');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $utilisateur['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone" class="control-label"><span class="text-danger">*</span>Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo ($this->input->post('telephone') ? $this->input->post('telephone') : $utilisateur['telephone']); ?>" class="form-control" id="telephone" />
							<span class="text-danger"><?php echo form_error('telephone');?></span>
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