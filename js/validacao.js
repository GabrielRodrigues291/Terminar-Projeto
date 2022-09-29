

const form = document.querySelector('form');


form.addEventListener('submit',(form_event)=>{
	form_event.preventDefault();

	var email = document.querySelector('#email').value.length;
	var senha = document.querySelector('#password').value.length;

	var flag = 0;

	if(email <= 0) {
		document.querySelector('.error').style.display = 'flex';
	}

	if(senha <= 0) {
		document.querySelector('.errorsenha').style.display = 'flex';
	}
	if(email <= 0 && senha <= 0) {
		document.querySelector('.error').style.display = 'flex';
		document.querySelector('.errorsenha').style.display = 'flex';
	}


	if(document.querySelector('#email').value.includes('@') == true) {
		document.querySelector('.error').style.display = 'none';
		flag++;
	}

	if(document.querySelector('#password').value.length >= 1) {
		document.querySelector('.errorsenha').style.display = 'none';
		flag++;
	}
	
	if(flag >= 2) {
		form.submit();
	}
})

document.querySelector('#login').addEventListener('click',()=>{
		var senha = document.querySelector('#password').value.length;

		if(email <= 0) {
			document.querySelector('.error').style.display = 'flex';
			
		}

		if(senha <= 0) {
			document.querySelector('.errorsenha').style.display = 'flex';
		}
		
		if(document.querySelector('#email').value.includes('@') == false && email.value.length >= 1) {
			document.querySelector('.error').style.display = 'flex';
			document.querySelector('.error').innerHTML = 'Erro ao Fazer Login Email Invalido!!!...';
			
		}
	})

