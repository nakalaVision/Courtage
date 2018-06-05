<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Typeannonce Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('typeannonce/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdTypeAnnonce</th>
						<th>Type</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($typeannonce as $T){ ?>
                    <tr>
						<td><?php echo $T['idTypeAnnonce']; ?></td>
						<td><?php echo $T['type']; ?></td>
						<td>
                            <a href="<?php echo site_url('typeannonce/edit/'.$T['idTypeAnnonce']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('typeannonce/remove/'.$T['idTypeAnnonce']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
