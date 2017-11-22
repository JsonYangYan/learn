<?php
/**
 * Created by PhpStorm.
 * User: yan
 * Date: 2017-8-21
 * Time: 9:37
 */
/**
 * 生成pdf
 * @param  string $html      需要生成的内容
 */
    function pdf($time,$areaName,$arrNetWork,$arrWireless,$arrTerminal,$arrTeachSystem,$arrNetWorkSpace,$arrTeachSource,$arrSchoolWeb,$arrExternalpublicity,$arrSchoolManagerSystem,$arrFunds,$arrTain){
        //校园网宽带
        $NetWork1 = $arrNetWork[0];
        $NetWork2 = $arrNetWork[1];
        $NetWork3 = $arrNetWork[2];
        //无线网
        $Wireless1 = $arrWireless[0];
        $Wireless2 = $arrWireless[1];
        //教师终端
        $arrTerminal1 = $arrTerminal[0]["value"];
        $arrTerminal2 = $arrTerminal[1]["value"];
        $arrTerminal3 = $arrTerminal[2]["value"];
        $arrTerminal4 = $arrTerminal[3]["value"];
        //数字化教学系统
        $TeachSystem1 = $arrTeachSystem[0]["value"];
        $TeachSystem2 = $arrTeachSystem[1]["value"];
        $TeachSystem3 = $arrTeachSystem[2]["value"];
        $TeachSystem4 = $arrTeachSystem[3]["value"];
        $TeachSystem5 = $arrTeachSystem[4]["value"];
        //网络学习空间
        $tecaherWorkSapce =  $arrNetWorkSpace["teacher"];
        $studentWorkSpace =  $arrNetWorkSpace["student"];
        //数字化教研资源
        $TeachSource1 = $arrTeachSource[0]["value"];
        $TeachSource2 = $arrTeachSource[1]["value"];
        $TeachSource3 = $arrTeachSource[2]["value"];
        $TeachSource4 = $arrTeachSource[3]["value"];
        $TeachSource5 = $arrTeachSource[4]["value"];
        $TeachSource6 = $arrTeachSource[5]["value"];
        //门户网站
        $schoolWeb = $arrSchoolWeb[0]["value"];
        //校级管理系统
        $SchoolManagerSystem = 100-$arrSchoolManagerSystem[0]["value"];
        //对外宣传
        $externalpublicity1 = $arrExternalpublicity[2]["value"];
        $externalpublicity2 = $arrExternalpublicity[3]["value"];
        //经费
        $Funds1 = $arrFunds["totalFunds"];
        $Funds2 = $arrFunds["informationFunds"];
        $Funds3 = $arrFunds["equipmentFunds"];
        $Funds4 = $arrFunds["sourceFunds"];
        $Funds5 = $arrFunds["trainFunds"];
        //培训
        $teachNum = $arrTain["teacherNum"];
        $classNum = $arrTain["classNum"];
    $html = <<<EOF
    
    <style>
    p.text{
    
        font-size:18px;
        font-family:宋体;
        padding:10px 0;
        margin:10px 0;
        align:justify;
     }
     p.first_title{
        font-size:18px;
        font-family:黑体;
     }
    </style>
    
    <h2 style="color:black" align="center">$areaName 教育信息化发展水平评估报告</h2>
    <p class="text">教育是国民经济和社会发展中具有基础性、全局性、先导性的重要组成部分，教育信息化是实现教育现代化的关键。教育信息化建设是一个复杂的、系统的过程，涉及到教育思想、教育手段以及教育管理变革的方方面面，而理清教育信息化发展状况是有力推进建设的前提条件。</p>
    <p class="text">本次调研将信息化建设与应用现状主要划分为教育信息基础设施建设、教学信息化应用、教研信息化应用、管理与服务信息化、信息化保障五部分。并筛选出每部分中能够最大程度反映市教育信息化建设现状的代表性和突出性问题，结合教育信息化发展规律，形成了市基础教育信息化发展水平报告。</p>
    <p class="first_title">1.基础设施建设</p>
    <p class="text">基础设施是信息化发展的先决条件，基础设施的建设情况决定了教育信息化发展的高度和深度。在此次的调查统计中，结合$areaName 目前已有的基础设施以及发展目标，以宽带网络建设、无线网络覆盖情况、信息化终端为主要分析内容。</p>
    <p class="second_title">1.1宽带网络建设</p>
    <p class="text">宽带网络接入情况是衡量学校教育信息化发展水平的核心指标。2015年教育部发布的《关于“十三五”期间全面深入推进教育信息化工作的指导意见》提出“有效提升各类学校和教学点出口带宽
    ，城镇学校班均出口宽带不低于10M，有条件的农村学校班均出口宽带不低于5M，有条件的教学点接入宽带达到4M以上。截止目前，襄阳市$NetWork1%的中小学网络接入总带宽在1-20M，$NetWork2%的中小学网络接入总带宽在20-100M，$NetWork3%的中小学网络接入总带宽超过100M。</p>
    <p class="second_title">1.2无线网络覆盖情况</p>
    <p class="text">随着网络技术的不断发展，无线网络逐渐成为了校园数字化建设的重点。无线网络能够促进优质数字资源的共享以及利用，帮助学生克服传统课堂的局限性，实现随时随地的自主学习。无线网络
    在校园的应用，已经成为一种必然的趋势。据统计，襄阳市已实现校内无线网络基本全覆盖的中小学达到$Wireless1%，仍有$Wireless2%的中小学尚未实现统一部署。</p>
    <p class="second_title">1.3信息化终端</p>
    <p class="text">当前，我国中小学师生信息化终端主要包括个人计算机、平板电脑以及智能手机等其他终端设备。我国中小学教学是以课程教学为主要教学形式，教师是教学过程的主导，因此教师的信息化教学终端配置情况从某种情况上比学生的信息化学习配置情况更加重要。
    据统计，襄阳市在学校供给教师使用的终端中，终端数量小于20台学校的比例约占总数的$arrTerminal1%，拥有20至60台终端数量的学校约占总数
    的$arrTerminal2%，拥有60至90台终端数量的学校约占总数的$arrTerminal3%，拥有终端数量高于90台的学校约占总数的$arrTerminal4%。</p>
    <p class="first_title">2.教学信息化应用</p>
    <p class="text">利用信息技术开展教学，是实现高效课堂的重要途径，是实现教育现代化的重要手段。信息技术是当前各类学校教育的重要内容
    ，信息技术与学科教育的融合，提高了教育的智能化水平和学生在教育中的主体地位。根据调研数据显示，$areaName 学校建设并应用的
    数字化教学系统方面，$TeachSystem1%学校未开展数字化教学系统建设，$TeachSystem2%学校应用了网络教学平台，$TeachSystem3%学校应用了教学资源管
    理平台，$TeachSystem4%学校应用了交互式电子白板教学系统、$TeachSystem5%学校应用了电子阅览系统。在网络学习空间使用情况方面，学校教师在
    各级平台上开通网络学习空间的比例约为$tecaherWorkSapce%，学生在各级平台上开通网络学习空间的比例约为$studentWorkSpace%。数字化教学系统建设应用情况如图1。</p>
    <p class="first_title">3.教研信息化应用</p>
    <p class="text">信息技术与教研工作的深度融合是发展教育信息化的重要组成部分。教育工作者作为学校教育中的核心力量，只有在学校的一线
    课堂教学中充分运用信息化手段，信息技术与学科教育的融合，提高了教育的智能化水平和学生在教育中的主体地位。优化教学内容
    ，创新教学过程，提升教学效果，使信息技术深入融入到各个学科的每一个知识点和内容单元，使应用学校技术开展教学成为各学科
    课程教育的常态，使信息化真正成为学科教学质量提升起到切实的作用，才能充分发挥信息化的效益。根据调研数据显示，$areaName 学
    校应用的数字化教研资源方面，$TeachSource1%学校没有开展教研信息化建设，$TeachSource2%学校拥有学术文献数据库教研资源，$TeachSource3%学校拥有教
    研信息资源库，$TeachSource4%学校拥有案例教研资源，$TeachSource5%学校拥有教案教研资源，$TeachSource6%学校拥有课件教研资源。数字化教研资源建设应用情如图2。</p>
    <p class="first_title">4.管理与服务信息化</p>
    <p class="text">学校的教育管理直接影响到学校教学、人事、招生等各项工作的安排以及运转。中小学教育信息化水平的提升，是实现优质资源
    共享、提高教育质量的重要保障。信息化管理平台在教学、管理等多个环节的有效应用，改进了教育管理方式，提升了工作效率和服
    务水平，保证了教学活动的高质量展开的作用。</p>
    <p class="text">学校门户网站是学校对外宣传的重要窗口，是数字化校园建设的重要内容。根据调研数据显示，襄阳市$schoolWeb%的学校建设校外可
    访问的门户网站。信息化管理系统是中小学信息化工作的重要内容，襄阳市中小学建有校级管理系统比例达到$SchoolManagerSystem%。此外，学校进
    行信息发布与对外宣传的手段也日趋多样，其中$externalpublicity1%学校选择微信平台发布信息，$externalpublicity2%学校以邮箱作为信息载体实现对外宣传的
    目的。</p>
    <p class="first_title">5.信息化保障</p>
    <p class="text">教育信息化经费投入要根据不同学校教育信息化发展阶段特征，及时调整经费支出重点，合理分配在硬件、软件、资源、应用、运行维护、培训等各环节的经费使用比例。
    总体来看，教育信息化经费投入包括信息化建设费用、信息化运行维护费、培训与研究费用等。根据调研数据显示，襄阳市中小学最近一年校均教育总经费为$Funds1 万元，教育信息化经费投入经费为$Funds2 万。
    其中用于网络建设与设备购置的费用约为$Funds3 万元，用于资源与平台开发的费用约为$Funds4 万元，用于培训的费用约为$Funds5 万元。教育经费保障情况如图3。</p>
    <p class="text">教师的信息技术应用能力保障在整个保障体系中处于核心地位，中小学应重视信息化人才的引进和培养，制定相应的政策，完善信息化人才考核要求和鼓励机制。
    对于学校师生和其他教职工进行必要的信息化技能培训尤为重要。信息化运行维护费、培训与研究费用等。根据调研数据显示，近一年襄襄阳市中小学参与信息技术能力培训的校均教师人数为$teachNum 名，每学期教师人均参加$classNum 课时信息技术能力培训。</p>
EOF;
        vendor('Tcpdf.tcpdf');
        $pdf = new \Tcpdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // 设置打印模式
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Jack Yan');
        $pdf->SetTitle('教育信息化评估报告');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        // 是否显示页眉
        $pdf->setPrintHeader(false);
        // 设置页眉显示的内容
        $pdf->SetHeaderData('logo_example.jpg', 60, 'baijunyao.com', '白俊遥博客', array(0,64,255), array(0,64,128));
        // 设置页眉字体
        $pdf->setHeaderFont(Array('dejavusans', '', '12'));
        // 页眉距离顶部的距离
        $pdf->SetHeaderMargin('5');
        // 是否显示页脚
        $pdf->setPrintFooter(true);
        // 设置页脚显示的内容
        $pdf->setFooterData(array(0,64,0), array(0,64,128));
        // 设置页脚的字体
        $pdf->setFooterFont(Array('dejavusans', '', '10'));
        // 设置页脚距离底部的距离
        $pdf->SetFooterMargin('10');
        // 设置默认等宽字体
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        // 设置行高
        $pdf->setCellHeightRatio(1);
        // 设置左、上、右的间距
        $pdf->SetMargins('15', '12', '15');
        // 设置是否自动分页  距离底部多少距离时分页
        $pdf->SetAutoPageBreak(TRUE, '15');
        // 设置图像比例因子
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $pdf->setLanguageArray($l);
        }
        $pdf->setFontSubsetting(true);
        $pdf->AddPage();
        // 设置字体
        $pdf->SetFont('stsongstdlight', '', 14, '', true);
        //$pdf->SetFont('helvetica', 'I', 20);
        //$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        $pdf->setJPEGQuality(75);
        $pdf->Image('Public/Image/1.jpg', 10, 10, 190, 60, 'JPG', 'http://lvpad.com', '', false, 150, '', false, false, 1, false, false, false);
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output($time.$areaName.'.pdf', 'I');
    }

    /**
     * 生成柱状图
     */
    function createBarChar($arrtitle,$arrvalue,$steTitle,$strX,$strY,$fig){
        require_once ("../jpgraph-4.0.2/jpgraph/jpgraph.php");
        require_once ("../jpgraph-4.0.2/jpgraph/jpgraph_bar.php");

        $data  = $arrvalue;
        $ydata = $arrtitle;

        $graph = new Graph(500,300);  //创建新的Graph对象
        $graph->SetScale("textlin");  //刻度样式
        $graph->SetShadow();          //设置阴影
        $graph->img->SetMargin(40,30,40,50); //设置边距

        $graph->graph_theme = null; //设置主题为null，否则value->Show(); 无效

        $barplot = new BarPlot($data);  //创建BarPlot对象
        $barplot->SetFillColor('blue'); //设置颜色
        $barplot->value->Show(); //设置显示数字
        $graph->Add($barplot);  //将柱形图添加到图像中

        $graph->title->Set($steTitle);
        $graph->xaxis->title->Set($strX); //设置标题和X-Y轴标题
        $graph->yaxis->title->Set($strY);
        $graph->title->SetColor("red");
        $graph->title->SetMargin(10);
        $graph->xaxis->title->SetMargin(5);
        $graph->xaxis->SetTickLabels($ydata);

        $graph->title->SetFont(FF_SIMSUN,FS_BOLD);  //设置字体
        $graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
        $graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
        $graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD);

        $graph->Stroke("Public/Image/".$fig.".jpg");
    }

    /**
     * 生成饼状图
     */
    function createPieChar($arrvalue,$arrtitle,$title,$fig){
        require_once ("../jpgraph-4.0.2/jpgraph/jpgraph.php");
        require_once ("../jpgraph-4.0.2/jpgraph/jpgraph_pie.php");
        require_once ("../jpgraph-4.0.2/jpgraph/jpgraph_pie3d.php");

        $data = $arrvalue;

        $graph = new PieGraph(550,500);
        $graph->SetShadow();

        $graph->title->Set($title);
        $graph->title->SetFont(FF_SIMSUN,FS_BOLD);

        $pieplot = new PiePlot($data);  //创建PiePlot3D对象
        $pieplot->SetCenter(0.4, 0.5); //设置饼图中心的位置
        $pieplot->SetLegends($arrtitle); //设置图例

        $graph->Add($pieplot);
        $graph->Stroke("Public/Image/".$fig.".jpg");
    }


    /**
     * 发送邮件
     * 201601245  yyn
     * @return [type] [description]
     */

    import('Org.Com.PHPMailer');
    import('Org.Com.SMTP');

    function send_mail($title, $content, $to, $chart = 'utf-8', $attachment = '')
    {
        $mail = new PHPMailer ();
        $mail->CharSet = $chart; // 设置采用gb2312中文编码
        $mail->IsSMTP ( 'smtp' ); // 设置采用SMTP方式发送邮件
        $mail->Host = "smtp.163.com"; // 设置邮件服务器的地址
        $mail->Port = 25; // 设置邮件服务器的端口，默认为25
        $mail->From = '18233582851@163.com'; // 设置发件人的邮箱地址
        $mail->FromName = "Robot "; // 设置发件人的姓名
        $mail->SMTPAuth = true; // 设置SMTP是否需要密码验证，true表示需要
        $mail->Username = "18233582851@163.com"; // 设置发送邮件的邮箱
        $mail->Password = "ttxs21"; // 设置邮箱的密码
        $mail->Subject = $title; // 设置邮件的标题
        $mail->AltBody = "text/html"; // optional, comment out and test
        $mail->Body = $content; // 设置邮件内容
        $mail->IsHTML ( true ); // 设置内容是否为html类型
        $mail->WordWrap = 50; // 设置每行的字符数
        $mail->AddReplyTo ( "地址", "名字" ); // 设置回复的收件人的地址
        $mail->AddAddress ( $to, "" ); // 设置收件的地址
        if ($attachment != '') {

            $mail->AddAttachment ( $attachment, $attachment );
        }
        if ($mail->Send ()) {
            //$status1 = "$to" . '&nbsp;&nbsp;已投送成功<br />';
            $status = 1;

        } else {
            //$status2 = "$to" . '&nbsp;&nbsp;发送邮件失败<br />';
            $status = 0;
        }
        return $status;
    }

?>
