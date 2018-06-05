<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Vehicules Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('vehicule/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdVehicules</th>
						<th>IdCategories</th>
						<th>LibelleVehicule</th>
						<th>Marque</th>
						<th>Modele</th>
						<th>Datecirculation</th>
						<th>Kilometrage</th>
						<th>Energie</th>
						<th>BoiteVitesse</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($vehicules as $V){ ?>
                    <tr>
						<td><?php echo $V['idVehicules']; ?></td>
						<td><?php echo $V['idCategories']; ?></td>
						<td><?php echo $V['libelleVehicule']; ?></td>
						<td><?php echo $V['marque']; ?></td>
						<td><?php echo $V['modele']; ?></td>
						<td><?php echo $V['datecirculation']; ?></td>
						<td><?php echo $V['kilometrage']; ?></td>
						<td><?php echo $V['energie']; ?></td>
						<td><?php echo $V['boiteVitesse']; ?></td>
						<td>
                            <a href="<?php echo site_url('vehicule/edit/'.$V['idVehicules']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('vehicule/remove/'.$V['idVehicules']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
