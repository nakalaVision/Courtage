<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Images Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('image/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdImages</th>
						<th>IdAnnonces</th>
						<th>Url</th>
						<th>Alt</th>
						<th>Datecreation</th>
						<th>GroupeRepertoire</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($images as $I){ ?>
                    <tr>
						<td><?php echo $I['idImages']; ?></td>
						<td><?php echo $I['idAnnonces']; ?></td>
						<td><?php echo $I['url']; ?></td>
						<td><?php echo $I['alt']; ?></td>
						<td><?php echo $I['datecreation']; ?></td>
						<td><?php echo $I['groupeRepertoire']; ?></td>
						<td>
                            <a href="<?php echo site_url('image/edit/'.$I['idImages']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('image/remove/'.$I['idImages']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
