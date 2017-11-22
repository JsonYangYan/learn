<?php
/**
 * Created by PhpStorm.
 * User: yan
 * Date: 2017-8-28
 * Time: 10:23
 */
namespace Home\Service;
use Think\Model;
class ScoreService extends Model{
    /**
     * 需要统计所有体系后，算法平均分，且需要算出每个的增长率，计算给个增长率 题目编号：167
     * @param $time
     * @return float
     */
    public function getChangeAverageBlankRelateAnswer_167($time){
        $arrSchoolId = D("Tschoolinfor","Model")->getAllSchoolIdByUserTime($time);
        $sum = 0;
		for ($i=0; $i < count($arrSchoolId); $i++) {
            $f_167 = getBlankTextBySchoolId(167, $arrSchoolId[$i]);
			$f_169 = getBlankTextBySchoolId(169, $arrSchoolId[$i]);
			if ($f_167 != 0) {
                $f_167 = ($f_169 - $f_167) / $f_167; // 信息化经费增长率
            }
			$sum = $sum + $f_167;
		}
		$f = $sum / $i;
		return $f;
    }

    /**
     * 需要统计所有体系后，算法平均分，且需要算出每个所占的比例，计算每个 题目所占的比例是多少 题目编号：170,171,172,173,174
     * @param $queId
     * @param $currentTime
     * @return float
     */
    public function getChangeAverageBlankRelateAnswer($queId,$currentTime){
        $arrSchoolId = D("Tschoolinfor","Model")->getAllSchoolIdByUserTime($currentTime);
        $sum = 0;
		for ($i=0; $i < count($arrSchoolId); $i++) {
            $f_169 = getBlankTextBySchoolId(169, $arrSchoolId[$i]);
			$f_1 = getBlankTextBySchoolId(queId, $arrSchoolId[$i]);
			if ($f_169 != 0) {
                $f_1 = $f_1 / $f_169;
            }
			$sum = $sum + $f_1;
		}

        $f = $sum / $i;
		return $f;
    }

    /**
     * 删除本月份绩效
     * @param $currentTime
     */
    public function delCurrentScore($currentTime){
        D("Tquescore","Model")->delQueScore($currentTime);
        D("Tschoolindexscore","Model")->delSchoolScore($currentTime);
        D("Tareascore","Model")->delAreanScore($currentTime);
        D("Tsecondareascore","Model")->delSecondAreaScoreByTime($currentTime);
        D("Tthirdareascore","Model")->delThirdAreaScoreByTime($currentTime);
    }

    /**
     * 计算标准分
     * @param $currentTime
     */
    public function standardScore($currentTime){
        $arrQueId = D("Tblanktrueanswer","Model")->getBlankQueId();
        // 计算需要计算的标准分数 工作做完
        for ($i = 0; $i < count($arrQueId); $i++) {
            if ($arrQueId[$i] == 167) {
            $f = getChangeAverageBlankRelateAnswer_167($currentTime); // 167中存储平均增长率
            D("Tblanktrueanswer","Model")->updateBlankTrueAnswer(167,$f);
            }
            $arrqueId1[] = array(124,125,126,127,128,129,130,131,132,133,145,158,183,184);
            $arrqueId2[] = array(170,171,172,173,174);
            $schoolIds = D("Tschoolinfor","Model")->getAllSchoolIdsStringByUserTime($currentTime);
            if (in_array($arrQueId[$i],$arrqueId1)) {
                $f = D("Tblankanswer","Model")->getAvgBlabkByqueId($arrQueId[$i],$schoolIds,$currentTime);// 计算平均值
                D("Tblanktrueanswer","Model")->updateBlankTrueAnswer($arrQueId[$i],$f);
            }
            if (in_array($arrQueId[$i],$arrqueId2)) {
                $f = getChangeAverageBlankRelateAnswer($arrQueId[$i],$currentTime);
                D("Tblanktrueanswer","Model")->updateBlankTrueAnswer($arrQueId[$i],$f);
            }
        }
    }

