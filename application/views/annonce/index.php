<div class="row">
    <div class="col-xs-12">
        <div class="box-header">
            <h3 class="box-title">Listes des annonces</h3>
            <div class="box-tools">
                <a href="<?php echo site_url('annonce/add'); ?>" class="btn btn-success btn-sm">Ajouter</a>
            </div>
        </div>
        &nbsp;
        <table id="simple-table" class="table  table-bordered table-hover">
            <thead>
            <tr>
                <th>Cat&eacute;gorie</th>
                <th>Type Annonce</th>
                <th>Utilisateurs</th>
                <th>Titre</th>
                <th>Prix</th>
                <th>Description</th>
                <th>Cr&eacute;ation</th>
                <th>Mise &agrave; jour</th>
                <th>Expiration</th>
                <th>Degr&eacute;e</th>
                <th>Visible</th>
                <th>Vendu</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($annonces as $A) { ?>
                <tr>
                    <td><?php echo $A['idCategories']; ?></td>
                    <td><?php echo $A['idTypeAnnonce']; ?></td>
                    <td><?php echo $A['idUtilisateurs']; ?></td>
                    <td><?php echo $A['titre']; ?></td>
                    <td><?php echo $A['prix']; ?></td>
                    <td><?php echo $A['description']; ?></td>
                    <td><?php echo $A['datecreation']; ?></td>
                    <td><?php echo $A['dateupdate']; ?></td>
                    <td><?php echo $A['dateexpiration']; ?></td>
                    <td><?php echo $A['degree']; ?></td>
                    <td><?php echo $A['visible']; ?></td>
                    <td><?php echo $A['vendu']; ?></td>
                    <td>
                        <a href="<?php echo site_url('annonce/edit/' . $A['idannonces']); ?>"
                           class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a>
                        <a href="<?php echo site_url('annonce/remove/' . $A['idannonces']); ?>"
                           class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <div class="pull-right">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
    <!-- /.span -->
</div>
<!-- /.row -->
<!-- PAGE CONTENT ENDS -->

