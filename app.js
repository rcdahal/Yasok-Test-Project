function fetchData(){
	fetch("http://localhost/JSON/data.json")
	.then(response =>{
		if(!response.ok){
			throw Error("Error");
		}
		return response.json();
	})
	.then(data =>{
		console.log(data);
		const html=data
		.map(user =>{
			if(user.status==2){
				 text="NEW COMMENT";
			}else if(user.status==1){
				 text="NEW ENTRY";
			}else{
				 text="";
			}
			return `
			<div class="member-section" style="margin-top:20px;">
			<span> ${text} </span>
			<span> ${user.image} </span>
			<div class="output"><a href="#"></a></div>
			<div style="font-size:18px;font-weight:bold;">${user.title}</div>
			<div class="profile-name">
				<div style="font-size:12px;">by 
					<span class="name"><a href="#"  target="_blank">${user.name} </a></span>l
					<span>February 10,2022 </span>l
					<span style="color:green;">Subscribed </span>
				</div>
				<div style="font-size:12px;"> 
					<span>From Topic Box:</span>
					<span><a href="#"  target="_blank">My Faviorate Movie </a> </span>
				</div>
			</div>
			</div>
			`;
		})
		.join("");
		document.querySelector("#app").insertAdjacentHTML("afterbegin", html);
	})
	.catch(error =>{
		console.log(error);
	});
}
fetchData();