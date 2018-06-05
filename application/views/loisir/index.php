<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Loisirs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('loisir/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdLoisirs</th>
						<th>IdCategories</th>
						<th>LibelleLoisir</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($loisirs as $L){ ?>
                    <tr>
						<td><?php echo $L['idLoisirs']; ?></td>
						<td><?php echo $L['idCategories']; ?></td>
						<td><?php echo $L['libelleLoisir']; ?></td>
						<td>
                            <a href="<?php echo site_url('loisir/edit/'.$L['idLoisirs']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('loisir/remove/'.$L['idLoisirs']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
