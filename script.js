$(document).ready(function(){
		
			$("#sub").click(function(){
				$("#query").removeClass("borderRed");
				$("#lcount").removeClass("borderRed");
				$("#query").attr("placeholder", "Ask Your Query here ?");
				var query = document.getElementById("query").value;
				if(query=="")
				{
					$("#query").attr("placeholder", "Ask Your Query here ? (Mandatory)");
					$("#query").addClass("borderRed");
					console.log("query missing");
					return;
				}
				var lcount= document.getElementById("lcount").value;
				if(lcount!=""){
						if(!(lcount>=1&&lcount<=9))
						{
						$("#lcount").addClass("borderRed");
		//				console.log("query missing");
						return;
						}
				}
				// Display the loader
				$(".loader").fadeIn(200);
									
					$.ajax({
					"url":"http://nikunj.freakengineers.com/agro-api/index.php?query="+query+(lcount!=""?"&lcount="+lcount:""),
					"success":function(data){
					var len = data['eng']['summarized__smart'].length;
					
					// Auto Summarization
					var _html = "<ol>", _html_hindi = "<ol>";
					for(var i=0; i<len; i++)
					{
						_html += "<br /><li>" +data['eng']['summarized__smart'][i] +"</li>";
						_html_hindi += "<br /><li>" +data['hin']['summarized__smart'][i] +"</li>";
					}
					_html += "</ol>";					
					_html_hindi += "</ol>";
					
					// User based summarized
					if(data.eng.hasOwnProperty('summarized__'+lcount+'_lines'))
					{
						var len1 = data['eng']['summarized__'+lcount+'_lines'].length;
						var _html2 = "<ol>", _html2_hindi = "<ol>";
						for(var i=0; i<len1; i++)
						{
							_html2 += "<br /><li>" +data['eng']['summarized__'+lcount+'_lines'][i] +"</li>";
							_html2_hindi += "<br /><li>" +data['hin']['summarized__'+lcount+'_lines'][i] +"</li>";
						}
						_html2 += "</ol>";					
						_html2_hindi += "</ol>";
						$("#conditionalLcount").show();
					}
					else $("#conditionalLcount").hide();
					
					//video display
					var videohtml = "<iframe width=\"880\" height=\"420\" src='"+data['vid']['iframe_URL']+"' frameborder=\"0\" allowfullscreen></iframe>";
					$(".video").html(videohtml);
					
					$(".answer").html(_html);
					$(".answerHindi").html(_html_hindi);
					$(".showQuery").html(query);
			
					
					$(".answer1").html(_html2);
					$(".answer1Hindi").html(_html2_hindi);
					$(".showLcount").html("<br />Answer in "+lcount+" lines :");
					$(".parentContainer").slideUp(300);
					var _html_footer = "";
					  _html_footer = '<div class="col-lg-4 footerIn black"><a id="developers" target="_blank" class="black" href="'+data.meta.devRef+'">Developers</a></div>'
					  +'<div class="col-lg-4 footerIn black"><a id="statistics" class="black" target="_blank" href="'+data.meta.graphRef+'">Statistics</a></div>'
					  +'<div class="col-lg-4 footerIn black"><a id="behind_the_scene" target="_blank" class="black" href="'+data.meta.rawRef+'">Behind the Scene</a></div>';
					  $(".footer").html(_html_footer);
					setTimeout(function(){
						$(".childContainer").slideDown(300);
					}, 300);
					}
					});
			});
			
			
			$(".close").click(function(){
			$(".loader").fadeOut(0);
			$(".childContainer").slideUp(300);
			setTimeout(function(){
				$(".parentContainer").slideDown(300);
				},300
				);
			});
			$(document).on("click", "#myTab li a",function (e) {
			  e.preventDefault();
			  console.log(1);
			  $(this).tab('show');
			});
			
		});
		
