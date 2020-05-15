<!DOCTYPE html>
<html lang='en'>
<head>
    <title>collection_app_ahardman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width">
</head>
<body>
<?php echo App\ViewHelpers\UncompletedListViewHelper::displayUncompletedEntries($uncompleted); ?>
<?php echo App\ViewHelpers\CompletedListViewHelper::displayCompletedEntries($completed); ?>
<?php echo App\ViewHelpers\CreateToDoViewHelper::displayCreateToDoSection(); ?>
</body>