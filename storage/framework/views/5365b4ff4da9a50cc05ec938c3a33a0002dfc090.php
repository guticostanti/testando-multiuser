
<?php $__env->startSection('content'); ?>
 <!-- start:form login -->
    <section class="panel panel-default">
        <?php if($message = $request->session()->get('success')): ?>
            <div class="custom-alerts alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <?php echo $message; ?>

            </div>
            <?php $request->session()->forget('success');?>
        <?php endif; ?>

        <?php if($message = $request->session()->get('error')): ?>
            <div class="custom-alerts alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <?php echo $message; ?>

            </div>
            <?php $request->session()->forget('error');?>
        <?php endif; ?>

        <header class="panel-heading text-center">
            <h3><b>Carteira Digital</b></h3>
        </header>

        <div class="panel-body ">
            <div class="row" style="text-align: center;">
                <a href="<?php echo e(route('pf.login')); ?>" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px;">Logar como Pessoa Física</a>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px;">Logar como Pessoa Jurídica</a>
            </div>
            <div class="row" style="text-align: center;">
                <a href="<?php echo e(route('pf.register')); ?>" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px; margin-top: 10px;">Criar conta Pessoa Física</a>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-primary" style="width: 300px; height: 300px; line-height: 300px; font-size: 20px; margin-top: 10px;">Criar conta Pessoa Jurídica</a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.welcome-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Meus repositórios github\Testando-multiuser\resources\views/welcome.blade.php ENDPATH**/ ?>