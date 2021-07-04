<h3>Products</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque deleniti, ratione molestias accusamus sint delectus cumque debitis commodi dolore praesentium! Maiores est accusantium totam quis enim repellendus corporis perferendis magnam, voluptatum incidunt perspiciatis, ad libero ullam nobis accusamus quasi dicta impedit sed illo veritatis numquam, officiis consequuntur rerum mollitia? Quod.</p>
<hr>

<?php

    $form_deff = [
        "table"=>"products",
        "table_id_col"=>"id",
        "title"=>"Products",
        "subnit_text"=>"Save",
        "tableColumns"=>"id, name, qty, price"
    ];

    $fields = [
        "name"=>[
            "type"=>"text",
            "label"=>"Product Name",
            "valid"=>"a-zA-Z0-9 ",
            "min_len"=>1,
            "max_len"=>100,
            "bs_row_class"=>"col-sm-9"
        ],
        "qty"=>[
            "type"=>"number",
            "label"=>"Quantity",
            "valid"=>"0-9",
            "min_len"=>0,
            "max_len"=>1000000,
            "bs_row_class"=>"col-sm-3"
        ],
        "short_description"=>[
            "type"=>"textarea",
            "label"=>"Short Description",
            "valid"=>"a-zA-Z0-9 ",
            "min_len"=>0,
            "max_len"=>1000000
        ]
    ];

    crudForms($form_deff, $fields);

    
?>
