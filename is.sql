-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-06-18 00:11:29
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `is`
--

-- --------------------------------------------------------

--
-- 表的结构 `activity`
--

CREATE TABLE `activity` (
  `ID` int(4) NOT NULL COMMENT 'ID',
  `ac_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动名',
  `ac_per` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '负责人',
  `ac_tani` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '申请单位',
  `ac_class` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动级别',
  `ac_budget` int(20) NOT NULL DEFAULT '0' COMMENT '预算金额',
  `ac_info` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '无' COMMENT '活动简介',
  `ac_tip` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '无' COMMENT '备注',
  `ac_approve` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '待审核' COMMENT '审批情况',
  `ac_apper` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '--' COMMENT '审批者'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='活动管理表';

--
-- 转存表中的数据 `activity`
--

INSERT INTO `activity` (`ID`, `ac_name`, `ac_per`, `ac_tani`, `ac_class`, `ac_budget`, `ac_info`, `ac_tip`, `ac_approve`, `ac_apper`) VALUES
(1, '社团全体大会', '小明', '社团', '社团级或以上', 1000, '会议时间：2020年6月1日下午3：00。\r\n会议地点：学校教室1。\r\n参与人员：请全体成员参加。', '需要学校教室1。', '待审核', '--'),
(2, '网技部团建2', '小红', '网技部', '部门级', 200, '网技部部内团建，大家很辛苦，一起吃个饭吧！', '无', '通过', '小红'),
(3, '户外团建', '小明', '社团', '社团级或以上', 2000, '社团管理层一起出去吃个饭', '无', '待审核', '--'),
(4, '去游泳', '小明', '网技部', '社团级或以上', 42, '周日去游泳', '校外', '待审核', '--'),
(5, '网技部第三次团建', '小红', '网技部', '部门级', 444, '网技部第三次团建', '活动室', '通过', '小红'),
(6, '网技部部长会议', '小红', '网技部', '部门级', 38, '网技部部长会议', '活动室', '通过', '小红');

-- --------------------------------------------------------

--
-- 表的结构 `department`
--

CREATE TABLE `department` (
  `ID` int(4) NOT NULL COMMENT 'ID',
  `de_name` varchar(20) NOT NULL COMMENT '部门名称',
  `de_info` varchar(100) NOT NULL COMMENT '部门简介'
) ENGINE=MyISAM DEFAULT CHARSET=gb2312 COMMENT='部门管理表';

--
-- 转存表中的数据 `department`
--

INSERT INTO `department` (`ID`, `de_name`, `de_info`) VALUES
(1, '网技部', '网络技术部门，技术研究中心'),
(2, '信息技术部', '网站前端功能学习与设计部门');

-- --------------------------------------------------------

--
-- 表的结构 `file`
--

CREATE TABLE `file` (
  `ID` int(4) NOT NULL COMMENT 'ID',
  `fi_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '未命名' COMMENT '文件名',
  `fi_root` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/files/null.pdf' COMMENT '文件路径'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='文件管理';

--
-- 转存表中的数据 `file`
--

INSERT INTO `file` (`ID`, `fi_name`, `fi_root`) VALUES
(1, '社团章程', '/files/2019管理学院科协章程.pdf'),
(2, '社团制度', '/files/科协奖惩制度.pdf'),
(3, '科技节通知', '/files/【20200708】关于举办南京邮电大学第二十五届大学生科技节的通知.pdf'),
(9, '2020换届通知', '/files/1_校团发〔2020〕26号  关于开展全校学生社团换届工作的通知.pdf');

-- --------------------------------------------------------

--
-- 表的结构 `function`
--

CREATE TABLE `function` (
  `ID` int(10) NOT NULL COMMENT 'ID',
  `fu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '未命名功能' COMMENT '功能名',
  `fu_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#' COMMENT '功能链接',
  `fu_flag` int(1) NOT NULL DEFAULT '0' COMMENT '功能开关'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='附加功能开关';

--
-- 转存表中的数据 `function`
--

INSERT INTO `function` (`ID`, `fu_name`, `fu_link`, `fu_flag`) VALUES
(1, '社团报名系统', '/frontend/zc/ybmdl.php', 0);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `ID` int(4) NOT NULL,
  `ne_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `ne_content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `ne_author` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '作者',
  `ne_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '时间',
  `ne_belong` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '其他' COMMENT '新闻所属'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='新闻管理表';

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`ID`, `ne_title`, `ne_content`, `ne_author`, `ne_time`, `ne_belong`) VALUES
(1, 'ポケモンが大好き。', '此の星には不思議な不思議な生き物が居る　空に　海に　森に　町に　世界中の至る所に其の姿を見る事が出来る　人間の共に遊び　共に助け合い　共に仕事押し　共に生き　偶にが喧嘩を舌日して　様々な絆を結び　仲良く暮らしている　其の生き物の数掛けの夢が有り　其の生き物の数掛けの冒険が待っている　其の名は　ポケットモンスター　縮めでポケモン。', 'toki', '2020-5-20', '网技部'),
(2, '美媒：美国疫苗余量惊人 不与他国分享是“道德暴行”', '　中新网5月20日电 近日，美国VOX新闻网站刊发一篇题为《美国现在应该立即捐赠疫苗》的文章，指出美国新冠疫苗过剩情况“惊人”。如果美国不尽快向世界提供这些疫苗，这将是“道德上的暴行”。\r\n　　文章指出，在美国，超过一半的成年人至少接种了一剂疫苗，新冠病毒传播达到11个月来的最低水平，许多美国人正在聚会、旅行；而在印度和巴西等国家，每天都有数千名未接种疫苗的人因感染新冠病毒而死亡。\r\n在这种情况下，美国决定开始为12至15岁的儿童提供疫苗。文章援引三名专家在《大西洋月刊》发表的一篇文章中所写的话指出，“与5至17岁的儿童相比，75至84岁的人死于新冠的风险高出3200倍。”而许多专家已持续数周呼吁拜登政府将疫苗分发到海外，但进展缓慢。\r\n　　文章指出，迅速向海外提供疫苗也符合美国的最佳利益，因为新冠病毒肆虐的时间越长，出现新变种的风险就越大——其中一些可能部分逃避疫苗保护。\r\n　　尽管为美国人接种疫苗仍是重要的，但由于供大于求，美国目前的疫苗接种速度已开始放缓。过量的疫苗，再加上其余未接种疫苗的人群面临的风险较小，这一事实意味着，美国向国外发送疫苗在世界范围内都是有意义的。\r\n　　文字注意到，最近，美国同意放弃疫苗专利的消息成为头条新闻。但即使可以免费获得配方，新冠疫苗的制造也极其复杂，需要深入的技术支持和稀缺的原材料。因此，尽管从长远来看，放弃专利可能会有所帮助，但并不能帮助那些正面临感染和死亡的人。\r\n因此，文章强调，在短期内，更有用的援助是简单地捐赠疫苗。\r\n\r\n　　虽然拜登已承诺这样做，4月，他承诺向受病毒肆虐的国家运送6000万剂阿斯利康疫苗，但是直到5月中旬，疫苗仍在储备中。它们必须在出口前通过联邦安全审查，专家们表示，美国在未来几个月内捐赠这些疫苗的计划已经太迟了。\r\n　　文章称，美国有能力负担得起更多、更快的援助。根据美国疾控中心的数据，美国已经储存了大约7300万剂疫苗。杜克大学的研究人员估计，到7月，美国可能会有至少3亿剂超额疫苗，这一估计是假定美国将保留足够的剂量，为绝大多数儿童接种疫苗。换句话说，每个符合接种资格的或即将符合接种资格的美国人都可以接种疫苗，但仍然会剩下3亿剂疫苗，这足以给这个国家的每个人多注射一剂。\r\n　　文章直言，美国疫苗的盈余是如此惊人，以至于不与世界分享疫苗，在道德上显得不合理。\r\n　　约翰·霍普金斯大学布隆伯格公共卫生学院教授威廉·莫斯说，如果美国捐赠所有的阿斯利康疫苗，将是一个非常明智的决定，因为这种疫苗甚至没有被授权在美国使用。另一个可行的选择是大量捐赠强生疫苗。他说：“把这种疫苗送到印度等国家的好处是，它只需要接种一次，而且冷链要求不那么严格。”', '刘丹忆', '2020-5-20', '社团'),
(3, '「迷城战线」玩法说明', '<h1 id=\"p3z1h\">躲猫猫游戏说明</h1><p>活动期间，旅行者可以使用指定的试用角色编队并挑战6个不同主题的试炼，完成试炼任务可获得原石、大英雄的经验、天赋培养材料等奖励。&nbsp;</p><p><b>〓活动时间〓</b>\r\n2021/05/21 10:00 ~ 2021/05/31 03:59&nbsp;</p><p><b>〓参与条件〓</b>\r\n冒险等阶≥20级</p><p><span style=\"background-color: rgb(249, 150, 59);\"><font color=\"#ffffff\">一定要去玩一下哦！</font></span><br/></p>', ' 飞翔的丘丘人', '2020-5-20', '网技部'),
(4, '拜登公开引用毛主席名言。', '当地时间19日，美国总统拜登在康涅狄格州新伦敦出席海岸警卫队学院毕业典礼。《今日美国报》说，这是他作为总统第一次出席军校毕业典礼并发表演讲。根据白宫发布的文字实录，拜登在提到女毕业生和女性指挥官时，引述了毛泽东的名言——妇女能顶半边天。', '环球网', '2020-5-20', '社团'),
(5, '宝可梦大探险9-13阵容怎么搭配？宝可梦大探险9-13过关攻略', '之前卡在9-13怎么都过不去，然后换了一个卡比兽，后面一次过，卡比兽腹鼓给队友加属性，然后睡觉回血，靠卡比兽撑两输出复活打一套输出，反复如此，反正主线没有时间限制\r\n这个技巧不适合所有人，对卡比兽要求比较高，最好9血，然后技能格要求也比较高，送的要是技能格合适，然后血格比较多就可以\r\n水箭龟也可以 带的水流环 配合健美怪力 然后暴鲤龙咬 挂了就靠乌龟躲回血', '人民资讯', '2020-5-20', '信息技术部'),
(6, '丁磊评《原神》：中国网络游戏创新环境还不错', '米哈游旗下的《原神》成为最近一款爆款游戏，去年9月上线，吸金无数，甚至都足以撼动手游界多年来的扛把子《王者荣耀》。网易昨晚发布了2021年第一季度财报，在财报发布会的电话会上，网易CEO丁磊谈到了《原神》的成功。\r\n在财报发布会的电话会上，有投资者问到了当下游戏市场竞争格局：“包括米哈游、莉莉丝在内的规模相对小的游戏团队，推出了自己研发的产品并取得了不错的成绩，网易这样的大厂将如何应对？”\r\n　　对此，网易公司董事、首席执行官丁磊回应称，米哈游等公司做出优秀作品，“说明中国网络游戏的创新环境还不错，大家能够百家争鸣百花齐放，我们在行业里耕耘了20年，看到新一代的公司的成长我们感觉到是开心的，说明行业里有创新人才。我们也要积极进取，超越过去的成绩。”\r\n　　同时丁磊表示：“年轻的公司开发出成功的 IP 固然值得惊喜，但游戏最重要的是可持续化经营。我们经历过很多IP上来的时候很火，最后随着时间的推移，如何能保持持续成长，其实是巨大的挑战。”\r\n　　最近Sensor Tower商店统计了全球五款最快达成10亿美元收入的游戏，后面四个全是海外游戏，而排第一的就是国产游戏——《原神》，且仅用时6个月就达成了收入10亿美元（约合人民币65亿）的成就。\r\n\r\n', '3DMGAME官方号', '2021-05-19', '信息技术部'),
(9, '再见了，IE 浏览器！', ' <p>昨日，微软在其官方博客宣布：<strong>Internet Explorer 11 桌面应用程序将于 2022 年 6 月 15 日停用</strong>，而 Windows&nbsp;10 上 Internet Explorer 的未来将由 Microsoft Edge 接管。<br/></p><p><img src=\"https://img-blog.csdnimg.cn/img_convert/d09f6ed2b9229c7f1d1a601294f51b95.png\" style=\"max-width:100%;\" contenteditable=\"false\"/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; （图片来自微软官方）<br/></p><p>自此，这个历史长达 25 年、曾是微软经典王牌、如今却备受诟病的 IE 浏览器（Internet Explorer）被微软官宣“退役”，自明年起退出历史舞台。</p><p><img src=\"https://img-blog.csdnimg.cn/img_convert/3b7dfac9e2d19196564e34a256aff588.png\" style=\"max-width:100%;\" contenteditable=\"false\"/></p><p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 由辉煌到没落的 IE 浏览器</strong><br/></p><p>1995 年诞生的 IE 浏览器在这 25 年中曾经是浏览器界的龙头老大。<br/><br/>从 90 年代中期到 00 年代中期，IE 浏览器一直是 Windows 的标配，只要你的电脑系统是 Windows，你的浏览器就必定有一个 IE。<br/><br/>得益于这种“捆绑”方式，加之其美观简洁的设计、交互性更强的网页等其他浏览器做不到的特点，2002 年和 2003 年 IE 浏览器的市场份额达到了 95% 的巅峰，几乎是垄断水平。<br/><br/>可似乎是被这傲人的成绩冲昏了头脑，微软逐渐松懈了对 IE 的管理，没有对其后续优化工作投入足够的资源。然而时代在进步、互联网在飞速发展、就连黑客的技术都一年比一年高超，慢下脚步的 IE 浏览器开始显得格格不入。<br/><br/>越来越多的用户投诉 IE 浏览器“又慢又不安全”，以至于在 2006 年，经常崩溃的 IE 6 被评选为“有史以来第八糟糕的科技产品”，甚至在 2011 年“科技史上 50 种最糟糕科技产品”中，IE 6 也赫然出现在第 11 名的位置。<br/><br/>本来一款浏览器不好用，卸载不就好了，用户也不至于广为诟病。可问题就在于，以捆绑 Windows 系统带起来的 IE 浏览器极难卸载。所以是了，又难用又不能卸载，用户当然只能骂一骂泄泄气。那几年，IE 浏览器的口碑极差。<br/><br/>与此同时，与 IE 相比更快更安全并且开源的火狐和&nbsp; Chrome 浏览器先后问世，抢占了大量市场份额，即使期间微软后知后觉地于 2009 年推出大幅改进的 IE 8，但失去的市场已经回不来了：2015 年 IE 浏览器市场占有率跌破 20%，仅有 15.71％。<br/><br/>意识到问题严重性的微软为了挽救口碑和市场份额，于 2015 年推出了 IE 浏览器的替代品——Microsoft Edge，而它的出现也标志着 IE 浏览器终结的开始。<br/></p><p><br/></p><p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; “<strong>后起之秀</strong>”Microsoft Edge 上位</strong><br/></p><p style=\"text-align:left;\">为了扶持 Edge 浏览器“上位”，2016 年微软在宣布停止继续对 Win 8 以及 IE 8/9/10 版本提供技术支持时，给用户的建议是：升级至 IE11 或者替换成 Win10 的 Edge 吧。<br/><br/>本以为留下的 IE 11 将是 IE 浏览器“全村的希望”，可这几年微软连 IE 这根最后的独苗也没放过：鼓励用户停止使用 IE；在 Edge 中添加 IE 11 兼容模式；Windows 10 系统捆绑 Chromium Edge 浏览器。<br/><br/>不仅如此，去年 8 月微软宣布 2021 年 8 月 17 日起微软 365 办公软件应用和服务将全面停止对 IE 11 的支持。虽然彼时微软表示这一计划并不影响 IE 11 的正常使用，但在微软官方 IE 和 Edge 生命周期问答文档中，还是揭示了 IE 浏览器走向终结的命运：<br/><br/><br/><blockquote>问：IE 11 是最后一版 Internet Explorer 吗？<br/><br/>答：是的，IE 11 是 Internet Explorer 浏览器的最后一个重大版本。</blockquote><br/><br/>因此，昨日微软正式官宣 IE 浏览器的彻底“退役”早就有迹可循，微软只是用这几年让用户逐步转向 Edge 后再公开这一决定罢了。<br/><br/>不过微软还是给怀旧用户留下了一个可以怀念 IE 浏览器的方法：Edge 浏览器中仍可启用 IE 兼容模式，启用 IE 模式后，所有 IE 功能如开发者工具、ActiveX 控件等，都可以在 Edge 浏览器中调用。<br/><br/>不论 IE 浏览器曾经带给人们怎样的印象，属于它的时代早已过去并已官宣终结。<br/></p><p><br/></p><p><br/></p><p><br/></p>', '郑丽媛', '2021-05-20', '社团'),
(10, '「迷城战线」活动：角色试用主题试炼', '<p> </p><h1 id=\"mcmgk\">「迷城战线」活动：角色试用主题试炼</h1><blockquote><p>来自版块：&nbsp;<a href=\"https://bbs.mihoyo.com/ys/home/28\" target=\"_blank\">官方</a></p></blockquote><p><br/></p><h1 id=\"plrz5\"></h1><p><img src=\"https://upload-bbs.mihoyo.com/upload/2021/05/15/75276539/8095b3625eb4f23a79068e46e5753c99_8125125194673279649.jpg?x-oss-process=image/resize,s_600/quality,q_80/auto-orient,0/interlace,1/format,jpg\" style=\"max-width:100%;\" contenteditable=\"false\"/></p><p>活动期间，旅行者可以使用指定的试用角色编队并挑战6个不同主题的试炼，完成试炼任务可获得<font color=\"#f9963b\">原石、大英雄的经验、天赋培养材料</font>等奖励。</p><p>&nbsp;</p><p><strong>〓活动时间〓</strong></p><p><font color=\"#f9963b\">2021/05/21 10:00 ~&nbsp;2021/05/31 03:59</font></p><p>&nbsp;</p><p><strong>〓参与条件〓</strong></p><p><font color=\"#f9963b\">冒险等阶≥20级</font></p><p>&nbsp;</p><p><strong>〓活动说明〓</strong></p><p>● 「迷城战线」共有6种不同主题的试炼，从活动第一天起，每2天解锁2种新试炼。</p><p>● 在「迷城战线」的试炼中，需要在指定时间内寻找并激活所有的「古代符文」，进行「最终挑战」。</p><p>● 每个试炼拥有不同的地脉异常，敌人和陷阱机关的分布也有所不同。</p><p>● 试炼中只能使用给定的试用角色，<font color=\"#c24f4a\">也无法产生元素共鸣</font>。</p><p>● 若旅行者拥有试用角色，在试炼中，该试用角色<font color=\"#c24f4a\">将继承旅行者实际拥有角色的命之座层数</font>。若旅行者暂未拥有试用角色，命之座将默认为0层。&nbsp;&nbsp;</p>', '西风快报员', '2021-05-19', '米游社'),
(11, '社团全体大会', ' <h1 id=\"8l9bl\">社团全体大会通知</h1><p><b>各部门：</b><br/></p><p>&nbsp; &nbsp; 根据社团工作需要，经研究决定召开社团全体大会。现将相关事宜通知如下：<b><br/></b></p><p>&nbsp; &nbsp; <b><font color=\"#000000\">=会议时间=</font></b><br/></p><p>&nbsp; &nbsp; <font color=\"#f9963b\">2020年6月1日下午3：00。</font><b><font color=\"#000000\"><br/></font></b></p><p>&nbsp; &nbsp;&nbsp;<b style=\"font-size: 1rem;\">=会议地点=</b><font color=\"#f9963b\"><br/></font></p><p>&nbsp; &nbsp; <font color=\"#f9963b\">学校教室1。</font><b style=\"font-size: 1rem;\"><br/></b></p><p><font color=\"#000000\">&nbsp; &nbsp;&nbsp;</font><b style=\"font-size: 1rem;\">=参与人员=</b><font color=\"#f9963b\"><br/></font></p><p>&nbsp; &nbsp; 请全体成员参加。<b style=\"font-size: 1rem;\"><br/></b></p><p>&nbsp; &nbsp;&nbsp;<b style=\"font-size: 1rem;\">=会议内容=</b><br/></p><blockquote><p>&nbsp; &nbsp; 1.本月工作总结，各部门述职。<b style=\"font-size: 1rem;\"><br/></b></p><p>&nbsp; &nbsp; 2.宣布下个月的工作计划。<br/></p><p>&nbsp; &nbsp; 3.团队建设活动。</p></blockquote><p>&nbsp; &nbsp;&nbsp;<b style=\"font-size: 1rem;\">=会议要求=</b><br/></p><p>&nbsp; &nbsp;&nbsp;1、请参会人员安排好项目工作，按要求准时参会，不得无故缺席。<b style=\"font-size: 1rem;\"><br/></b></p><p>&nbsp; &nbsp;&nbsp;2、服从会议组委会的安排，遵守会场纪律，不得中途退场。<br/></p><p>&nbsp; &nbsp;&nbsp;3、要求与会人员<font color=\"#c24f4a\">6月1日下午2：40到达会场</font>，办公室组织签到。<br/></p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;主席团</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2021年5月20日</p>', '小明', '2021-05-20', '社团');

-- --------------------------------------------------------

--
-- 表的结构 `signup`
--

CREATE TABLE `signup` (
  `ID` int(8) NOT NULL COMMENT 'ID',
  `si_yhm` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '预报名用户名',
  `si_mm` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '预报名密码',
  `si_name` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT '预报名姓名',
  `si_sex` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT '预报名性别',
  `si_major` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '预报名专业',
  `si_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '预报名电话',
  `si_mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '预报名邮箱',
  `si_depart` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '预报名志愿部门',
  `si_adjust` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT '预报名调剂否',
  `si_intro` varchar(1998) COLLATE utf8_unicode_ci NOT NULL COMMENT '预报名自我介绍',
  `si_check` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '待审核' COMMENT '审核',
  `si_apper` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '--' COMMENT '预报名审批者'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='预报名表';

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `ID` int(4) NOT NULL COMMENT 'ID',
  `yhm` varchar(20) NOT NULL COMMENT '用户名',
  `mm` varchar(30) NOT NULL DEFAULT '111111' COMMENT '密码',
  `name` varchar(50) NOT NULL COMMENT '姓名',
  `sex` char(1) NOT NULL COMMENT '性别',
  `major` varchar(20) NOT NULL COMMENT '专业',
  `phone` varchar(20) NOT NULL COMMENT '电话',
  `mail` varchar(50) NOT NULL COMMENT '邮箱',
  `auth` int(1) NOT NULL COMMENT '权限',
  `place` varchar(10) NOT NULL COMMENT '职位',
  `depart` varchar(20) NOT NULL COMMENT '部门'
) ENGINE=MyISAM DEFAULT CHARSET=gb2312 COMMENT='用户表';

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`ID`, `yhm`, `mm`, `name`, `sex`, `major`, `phone`, `mail`, `auth`, `place`, `depart`) VALUES
(19, 'takeshi', '111111', '小刚', '男', '信息管理与信息系统', '18855555555', 'takeshi@poke.com', 0, '成员', '信息技术部'),
(18, 'dashuo', '111111', '大硕', '男', '信息管理与信息系统', '18866666666', 'example@Msn.com', 0, '成员', '网技部'),
(17, 'xiaohong', '111111', '小红', '女', '信息管理与信息系统', '18877777777', 'example@Msn.com', 1, '部长', '网技部'),
(1, 'xiaoming', '111111', '小明', '男', '信息管理与信息系统', '18888888888', 'example@example.com', 2, '主席', '社团');

--
-- 转储表的索引
--

--
-- 表的索引 `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `function`
--
ALTER TABLE `function`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `yhm` (`yhm`,`mm`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `activity`
--
ALTER TABLE `activity`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `department`
--
ALTER TABLE `department`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `file`
--
ALTER TABLE `file`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `function`
--
ALTER TABLE `function`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
