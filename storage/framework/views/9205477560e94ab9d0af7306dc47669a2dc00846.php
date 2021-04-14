
<?php $__env->startSection('content'); ?>
    <section class="panel">
        <header class="panel-heading">
            <b><h3>Histórico de Transações</h3></b> 
        </header>
        <table class="table display table-hover" id="trans-table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID da Transação</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Remetente</th>
                    <th>Destinatário</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </section>

    <style media="screen" type="text/css">
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    </style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.pf-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Testando-multiuser\resources\views/clients/pf-transaction.blade.php ENDPATH**/ ?>