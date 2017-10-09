/**
 * Created by bmabi on 7/25/2017.
 */

current_cart_name=[]; //This array stores all the name of the added items
current_cart_price=[];//This array stores all the price of the added items
current_cart_catagory=[]; //Stores the catagory of a certain item
current_cart_quantity=[];//This array stores all the quantity of the added items
current_cart_itemId=[];//This array stores all the quantity of the added items

total_price_item=0;
grand_total_price=0;
function addToCart(item_id,item_name,item_price,item_catagory) { //item_catagory is the exception list that signifies if that type of item catagory should be replaced with previous items
    //alert(item_array);
    //Store the item info's
    console.log(item_id);
    console.log(item_name);
    console.log(item_price);
    console.log(item_catagory);
    
    if(item_catagory!='bun'){ //Just add whatever item is added to the cart if its not bun
        console.log("This is not bun");
        current_cart_name[item_id]=item_name;
        current_cart_price[item_id]=item_price;
        current_cart_catagory[item_id]=item_catagory;
        current_cart_itemId.push(item_id);
        if(current_cart_quantity[item_id]!=null){ //check if the item already exists or not
            //decrease the grand total
            grand_total_price-=parseInt(current_cart_price[item_id])*parseInt(current_cart_quantity[item_id]);
            current_cart_quantity[item_id]+=1; //increase the quantity as it already exists
            //alert("not null");
            //addItemQuantity(item_id)

            //Remove the previous added row, as it becomes duplicate
            $('#item'+item_id).remove();

            console.log(current_cart_quantity[item_id]);

        }else{
            //alert("Null");
            current_cart_quantity[item_id]=1; //initialize the quantity for that item
            //addItemRow(item_id);
        }
        addItemRow(item_id);
        //Now insert the item to cart table
    }else{ //Replace the bun items currently in the list
        //to do that clear all the items from table
        deleteItem();
        //Then loop through the current_cart and recreate the whole table
        for (var i =0; i < current_cart_itemId.length; i++) {
            console.log(current_cart_itemId[i]);
            //console.log(current_cart_name[current_cart_itemId[i]]);
            //console.log(current_cart_catagory[current_cart_itemId[i]]);
            if(current_cart_catagory[current_cart_itemId[i]]=='bun'){
                //delete the bun from the current_cart
                current_cart_catagory[current_cart_itemId[i]]=undefined;
                current_cart_quantity[current_cart_itemId[i]]=undefined;
                current_cart_price[current_cart_itemId[i]]=undefined;
                current_cart_name[current_cart_itemId[i]]=undefined;

                if (i > -1) {
                    current_cart_itemId.splice(i, 1); //delete the item id of bun
                }
            }else{
                //Add the rest of the items to the table who are not bun
                addItemRow(current_cart_itemId[i]);
            }

        }
        //Add the bun item to the current_cart
        current_cart_name[item_id]=item_name;
        current_cart_price[item_id]=item_price;
        current_cart_catagory[item_id]=item_catagory;
        current_cart_itemId.push(item_id);
        current_cart_quantity[item_id]=1; //initialize the quantity for that item
        addItemRow(item_id);

        //addItemRow(item_id);

        //Generate the row for that item
    }
    





    /*console.log(current_cart_name[item_id]);
    console.log(current_cart_price[item_id]);
    console.log(current_cart_quantity[item_id]); */
    //alert(item_array['Name']);
}
function addItemRow(item_id) {
    var cartTable=document.getElementById("cart_table");
    var currentIndex=cartTable.rows.length;
    //var currentRow=cartTable.insertRow(1);
    var currentRow=AddBefore("grandTotal",item_id);

    //Add Name
    var nameBox=document.createElement("td");
    nameBox.style.color="#fff";
    nameBox.innerHTML=current_cart_name[item_id];
    var currentCell= currentRow.insertCell(-1);
    currentCell.appendChild(nameBox);
    //Add Quantity
    var quanttityBox=document.createElement("td");
    quanttityBox.style.color="#fff";
    quanttityBox.innerHTML=current_cart_quantity[item_id];
    var currentCell= currentRow.insertCell(-1);
    currentCell.appendChild(quanttityBox);
    //Add price
    var priceBox=document.createElement("td");
    priceBox.style.color="#fff";
    priceBox.innerHTML=current_cart_price[item_id];
    var currentCell= currentRow.insertCell(-1);
    currentCell.appendChild(priceBox);

    //Add total for each Item and its quantity
    //console.log(parseInt(current_cart_price[item_id]));
    total_price_item=parseInt(current_cart_price[item_id])*parseInt(current_cart_quantity[item_id]);
    //console.log(total_price_item);
    var totalBox_item=document.createElement("td");
    totalBox_item.style.color="#fff";
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
function AddBefore(rowClass,rowId){
    var target = document.getElementById(rowClass);
    var newElement = document.createElement('tr');
    newElement.className += "insertedItem";
    newElement.id="item"+rowId;
    target.parentNode.insertBefore(newElement, target);
    return newElement;
}
function deleteItem(){
    $('.insertedItem').remove();
    
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