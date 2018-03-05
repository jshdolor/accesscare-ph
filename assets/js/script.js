$(document).ready(function(){
	if(window.location.href.indexOf('apply') > -1){
		prepareForm();
		populateWithDummy();

		$('.btn-clone').click(function(){
			var toCloneEl = $(this).data('clone');
			clone(toCloneEl);
		})

		$('body').on('click','.btn-remove',function(e){
			$(this).parent().parent().remove();
		})
	}
});

function prepareForm(){
	$('input:not("[type=submit]"):not("[type=checkbox]"),textarea,select').each(function(){
		if(!$(this).parent().hasClass('optional')){
			$(this).prop('required',true);
		}
	});

	$('.form-date').datepicker();
}

function clone(el){
	$el = $(el);
	$el.clone().insertAfter(el+":last");
	populateWithDummy();
}

function createDummy(){
	return Math.random().toString(36).substring(7);
}

function populateWithDummy(){
	// $('input:not("[type=submit]"),textarea').each(function(){
	// 	$(this).val(createDummy());
	// })

	// $('select').each(function(){
	// 	var value = $(this).find('option').eq(1).html()
	// 	$(this).val(value);
	// });
}