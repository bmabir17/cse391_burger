/**
 * Created by bmabi on 7/25/2017.
 */

current_cart_name=[]; //This array stores all the name of the added items
current_cart_price=[];//This array stores all the price of the added items
current_cart_quantity=[];//This array stores all the quantity of the added items

function addToCart(item_id,item_name,item_price) {
    //alert(item_array);
    //Store the item info's
    console.log(item_id);
    console.log(item_name);
    console.log(item_price);
    current_cart_name[item_id]=item_name;
    current_cart_price[item_id]=item_price;
    if(current_cart_quantity[item_id]!=null){
        current_cart_quantity[item_id]+=1;
        //alert("not null");
        //addItemQuantity(item_id)
    }else{
        //alert("Null");
        current_cart_quantity[item_id]=1;
        //addItemRow(item_id);
    }
    addItemRow(item_id);
    //Now insert the item to cart table





    console.log(current_cart_name[item_id]);
    console.log(current_cart_price[item_id]);
    console.log(current_cart_quantity[item_id]);
    //alert(item_array['Name']);
}
function addItemRow(item_id) {
    var cartTable=document.getElementById("cart_table");
    var currentIndex=cartTable.rows.length;
    var currentRow=cartTable.insertRow(-1);
    //Add Name
    var nameBox=document.createElement("td");
    nameBox.innerHTML=current_cart_name[item_id];
    var currentCell= currentRow.insertCell(-1);
    currentCell.appendChild(nameBox);
    //Add Quantity
    var quanttityBox=document.createElement("td");
    quanttityBox.innerHTML=current_cart_quantity[item_id];
    var currentCell= currentRow.insertCell(-1);
    currentCell.appendChild(quanttityBox);
    //Add price
    var priceBox=document.createElement("td");
    priceBox.innerHTML=current_cart_price[item_id];
    var currentCell= currentRow.insertCell(-1);
    currentCell.appendChild(priceBox);
}
function addItemQuantity(item_id) {

}