	$(function(){
		
		var content_bool=false;
		var textarea_bool=false;
		var status=0;
		$('.notebook').click(function(e){
			$('.notebook_edit').show();
			e.preventDefault();
					$.ajax({
						type: "POST",
			            		 url: "/zwj/controller/admin/notebook_select.php",
			            		 data: {content:$("#content").val()},
			            		 dataType: "json",
			            		  success: function(data){
			            		  	if(data.status==1){
			            		  		document.getElementById('checkbox').checked=true;
			            		  	}else{
			            		  		document.getElementById('checkbox').checked=false;
			            		  	}
			            		  	$('#content').val(data.content);
			            		
			            		  }
						});

		});
		$('textarea').change(function(){
			

			if($(':checkbox').is(':checked')){
					if($(':checkbox').is(':checked')){
						status=1;
						}else{
							status=0;
					}
				$.ajax({
						type: "POST",
			            		 url: "/zwj/controller/admin/notebook.php",
			            		 data: {content:$("#content").val(),status:status},
			            		 dataType: "text",
			            		  success: function(data){

			            		  	
			            		  }
					});
			}else{
				textarea_bool=true;
			}
			
		})
		$('.img_right').click(function(){

			
			if(content_bool==true){
				
				$('.notebook_edit').hide();
			}else{
				if(textarea_bool==true){
					if($(':checkbox').is(':checked')){
						status=1;
					}else{
						status=0;
					}
					 if(confirm('是否将更改保存到记事本?')==true){
				      		$.ajax({
						type: "POST",
			            		 url: "/zwj/controller/admin/notebook.php",
			            		 data: {content:$("#content").val(),status:status},
			            		 dataType: "text",
			            		  success: function(data){

			            		  	$('.notebook_edit').hide();
			            		  }
						});
				      		
				             }else{
				             	
				              	
				             	$('.notebook_edit').hide();

				        		
			     		  }
				     }else{
				     		if($(':checkbox').is(':checked')){
				     		status=1;
							
						}else{
							status=0;
						}
						$.ajax({
							type: "POST",
				            		 url: "/zwj/controller/admin/notebook.php",
				            		 data: {content:$("#content").val(),status:status},
				            		 dataType: "text",
				            		  success: function(data){

				            		  	
				            		  }
						});
				     }
				     $('.notebook_edit').hide();
				}
				textarea_bool=false;
				content_bool=false;	
			
		});
		$('.img_left').click(function(){
			$('#form1').hide();
			$(this).hide();
			$('.img_left1').show();

		});
		$('.img_left1').click(function(){
			$('#form1').show();
			$(this).hide();
			$('.img_left').show();

		});
		$('#form1').submit(function(e){
			
			e.preventDefault();
		});
		$('.submit').click(function(){
			if($(':checkbox').is(':checked')){
						status=1;
					}else{
						status=0;
					}
			$.ajax({
			type: "POST",
            		 url: "/zwj/controller/admin/notebook.php",
            		 data: {content:$("#content").val(),status:status},
            		 dataType: "text",
            		  success: function(data){
            		  	
            		  }
			});
			content_bool=true;
			textarea_bool=false;
		});
		
		$('.reset').click(function(e){
		      if(confirm('是否清空内容?')){
		      	$('#content').val("");
		      	if($(':checkbox').is(':checked')){
		      		$.ajax({
					type: "POST",
		            		 url: "/zwj/controller/admin/notebook.php",
		            		 data: {content:$("#content").val()},
		            		 dataType: "text",
		            		  success: function(data){
		            		  	
		            		  }
				});
			      	textarea_bool=false;
				content_bool=false;
			}else{
				textarea_bool=true;
				content_bool=false;
			}
		      }else{
		        e.preventDefault();
		      }
		  });
		

	});