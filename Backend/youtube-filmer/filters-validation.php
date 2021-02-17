<?php
/*
// Check for posted data
if(filter_has_var(INPUT_POST, "data")){
    echo "Data found";
} else{
    echo "No data";
}
*/
/*
if(filter_has_var(INPUT_POST, "data")){
    if(filter_input(INPUT_POST,"data", FILTER_VALIDATE_EMAIL)){
        echo "Email ";
    } else {
        echo "Ej  email";
    }
    */

    /*
$var= "abc";

if(filter_var($var, FILTER_VALIDATE_INT)){
    echo $var. " är ett nummer";
} else {
    echo $var. " är inte ett nummer";
}
*/

/*
$var ="123abc456";

var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
*/
/*
$filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
        "filter" => FILTER_VALIDATE_INT, 
        "options" => array (
            "min_range" => 1, 
            "max_range" => 100
        )
    )
)

print_r(filter_input_array(INPUT_POST, $filters));

*/
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<input type="text" name="data">
<input type="text" name="data2">
<button type="submit">Submit</button>
</form>