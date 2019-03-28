/*
Navicat MySQL Data Transfer

Source Server         : localhost_3316
Source Server Version : 50628
Source Host           : localhost:3316
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50628
File Encoding         : 65001

Date: 2019-03-14 09:25:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `adminuser`
-- ----------------------------
DROP TABLE IF EXISTS `adminuser`;
CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of adminuser
-- ----------------------------
INSERT INTO `adminuser` VALUES ('1', 'admin', 'ZvcDPhSSA3_haMGKwBhPRdZC5YMAK2eS', '$2y$13$2A4PiwfayL2sdAPKurJQm.KKLgQNMFizbKC0JfnDjTAh0Imkr9AF2', null, '756477101@qq.com', '10', '1551002836', '1551002836');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `hit` int(10) unsigned NOT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('2', '不想结婚的姑娘 最后大多嫁给了爱情', '心若雨汐', '<p>一、我应该嫁给爱情么？还是嫁给现实\r\n</p><p>　　曾有个密友问我，她说：“亲爱的，女生到底是应该嫁给爱情，还是嫁给现实呢？嫁给现实，无非就是自己少奋斗几年。而后用10数年的时间去后悔。不过这么说也算牵强，身边不乏些嫁给现实的朋友，在柴米油盐的生活中不仅慢慢习惯上了对方的存在，那种习惯略带些依赖的味道，并在长此以往的依赖中得了一种病，药石无医-懒癌晚期。”\r\n</p><p>　　她说自己最近认识了一个男生，对方有车有房有存款，只是自己对他不曾看对眼。\r\n</p><p>　　我说；“既然你不喜欢他，那为何要纠结呢。你有没有想过另一半是陪伴你走完一生的人。不喜欢不如直接回绝了人家，两不耽误，各自再找。而你又有赚钱的能力，嘴上总是挂着靠人不如靠己的字眼，既然不靠对方经济补给，那结果自然明了。后来我听说，她之所以苦恼，全因母亲的一席话。\r\n</p><p>　　“什么都比不上有个属于自己的家不是么？感情都是可以慢慢培养的。在我们那个年代基本上都是亲朋好友给介绍，见见面走个过场便走在一起水到渠成。哪有那么多矫情，见怪不怪的。甚至我的上一辈还是受父母之命呢，爱情有用么，穷苦夫妻百事哀。就算你们之间的爱情浓烈到坚贞不渝也终会为现实所败，巧妇难为无米之炊。你看你你表姐跟着另一半满世界的旅行，你不眼气么？”为人父母，大都喜欢这样教育子女。父母不是你感情经历的亲身体验者，因此他们有时候抛出的观点，直观理性但又武断片面。“不听老人言，吃亏在眼前。“然而，对于爱情我从来都是借鉴些我认为对的地方，并不会全盘吸纳。\r\n</p><p>　　有房又如何？房子没法给我这种人安全感。现实世界中我很理性，我清楚自己要的什么。然而当我遇上喜欢的人，我是很感性的。没有爱作为精神纽带的婚姻我觉得索然无味。人活一世不过3万多天，人生苦短，不容后悔。\r\n</p><p>　　如果你是个“圣斗士”或许你的家人即便知道你心不属他，可仍旧会强撮合，只因这个对象他们看着还不错，又怕你错失了他“你找不着怎么办”。但我想劝叔叔阿姨一句：“古话说的好，强扭的瓜不甜。”我想对那些如闺蜜般夹杂其中，不停苦恼的女孩说一声：“你有追求幸福的权力，选择权只在你自己手里，别人的话只能是参考，如果你并不认为那是对的，让他如云烟般路过就好。别人不是你，不会有你的感同身受。当事人以外的人的话语多少带有些片面的意味。”\r\n</p><p>　　说到这，我同那位朋友的观点默契的达成一致，好的感情，你是我的，我是你的。而我们又都是属于自己的。感情在于沟通，沟通的首要前提便是有话聊，你们可以有不同的爱好，但尊重、接受便好。你们之间的交流是否可以由浅入深，是否带有营养。并在某种程度上达成统一，这才是关键。三观不同的人同处同一屋檐，你们对周遭审度不同，再好的感情基础也是白费。更何况你们也不具有共同的感情经历。好的感情是彼此间的信任、是我们之间有同进步共患难的决心，而不是空有一个能够躲雨的巢穴，心与心之间毫无交流。即使你终究败给现实，想象一下当你每天对着一个无话聊的人，那种尴尬叫做无奈。\r\n</p><p>　　有温度的才叫家，没温度的叫住所。说的难听些，你走后就连这个住所中的一砖一瓦都带不走，还跟我谈什么曾经拥有。\r\n</p><p>　　你是嫁给爱情，还是嫁给临时住所呢？对相爱的人来说婚姻是神圣的殿堂，而不爱的，那叫坟墓。\r\n</p><p>　　二、我爱你，更爱与你在一起时我的样子\r\n</p><p>　　我曾在网上看到这样一个案例， 通读过后，我为男女主人公间的爱深深折服。这是一对恋人，他们结婚的时候没有车、房，吝啬的就连仪式、亲朋间的祝福都没有。然而女孩并没有后悔，她说：“年轻的时候反而不懂爱情，只是想简单找个对自己好的人。他对我好，所以我嫁了。\r\n</p><p>　　“刚刚恋爱的那段时间，他们住在廉价的出租房，挤狭小的卫生间，拿着微薄的工资，过着青黄不接的日子。她说：”最难熬的日子，我们都一起度过了。“结婚十年，她事业稳定，她老公的事业也蒸蒸日上。两个人不光在市区买了房子，男人得到了女人家里的认可。其实幸福从来都来得好不容易，两个人在一起十多年，早就把两个人的生活过成了一个人。\r\n</p><p>　　女人说：“自己动手，丰衣足食。”男人却说：“为了心爱的人再苦再累都无所谓，每天拖着疲惫的身子看着她系着围裙站在厨房面带微笑的做着晚餐，那一刻我觉得自己是世界上最幸福的人。“男人时常觉着自己欠妻子一个仪式，于是偷偷的在十周年那天精心布置了一场迟来的求婚仪式。\r\n</p><p>　　她未曾想这场惊喜这么突然，虽然这一天在她意料之中，结果还是被感动得一塌糊涂。然好事刚过。坏事便接踵而来，婚后不久她经历了一场严重车祸，这次车祸给她造成了片段式的失忆是永久性的。包括她的父母，朋友，这些张熟悉的面孔一一从她的世界彻底删除。那些天只要她清醒过来，便不断向身边人求助，“我要找我老公”本能的情感依赖，其实就是一种深爱。\r\n</p><p>　　这份深爱是我忘却了世界，唯独忘不了你。你看我即使忘记了我们的一二事，我还是绝对信任你啊。他说：“只要她能醒过来，忘记就忘记吧，不管她变成什么样子，我依然爱她。大不了，我们重新开始，从我叫什么开始。\r\n</p><p>　　只要她还活着，我们还有大把的时间足够我们再好好爱一回。“那之后，他日夜守在医院里陪伴她，这期间他的朋友不是没出过劝他再找的主意，他狠狠的说：”再说这样的话，绝交。世上好女孩万万千，我爱的只有这一人。“\r\n</p><p>　　好的爱情大抵就是这个样子，不论你变成什么样子，我都欣然接受，依然爱你。夫妻本是同林鸟，大难临头各自飞。在好的爱情面前这条定理并不受用。\r\n</p><p>　　三、阿娇结婚：谢谢你出现，我还以为遇不到你了\r\n</p><p>　　好的爱情会迟到，但它从不曾缺席。在不爱你的人面前我懂得了生活艰辛、学会了迎着风雨奔跑。在爱你的人面前，你明白了爱的真谛。可能爱情就是，有人曾深深地伤害过你还一笑而过。于是，你失望了，你觉得好像整个世家都抛弃了你，你觉得自己存在的本身就是天大的笑话。然而直到另一个人的出现，他用自己的行动告诉你他爱你，他不在意你有怎样的过去，就算你很糟糕，他爱的恰好就是此刻站在眼前那个最糟糕的女孩。你不用很好，我爱你便好。\r\n</p><p>　　如果说生活曾带给你各种各样的亏欠，那么请相信总有一个人会弥补生活带给你的全部亏欠。\r\n</p><p>　　即使世界荒芜了，也要相信总有一个人会是你的信徒。不论你是好是坏，也不管你是谁，你都是我的信仰。\r\n</p><p>　　阿娇结婚了，穿着抹胸婚纱的她，光彩照人，那一天她是这个世上最美的女人。她也终于验证了自己歌里的那句话：最后变天后，变新娘，都是理想。\r\n</p><p>　　想起阿娇曾经唱过的那首《下一站天后》，里面有一句话跟她的爱情观很契合：“其实心里最大的理想，跟他归家为他唱。“\r\n</p><p>　　阿娇曾说，她要找一个很帅的男人结婚，艳照门事件后，她开始忽略颜值。阿娇曾失声痛哭的说，再没有人会娶我。在那段时间里，仍旧有人喜欢她、慢慢爱上她。只是，从未有人想过给那个看似坚强而内心深处总是敏感而受伤的女孩一个未来。\r\n</p><p>　　对于一个相信爱的女孩来说：我可以接受你的不完美，我可以接受把我仅有的面包分一半给你。但我最怕的是无论我付出多少，怎样付出。都打动不了你。你描绘的那个未来很美，只是多余一个我。\r\n</p><p>　　时间兜兜转转，27到37，一个女人最好的黄金年龄已然过去，如果换作意志不坚定的女孩或许早就不等了，可这个人偏偏是阿娇，我曾看过一期阿娇的专访，30多岁的她谈及那场遭人唾弃的爱恋，她的眼圈还是会泛红。泪水的含义或许更多的还是放不下吧。\r\n</p><p>　　我给了你一颗心，一颗纯粹赤诚的爱你的心，后来你走了，我发现我的心空荡荡的。好像少了点什么。\r\n</p><p>　　今年五月，阿娇结婚的消息一度上了热搜。阿娇找到了一个很帅的男人，没有复杂的情史，也不会计较她的过去。只是单纯的想和她走完一生。他给了她一场浪漫的婚礼，让她如愿做上最美的新娘。婚礼上，致词讲到：“走到今天好不容易…”时，阿娇哭得很厉害，然最先流泪的不是阿娇，而是那个很爱她的男人。\r\n</p><p>　　他笑着告诉她，娶到你真好。终于等到你，还好我没有放弃。\r\n</p><p>　　爱是什么，爱就是在对的时间遇到对的人，而错误的时间里，你付出爱的那个人终究是浮云自眼前一过。幸好，你即使遍体鳞伤也也依然愿意相信爱。\r\n</p><p>　　四、好的爱情，是你可以做自己，简单而美好\r\n</p><p>　　我觉得一段感情好不好，在女孩子身上就能体现的出来。一个女孩子自信幽默，举止落落大方，那她的身后肯定有一个愿意宠她、疼她的人。这个人用自己的行动去保护她本脆弱的自尊心。所以她说话做事的时候才不会畏手畏脚，踌躇不前，更不会为了一件事像一个神经病一样患得患失。\r\n</p><p>　　其实世界上好的爱情就是这样的，对错不重要，只要有爱，就会有偏袒去宠着。爱给你一个支点，让你宽容温和的去面对这个并不完美的世界。\r\n</p><p>　　就如张小娴说的那样：你要等对的人的时候，自己可能也不知道怎样才是对的人，只有当那个人出现，你才会知道，他应该就是那个对的人，他在你生命中出现，也是为了满足你，也让你去完善自己。\r\n</p><p>　　嫁给爱情的女孩大多在接受爱的同时，学会了奉献爱，她们懂得付出和包容，并设身处地的为另一半未雨绸缪。她们往往戒掉了本身自带的小脾气，变得温和从容、平易近人。如果你发现一个女人如泼妇般骂街，哪怕一件微不足道的小事都要斤斤计较，锱铢必较。我想或许是她过得不够好吧。\r\n</p><p>　　也许会晚点遇见你，无论你是二十岁还是三十岁，但我仍坚信，那个爱我、懂我、惜我的人会穿越人海，只为给我一个爱的港湾。在这之前，你要做的就是善待自己，让自己试着独立、拥有一个不依赖旁人的独立人格，答应我，好吗？\r\n</p><p>　　心若雨汐：你还相信爱吗？不过，我是一如既往的相信着，等待着。\r\n</p>', '1', '8', '2', '1551168388');
INSERT INTO `article` VALUES ('4', '你好吗', '我自己', '<p>美好的时光总是很短暂\r\n</p><p><img src=\"/advanced/backend/web/uploads/1/961ff26e2a-qq20190222091853.png\" height:=\"\" 295px;=\"\" display:=\"\" block;=\"\" margin:=\"\" auto;\"=\"\" width=\"457\" height=\"251\" alt=\"\" style=\"display: block; margin: auto; width: 457px; height: 251px;\">\r\n</p>', '1', '6', '2', '1551168497');
INSERT INTO `article` VALUES ('5', 'mysql', 'mysql', '<p>mysql</p>', '1', '11', '3', '1551168377');

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1550975110');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1550975116');

-- ----------------------------
-- Table structure for `type`
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('2', 'php', '1', '1551146542');
INSERT INTO `type` VALUES ('3', 'mysql', '2', '1551148571');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'ZvcDPhSSA3_haMGKwBhPRdZC5YMAK2eS', '$2y$13$2A4PiwfayL2sdAPKurJQm.KKLgQNMFizbKC0JfnDjTAh0Imkr9AF2', null, '756477101@qq.com', '10', '1551002836', '1551002836');