	// 开始计算分数
	public function setScore($schoolId,$time){
        /*$f_1 = 0;
        $f_2 = 0;
        $f_3 = 0;
        $f_4 = 0;*/
        $sum = 0;
       /* $sum_1 = 0;
        $sum_2 = 0;
        $sum_3 = 0;*/
		// //////////////////////开始统计分数
		$list1_firstIndexPercent = D("Tfirstindex","Model")->getFirstIndexPercent();
		for ($i = 0; $i < 5; $i++) {
            $sum_1 = 0;
			$list2_secondIndexId = D("Tsecondindex","Model")->getSecondIndexId($i+1); // 一级指标对应的二级指标的id
			$list2_secondIndexPercent = D("Tsecondindex","Model")->getSecondIndexPercent($i + 1); // 二级指标权重

			for ($j = 0; $j < count($list2_secondIndexId); $j++) {
                $sum_2 = 0;
				$list3_thirdIndexId =  D("Tthirdindex","Model")->getThirdIndexId($list2_secondIndexId[$j]); // 二级指标对应的三级指标
				$list3_thirdIndexPercent =  D("Tthirdindex","Model")->getThirdIndexPercent($list2_secondIndexId[$j]); // 三级指标权重

				for ($k = 0; $k < count($list3_thirdIndexId); $k++) { // 每存主键 都连续

                    $sum_choice = 0; $sum_blank = 0;
					$sum_3 = 0;

					$list4_choiceNumber = D("Tchoicetrueanswer","Model")->getChoiceQueIdByThirdIndexId($list3_thirdIndexId[$k]); // 三级标题对用的 题目号数组
					$list5_blankNumber = D("Tblanktrueanswer","Model")->getBlankQueIdByThirdIndexId($list3_thirdIndexId[$k]); // 三级标题对用的 填空题数组

                    // 计算出填空题部分
					for ($x = 0; $x < count($list5_blankNumber); $x++) {

                        $f_1 = D("Tblanktrueanswer","Model")->getBlankAnswerContentByQueId($list5_blankNumber[$x]); // 取出标准答案
                        $f_2 = D("Tblanktrueanswer","Model")->getBlankAnswerPercentByQueId($list5_blankNumber[$x]); // 取出百分比
                        $sum_fig = 0;

						if ($list5_blankNumber[$x] == 167) {
                            $f_169 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(169,$schoolId);
							$f_167 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(167,$schoolId);
                            $s_167 = 0;
							if ($f_167 != 0) {
                                $s_167 = ($f_169 - $f_167) / $f_167;
                            }
							if ($f_1 != 0) {
                                $sum_fig = ($s_167 / $f_1) * 60;
                                if ($sum_fig > 100) {
                                    $sum_fig = 100;
                                }
                                $sum_blank = $sum_blank + $sum_fig * $f_2;
                            }
						}

                        else if ($list5_blankNumber[$x] == 169) {
                            $f_169 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(169,$schoolId);
                            $f_168 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(168,$schoolId);
                            $s_169 = 0;
							if ($f_168 != 0) {
                                $s_169 = $f_169 / $f_168;
                            }
							if ($f_1 != 0) {
                                $sum_fig = ($s_169 / $f_1) * 60;
                                if ($sum_fig > 100) {
                                    $sum_fig = 100;
                                }
                                $sum_blank = $sum_blank + $sum_fig * $f_2;
                            }

						}

                        else if ($list5_blankNumber[$x] == 170
                            || $list5_blankNumber[$x] == 171
                            || $list5_blankNumber[$x] == 172
                            || $list5_blankNumber[$x] == 173
                            || $list5_blankNumber[$x] == 174) {
                            $f_3 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(169,$schoolId);
                            $f_4 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId($list5_blankNumber[$x],$schoolId);
                            if (($f_3 != 0) && ($f_1 != 0)) {
                                $sum_fig = ($f_4 / $f_3) / $f_1 * 60;
                                if ($sum_fig > 100) {
                                    $sum_fig = 100;
                                }
                                $sum_blank = $sum_blank + $sum_fig * $f_2;
                            }

                        }

                        else if ($list5_blankNumber[$x] == 176
                            || $list5_blankNumber[$x] == 177) {
                            $f_3 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(175,$schoolId);
                            $f_4 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId($list5_blankNumber[$x],$schoolId);
                            if (($f_3 != 0) && ($f_1 != 0)) {
                                $sum_fig = ($f_4 / $f_3) / $f_1 * 60;
                                if ($sum_fig > 100) {
                                    $sum_fig = 100;
                                }

                                $sum_blank = $sum_blank + $sum_fig * $f_2;
                            }
                        }

                        else if ($list5_blankNumber[$x] == 179
                            || $list5_blankNumber[$x] == 180
                            || $list5_blankNumber[$x] == 181) {

                            $f_3 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(178,$schoolId);
                            $f_4 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId($list5_blankNumber[$x],$schoolId);
                            if (($f_3 != 0) && ($f_1 != 0)) {
                                $sum_fig = ($f_4 / $f_3) / $f_1 * 60;
                                if ($sum_fig > 100) {
                                    $sum_fig = 100;
                                }
                                $sum_blank = $sum_blank + $sum_fig * $f_2;
                            }
                        } else if ($list5_blankNumber[$x] == 138
                            || $list5_blankNumber[$x] == 139
                            || $list5_blankNumber[$x] == 140) {
                            $f_138 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(138,$schoolId);
							$f_139 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(139,$schoolId);
                            $f_140 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(140,$schoolId);
							if ($list5_blankNumber[$x] == 138) {
                                $s_138 = 0;
								if (($f_138 + $f_139 + $f_140) != 0) {
                                    $s_138 = $f_138 / ($f_138 + $f_139 + $f_140);
                                }
								if ($f_1 != 0) {
                                    $sum_fig = ($s_138 / $f_1) * 60;
                                    if ($sum_fig > 100) {
                                        $sum_fig = 100;
                                    }
                                    $sum_blank = $sum_blank + $sum_fig * $f_2;

                                }
							}
							if ($list5_blankNumber[$x] == 139) {
                                $s_139 = 0;
								if (( $f_138 +  $f_139 +  $f_140) != 0) {
                                    $s_139 =  $f_139 / ( $f_138 +  $f_139 +  $f_140);
                                }
								if ( $f_1 != 0) {
                                    $sum_fig = ( $s_139 /  $f_1) * 60;
                                    if ( $sum_fig > 100) {
                                        $sum_fig = 100;
                                    }
                                    $sum_blank =  $sum_blank +  $sum_fig * $f_2;
                                }
							}
							if ($list5_blankNumber[$x] == 140) {
                                $s_140 = 0;
								if (( $f_138 +  $f_139 +  $f_140) != 0) {
                                    $s_140 =  $f_140 / ( $f_138 +  $f_139 +  $f_140);
                                }
								if ( $f_1 != 0) {
                                    $sum_fig = ( $s_140 /  $f_1) * 60;
                                    if ( $sum_fig > 100) {
                                        $sum_fig = 100;
                                    }
                                    $sum_blank =  $sum_blank +  $sum_fig *  $f_2;
                                }
							}
						}

                        else if ($list5_blankNumber[$x] == 135
                            || $list5_blankNumber[$x] == 136
                            || $list5_blankNumber[$x] == 137) {
                            $f_135 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(135,$schoolId);
                            $f_136 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(136,$schoolId);
                            $f_137 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId(137,$schoolId);
							if ($list5_blankNumber[$x] == 135) {
                                $s_135 = 0;
								if (($f_135 + $f_136 + $f_137) != 0) {
                                    $s_135 = $f_135 / ($f_135 + $f_136 + $f_137);
                                }
								if ($f_1 != 0) {
                                    $sum_fig = ($s_135 / $f_1) * 60;
                                    if ($sum_fig > 100) {
                                        $sum_fig = 100;
                                    }
                                    $sum_blank = $sum_blank + $sum_fig * $f_2;
                                }
							}
							if ($list5_blankNumber[$x] == 136) {
                                $s_136 = 0;
								if (($f_135 + $f_136 + $f_137) != 0) {
                                    $s_136 = $f_136 / ($f_135 + $f_136 + $f_137);
                                }
								if ($f_1 != 0) {
                                    $sum_fig = ($s_136 / $f_1) * 60;
                                    if ($sum_fig > 100) {
                                        $sum_fig = 100;
                                    }
                                    $sum_blank = $sum_blank + $sum_fig * $f_2;
                                }
							}
							if ($list5_blankNumber[$x] == 137) {
                                $s_137 = 0;
								if (($f_135 + $f_136 + $f_137) != 0) {
                                    $s_137 = $f_137 / ($f_135 + $f_136 + $f_137);
                                }
								if ($f_1 != 0) {
                                    $sum_fig = ($s_137 / $f_1) * 60;
                                    if ($sum_fig > 100) {
                                        $sum_fig = 100;
                                    }
                                    $sum_blank = $sum_blank + $sum_fig * $f_2;
                                }
							}
						} else if ($list5_blankNumber[$x] == 129) {
                            $f_3 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId($list5_blankNumber[$x],$schoolId);
                            $sum_fig = 100;
                            $sum_blank = $sum_blank + 100 * $f_2;
                        } else {
                            $f_3 = D("Tblankanswer","Model")->getBlankTextBySchoolIdQueId($list5_blankNumber[$x],$schoolId);
                            if ($f_1 != 0) {
                                $sum_fig = ($f_3 / $f_1) * 60;
                                if ($sum_fig > 100) {
                                    $sum_fig = 100;
                                }
                                $sum_blank = $sum_blank + $sum_fig * $f_2;
                            }
                        }
                        D("Tquescore","Model")->insertQueScore($list5_blankNumber[$x],$schoolId, $sum_fig, $time);
					}

					// /选择题部分计算
					for ($y = 0; $y < count($list4_choiceNumber); $y++) {

                        $sum_fig = 0;
						$f_2 = D("Tchoicetrueanswer","Model")->getChoiceAnswerPercentByQueId($list4_choiceNumber[$y]);

						if ($list4_choiceNumber[$y] == 160) {

							$list_choiceId = D("Tchoiceanswer","Model")->getChoiceIdByQueIdSchId(160,$schoolId);

							for ($m = 0; $m < count($list_choiceId); $m++) {
                                if ($list_choiceId[$m] != 295) {
                                    if ($list_choiceId[$m] == 296) {
                                        $sum_choice = $sum_choice + 100 * $f_2;
                                        $sum_fig = 100;
                                    } else if ($list_choiceId[$m] == 297) {
                                        $sum_choice = $sum_choice + 75 * $f_2;
                                        $sum_fig = 75;
                                    } else if ($list_choiceId[$m] == 298) {
                                        $sum_choice = $sum_choice + 50 * $f_2;
                                        $sum_fig = 50;
                                    } else {
                                        $sum_choice = $sum_choice + 25 * $f_2;
                                        $sum_fig = 25;
                                    }
                                }

                            }
						} else if ($list4_choiceNumber[$y] == 164) {
							$list_choiceId = D("Tchoiceanswer","Model")->getChoiceIdByQueIdSchId(164,$schoolId);
							for ($m = 0; $m < count($list_choiceId); $m++) {
                                if ($list_choiceId[$m] == 326) {
                                    $sum_choice = $sum_choice + 100 * $f_2;
                                    $sum_fig = 100;
                                }
                                if ($list_choiceId[$m] == 327) {
                                    $sum_choice = $sum_choice + 50 * $f_2;
                                    $sum_fig = 50;
                                }
                            }
						} else if ($list4_choiceNumber[$y] == 152
                            || $list4_choiceNumber[$y] == 153
                            || $list4_choiceNumber[$y] == 154
                            || $list4_choiceNumber[$y] == 155) {
                            if ($list4_choiceNumber[$y] == 152) {
                                $list_choiceId = D("Tchoiceanswer","Model")->getChoiceIdByQueIdSchId(152,$schoolId);
								for ($m = 0; $m < count($list_choiceId); $m++) {
                                    if ($list_choiceId[$m] == 277) {
                                        $sum_choice = $sum_choice + 100 * $f_2;
                                        $sum_fig = 100;
                                    }
                                }
							}

                            if ($list4_choiceNumber[$y] == 153) {
                                $list_choiceId = D("Tchoiceanswer","Model")->getChoiceIdByQueIdSchId(153,$schoolId);
								for ($m = 0; $m < count($list_choiceId); $m++) {
                                    if ($list_choiceId[$m] == 279) {
                                        $sum_choice = $sum_choice + 100 * $f_2;
                                        $sum_fig = 100;
                                    }
                                }
							}

                            if ($list4_choiceNumber[$y] == 154) {
                                $list_choiceId = D("Tchoiceanswer","Model")->getChoiceIdByQueIdSchId(154,$schoolId);
								for ($m = 0; $m < count($list_choiceId); $m++) {
                                    if ($list_choiceId[$m] == 281) {
                                        $sum_choice = $sum_choice + 100 * $f_2;
                                        $sum_fig = 100;
                                    }
                                }
							}

                            if ($list4_choiceNumber[$y] == 155) {
                                $list_choiceId = D("Tchoiceanswer","Model")->getChoiceIdByQueIdSchId(155,$schoolId);
								for ($m = 0; $m < count($list_choiceId); $m++) {
                                    if ($list_choiceId[$m] == 283) {
                                        $sum_choice = $sum_choice + 100 * $f_2;
                                        $sum_fig = 100;
                                    }
                                }
							}
                        } else {
							$list_choiceAnswer = D("Tchoiceanswer","Model")->getChoiceIdByQueIdSchId($list4_choiceNumber[$y], $schoolId); //选择题答案
							$arrChoiceContent = D("Tchoicetrueanswer","Model")->getChoiceAnswerContentByQueId($list4_choiceNumber[$y]);    //标准答案
							$num = 0;
                            $t = count($arrChoiceContent);
							for ($m = 0; $m < $t; $m++) {
                                for ($n = 0; $n < count($list_choiceAnswer); $n++) {
                                    if ((float)$arrChoiceContent[$m]==($list_choiceAnswer[$n])) {
                                        $num++;
                                    }
								}
                            }
							if ($t != 0) {
                                $sum_choice = $sum_choice + (float) ($num * 1.0 / $t * 100 * $f_2); // 给多项选择题，每一项都乘100
                                $sum_fig = (float) ($num * 1.0 / $t * 100);
                            }
						}
                        D("Tquescore","Model")->insertQueScore($list4_choiceNumber[$y],$schoolId, $sum_fig, $time);
					}

					// //////////////////////////////
					$sum_3 = $sum_choice + $sum_blank;
                    $sum_2 = $sum_2 + $sum_3 * $list3_thirdIndexPercent[$k];
                    D("Tschoolindexscore","Model")->insertSchoolScore($schoolId,$sum_3,3,$time);

				}
                $sum_1 = $sum_1 + $sum_2 * $list2_secondIndexPercent[$j]; // 三级区域值
                D("Tschoolindexscore","Model")->insertSchoolScore($schoolId,$sum_2,2,$time);

			}

            $sum = $sum + $sum_1 * (float) $list1_firstIndexPercent[$i]; // 二级区域值
            D("Tschoolindexscore","Model")->insertSchoolScore($schoolId,$sum_1,1,$time);
		}
        D("Tschoolindexscore","Model")->insertSchoolScore($schoolId,$sum,0,$time);
	}

