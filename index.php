<?php require_once 'Form.class.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>HTML Form Builder</title>
    <link rel="stylesheet" href="css/argon.css"/>
    <link rel="stylesheet" href="css/select2.css"/>
    <link rel="stylesheet" href="css/datepicker.css"/>

    <style>
        body {
            background-color: #f7f8f9;
        }

        .form-control-alternative {
            border: 1px solid #cad1d7 !important;
            box-shadow: none;
        }

        b, strong {
            text-transform: capitalize;
        }

        b, strong > span {
            color: red;
        }
    </style>
    <script src="js/jquery.min.js"></script>
</head>
<?php
$dynamic_array = array(
    'Name' => array(
        'title' => 'Name',
        'type' => 'text',
        'option' => '',
        'classname' => 'text',
        'validations' => array('not_empty'),
    ),
    'Price' => array(
        'title' => 'Price',
        'type' => 'number',
        'classname' => 'text',
        'validations' => array('not_empty'),
    ),
    'Color' => array(
        'title' => 'title',
        'type' => 'select',
        'option' => array(1, 2, 3),
        'multiple' => false,
        'classname' => 'select',
        'select2' => true,
        'validations' => array('not_empty'),
    ),

    'Size' => array(
        'title' => 'size',
        'type' => 'select',
        'option' => array('1' => '40', '2' => '42', '3' => '38'),
        'multiple' => true,
        'classname' => 'select',
        'select2' => true,
        'validations' => array('not_empty'),
    ),
    'Image' => array(
        'title' => 'image',
        'type' => 'file',
        'classname' => 'file',
        'validations' => array('not_empty'),
    ),
    'Email' => array(
        'title' => 'Email',
        'type' => 'email',
        'classname' => 'text',
        'validations' => array('not_empty', 'is_valid_email'),
    ),
    'Modules' => array(
        'title' => 'modules',
        'type' => 'checkbox',
        'classname' => 'checkbox',
        'option' => array('1' => 'Category', '2' => 'product', '3' => 'Attribute'),
        'validations' => array('not_empty', 'is_valid_email'),
    ),
    'Comment' => array(
        'title' => 'Comments',
        'type' => 'textarea',
        'editor' => true,
        'classname' => 'textarea',
        'validations' => array('not_empty'),
    ),
    'Message' => array(
        'title' => 'Messages',
        'type' => 'textarea',
        'editor' => false,
        'classname' => 'textarea',
        'validations' => array('not_empty'),
    ),
    'Status' => array(
        'title' => 'status',
        'type' => 'radio',
        'classname' => 'radio',
        'option' => array('1' => 1, '2' => 2, '3' => 3),
        'validations' => array('not_empty'),
    ),

    'Date' => array(
        'title' => 'Date',
        'type' => 'date',
        'classname' => 'radio',
        'option' => array('1' => 1, '2' => 2, '3' => 3),
        'validations' => array('not_empty'),
    ),

    'Submit' => array(
        'title' => 'status',
        'type' => 'submit',
        'classname' => 'button',
        'validations' => array('not_empty'),
    ),


);
$form = new Form($dynamic_array);
$form_html = $form->build();
?>
<body>
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="mb-5 mt-5">
                <strong>HTML FORM BUILDER</strong>
            </div>
        </div>

    </div>
    <div>
        <?php echo $form_html; ?>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".role-class").select2();


        $('.select2').css('width', "100%");
    });

</script>
</body>
</html>