<h3>Main Categories</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, itaque.</p>
<hr>

<?php

    $form_deff = [
        "table"=>"main_categories",
        "table_id_col"=>"id",
        "title"=>"Main Categories",
        "subnit_text"=>"Save"
    ];

    $fields = [
        "name"=>[
            "type"=>"text",
            "label"=>"Category Name",
            "valid"=>"a-zA-Z0-9 ",
            "min_len"=>1,
            "max_len"=>100,
            "bs_row_class"=>"col-sm-7"
        ],
        "img"=>[
            "type"=>"text",
            "label"=>"Image",
            "valid"=>"0-9",
            "min_len"=>0,
            "max_len"=>1000000,
            "bs_row_class"=>"col-sm-5"
        ],
        "description"=>[
            "type"=>"textarea",
            "label"=>"Description",
            "valid"=>"a-zA-Z0-9 ",
            "min_len"=>0,
            "max_len"=>1000000
        ]
    ];

    crudForms($form_deff, $fields);

    
?>