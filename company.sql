# Host: localhost  (Version: 5.5.53)
# Date: 2019-05-20 10:16:41
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "aboutus"
#

DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE `aboutus` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '序号id',
  `companyname` varchar(30) NOT NULL COMMENT '公司名称',
  `persons` varchar(50) NOT NULL COMMENT '创始人',
  `telphone` varchar(20) NOT NULL COMMENT '手机号码',
  `phone` varchar(20) NOT NULL COMMENT '座机',
  `address` varchar(256) NOT NULL COMMENT '公司地址',
  `email` varchar(30) NOT NULL COMMENT '公司邮箱',
  `officeimg` varchar(256) NOT NULL COMMENT '办公环境图片',
  `officeimg2` varchar(256) NOT NULL,
  `officeimg3` varchar(256) NOT NULL,
  `officeimg4` varchar(256) NOT NULL,
  `officeimg5` varchar(256) NOT NULL,
  `jianjie` text NOT NULL COMMENT '公司简介',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '公司创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='关于公司';

#
# Data for table "aboutus"
#

/*!40000 ALTER TABLE `aboutus` DISABLE KEYS */;
INSERT INTO `aboutus` VALUES (4,'苏州三晖信息科技有限公司','蒋祈宽 倪晨晔 吴嘉伟','18023086111','13888888811','苏州市工业园区方正智谷1栋709','2712838124@qq.com','/uploads/20190516\\69e224095255b149ffe4fe70f81f94ee.png','/uploads/20190516\\1c237614741e5ceb0649a191a96f76bc.png','/uploads/20190516\\b815d539b2b7780ed7a24d4c4f33b37b.png','/uploads/20190516\\38535b4dd79224340cef9fa2b4c6fc8a.png','/uploads/20190516\\1b58fc6d60dc2fc563eafa5de77e4466.png','                              商砼配送运输管理系统是一款基于云平台、免安装、轻维护、低投入的混凝土行业物流业务管理系统，致力于提高商砼企业信息化建设与管理水平，降低企业运营成本，为商砼运输企业提供了一套完善的解决方案，包括车辆排队管理、人员管理、车辆管理、司机运单统计管理、加油申请以及车辆维修管理等功能。\r\n\r\n商砼管理系统为混凝土搅拌站客户提供“提高效率、节省成本、保障安全、轻松管理”的解决之道，包括销售管理、生产管理、实验室管理、原材料管理、财务管理、配件管理、设备监控以及移动端查看和审核。\r\n\r\n解决了企业管理、工作人员在现场所面临的一系列难题，同时，也为企业管理层提供实时数据，方便统计和安排工作。                                                                                    ','2018-04-01 00:00:00');
/*!40000 ALTER TABLE `aboutus` ENABLE KEYS */;

#
# Structure for table "job"
#

DROP TABLE IF EXISTS `job`;
CREATE TABLE `job` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT COMMENT '岗位id序号',
  `jobtype` varchar(30) NOT NULL COMMENT '岗位类型',
  `jobtypedes` text NOT NULL COMMENT '岗位描述',
  `jobrequire` text NOT NULL COMMENT '岗位要求',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '时间',
  `money` varchar(30) NOT NULL COMMENT '工资',
  `welfare` text NOT NULL COMMENT '福利待遇',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='招贤纳士表';

#
# Data for table "job"
#

/*!40000 ALTER TABLE `job` DISABLE KEYS */;
INSERT INTO `job` VALUES (1,'JAVA软件开发工程师','1.熟悉软件系统开发的流程，了解软件系统开发的目标。\r\n2.能独立运用Java语言进行软件的开发。\r\n3.按时保质保量完成项目开发,运行测试并编写相关文档。\r\n4.思维敏捷,责任心强,能承受工作压力。','1、要求从软件研发工作2年以上工作经验\r\n,能独立上岗及管理团队。\r\n2、精通Java，Javascript等 web 编程语言。\r\n3、能熟练使用spring，hibernate等主流框架。\r\n4、能熟练使用jquery，以及基于Jquery的前台组件，\r\n熟悉Extjs 者优先。\r\n','2019-05-13 00:00:00','10000-12000','1.享有每周双休。\n2.年终奖。\n3.项目奖金/产品提成。\n4.调休。\n5.五险（养老、医疗、失业、工伤和生育保险）。\n6.公司每1-2月举行聚餐。\n7.工作时间 早上9:00-11:30下午1:00-5:30。'),(2,'软件测试人员','1.熟悉软件系统开发的流程，了解软件系统开发的目标。\r\n2.能独立运用Java语言进行软件的开发。\r\n3.按时保质保量完成项目开发,运行测试并编写相关文档。\r\n4.思维敏捷,责任心强,能承受工作压力。','1、要求从软件研发工作2年以上工作经验。\r\n2、精通Java，Javascript等 web 编程语言。\r\n3、能熟练使用spring，hibernate等主流框架。\r\n4、能熟练使用jquery，以及基于Jquery的前台组件。','2019-05-31 00:00:00','10000-11000','1.享有每周双休。\n2.年终奖。\n3.项目奖金/产品提成。\n4.调休。\n5.五险（养老、医疗、失业、工伤和生育保险）。\n6.公司每1-2月举行聚餐。\n7.工作时间 早上9:00-11:30下午1:00-5:30。\n'),(3,'小程序开发工程师','1.熟悉软件系统开发的流程，了解软件系统开发的目标。\r\n2.能独立运用Java语言进行软件的开发。\r\n3.按时保质保量完成项目开发,运行测试并编写相关文档。\r\n4.思维敏捷,责任心强,能承受工作压力。','1.熟悉软件系统开发的流程，了解软件系统开发的目标。\r\n2.能独立运用Java语言进行软件的开发。\r\n3.按时保质保量完成项目开发,运行测试并编写相关文档。\r\n4.思维敏捷,责任心强,能承受工作压力。','2019-05-13 00:00:00','10000-13000','1.享有每周双休。\n2.年终奖。\n3.项目奖金/产品提成。\n4.调休。\n5.五险（养老、医疗、失业、工伤和生育保险）。\n6.公司每1-2月举行聚餐。\n7.工作时间 早上9:00-11:30下午1:00-5:30。');
/*!40000 ALTER TABLE `job` ENABLE KEYS */;

