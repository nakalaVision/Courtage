<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Emplois Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('emploi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdEmplois</th>
						<th>IdCategories</th>
						<th>LibelleEmploi</th>
						<th>TypeEmploi</th>
						<th>Contrat</th>
						<th>Salaire</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($emplois as $E){ ?>
                    <tr>
						<td><?php echo $E['idEmplois']; ?></td>
						<td><?php echo $E['idCategories']; ?></td>
						<td><?php echo $E['libelleEmploi']; ?></td>
						<td><?php echo $E['typeEmploi']; ?></td>
						<td><?php echo $E['contrat']; ?></td>
						<td><?php echo $E['salaire']; ?></td>
						<td>
                            <a href="<?php echo site_url('emploi/edit/'.$E['idEmplois']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('emploi/remove/'.$E['idEmplois']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
