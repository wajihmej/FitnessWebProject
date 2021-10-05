$(function()
{
	$("#form-horizontal").validate(
		{

		rules: {
			sujet:  {
				required: true,
				minlength: 2
			},
			description: {
				required: true,
				minlength: 2
			},
		},

		messages: {
			nom: {
				required: " Nom obligatoire.",
				minlength: " Le nom doit contenir au moins 2 caractères",
			},
			prenom: {
				required: " Prenom obligatoire.",
				minlength: " Le prenom doit contenir au moins 2 caractères",
			},
		}
	});
});