#
# Structure for table "news"
#

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT COMMENT '//新闻序号',
  `newstitle` varchar(30) NOT NULL COMMENT '新闻标题',
  `newscontent` varchar(256) NOT NULL COMMENT '新闻内容',
  `newstime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '新闻时间',
  `newsimg` varchar(256) NOT NULL COMMENT '新闻图片',
  `newsdetail` text NOT NULL COMMENT '新闻详情',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='新闻动态表';

#
# Data for table "news"
#

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'2019互联网工作年会的通知','华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货','2019-04-17 00:00:00','/uploads/20190513\\870d6b1f5bc8ad8e5db8b5307994dd0b.png','(一) 业务管理预受理单据 1) 预受理单据用于需要上门取货的客户及货物信息的录入。预受理单据可以由发货客户远程录入，也可以由业务员录入。录入的预受理单据信息主要包括以下内容： 2) 发货人信息；收货人信息；终点站、到站、付款方式是否保险（保价费）及 3) 货物信息：货物名称、货物包装、件数、运费。 4) 预受理单支持多种条件组合查询。\r\n\r\n醒信息后，可以点击进入进行预受理派车操作（录入车号、默认司机信息（姓名、电话），提交派车）。 2) 也可以通过查询客户名称、可以通过日期实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，\r\n(一) 业务管理预受理单据 1) 预受理单据用于需要上门取货的客户及货物信息的录入。预受理单据可以由发货客户远程录入，也可以由业务员录入。录入的预受理单据信息主要包括以下内容： 2) 发货人信息；收货人信息；终点站、到站、付款方式是否保险（保价费）及 3) 货物信息：货物名称、货物包装、件数、运费。 4) 预受理单支持多种条件组合查询。\r\n\r\n醒信息后，可以点击进入进行预受理派车操作（录入车号、默认司机信息（姓名、电话），提交派车）。 2) 也可以通过查询客户名称、可以通过日期实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，'),(2,'三汇','三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技','2019-05-14 00:00:00','/uploads/20190514\\0fa293656f63d2df455f57c8fe752e72.png','三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技三晖科技'),(3,'三晖科技2','三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2','2019-05-20 00:00:00','/uploads/20190513\\236bbbdcb3c03d1f1686836b15d7373e.png','三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2三晖科技2'),(10,'招聘小程序开发工程师','招聘小程序开发工程师一名，招聘小程序开发工程师一名，招聘小程序开发工程师一名，','2019-05-03 00:00:00','/uploads/20190515\\294613f1336ba1b2028c26e02fc0179d.png','招聘小程序开发工程师一名，招聘小程序开发工程师一名，招聘小程序开发工程师一名，招聘小程序开发工程师一名，招聘小程序开发工程师一名，招聘小程序开发工程师一名，招聘小程序开发工程师一名，招聘小程序开发工程师一名，招聘小程序开发工程师一名，招聘小程序开发工程师一名，'),(11,'招聘Java安卓开发工程师','招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师','2019-05-04 00:00:00','/uploads/20190515\\64d5c19798627bf73741edce1536866a.png','招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师'),(12,'招聘 IOS开发工程师1','招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师','2019-05-02 00:00:00','/uploads/20190515\\cc3b67fa45c815403382c701b3afeaa9.png','招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师招聘Java安卓开发工程师'),(13,'招聘app开发工程师','招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师','2019-05-08 00:00:00','/uploads/20190515\\12a210ccb6f8ac5ec715175447ade8db.png','招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师招聘app开发工程师');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

#
# Structure for table "products"
#

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT COMMENT '产品案例序号id',
  `caselogo` varchar(256) NOT NULL COMMENT '案例logo',
  `casename` varchar(30) NOT NULL COMMENT '案例名称',
  `casetype` varchar(30) NOT NULL COMMENT '案例类别，例如小程序还是网站这类的',
  `caseurl` varchar(256) NOT NULL COMMENT '案例网站地址',
  `caseimg` varchar(256) NOT NULL COMMENT '案例图片',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '产品案例时间',
  `companyname` varchar(30) NOT NULL COMMENT '案例对应的公司名称',
  `casebigimg` varchar(256) NOT NULL COMMENT '案列大图',
  `custormname` varchar(30) NOT NULL COMMENT '客户姓名',
  `telphone` varchar(20) NOT NULL COMMENT '客户联系方式',
  `casecontent` text NOT NULL COMMENT '案例内容',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='产品案例表';

#
# Data for table "products"
#

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'/uploads/20190514\\3a880ba3c6eb446d73637aebba0a5567.png','苏州卡乐孚项目管理','小程序开发','https://www.colourfulsz.cn','/uploads/20190514\\03dff580870d61904d948418bbd625a8.png','2019-05-09 00:00:00','苏州卡乐孚','','卢xx','18023000861','苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚苏州卡乐孚'),(2,'/uploads/20190514\\eb5ff8e9b3ae6ae2386da16e7de6ecf5.png','商品出入库管理系统','小程序开发','http://www.baidu.com','/uploads/20190514\\e6a49bddfad953f8dc8c4b4526aacb00.png','2019-05-07 00:00:00','商品出入库管理系统','','王五','18000000000','商品出入库管理系统商品出入库管理系统商品出入库管理系统'),(3,'/uploads/20190514\\326215564975ce09eee87b41f6922a7c.png','人工智能','物联网','www.rengongzhineng.com','/uploads/20190514\\4d7e167135875f9e1175bb2bd4a0ec3c.png','2019-05-16 00:00:00','人工智能','','张三','18002308671','人工智能人工智能人工智能人工智能人工智能人工智能v'),(4,'/uploads/20190514\\c7e6cbeaec7af0b33af4604affc180c6.png','安卓软件APP开发','移动APP','www.anzhuo.com','/uploads/20190514\\d4d1b261535636b73e9b5f924252f852.png','2019-05-22 00:00:00','安卓软件APP开发','','李四','18000239383','安卓软件APP开发安卓软件APP开发'),(15,'/uploads/20190515\\143e613a56fb6c55826056e293a5015b.png','混泥土搅拌车','小程序开发','https://www.aisanhui.cn','/uploads/20190515\\77132546697d15999eaaa7f422d3cae5.png','2019-04-01 00:00:00','三晖智砼（盛华）','','老李','13333325255','三晖智砼（盛华）三晖智砼（盛华）三晖智砼（盛华）三晖智砼（盛华）三晖智砼（盛华）三晖智砼（盛华）三晖智砼（盛华）三晖智砼（盛华）');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

#
# Structure for table "slider"
#

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT COMMENT '//轮播图id序号',
  `imgurl` varchar(256) NOT NULL COMMENT '//轮播图地址',
  `imgcontent` varchar(256) DEFAULT NULL COMMENT '//轮播图说明',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '//创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COMMENT='轮播图表';

#
# Data for table "slider"
#

/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (1,'/uploads/20190515\\f3c9c6a1f6ff9415823eca7030c99c7e.png','描述一','2019-05-12 23:58:54'),(3,'/uploads/20190513\\78b478f3898f9a855afe720855f8c803.png','描述3','2019-05-13 00:01:13'),(6,'/uploads/20190514\\66f492e41f2c766fe0bd3ff25aeb6d2b.png','描述4','2019-05-14 12:14:39');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL COMMENT '管理员名称',
  `password` char(32) NOT NULL COMMENT '管理员密码',
  `cttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=utf8;

#
# Data for table "users"
#

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (119,'蒋总','14e1b600b1fd579f47433b88e8d85291','2019-05-12 05:33:09'),(151,'吴总','14e1b600b1fd579f47433b88e8d85291','2019-05-12 10:48:55'),(167,'倪总','a0e75f4e10e66fb99325f04619980848','2019-05-14 21:21:05'),(169,'小骆','14e1b600b1fd579f47433b88e8d85291','2019-05-15 15:53:33'),(170,'小朱','14e1b600b1fd579f47433b88e8d85291','2019-05-15 15:53:58'),(171,'小邵','e10adc3949ba59abbe56e057f20f883e','2019-05-15 15:54:06'),(172,'李四','e10adc3949ba59abbe56e057f20f883e','2019-05-15 15:54:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
