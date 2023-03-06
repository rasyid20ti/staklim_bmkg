const form = document.querySelector('contact_form')
	function sendMsg(e) {
		e.preventDefault();

		const name = document.querySelector('name'),
			email = document.querySelector('email'),
			subject = document.querySelector('subject'),
			msg = document.querySelector('msg');

		//function send
		Email.send({
			SecureToken: "9a41b247-7150-40aa-9bc4-12dc749bcacf",
			Host: "smtp.gmail.com",
			Username: "caledwich69@gmail.com",
			Password: "10FA6D27D6E3656459E8551A55B403F276B0",
			To: 'yuda19ti@mahasiswa.pcr.ac.id',
			From: document.getElementById("email").value,
			Subject: document.getElementById("subject").value,
			Body: "Name" + document.getElementById("name").value +
				"<br>Email" + document.getElementById("email").value +
				"<br>Subject" + document.getElementById("subject").value +
				"<br>Message" + document.getElementById("message").value
		}).then(
			message => alert('Message Sent Succesfully')
		);
	}

	form.addEventListener('submit',sendMsg);
