<!DOCTYPE html>
<html>
<title>The Coffe Code</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<script type="text/javascript">
	function incrementValue(id)
	{
		//alert(id);
		var spanID = id+"span";
    var finalID = id+"Value";
	    var value = parseInt(document.getElementById(id).value, 10);
	    value = isNaN(value) ? 0 : value;
	    if(value<10){
	        value++;
	            document.getElementById(id).value = value;
	            document.getElementById(spanID).innerHTML = value;
              document.getElementsByName(finalID).value = value;
	    }
	    else
	    	alert("Sorry.. We do not accept orders above 10 for any food item..!!");

	}

	function decrementValue(id)
	{
	    var spanID = id+"span";
      var finalID = id+"Value";
	    var value = parseInt(document.getElementById(id).value, 10);
	    value = isNaN(value) ? 0 : value;
	    if(value>=1){
	        value--;
	            document.getElementById(id).value = value;
	            document.getElementById(spanID).innerHTML = value;
              document.getElementsByName(finalID).value = value;
	    }
	    else
	    	alert("Sorry.. You haven't selected any quantity for this food item yet!\nOrder now to enjoy some delicious and tasty food & drinks..!!");

	}

	function printQuantity(id) {
	  var x = document.getElementById(id).value;
	  
	  switch (id) {
		  case 'bb':
		    var name = "Bread Basket";
		    break;
		  case 'hg':
		    var name = "Honey Almond Granula With Fruits";
		    break;
		  case 'bw':
		    var name = "Belgian Waffle";
		    break;
		  case 'se':
		    var name = "Scrambled Eggs";
		    break;
		  case 'bp':
		    var name = "Blueberry Pancakes";
		    break;
		  case 'co':
		    var name = "Regular Coffee";
		    break;
		  case 'choco':
		    var name = "Chocolato";
		    break;
		  case 'cor':
		    var name = "Corretto";
		    break;
		  case 'it':
		    var name = "Iced Tea";
		    break;
		  case 'soda':
		    var name = "Soda";
		    break;
		  default:
		    text = "No value found";
		    break;
	  }

	  if(isNaN(x))
	  	alert("Oopss..!! You have selected 0 "+name+"!\nOrder now to enjoy some of the most delicious food and drinks..!!");
	  else
	  	alert("You have selected " + x +" "+ name + "!\nServing your food in just 20 minutes.. You may view your selected eateries and drinks in YOUR CART section!");

	}

  function populateYourOrders()
  {
    var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var nums = "0123456789";
    var orderID=""
    for (var i = 2; i > 0; --i)
      orderID += chars[Math.round(Math.random() * (chars.length - 1))]
    for (var i = 4; i > 0; --i)
      orderID += nums[Math.round(Math.random() * (nums.length - 1))]
    // alert(orderID);
    alert("Your order is placed successfully! Please note your OrderID is : "+orderID+".\nYou may view your order details in 'YOUR ORDERS' section, Thank You!");

    document.getElementById("oNumID").value = orderID;
    document.getElementById("OrderID").value = orderID;

    var currentName = document.getElementById("custNameID").value;
    // alert(currentName);
    document.getElementById("onameID").value = currentName;

    var waitingTime = Math.floor(Math.random() * 16) + 5;
    document.getElementById("otimeID").value = "Delicious food takes time to cook, Prepping up your order in just "+waitingTime+" mins..!";
    
    var bbValue = document.getElementById('bb').value;
    var hgValue = document.getElementById("hg").value;
    var bwValue = document.getElementById("bw").value;
    var seValue = document.getElementById("se").value;
    var bpValue = document.getElementById("bp").value;
    var coValue = document.getElementById('co').value;
    var chocoValue = document.getElementById("choco").value;
    var corValue = document.getElementById("cor").value;
    var iceteaValue = document.getElementById("it").value;
    var sodaValue = document.getElementById("soda").value;

    var a = [parseInt(bbValue), parseInt(hgValue), parseInt(bwValue), parseInt(seValue), parseInt(bpValue), parseInt(coValue), parseInt(chocoValue), parseInt(corValue), parseInt(iceteaValue), parseInt(sodaValue)];
    var b = [225, 229, 169, 135, 199, 69, 119, 159, 99, 49];
    var result = 0;

    for( var i=0 ; i<10; i++) {
    	if(isNaN(a[i])) {
    		result += 0;

    	}
    	else
    		result += a[i]*b[i];
    }
    //alert(result);

	document.getElementById("obillID").value =  "₹."+result;

    document.getElementById('breadBasket').value = bbValue;
    document.getElementById('honeyGranola').value = hgValue;
    document.getElementById('belgianWaffle').value = bwValue;
    document.getElementById('scrambledEggs').value = seValue;
    // alert("Gooodd"+something);
    document.getElementById('blueBerry').value = bpValue;
    document.getElementById('coff').value = coValue;
    document.getElementById('chocolate').value = chocoValue;
    document.getElementById('corretto').value = corValue;
    document.getElementById('icet').value = iceteaValue;
    document.getElementById('sod').value = sodaValue;
   
}

