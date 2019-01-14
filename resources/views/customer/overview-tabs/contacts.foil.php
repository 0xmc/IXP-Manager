<div class="table-responsive">
    <table class="table mt-4 table-striped">
        <thead class="thead-dark">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Phone
                </th>
                <th>
                    Role(s)
                </th>
                <th>
                    Actions
                    <a id="contacts-add-btn" class="btn btn-outline-secondary btn-sm ml-2" href="<?= route( "contact@add" ) . "?cust=" . $t->c->getId() ?>">
                        <i class="fa fa-plus"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php if( count( $t->c->getContacts() ) ): ?>
            <?php foreach( $t->c->getContacts() as $co ): ?>
                <tr>
                    <td>
                        <?= $t->ee( $co->getName() ) ?>
                    </td>
                    <td>
                        <?= $t->ee( $co->getEmail() ) ?>
                    </td>
                    <td>
                        <?= $t->ee( $co->getPhone() ) ?>
                        <?php if( $co->getPhone() && $co->getMobile() ): ?>
                            /
                        <?php endif; ?>
                        <?=  $t->ee( $co->getMobile() ) ?>
                    </td>
                    <td>
                        <?php foreach( $co->getGroups() as $group ): ?>
                            <?php if( $group->getType() == 'ROLE' ): ?>
                                <span class="badge badge-info">
                                    <?= $t->ee( $group->getName() ) ?>
                                </span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" id="cont-list-edit-<?= $co->getId() ?>"href="<?= route( "contact@edit", [ "id" => $co->getId() ] ) ?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-outline-secondary" id="cont-list-delete-<?= $co->getId() ?>" data-object-id="<?= $co->getId() ?>" href="#">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td>
                    No contacts found.
                    <a href="<?= route( "contact@add" ) . "?cust=" . $t->c->getId() ?>">Add a new contact...</a>
                </td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
