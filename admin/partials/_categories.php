<h3>Categories</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, itaque.</p>
<hr>

<?php

    $form_deff = [
        "table"=>"categories",
        "table_id_col"=>"id",
        "title"=>"Categories",
        "subnit_text"=>"Save"
    ];

    $fields = [
        "name"=>[
            "type"=>"text",
            "label"=>"Category Name",
            "valid"=>"a-zA-Z0-9 ",
            "min_len"=>1,
            "max_len"=>100
        ],
        "img"=>[
            "type"=>"text",
            "label"=>"Image",
            "valid"=>"0-9",
            "min_len"=>0,
            "max_len"=>1000000,
            "bs_row_class"=>"col-sm-6"
        ],
        "color"=>[
            "type"=>"color",
            "label"=>"Color",
            "valid"=>"0-9",
            "min_len"=>0,
            "max_len"=>1000000,
            "bs_row_class"=>"col-sm-3"
        ],
        "main_categories_id"=>[
            "type"=>"number",
            "label"=>"Main Category",
            "valid"=>"0-9",
            "min_len"=>0,
            "max_len"=>1000000,
            "bs_row_class"=>"col-sm-3"
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