function fillTable() {
	
	var a = ["bb", "hg", "bw", "se", "bp", "co", "choco", "cor", "it", "soda"];
	for(var i=0; i<10; i++) {
		if(!isNaN(document.getElementById(a[i]).value))
			document.getElementById(a[i]+"tdID").innerHTML = document.getElementById(a[i]).value;
		else
			document.getElementById(a[i]+"tdID").innerHTML = 0;
	}

}

function reserveTable() {
	var rtname = document.getElementById("rtname").value;
	var rtpeople = document.getElementById("rtpeople").value;
	var rtdate = document.getElementById("rtdate").value;
	var rttable = Math.floor(Math.random() * 10) + 1;
	alert("Hey, "+rtname+" you have successfully booked Table No. "+rttable+" for "+rtpeople+" people on "+rtdate+"!\nWe are waiting for you eagerly to come and enjoy our yummylicious delicious food and drinks..!!")
}

</script>

<style>
	body, html {
	  height: 100%;
	  font-family: "Inconsolata", sans-serif;
	}

	.bgimg {
	  background-position: center;
	  background-size: cover;
	  background-image: url("coffeehouses.jpg");
	  min-height: 75%;
	}

	.menu {
	  display: none;
	}

	.w3-col.s3 {
		width: 20%;
	}

	table {

	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 7px;
	  
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}

