$(function() {
	$('form').submit(function(e) {
		e.preventDefault();

		$('.coRegErrors').hide();

		$('.coRegWrapper').removeClass('error');

		var required = ['firstName', 'lastName', 'emailAddress', 'password', 'companyName'];

		for(var i in required)
		{
			// console.log('Checking '+required[i]);

			var $field = $('#' + required[i]);

			if($field.val() == "")
			{
				// console.log(required[i] + ' is empty');
				$field.css('background','#FCC');
				return false;
			}

			// console.log(required[i] + ' is filled');
		}
				
		
		if($('#coreg').is(':checked'))
		{
			$form = $(this);

			$.ajax('coreg.php', {
				type: 'GET',
				data: $('form').serialize(),
				dataType: 'json',
				context: $form,
				complete: function(data)
				{
					var resp = data.responseJSON;

					if(resp.code != "200")
					{
						$('.coRegWrapper').addClass('error');

						for(var i in resp)
						{
							$('.coRegErrors').not(':eq(0)').remove().end().append('<li><b>'+i+':</b> '+resp[i]+'</li>').show();
						}

						return false;
					}

					alert('Your account at eEndorsements has been created');

					// No longer handle submit event on form, note context option above for "this"
					this.off('submit');

					this.submit();
				}
			});
		}
	});
});
