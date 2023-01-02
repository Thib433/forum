const form = document.getElementById("reponse")
form.addEventListener('submit', function(e){
	e.preventDefault();
 
	var data = new FormData(this);
 
	var xhr = new XMLHttpRequest();
 
	xhr.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			console.log(this.response);
			var res = this.response;
			if (res.success) {
				console.log("Le message est inscrit !");
			} else {
				alert(res.msg);
			}
		} else if (this.readyState == 4) {
			alert("Une erreur est survenue...");
		}
	};
 
	xhr.open("POST", "../view/article.php", true);
	xhr.responseType = "json";
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send(data);

	return false;

});