<?php
/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 */
?>


<?php $view->component('start') ?>
    <h1>Add movie test</h1>

<form action="/admin/movies/add" method="post" enctype="multipart/form-data">
    <p>Name</p>
    <div>
        <input type="text" name="name">
    </div>
    <?php if ($session->has('name')) { ?>
        <ul>
            <?php foreach ((array) $session->getFlash('name') as $error) { ?>
                <li style="color:red"><?php echo $error ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <div>
        <input type="file" name="image">
    </div>
    <div>
        <button>Add</button>
    </div>
</form>
<?php $view->component('end')?>