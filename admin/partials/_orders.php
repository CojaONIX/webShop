<h3>Orders</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, similique, recusandae consectetur atque saepe ratione nihil architecto perferendis animi explicabo inventore. Eius velit non, consequuntur eaque obcaecati ad iusto perferendis.</p>
<hr>

<?php

    $form_deff = [
        "table"=>"orders",
        "table_id_col"=>"id",
        "title"=>"Orders",
        "subnit_text"=>"Save",
        "tableColumns"=>"id, full_address, date, amount, status"
    ];

    $fields = [
        "full_address"=>[
            "type"=>"text",
            "label"=>"Address",
            "valid"=>"a-zA-Z0-9\/\, ",
            "min_len"=>1,
            "max_len"=>100
        ],
        "date"=>[
            "type"=>"date",
            "label"=>"Date",
            "valid"=>"0-9:-",
            "min_len"=>0,
            "max_len"=>1000000,
            "bs_row_class"=>"col-sm-5"
        ],
        "amount"=>[
            "type"=>"number",
            "label"=>"Amount",
            "valid"=>"0-9. ",
            "min_len"=>0,
            "max_len"=>1000000,
            "bs_row_class"=>"col-sm-5"
        ],
        "status"=>[
            "type"=>"number",
            "label"=>"Status",
            "valid"=>"0-9",
            "min_len"=>0,
            "max_len"=>1000000,
            "bs_row_class"=>"col-sm-2"
        ]
    ];

    crudForms($form_deff, $fields);

    
?>