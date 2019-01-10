
<ul class="nav nav-tabs mt-4">
    <li role="peering" class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#peering">
            Peering Ports
        </a>
    </li>
    <li role="reseller" class="nav-item" >
        <a class="nav-link" data-toggle="tab" href="#reseller">
            Reseller Uplink Ports
        </a>
    </li>
    <li role="fanout" class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#fanout">
            Fanout Ports
        </a>
    </li>
</ul>
<?php $nbVi = 1 ?>
<div class="tab-content mt-4 ">
    <div id="peering" class="tab-pane fade show active  d-flex">

        <?= $t->insert( 'customer/overview-tabs/ports/port-type', [ 'nbVi' => $nbVi, 'type' => \Entities\SwitchPort::TYPE_PEERING ] ); ?>
    </div>
    <div id="reseller" class="tab-pane fade d-flex">

        <?= $t->insert( 'customer/overview-tabs/ports/port-type' , [ 'nbVi' => $nbVi, 'type' => \Entities\SwitchPort::TYPE_RESELLER ] ); ?>
    </div>
    <div id="fanout" class="tab-pane fade d-flex">

        <?= $t->insert( 'customer/overview-tabs/ports/port-type' , [ 'nbVi' => $nbVi, 'type' => \Entities\SwitchPort::TYPE_FANOUT ] ); ?>
    </div>
</div>


