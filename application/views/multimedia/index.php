<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Multimedias Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('multimedia/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdMultimedias</th>
						<th>IdCategories</th>
						<th>LibelleMultimedia</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($multimedias as $M){ ?>
                    <tr>
						<td><?php echo $M['idMultimedias']; ?></td>
						<td><?php echo $M['idCategories']; ?></td>
						<td><?php echo $M['libelleMultimedia']; ?></td>
						<td>
                            <a href="<?php echo site_url('multimedia/edit/'.$M['idMultimedias']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('multimedia/remove/'.$M['idMultimedias']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
