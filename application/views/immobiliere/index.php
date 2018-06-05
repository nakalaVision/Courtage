<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Immobilieres Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('immobiliere/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdImmobilieres</th>
						<th>IdCategories</th>
						<th>LibelleImmo</th>
						<th>TypeImmo</th>
						<th>Surface</th>
						<th>NbrePiece</th>
						<th>Ville</th>
						<th>Region</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($immobilieres as $I){ ?>
                    <tr>
						<td><?php echo $I['idImmobilieres']; ?></td>
						<td><?php echo $I['idCategories']; ?></td>
						<td><?php echo $I['libelleImmo']; ?></td>
						<td><?php echo $I['typeImmo']; ?></td>
						<td><?php echo $I['surface']; ?></td>
						<td><?php echo $I['nbrePiece']; ?></td>
						<td><?php echo $I['ville']; ?></td>
						<td><?php echo $I['region']; ?></td>
						<td>
                            <a href="<?php echo site_url('immobiliere/edit/'.$I['idImmobilieres']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('immobiliere/remove/'.$I['idImmobilieres']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
