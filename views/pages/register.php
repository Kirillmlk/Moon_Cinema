<?php
/**
* @var \App\Kernel\View\ViewInterface $view
* @var \App\Kernel\Session\SessionInterface $session
*/
?>

<?php $view->component('start') ?>
    <h1>Register</h1>

    <form action="/register" method="post" >
        <p>Email</p>
        <input type="text" name="email"/>
        <?php if ($session->has('email')) { ?>
            <ul>
                <?php foreach ((array) $session->getFlash('email') as $error) { ?>
                    <li style="color:red"><?php echo $error ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
        <p>Password</p>
        <input type="password" name="password"/>
        <?php if ($session->has('password')) { ?>
            <ul>
                <?php foreach ((array) $session->getFlash('password') as $error) { ?>
                    <li style="color:red"><?php echo $error ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
        <button>Register</button>
    </form>
<?php $view->component('end') ?>