<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bienetre Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bienetre/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdBienEtre</th>
						<th>IdCategories</th>
						<th>LibelleBienEtre</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($bienetre as $B){ ?>
                    <tr>
						<td><?php echo $B['idBienEtre']; ?></td>
						<td><?php echo $B['idCategories']; ?></td>
						<td><?php echo $B['libelleBienEtre']; ?></td>
						<td>
                            <a href="<?php echo site_url('bienetre/edit/'.$B['idBienEtre']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bienetre/remove/'.$B['idBienEtre']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
