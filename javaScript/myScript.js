var myFunction = function() {
	document.getElementById("demo").innerHTML = "paragraph changed.";

	var y =prompt("please input a one digit number");

	var x = Math.floor((Math.random()*9)+1);

	if (x<y){
		window.alert("You Win!");

	}
	else if (x>y){
		window.alert("You lose");

	}
	else{
		window.alert("It was a tie");
	}


}
 var myFunction2 = function(){
 	document.getElementById("rest").className = "hover";
 }
 var myFunction3 = function(){
 	document.getElementById("rest").className = "newbutton";
 }

 var non_match = function(){
 	document.getElementById("rest").value = null;
 }

 var go_ahead = function(){
 	document.getElementById("rest").classname = "newbutton";
 }

 var match = function(){
 	var x = document.getElementById("test").innerHTML;
 	var y = document.getElementById("test1").innerHTML;

 	if (x===y){
 		go_ahead();

 	}
 	else{
 		document.getElementById("rest").classname = "hover";
 		non_match();
 	}

 }