	// 为各个区县算出一级、二级、三级指标得分，存到数据库tareascore、tseconddareascore、tthirdareascore
	public function setAreaScore($currentTime, $time){
        $result = D("Tarea","Model")->getAreaName();
        $listAreaName = array();
        foreach ($result as $k=>$v){
            $listAreaName[] = $v["name"];
        }
		for ($i = 0; $i < count($listAreaName); $i++) {
            $schoolArean = $listAreaName[$i];
            $subNum = D("Tschoolinfor","Model")->getAreaSpecifiedDateSchoolSubmitNum($schoolArean,$currentTime);// 得到一个区域学校提交数量
            $arrSchoolId = D("Tschoolinfor","Model")->getAllSchoolIdByAreaUserTime($schoolArean,$currentTime); // 获取一个区域的学校schoolId

            ////////////////////////一级指标
            $sum = 0; $sum1 = 0; $sum2 = 0; $sum3 = 0; $sum4 = 0; $sum5 = 0;
            for ($j = 0; $j < count($arrSchoolId); $j++) {
                $resFirstScore= D("Tschoolindexscore","Model")->getSchoolNameScoreAreanById($arrSchoolId[$j]);
                foreach($resFirstScore as $k=>$v){
                    $arrScore = $v;
                }
                if (count($arrScore) > 0) {
                    $sum1 = $sum1 + $arrScore[0]; // 基础设施
                    $sum2 = $sum2 + $arrScore[1]; // 数字资源
                    $sum3 = $sum3 + $arrScore[2]; // 应用服务
                    $sum4 = $sum4 + $arrScore[3]; // 应用效能
                    $sum5 = $sum5 + $arrScore[4]; // 机制保障
                    $sum = $sum + $arrScore[5]; // 总得分
                }
            }
            if ($subNum) {
                $aversum1 = round($sum1/$subNum,2); // 基础设施平均得分
                $aversum2 = round($sum2/$subNum,2); // 数字资源平均得分
                $aversum3 = round($sum3/$subNum,2); // 应用服务平均得分
                $aversum4 = round($sum4/$subNum,2); // 应用效能平均得分
                $aversum5 = round($sum5/$subNum,2); // 机制保障平均得分
                $aversum = round($sum/$subNum,2); // 总得分平均得分
            } else {
                $aversum1 = 0;
                $aversum2 = 0;
                $aversum3 = 0;
                $aversum4 = 0;
                $aversum5 = 0;
                $aversum = 0;
            }
            //一级指标执行插入操作
            D("Tareascore","Model")->insertAreanScore($schoolArean, $aversum1, $aversum2, $aversum3, $aversum4, $aversum5, $aversum, $time);


            ////////////////////二级指标

           $arrSecond = array();
            for ($k = 0; $k < 17; $k++) {
                $arrSecond[$k] = 0;
            }

            if($subNum!=0){
               for ($m = 0; $m < count($arrSchoolId); $m++) {
                    $arrSecondScore = D("Tschoolindexscore","Model")->getSecondIndexScoreBySchoolId($arrSchoolId[$m]); // 这个长度也是17个
                    for ($j = 0; $j < count($arrSecondScore); $j++) {
                        $arrSecond[$j] = $arrSecond[$j] + $arrSecondScore[$j];
                    }
                }

                for ($k = 0; $k < 17; $k++) {
                    $arrSecond[$k] = round($arrSecond[$k]/$subNum,2);
                }

            }
            //二级指标执行插入操作
            for($n=0;$n<17;$n++ ){
                D("Tsecondareascore","Model")->insertSecondAreaScore($arrSecond[$n], $schoolArean, $time);
            }

            ///////////////////////////三级指标
            $arrThird = array();
            for ($k = 0; $k < 33; $k++) {
                $arrThird[$k] = 0;
            }
            if($subNum!=0){
                for ($p = 0; $p < count($arrSchoolId); $p++) {
                    $arrThirdScore = D("Tschoolindexscore","Model")->getThirdIndexScoreBySchoolId($arrSchoolId[$p]); // 这个长度也是33个
                    for ($j = 0; $j < count($arrThirdScore); $j++) {
                        $arrThird[$j] = $arrThird[$j] + $arrThirdScore[$j];
                    }
                }

                for ($k = 0; $k < 33; $k++) {
                    $arrThird[$k] = round($arrThird[$k]/$subNum,2);
                }
            }

            //三级指标执行插入操作
            for($n=0;$n<count($arrThird);$n++ ){
                D("Tthirdareascore","Model")->insertThirdAreaScore($arrThird[$n], $schoolArean, $time);
            }

        }

    }
}