</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
      <a href="#cart" class="w3-button w3-block w3-black">YOUR CART</a>   <!--Div banana baaki hai-->
    </div>
    <div class="w3-col s3">
      <a href="#orders" class="w3-button w3-block w3-black">YOUR ORDERS</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">WHERE TO FIND US</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Open from 8am to 7pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">the<br>Coffee Code</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">17 Adr street, 069</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CAFE</span></h5>
    <p>The Cafe was founded in India by Mr. Ahuja in 1999, he started the café chain when he incorporated Coffee Day Global which is the parent of the Coffee Day chain. The first CoCo outlet was set up on March 22, 1999, at Brigade Road, Bengaluru, Karnataka. It rapidly expanded across various cities in India adding more stores with more than 1000 cafés open across the nation by 2011. As of 2018, the company had 1,722 café outlets in over 200 cities of India.</p>
    <p>In addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
      <p>Chef, Coffeeist and Owner: Aakash Ahuja</p>
    </div>
    <img src="coffeeshop.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Opening hours:</strong> everyday from 8am to 7pm.</p>
    <p><strong>Address:</strong> 17 Adr street, 069, India</p>
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Eat</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Drink</div>
      </a>

    </div>

	<form action="placeOrder.php"  method="post" target="_blank">
	    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
	    	<h5>Bread Basket<span class="w3-right w3-tag w3-black w3-round" id="bb"  onclick="printQuantity('bb')"> ₹225 </span> </h5>
	      	<p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins<span class="w3-right w3-tag w3-dark-grey w3-round" onclick="decrementValue('bb')">-</span><span class="w3-right w3-tag w3-dark-grey w3-round" id="bbspan" > 0</span><span class="w3-right w3-tag w3-dark-grey w3-round" onclick="incrementValue('bb')">+</span></p><br>
	      	<input type="hidden" name="breadBasket" id = "breadBasket">
	    
	      	<h5>Honey Almond Granola with Fruits<span class="w3-right w3-tag w3-black w3-round" id="hg" onclick="printQuantity('hg')"> ₹299 </span> </h5>
	      	<p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="decrementValue('hg')">-</span> <span class="w3-right w3-tag w3-dark-grey w3-round" id="hgspan">0</span> <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="incrementValue('hg')">+</span></p><br>
	      	<input type="hidden" name="honeyGranola" id="honeyGranola">
	    
	      	<h5>Belgian Waffle <span class="w3-right w3-tag w3-black w3-round" id="bw" onclick="printQuantity('bw')"> ₹169 </span> </h5>
	      	<p class="w3-text-grey">Vanilla flavored batter with malted flour<span class="w3-right w3-tag w3-dark-grey w3-round" onclick="decrementValue('bw')">-</span><span class="w3-right w3-tag w3-dark-grey w3-round" id="bwspan">0</span><span class="w3-right w3-tag w3-dark-grey w3-round" onclick="incrementValue('bw')">+</span></p><br>
	      	<input type="hidden" name="belgianWaffle" id="belgianWaffle">
	    
	      	<h5>Scrambled eggs<span class="w3-right w3-tag w3-black w3-round" id="se" onclick="printQuantity('se')"> ₹135 </span> </h5>
	      	<p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic with green onions <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="decrementValue('se')">-</span> <span class="w3-right w3-tag w3-dark-grey w3-round" id="sespan">0</span> <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="incrementValue('se')">+</span></p><br>
	      	<input type="hidden" name="scrambledEggs" id="scrambledEggs">
	    
	      	<h5>Blueberry Pancakes <span class="w3-right w3-tag w3-black w3-round" id="bp" onclick="printQuantity('bp')"> ₹199 </span></h5>
	      	<p class="w3-text-grey">With syrup, butter and lots of berries <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="decrementValue('bp')">-</span>  <span class="w3-right w3-tag w3-dark-grey w3-round" id="bpspan">0</span>  <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="incrementValue('bp')">+</span></p><br>
	      	<input type="hidden" name="blueBerry" id="blueBerry">

	      	<input type="hidden" name="OrderNum" id="OrderID" >
	      	<!-- <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Your Name" required name="custName" id="custNameID"></p>
	      	<center><input type="submit" name="placeEateryOrderBtn" value="Place Order" class="w3-button w3-black" onclick="populateYourOrders();"></center> -->
	    </div>   
	    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
	    	<h5>Coffee<span class="w3-right w3-tag w3-black w3-round" id="co" onclick="printQuantity('co')"> ₹69 </span> </h5>
	      	<p class="w3-text-grey">Regular coffee <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="decrementValue('co')">-</span>  <span class="w3-right w3-tag w3-dark-grey w3-round" id="cospan">0</span>  <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="incrementValue('co')">+</span></p><br>
	      	<input type="hidden" name="coff" id = "coff">
	    
	      	<h5>Chocolato <span class="w3-right w3-tag w3-black w3-round" id="choco" onclick="printQuantity('choco')"> ₹119 </span> </h5>
	      	<p class="w3-text-grey">Chocolate espresso with milk <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="decrementValue('choco')">-</span>  <span class="w3-right w3-tag w3-dark-grey w3-round" id="chocospan">0</span> <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="incrementValue('choco')">+</span></p><br>
	      	<input type="hidden" name="chocolate" id = "chocolate">
	    
	      	<h5>Corretto <span class="w3-right w3-tag w3-black w3-round" id="cor" onclick="printQuantity('cor')"> ₹159 </span> </h5>
	      	<p class="w3-text-grey">Whiskey and coffee <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="decrementValue('cor')">-</span>  <span class="w3-right w3-tag w3-dark-grey w3-round" id="corspan">0</span> <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="incrementValue('cor')">+</span></p><br>
	      	<input type="hidden" name="corretto" id = "corretto">
	    
	      	<h5>Iced tea <span class="w3-right w3-tag w3-black w3-round" id="it" onclick="printQuantity('it')"> ₹99 </span> </h5>
	      	<p class="w3-text-grey">Hot tea, except not hot <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="decrementValue('it')">-</span>  <span class="w3-right w3-tag w3-dark-grey w3-round" id="itspan">0</span> <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="incrementValue('it')">+</span></p><br>
	      	<input type="hidden" name="icet" id = "icet">
	    
	      	<h5>Soda <span class="w3-right w3-tag w3-black w3-round" id="soda" onclick="printQuantity('soda')"> ₹49 </span> </h5>
	      	<p class="w3-text-grey">Coke, Sprite, Fanta, etc. <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="decrementValue('soda')">-</span>  <span class="w3-right w3-tag w3-dark-grey w3-round" id="sodaspan">0</span> <span class="w3-right w3-tag w3-dark-grey w3-round" onclick="incrementValue('soda')">+</span></p><br>
	      	<input type="hidden" name="sod" id = "sod">

	      	<!-- <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Your Name" required name="custName"></p>
	      	<center><button class="w3-button w3-black">Place Order</button></center> -->
	    </div> 

	    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Your Name" required name="custName" id="custNameID"></p>
	    <center>
	    	<input type="submit" name="placeEateryOrderBtn" value="Place Order" class="w3-button w3-black" onclick="populateYourOrders(); fillTable();">
	    </center>

	</form>

    <img src="coffeehouse2.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<!-- Cart Container -->
