<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Services Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('service/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdServices</th>
						<th>IdCategories</th>
						<th>LibelleService</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($services as $S){ ?>
                    <tr>
						<td><?php echo $S['idServices']; ?></td>
						<td><?php echo $S['idCategories']; ?></td>
						<td><?php echo $S['libelleService']; ?></td>
						<td>
                            <a href="<?php echo site_url('service/edit/'.$S['idServices']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('service/remove/'.$S['idServices']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
