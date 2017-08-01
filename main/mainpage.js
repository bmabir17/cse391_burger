/**
 * Created by bmabi on 7/25/2017.
 */

current_cart_name=[]; //This array stores all the name of the added items
current_cart_price=[];//This array stores all the price of the added items
current_cart_quantity=[];//This array stores all the quantity of the added items
current_cart_itemId=[];//This array stores all the quantity of the added items

total_price_item=0;
grand_total_price=0;
function addToCart(item_id,item_name,item_price) {
    //alert(item_array);
    //Store the item info's
    console.log(item_id);
    console.log(item_name);
    console.log(item_price);
    current_cart_name[item_id]=item_name;
    current_cart_price[item_id]=item_price;
    current_cart_itemId.push(item_id);
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
    //var currentRow=cartTable.insertRow(1);
    var currentRow=AddBefore("grandTotal");

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

    //Add total for each Item and its quantity
    //console.log(parseInt(current_cart_price[item_id]));
    total_price_item=parseInt(current_cart_price[item_id])*parseInt(current_cart_quantity[item_id]);
    //console.log(total_price_item);
    var totalBox_item=document.createElement("td");
    totalBox_item.innerHTML=total_price_item;
    var currentCell=currentRow.insertCell(-1);
    //alert(totalBox_item);
    currentCell.appendChild(totalBox_item);

    grand_total_price+=total_price_item;
    var GrandToatlRow=document.getElementById("grandTotalBox");
    GrandToatlRow.innerHTML=grand_total_price;
}
function addItemQuantity(item_id) {

}
function AddBefore(rowId){
    var target = document.getElementById(rowId);
    var newElement = document.createElement('tr');
    target.parentNode.insertBefore(newElement, target);
    return newElement;
}

function onCheckOut() {
    console.log(current_cart_itemId);
    var quantity=prompt("How many Burgers do you want?",1);
    if (quantity > 0) {
       console.log(quantity);
       var ConfimShow=document.getElementById('container');

       //Call Ajax and submit the selected items for order
        $.ajax({
            type:"POST",
            url:"process_order.php",
            data:{item_id:JSON.stringify( current_cart_itemId),total_price:grand_total_price,quant:quantity},
            success:function (data) {
                console.log(data);
                ConfimShow.innerHTML=data;

            }

        });

    } else {
        console.log("You pressed Cancel!");
    }
}