<div class="w3-container" id="cart">
	<div class="w3-content" style="max-width:700px">
 
		<h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide" >YOUR CART</span></h5>
	  
		<table class="w3-center">
			<tr>
			    <th><center>Eateries</center></th>
			    <th><center>Quantity</center></th>
			    <th><center>Drinks</center></th>
			    <th><center>Quantity</center></th>
	  		</tr>
	  	<tr>
		    <td>Bread Basket</td>
		    <td id="bbtdID"> </td>
		    <td>Regular Coffee</td>
		    <td id="cotdID"></td>
	  	</tr>
	  	<tr>
		    <td>Honey Almond Granula</td>
		    <td id="hgtdID"></td>
		    <td  >Chocolato</td>
		    <td id="chocotdID"></td>
	  	</tr>
	  	<tr>
		    <td>Belgian Waffle</td>
		    <td id="bwtdID"></td>
		    <td>Corretto</td>
		    <td id="cortdID"></td>
	  	</tr>
	  	<tr>
		    <td>Scrambled Eggs</td>
		    <td id="setdID"></td>
		    <td>Iced Tea</td>
		    <td id="ittdID"></td>
	  	</tr>
	  	<tr>
		    <td>Blueberry Pancakes</td>
		    <td id="bptdID"></td>
		    <td>Soda</td>
		    <td id="sodatdID"></td>
	  	</tr>
		</table>
	    
	</div>
</div>


<!-- Orders Container -->
<div class="w3-container" id="orders" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">HAVE A LOOK AT YOUR ORDERS</span></h5>
    <p>We are busy prepping your order.. Till then check your order's status !!!</p>
    <!--<img src="map.jpg" class="w3-image" style="width:100%">
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>-->
    <form action="yourOrders.php" target="_blank" >
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Enter your order number" required name="orderNum" id="oNumID" readonly><script type="text/javascript">echo document.getElementById("oNumID")</script></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="oname" id="onameID" readonly><script type="text/javascript">echo document.getElementById("custNameID")</script></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Just 10 mins and your order will be served.." required name="otime" id="otimeID" readonly><script type="text/javascript">echo document.getElementById("otimeID")</script></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Total Amount" required name="obill" id="obillID" readonly><script type="text/javascript">echo document.getElementById("obillID")</script></p>
      <!--<p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>-->
    </form>
  </div>
</div>


<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <p>Find us at some address at some place.</p>
    <img src="mapLocation.jpg" style="width:90%">
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerest criteria of them all, both look and taste.</p>
    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="reserveTable.php" method="post" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Enter your name" required name="name" id="rtname"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="people" id="rtpeople"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00" id="rtdate"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Enter your contact number" required name="contact"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="message"></p>
      <p><button class="w3-button w3-black" type="submit" name="reserveTableBtn" onclick="reserveTable()">RESERVE MY TABLE</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer 
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer> -->

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>