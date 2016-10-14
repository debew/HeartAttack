		$('.banner').bxSlider({
				auto: true,
				pause: 5000,
				speed: 1000,
			});

	function toggle(){
        var div = document.getElementById("menu-login");
        if (div.style.display =='block'){
         div.style.display = 'none';
           		 return;
            }
            div.style.display ='block';
        }