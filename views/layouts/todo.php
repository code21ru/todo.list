<?php
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php
$this->beginPage();
$this->title = 'To-do List Code21';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="tasks">
        <!-- title -->
        <h1>CSS3 To-Do List</h1>
        <!-- task 1 -->
        <input id='label-1' type='checkbox' checked/>
        <label for='label-1'>
            <h2>Eat My Breakfast
                <span>oatmeal, fruits &amp; morning tea</span>
            </h2>
        </label>
        <!-- task 2 -->
        <input id='label-2' type='checkbox' checked/>
        <label for='label-2'>
            <h2>e-mail processing
                <span>art&amp;&amp;code, personal</span>
            </h2>
        </label>
        <!-- task 3 -->
        <input id='label-3' type='checkbox'/>
        <label for='label-3'>
            <h2>Meditation
                <span>out of my mind</span>
            </h2>
        </label>
        <!-- task 4 -->
        <input id='label-4' type='checkbox'/>
        <label for='label-4'>
            <h2>Code, Code, Code
                <span>hit f12 &amp; let's get wasted</span>
            </h2>
        </label>
        <!-- task 5 -->
        <input id='label-5' type='checkbox'/>
        <label for='label-5'>
            <h2>Watch Screencast
                <span>Ruby on Rails, yeah!</span>
            </h2>
        </label>
    </div>
    <div class="tasks">
        <!-- title -->
        <h1>CSS3 To-Do List</h1>
        <!-- task 1 -->
        <input id='label-1' type='checkbox' checked/>
        <label for='label-1'>
            <h2>Eat My Breakfast
                <span>oatmeal, fruits &amp; morning tea</span>
            </h2>
        </label>
        <!-- task 2 -->
        <input id='label-2' type='checkbox' checked/>
        <label for='label-2'>
            <h2>e-mail processing
                <span>art&amp;&amp;code, personal</span>
            </h2>
        </label>
        <!-- task 3 -->
        <input id='label-3' type='checkbox'/>
        <label for='label-3'>
            <h2>Meditation
                <span>out of my mind</span>
            </h2>
        </label>
        <!-- task 4 -->
        <input id='label-4' type='checkbox'/>
        <label for='label-4'>
            <h2>Code, Code, Code
                <span>hit f12 &amp; let's get wasted</span>
            </h2>
        </label>
        <!-- task 5 -->
        <input id='label-5' type='checkbox'/>
        <label for='label-5'>
            <h2>Watch Screencast
                <span>Ruby on Rails, yeah!</span>
            </h2>
        </label>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>