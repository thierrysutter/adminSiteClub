$(document).ready(function(){
 
    // show list of product on first load
    showProducts();

    // when a 'read products' button was clicked
    $(document).on('click', '.read-products-button', function(){
        showProducts();
    });
 
});

// function to show list of products
function showProducts()
{
    // get list of products from the API
    $.getJSON("http://localhost/api/services/UtilisateurService.php", function(data){
        
        var tab_html=``;

        // html for listing products
        var read_products_html=`
        <!-- when clicked, it will load the create product form -->
        <div id='create-product' class='btn btn-primary pull-right m-b-15px create-product-button'>
            <span class='glyphicon glyphicon-plus'></span> Create Product
        </div>`;
        
        // rows will be here
    
        // loop through returned list of data
        $.each(data.results, function(key, val) {
        
            // creating new table row per record
            tab_html+=`
                <tr>
                    <td>
                        <label class='au-checkbox'>
                            <input type='checkbox'>
                            <span class='au-checkmark'></span>
                        </label>
                    </td>
        
                    <td><div class='table-data__info'><h6>`+val._nom+`</h6></div></td>
                    
                    <td>
                        <span>
                            <a href='#'>`+val._email+`</a>
                        </span>
                    </td>

                    <td>
                        <span class='role user'>` + val._superAdmin + `</span>
                    </td>

                    <td>
                        <div class='rs-select2--trans rs-select2--sm'>
                            <select class='js-select2' name='property'>
                                <option selected='selected'>Full Control</option>
                                <option value=''>Post</option>
                                <option value=''>Watch</option>
                            </select>
                            <div class='dropDownSelect2'></div>
                        </div>
                    </td>
        
                    <td>
                        <span class='more'>
                            <i class='zmdi zmdi-more'></i>
                        </span>
                    </td>
        
                </tr>`;
        });

        // inject to 'page-content' of our app
        $("#tab-content").html(tab_html);
    });
}