<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Utilisateurs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('utilisateur/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdUtilisateurs</th>
						<th>IdTypeUtilisateur</th>
						<th>Password</th>
						<th>Nom</th>
						<th>Prenom</th>
						<th>Email</th>
						<th>Telephone</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($utilisateurs as $U){ ?>
                    <tr>
						<td><?php echo $U['idUtilisateurs']; ?></td>
						<td><?php echo $U['idTypeUtilisateur']; ?></td>
						<td><?php echo $U['password']; ?></td>
						<td><?php echo $U['nom']; ?></td>
						<td><?php echo $U['prenom']; ?></td>
						<td><?php echo $U['email']; ?></td>
						<td><?php echo $U['telephone']; ?></td>
						<td>
                            <a href="<?php echo site_url('utilisateur/edit/'.$U['idUtilisateurs']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('utilisateur/remove/'.$U['idUtilisateurs']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
