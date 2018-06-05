<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Typeutilisateur Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('typeutilisateur/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdTypeUtilisateur</th>
						<th>Type</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($typeutilisateur as $T){ ?>
                    <tr>
						<td><?php echo $T['idTypeUtilisateur']; ?></td>
						<td><?php echo $T['type']; ?></td>
						<td>
                            <a href="<?php echo site_url('typeutilisateur/edit/'.$T['idTypeUtilisateur']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('typeutilisateur/remove/'.$T['idTypeUtilisateur']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
