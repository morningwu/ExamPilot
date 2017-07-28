<div class="modal-header">
			              					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			              					<h2 id="myModalLabel" align="center">學習報告 (全部) </h2>
			            				</div>
			            				<div class="modal-body">
			              					
				             				<table class="report-table">
				             					<!--<tr>
				             						<td colspan="8"><img src="_assets/img/advertisement.png"></td>
				             					</tr>-->

				             					<tr>
				             						<td align="center" class="header"><span class="font-red">No.</span></td>
				             						<td align="center" class="header"><span class="font-red">日期</span></td>
				             						<td align="center" class="header"><span class="font-red">科目</span></td>
				             						<td align="center" class="header"><span class="font-red">題目類型</span></td>
				             						<td align="center" class="header"><span class="font-red">練習名稱</span></td>
				             						<td align="center" class="header"><span class="font-red">合格?</span></td>
				             						<td align="center" class="header"><span class="font-red">得分</span></td>
				             						<td align="center" class="header"><span class="font-orange">學習點</span></td>
				             					</tr>

				             					<?
				             					$noAnswered =1;
				             					
				             					while($detailExtractedData = mysql_fetch_assoc($report_total)){
				             						
				             						$subjectAnswered		=	$detailExtractedData['subject'];
				             						$learningAreaAnswered	=	$detailExtractedData['learning_area'];
				             						$titleAnswered			=	$detailExtractedData['title'];
				             						$passAndFailAnswered	=	$detailExtractedData['pass_fail'];
				             						$earnedPointsAnswered	=	$detailExtractedData['earned_learning_points'];
				             						$answeredCorrect		=	$detailExtractedData['correct'];
				             						$answeredTotal			=	$detailExtractedData['total'];
				             						$answeredResult			=	$answeredCorrect/$answeredTotal;
				             						$answerResultPercentage	=	round($answeredResult*100);
				             						$timeAnswered			=	$detailExtractedData['Date_of_answered'];

				             						echo 
				             						'<tr>
				             						<td align="center">'  .$noAnswered				.'</td>
				             						<td align="center">'  .$timeAnswered			.'</td>
				             						<td align="center">'  .$subjectAnswered			.'</td>
				             						<td align="center">'  .$learningAreaAnswered	.'</td>
				             						<td align="center">'  .$titleAnswered			.'</td>
				             						<td align="center">';

				             						if($passAndFailAnswered == "pass"){echo '<span class="font-green">'.$passAndFailAnswered.'</span>';}else{echo '<span class="font-red">'.$passAndFailAnswered.'</span>';}

				             						echo '</td>
				             						<td align="center">'.$answerResultPercentage.'</td>
				             						<td align="center">'.$earnedPointsAnswered.'</td>

				             						</tr>';
				             						$noAnswered++;
				             					}

				             					?>
				             				</table>

										</div>
			            				<div class="modal-footer" >
			              					<!--<button class="btn blue-btn" data-dismiss="modal">傳送報告</button>-->
			              					<!--<button class="btn btn-primary">Save changes</button>-->
			            				</div>