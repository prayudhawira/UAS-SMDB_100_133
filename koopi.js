$(document).ready(function(){
			$(".hide1").click(function() {
				$("#satu").fadeOut("slow");
			});
			
			$(".show1").dblclick(function() {
				$("#satu").show("slow");
			});
			
			$(".hide2").click(function() {
				$("#dua").fadeOut("slow");
			});
			
			$(".show2").dblclick(function() {
				$("#dua").show("slow");
			});
			
			$(".hide3").click(function() {
				$("#tiga").fadeOut("slow");
			});
			
			$(".show3").dblclick(function() {
				$("#tiga").show("slow");
			});
			
			$(".hide4").click(function() {
				$("#empat").fadeOut("slow");
			});
			
			$(".show4").dblclick(function() {
				$("#empat").show("slow");
			});
			
			$(".hide5").click(function() {
				$("#lima").fadeOut("slow");
			});
			
			$(".show5").dblclick(function() {
				$("#lima").show("slow");
			});
			
			$(".hide6").click(function() {
				$("#enam").fadeOut("slow");
			});
			
			$(".show6").dblclick(function() {
				$("#enam").show("slow");
			});
			
			$(".hide7").click(function() {
				$("#tujuh").fadeOut("slow");
			});
			
			$(".show7").dblclick(function() {
				$("#tujuh").show("slow");
			});
			
			$("#tips").hover (function(){
				$(this).width(1.25*$(this).width());
				$(this).heigth(1.25*$(this).heigth());
			}, function(){
				$(this).width(0.8*$(this).width());
				$(this).heigth(0.8*$(this).heigth());
			});
		});