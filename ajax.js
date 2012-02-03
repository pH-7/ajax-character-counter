$("#characters").keyup(function(){countCharacters($(this).val())});function countCharacters(a){$.post("ajax.php",{characters:a},function(a){$("#nb_characters").html(a)})};
