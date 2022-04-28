
let form = document.formulaire;
form.addEventListener("submit", function(e){
	e.preventDefault();
	console.log(e);
	if(form.slug.value.length>0 && form.title.value.length>0){
		console.log("ok");
		let formulaire = new FormData();
		formulaire.append("slug", this.slug.value);
		formulaire.append("authors_id", this.authors_id.value);
		formulaire.append("title", this.title.value);
		formulaire.append("_token", this._token.value);

		fetch("http://localhost:8000/add_article", {
			method: "POST",
			body: formulaire
		}).then(function(response){
			return response.text();
		}).then(function(data){
			console.log(data);
		})
	}
})